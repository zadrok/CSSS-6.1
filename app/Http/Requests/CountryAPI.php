<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryAPI extends FormRequest
{
    protected $redirectAction = response();
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
          'name' => 'required'
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'Please give a name to this Country.'
      ];
    }

    Public function response(array $errors) {
      return response()->json(['errors' => $this->$errorBag], 500);
    }
}
