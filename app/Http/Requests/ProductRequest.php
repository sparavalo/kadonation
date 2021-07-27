<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'sometimes|string|required',
            'category_id' => 'sometimes|integer|required',
            'price' => 'sometimes|integer|required',
            'sku' => 'sometimes|string|required',
            'quantity' => 'sometimes|integer|required',
        ];
    }
}