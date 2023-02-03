<?php

namespace App\Http\Requests\VideoClip;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'url' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'is_main' => 'nullable|boolean',
        ];
    }

    public function validationData()
    {
        $data = parent::validationData();
        $data['is_main'] = $this->has('is_main');
        return $data;
    }

    public function authorize()
    {
        return true;
    }
}
