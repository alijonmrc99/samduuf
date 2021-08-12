<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'short_content_ru' => ['nullable','string', 'max:512'],
            'short_content_en' => ['nullable','string', 'max:512'],
            'short_content_uz' => ['nullable','string', 'max:512'],
            'short_content_kuz' => ['nullable','string', 'max:512'],
            'content_ru' => ['nullable','string'],
            'content_en' => ['nullable','string'],
            'content_uz' => ['nullable','string'],
            'content_kuz' => ['nullable','string'],

            'menu_id' => ['required','integer','unique:pages,menu_id']
        ];
    }
}
