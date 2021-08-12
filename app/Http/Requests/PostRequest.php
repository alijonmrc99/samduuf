<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'type' => ['required', Rule::in([1,2])],
            'date' => ['required','date_format:d/m/Y'],
            'image' => ['required','string'],
            'title_uz' => ['required','string','max:256'],
            'title_kuz' => ['required','string','max:256'],
            'title_ru' => ['required','string','max:256'],
            'title_en' => ['required','string','max:256'],
            'short_content_uz' => ['required','string'],
            'short_content_kuz' => ['required','string'],
            'short_content_ru' => ['required','string'],
            'short_content_en' => ['required','string'],
            'content_uz' => ['required','string'],
            'content_kuz' => ['required','string'],
            'content_ru' => ['required','string'],
            'content_en' => ['required','string'],
        ];
    }
}
