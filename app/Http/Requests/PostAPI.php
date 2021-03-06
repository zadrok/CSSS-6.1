<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAPI extends FormRequest
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
        'content' => 'required',
        'restaurant_id' => 'required|numeric',
        'user_id' => 'required|numeric'
      ];
  }

  public function messages()
  {
    return [
      'content.required' => 'Please enter a comment.',
      'restaurant_id.required' => 'The restaurant is required to know where to put this',
      'user_id.required' => 'the user is needed, to know who made the comment'
    ];
    }
}
