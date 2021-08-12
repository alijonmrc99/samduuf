<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title_uz', 'title_kuz', 'title_ru', 'title_en', 'slug', 'parent_id', 'priority','degree','link'];

    public function getChilds()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function getParent(){
        return $this->hasOne(Menu::class,'id', 'parent_id');
    }

    public function getPage(){
        return $this->hasOne(Page::class,'menu_id', 'id');
    }

    public function isLink(){
        $parent = $this->getParent();
        if ($parent->parent_id != 0){
            return $parent->getParent()->title_uz == 'title_uz'? true : false;
        }
    }

}
