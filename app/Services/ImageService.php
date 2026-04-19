<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Filesystem\FilesystemAdapter;

class ImageService
{
    protected string $disk = 'public';

    protected array $allowedMimeTypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/webp',
        'image/svg+xml',
    ];

    protected int $maxFileSizeKb = 5120; // 5MB

    /**
     * Upload an image to storage.
     */
    public function upload(UploadedFile $file, string $folder): string
    {
        $this->validate($file);

        $filename = $this->generateFilename($file);

        $path = Storage::disk($this->disk)->putFileAs($folder, $file, $filename);

        if ($path === false) {
            throw new \RuntimeException("Failed to upload image to [{$folder}].");
        }

        return $path;
    }

    /**
     * Replace an existing image with a new one.
     */
    public function update(?string $oldPath, UploadedFile $newFile, string $folder): string
    {
        $newPath = $this->upload($newFile, $folder);

        // Delete old image only after successful upload
        $this->delete($oldPath);

        return $newPath;
    }

    /**
     * Delete an image from storage.
     */
    public function delete(?string $path): void
    {
        if ($path && Storage::disk($this->disk)->exists($path)) {
            Storage::disk($this->disk)->delete($path);
        }
    }

    /**
     * Get the public URL of a stored image.
     */
    // public function url(string $path): string
    // {
    //     return Storage::disk($this->disk)->url($path);
    // }
    public function url(string $path): string
    {
        /** @var FilesystemAdapter $disk */
        $disk = Storage::disk($this->disk);

        return $disk->url($path);
    }
    /**
     * Validate file type and size.
     *
     * @throws \InvalidArgumentException
     */
    protected function validate(UploadedFile $file): void
    {
        if (!in_array($file->getMimeType(), $this->allowedMimeTypes, true)) {
            throw new \InvalidArgumentException(
                "Invalid image type [{$file->getMimeType()}]. Allowed: " . implode(', ', $this->allowedMimeTypes)
            );
        }

        if ($file->getSize() > $this->maxFileSizeKb * 1024) {
            $maxMb = $this->maxFileSizeKb / 1024;
            throw new \InvalidArgumentException("Image exceeds the maximum allowed size of {$maxMb}MB.");
        }
    }

    /**
     * Generate a unique, sanitized filename preserving the original extension.
     */
    protected function generateFilename(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension() ?: $file->guessExtension();
        return Str::uuid() . '.' . strtolower($extension);
    }
}
