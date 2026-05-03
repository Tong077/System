<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Services\ImageService;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    protected ImageService $imageService;
    protected string $imageFolder = 'link_images';

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
               $this->middleware('permission:link.view|link-create|link-edit|link-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:link.create', ['only' => ['create', 'store']]);
        $this->middleware('permission:link.edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:link.delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $links = Link::all();
        return view('links.index', compact('links'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'url'         => 'required|url',
            'description'  => 'nullable|string',
            'department'  => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        try {
            $data = $request->except('image');

            if ($request->hasFile('image')) {
                $data['image'] = $this->imageService->upload(
                    $request->file('image'),
                    $this->imageFolder
                );
            }

            Link::create($data);

            return redirect()->route('links.index')
                ->with('success', 'Link created successfully.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Failed to create link: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $link = Link::findOrFail($id);
        return view('links.edit', compact('link'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'url'         => 'required|url',
            'description'  => 'nullable|string',
            'department'  => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $link = Link::findOrFail($id);

        try {
            $data = $request->except('image');

            if ($request->hasFile('image')) {
                $data['image'] = $this->imageService->update(
                    $link->image,
                    $request->file('image'),
                    $this->imageFolder
                );
            }

            $link->update($data);

            return redirect()->route('links.index')
                ->with('success', 'Link updated successfully.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Failed to update link: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $link = Link::findOrFail($id);

        try {
            if ($link->image) {
                $this->imageService->delete($link->image);
            }
            $link->delete();

            return redirect()->route('links.index')
                ->with('success', 'Link deleted successfully.');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Failed to delete link: ' . $e->getMessage());
        }
    }
}
