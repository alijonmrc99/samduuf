<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoClip\StoreRequest;
use App\Http\Requests\VideoClip\UpdateRequest;
use App\Models\VideoClip;

class VideoClipController extends Controller
{
    public function index()
    {
        $videoClips = VideoClip::query()->orderByDesc('id')->get();
        return view('backend.video-clip.index', [
            'videoClips' => $videoClips
        ]);
    }

    public function create()
    {
        return view('backend.video-clip.create');
    }

    public function store(StoreRequest $request)
    {
        $videoClip = VideoClip::query()->create([
            'url' => $request->get('url'),
            'title' => $request->get('title'),
            'is_main' => $request->get('is_main')
        ]);
        if ($request->has('is_main')) {
            $this->makeNotMainOtherVideoClips($videoClip);
        }
        return redirect()->route('admin.video-clip');
    }

    private function makeNotMainOtherVideoClips($videoClip): void
    {
        VideoClip::query()->where('id', '<>', $videoClip->id)->update([
            'is_main' => false
        ]);
    }

    public function edit($id)
    {
        $videoClip = VideoClip::query()->findOrFail($id);
        return view('backend.video-clip.update', [
            'videoClip' => $videoClip
        ]);
    }

    public function update(UpdateRequest $request, $id)
    {
        $videoClip = VideoClip::query()->findOrFail($id);
        $videoClip->update([
            'url' => $request->get('url'),
            'title' => $request->get('title'),
            'is_main' => $request->has('is_main')
        ]);
        if ($request->has('is_main')) {
            $this->makeNotMainOtherVideoClips($videoClip);
        }
        return redirect()->route('admin.video-clip');
    }

    public function destroy($id)
    {
        $videoClip = VideoClip::query()->findOrFail($id);
        $videoClip->delete();
        return redirect()->route('admin.video-clip');
    }
}
