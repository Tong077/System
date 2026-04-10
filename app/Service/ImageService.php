<?php

namespace App\Services;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    protected string $disk = 'public';
    public function uploadImage(UploadedFile $file, string $folder): string{
        
        return Storage::disk($this->disk)->putFile($folder, $file);

        
    }
    public function update(?string $oldPath, UploadedFile $newFile, string $folder): string
    {
        // Delete old image if exists
        if ($oldPath && Storage::disk($this->disk)->exists($oldPath)) {
            Storage::disk($this->disk)->delete($oldPath);
        }

        // Upload new image
        return $this->upload($newFile, $folder);
    }
    public function delete(?string $path): void
    {
        if ($path && Storage::disk($this->disk)->exists($path)) {
            Storage::disk($this->disk)->delete($path);
        }
    }


}