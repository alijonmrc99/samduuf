<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'short_content_uz',
        'short_content_ru',
        'short_content_en',
        'short_content_kuz',
        'content_ru',
        'content_uz',
        'content_kuz',
        'content_en'];

    public function getMenuOrLink()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id')->where('parent_id', '<>', 0);
    }

    public function getMenu(){
        return $this->hasOne(Menu::class,'id','menu_id');
    }
}
