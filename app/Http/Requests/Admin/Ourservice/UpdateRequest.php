<?php

namespace App\Http\Requests\Admin\OurService;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'img'=>'max:5048|nullable',
            'header_title'=>'string|nullable',
            'title'=>'string|nullable',
            'text'=>'string|nullable',
            'image_title'=>'string|nullable',
            'image_text'=>'string|nullable',
            'files[]' => 'mimes:jpg,jpeg,png|nullable',
            'video[]' => 'mimes:mp4,mov|nullable',
        ];
    }
}
