<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankSampahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {


        if(request()->isMethod('post')) {
            return[
            'nama'=>'required|String|max:258',
            'alamat'=>'required|String|max:258',
            'foto'=>'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
            'latitude'=>'required|Integer|max:258',
            'longitude'=>'required|Integer|max:258',
            ];
        }else{
        return [
            'nama'=>'required|String|max:258',
            'alamat'=>'required|String|max:258',
            'foto'=>'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
            'latitude'=>'required|Integer|max:258',
            'longitude'=>'required|Integer|max:258',
        ];
    }
}
}
