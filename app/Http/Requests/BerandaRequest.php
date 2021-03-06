<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BerandaRequest extends FormRequest
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
            'major'        => ['required', 'string', 'min:3', 'max:30', 'unique:majors'],
            'img'          => ['required', 'mimes:png,jpg,jpeg'],
            'description'  => ['required', 'string']
        ];
    }
}
