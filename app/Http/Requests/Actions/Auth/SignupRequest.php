<?php

namespace App\Http\Requests\Actions\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'phone' => ['required', 'phone:EG'],
            'country_code' => ['required', 'string', 'size:2'],
        ];
    }
}
