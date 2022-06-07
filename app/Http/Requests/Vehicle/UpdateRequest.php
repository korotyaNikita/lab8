<?php

namespace App\Http\Requests\Vehicle;

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
            'brand' => 'required|string',
            'model' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'license_plate.required' => 'Це поле необхідно заповнити',
            'license_plate.integer' => 'Номерний знак має бути цілочисельним значенням',
            'brand.required' => 'Це поле необхідно заповнити',
            'brand.string' => 'Марка має бути рядковим значенням',
            'model.required' => 'Це поле необхідно заповнити',
            'model.string' => 'Модель має бути рядковим значенням',
        ];
    }
}
