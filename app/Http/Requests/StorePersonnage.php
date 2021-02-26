<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonnage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('post');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
         'firstname' => 'required|unique:personnages|string|max:255',
         'lastname' => 'nullable|max:255',
         'age' => 'nullable|numeric|max:10',
         'species' => 'nullable|max:255',
         'faction' => 'required|string|max:255',
         'actor' => 'nullable|max:255',
     ];
    }
}
