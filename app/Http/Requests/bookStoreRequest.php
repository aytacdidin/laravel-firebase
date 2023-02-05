<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'Required|max:50',
            'price'=>'Required'
        ];
    }

    public function messages()
    {
        return[
          'name.required'=>'Kitabin adi zorunludur',
          'name.max'=>'Kitabin adi 50 karakterden fazla olamaz',
          'price.required'=>'Kitabin fiyati zorunludur',
        ];
    }
}
