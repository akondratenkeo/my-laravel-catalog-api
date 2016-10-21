<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ManufacturersRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'description' => 'required|string|max:1000',
            'sort_order' => 'integer',
            'meta_title' => 'required|string|min:3|max:150',
            'meta_description' => 'string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'A :attribute is required-5588',
            'description.required'  => 'A description is required',
        ];
    }

    /**
     * {@inheritdoc}
     */
    /*protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }*/
}
