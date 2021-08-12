<?php

namespace App\Models;

use App\Services\PostViewService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $postViewService;

    protected $fillable = [
        'is_active',
        'type',
        'image',
        'slug',
        'title_uz',
        'title_ru',
        'title_en',
        'title_kuz',
        'short_content_uz',
        'short_content_ru',
        'short_content_en',
        'short_content_kuz',
        'content_uz',
        'content_ru',
        'content_en',
        'content_kuz',
        'date'
    ];

    public $types = [
        1 => 'News(Yangiliklar)',
        2 => 'Ad(E`lon)',
    ];

}
