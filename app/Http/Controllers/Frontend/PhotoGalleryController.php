<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;

class PhotoGalleryController extends Controller
{
    public function index(){
        $photos = PhotoGallery::all();
        // dd($photos);
        return view('frontend.photo-gallery.index',[
            'photos' => $photos
        ]);
    }

}