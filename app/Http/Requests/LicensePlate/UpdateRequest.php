<?php

namespace App\Http\Requests\LicensePlate;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'license_plate' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'license_plate.required' => 'Це поле необхідно заповнити',
            'license_plate.integer' => 'Номерний знак має бути цілочисельним значенням',
        ];
    }
}
