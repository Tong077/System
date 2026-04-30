<?php

namespace App\Services;

use App\Models\ControlSystem;
use Illuminate\Http\Request;

class SystemControlService
{
    protected string $imageFolder = 'systems_images';

    public function __construct(private ImageService $imageService)
    {
    }

   
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'cropped_logo' => 'nullable|string',
            'logo' => 'nullable',
            'description' => 'nullable|string',
            'status' => 'nullable',
            'type' => 'nullable',
        ]);

        // Cropped image (priority)
        if (!empty($request->cropped_logo)) {
            $data['logo'] = $this->imageService->uploadBase64(
                $request->cropped_logo,
                $this->imageFolder
            );
        }

        // Normal upload fallback
        elseif ($request->hasFile('logo')) {
            $data['logo'] = $this->imageService->upload(
                $request->file('logo'),
                $this->imageFolder
            );
        }

        return ControlSystem::create($data);
    }

  
   public function update(Request $request, ControlSystem $controlSystem)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'cropped_logo' => 'nullable|string',
        'logo' => 'nullable|image|max:2048',
        'description' => 'nullable|string',
        'status' => 'nullable',
        'type' => 'nullable',
    ]);

    if ($request->filled('cropped_logo')) {

        if ($controlSystem->logo) {
            $this->imageService->delete($controlSystem->logo);
        }

        $data['logo'] = $this->imageService->uploadBase64(
            $request->cropped_logo,
            $this->imageFolder
        );
    }

    // ✅ Normal upload
    elseif ($request->hasFile('logo')) {
        $data['logo'] = $this->imageService->update(
            $controlSystem->logo,
            $request->file('logo'),
            $this->imageFolder
        );
    }

    $controlSystem->update($data);

    return $controlSystem;
}
    
    public function delete(ControlSystem $controlSystem)
    {
        if ($controlSystem->logo) {
            $this->imageService->delete($controlSystem->logo);
        }

        return $controlSystem->delete($controlSystem);
    }

    public function getAll()
    {
        return ControlSystem::all();
    }

    public function getById($id)
    {
        return ControlSystem::findOrFail($id);
    }
}