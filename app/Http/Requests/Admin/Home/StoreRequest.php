<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'img1'=>'max:5048|nullable',
            'img2'=>'max:5048|nullable',
            'img3'=>'max:5048|nullable',
            'img_logo'=>'max:5048|nullable',
            'title1'=>'string|nullable',
            'title2'=>'string|nullable',
            'title_running'=>'string|nullable',
            'text'=>'string|nullable',
            'tel'=>'string|nullable',
            'facebook'=>'string|nullable',
            'instagram'=>'string|nullable',
            'telegram'=>'string|nullable',
            'whatsapp'=>'string|nullable',

        ];
    }
}
