<?php

namespace App\Http\Requests\PhotoGallery;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => 'image|nullable|max:2048|mimes:jpg,png',
            'order' => 'required|int',
            'desc_uz' => 'required|string|min:3|max:255',
            'desc_kuz' => 'required|string|min:3|max:255',
            'desc_ru' => 'required|string|min:3|max:255',
            'desc_en' => 'required|string|min:3|max:255',
            'date' => 'required|string|date'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
