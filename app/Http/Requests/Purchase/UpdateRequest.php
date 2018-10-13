<?php

namespace App\Http\Requests\Purchase;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
          'product_id' => 'required|numeric|exists:products,id',
          'unit_id' => 'required|numeric|exists:units,id',
          'price' => 'required|numeric',
          'quantity' => 'required|numeric|min:1'
        ];
    }
}
