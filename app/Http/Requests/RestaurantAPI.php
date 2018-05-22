<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantAPI extends FormRequest
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
        'phone' => 'required|numeric',
        'address_1' => 'required',
        'suburb' => 'required',
        'state' => 'required',
        'numberofseats' => 'required|numeric',
        'country_id' => 'required|numeric',
        'category_id' => 'required|numeric'
      ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Please enter a name.',
      'phone.required' => 'Please enter a phone number',
      'address_1.required' => 'Please enter an address',
      'suburb.required' => 'Please enter a suburb',
      'state.required' => 'Please enter a state',
      'numberofseats.required' => 'Please enter the number of seats',
      'country_id.required' => 'the country is needed, to know where the Restaurant is',
      'category_id.required' => 'the category is needed, to know what the Restaurant serves',
    ];
    }
}
