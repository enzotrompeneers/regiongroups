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
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:30',
            'description' => 'required|min:10',
            'street' => 'required|string|max:30',
            'housenumber' => 'required|max:10',
            'postal_code' => 'required|min:4|max:8',
            'city' => 'required|max:30',
            'country' => 'required|max:30',
            'phone' => 'required|min:3|max:20',
            'email' => 'required|email|max:30',
            'external' => 'nullable|active_url|max:30'
        ];
    }
}
