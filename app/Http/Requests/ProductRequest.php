<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $rules = [
            'name'     => 'required','unique:products,name',
            'category_id' => 'required',
            'price'    => 'required|numeric',
            'status'   => 'required',
            'photo'    => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        if(request()->photo !=null){
            $rules['photo']='nullable';
        }
        return $rules;
    }
}
