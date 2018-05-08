<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
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
      'regno' => 'required',
      'regstate' => 'required',
      'custname' => 'required',
      'custphone' => 'required|numeric',
      'vehbrand' => 'required',
      'vehmodel' => 'required',
      'vehyear' => 'required|numeric',
      'serialno' => 'required'
    ];
  }

  public function messages()
  {
    return [
      'regno.required' => 'Please enter the Registration Number.',
      'regstate.required' => 'Please enter the State.',
    ];
  }
}
