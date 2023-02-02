<?php

namespace App\Http\Requests\UsefulSite;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => 'nullable|image|max:2048|mimes:jpg,png',
            'order' => 'required|int',
            'desc_uz' => 'required|string|min:3|max:255',
            'desc_kuz' => 'required|string|min:3|max:255',
            'desc_ru' => 'required|string|min:3|max:255',
            'desc_en' => 'required|string|min:3|max:255',
            'url' => 'required|string'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
