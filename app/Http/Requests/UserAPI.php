<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAPI extends FormRequest
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
          'name' => 'required',
          'email' => 'required',
          'country_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'Please enter a name.',
        'email.required' => 'Please provide an email for this user',
        'country_id.required' => 'Please provide this users country_id'
      ];
    }
}
