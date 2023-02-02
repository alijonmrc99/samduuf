<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsefulSite\StoreRequest;
use App\Http\Requests\UsefulSite\UpdateRequest;
use App\Models\UsefulSite;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UsefulSiteController extends Controller
{
    public function index()
    {
        $sites = UsefulSite::query()->orderByDesc('id')->get();

        return view('backend.useful-site.index', [
            'sites' => $sites
        ]);
    }

    public function create()
    {
        return view('backend.useful-site.create');
    }

    public function store(StoreRequest $request)
    {

        UsefulSite::query()->create([
            'order' => $request->order,
            'image_path' => $this->uploadImage($request->file('image')),
            'desc_uz' => $request->desc_uz,
            'desc_ru' => $request->desc_ru,
            'desc_kuz' => $request->desc_kuz,
            'desc_en' => $request->desc_en,
            'url' => $request->url
        ]);
        return redirect()->route('admin.useful-site');
    }

    private function uploadImage(UploadedFile $image): string
    {
        $file = uniqid() . '.' . $image->extension();
        Storage::disk('public_path')->put('/images/useful-sites/' . $file, $image->getContent());
        return '/images/useful-sites/' . $file;
    }

    public function edit($id)
    {
        $site = UsefulSite::query()->findOrFail($id);
        return view('backend.useful-site.update', [
            'site' => $site]);
    }

    public function update(UpdateRequest $request, $id)
    {
        $site = UsefulSite::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $site->image_path = $this->uploadImage($request->file('image'));
        }
        $site->update($request->only(['order', 'desc_uz', 'desc_ru', 'desc_en', 'desc_kuz', 'url']));

        return redirect()->route('admin.useful-site');
    }

    public function delete($id)
    {
        $site = UsefulSite::query()->findOrFail($id);
        $site->delete();
        return redirect()->route('admin.useful-site');
    }
}
