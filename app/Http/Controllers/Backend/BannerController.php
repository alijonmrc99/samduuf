<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Repository\Eloquent\BannerRepository;
use App\Services\BannerService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BannerController extends Controller
{
    private $bannerService;
    private $flashMessageHelper;
    private $bannerRepository;

    public function __construct(BannerService $bannerService, BannerRepository $bannerRepository, FlashMessageHelper $flashMessageHelper)
    {
        $this->bannerService = $bannerService;
        $this->flashMessageHelper = $flashMessageHelper;
        $this->bannerRepository = $bannerRepository;
    }

    public function index()
    {
        $banners = $this->bannerService->getAll();
        return view('backend.banner.page', [
            'banners' => $banners
        ]);
    }

    public function store(BannerRequest $request)
    {
        $request->validated();
        try {
            $this->bannerService->create($request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $banner = $this->bannerRepository->findById($id);
        return view('backend.banner.updatePage', [
            'banner' => $banner
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'image' => [Rule::requiredIf($request->hasFile('image')), 'min:128', 'max:2048', 'mimes:jpg,png', 'dimensions:width=1920,height=1280'],
            'priority' => 'required|integer|max:100|min:0'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }


        try {
            $this->bannerService->updateById($id, $request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.banner');
    }

    public function delete($id)
    {
        try {
            $this->bannerService->deleteById($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($id);
        }

        return redirect()->route('admin.banner');
    }
}
