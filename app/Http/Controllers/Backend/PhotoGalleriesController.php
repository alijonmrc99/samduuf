<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoGallery\StoreRequest;
use App\Http\Requests\PhotoGallery\UpdateRequest;
use App\Models\PhotoGallery;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PhotoGalleriesController extends Controller
{
    public function index()
    {
        $galleries = PhotoGallery::query()->orderBy('order')->get();
        return view('backend.photo-gallery.index', [
            'galleries' => $galleries
        ]);
    }

    public function create()
    {
        return view('backend.photo-gallery.create');
    }

    public function store(StoreRequest $request)
    {
        PhotoGallery::query()->create([
            'order' => $request->order,
            'image_path' => $this->uploadImage($request->file('image')),
            'desc_uz' => $request->desc_uz,
            'desc_ru' => $request->desc_ru,
            'desc_kuz' => $request->desc_kuz,
            'desc_en' => $request->desc_en,
            'date' => $request->date
        ]);
        return redirect()->route('admin.photo-galleries.index');
    }

    private function uploadImage(UploadedFile $image): string
    {
        $file = uniqid() . '.' . $image->extension();
        Storage::disk('public_path')->put('/images/photo-gallery/' . $file, $image->getContent());
        return '/images/photo-gallery/' . $file;
    }

    public function show(PhotoGallery $photoGallery)
    {
    }

    public function edit(PhotoGallery $photoGallery)
    {
        return view('backend.photo-gallery.update', [
            'photoGallery' => $photoGallery
        ]);
    }

    public function update(UpdateRequest $request, PhotoGallery $photoGallery)
    {
        if ($request->hasFile('image')) {
            $photoGallery->image_path = $this->uploadImage($request->file('image'));
        }
        $photoGallery->update($request->only(['order', 'desc_uz', 'desc_ru', 'desc_en', 'desc_kuz', 'date']));

        return redirect()->route('admin.photo-galleries.index');
    }

    public function destroy(PhotoGallery $photoGallery)
    {
        $photoGallery->delete();
        return redirect()->route('admin.photo-galleries.index');
    }
}
