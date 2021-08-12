<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $postService;
    private $flashMessageHelper;

    public function __construct(PostService $postService, FlashMessageHelper $flashMessageHelper)
    {
        $this->postService = $postService;
        $this->flashMessageHelper = $flashMessageHelper;
    }

    public function index()
    {
        $posts = $this->postService->getAllWithPaginate(15);
        return view('backend.post.page', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('backend.post.create');
    }

    public function store(PostRequest $request)
    {
        try {
            $this->postService->create($request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->back();
    }

    public function changeVisibility($id)
    {
        try {
            $this->postService->changeVisibility($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->back();
    }

    public function show($id)
    {
        try {
            $post = $this->postService->findById($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return view('backend.post.view', [
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        try {
            $post = $this->postService->findById($id);
            $post->date = $this->postService->changeDateFormat($post);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return view('backend.post.update', [
            'post' => $post
        ]);
    }

    public function update(PostRequest $request, $id)
    {
        try {
            $this->postService->updateById($id, $request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.post');
    }

    public function delete($id)
    {
        try {
            $this->postService->deleteById($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return redirect()->back();
    }

    public function uploadImage()
    {
        $image_parts = explode(";base64,", request()->post('image'));
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = uniqid() . '.png';
        file_put_contents($file, $image_base64);
        Storage::disk('public_path')->put('/images/post/' . $file, $image_base64);
        return ['image_name' => 'images/post/' . $file];
    }
}
