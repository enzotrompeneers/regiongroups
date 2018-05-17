<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'logo' => 'nullable|max:255|image',
            'name' => 'required|string|max:255',
            'description' => 'required|min:10',
            'street' => 'required|string|max:255',
            'housenumber' => 'required|string|max:255',
            'postal_code' => 'required|string|min:4|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'external' => 'nullable|max:255|active_url'
        ];
    }
}
