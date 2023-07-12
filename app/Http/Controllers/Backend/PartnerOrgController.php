<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsefulSite\StoreRequest;
use App\Http\Requests\UsefulSite\UpdateRequest;
use App\Models\PartnerOrg;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PartnerOrgController extends Controller
{
    public function index()
    {
        $orgs = PartnerOrg::query()->orderByDesc('id')->get();

        return view('backend.partner-org.index', [
            'orgs' => $orgs
        ]);
    }

    public function create()
    {
        return view('backend.partner-org.create');
    }

    public function store(StoreRequest $request)
    {
        PartnerOrg::query()->create([
            'order' => $request->order,
            'image_path' => $this->uploadImage($request->file('image')),
            'desc_uz' => $request->desc_uz,
            'desc_ru' => $request->desc_ru,
            'desc_kuz' => $request->desc_kuz,
            'desc_en' => $request->desc_en,
            'url' => $request->url
        ]);
        return redirect()->route('admin.partner-org');
    }

    private function uploadImage(UploadedFile $image): string
    {
        $file = uniqid() . '.' . $image->extension();
        Storage::disk('public_path')->put('/images/partner-orgs/' . $file, $image->getContent());
        return '/images/partner-orgs/' . $file;
    }

    public function edit($id)
    {
        $org = PartnerOrg::query()->findOrFail($id);
        return view('backend.partner-org.update', [
            'org' => $org
        ]);
    }

    public function update(UpdateRequest $request, $id)
    {
        $org = PartnerOrg::query()->findOrFail($id);
        if ($request->hasFile('image')) {
            $org->image_path = $this->uploadImage($request->file('image'));
        }
        $org->update($request->only(['order', 'desc_uz', 'desc_ru', 'desc_en', 'desc_kuz', 'url']));

        return redirect()->route('admin.partner-org');
    }

    public function delete($id)
    {
        $org = PartnerOrg::query()->findOrFail($id);
        $org->delete();
        return redirect()->route('admin.partner-org');
    }
}
