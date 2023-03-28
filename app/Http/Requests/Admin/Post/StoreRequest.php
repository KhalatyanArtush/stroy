<?php

namespace App\Http\Requests\Admin\Post;

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
            'key'=>'required|string',
            'title'=>'required|string',
            'agent_id'=>'required|integer',
            'sum'=>'required|integer|nullable',
            'buy_rent_id'=>'required|integer|nullable',
            'region_id'=>'integer|nullable',
            'city_id'=>'integer|nullable',
            'district_id'=>'integer|nullable',
            'village_id'=>'integer|nullable',
            'street_id'=>'integer|nullable',
            'type_id'=>'integer|nullable',
            'building_type_id'=>'integer|nullable',
            'floor'=>'integer|nullable',
            'room'=>'integer|nullable',
            'building_number'=>'integer|nullable',
            'apartment_number'=>'integer|nullable',
            'tel'=>'integer|nullable',
            'public'=>'integer',
            'swimming'=>'integer',
            'informations'=>'string|nullable',
            'map_city'=>'string|nullable',
            'map_street'=>'string|nullable',
            'map_number'=>'string|nullable',
            'files[]' => 'mimes:jpg,jpeg,png|nullable',
            'video[]' => 'mimes:mp4,mov|nullable',

        ];
    }
    public function messages()
    {
        return [
            'key.required'=>'կոդ դաշտը պարտադիր է',
            'title.required'=>'վերնագիր դաշտը պարտադիր է',
            'agent_id.required'=>'գործակալ դաշտը պարտադիր է',
            'sum.required'=>'գումար դաշտը պարտադիր է',
            'buy_rent_id.required'=>'գործողության տեսակ դաշտը պարտադիր է',
            'floor.integer'=>'հարկ դաշտը թվային է',
            'room.integer'=>'սենյակ դաշտը թվային է',
        ];
    }
}
