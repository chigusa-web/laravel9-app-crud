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
        // バリデーションルール
        return [
            // 商品名。最大値は64文字
            'name' => 'required|string|max:64',
            // 価格
            'price' => 'required|integer'
        ];
    }
}
