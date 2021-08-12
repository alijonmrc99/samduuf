<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MenuRequest extends FormRequest
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
        $available_locales = config('app.available_locales');
        $rules = [
            'priority' => 'required|integer|min:0|max:100',
            'parent_id' => 'required|integer',
            'link' => ['exclude_unless:is_link,on','string',]
        ];

        foreach ($available_locales as $available_locale){
            $rules['title_'.$available_locale] = 'required|string|max:64|min:3';
        }

        return $rules;
    }
}
