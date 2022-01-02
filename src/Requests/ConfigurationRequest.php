<?php

namespace Division\Configurations\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
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
            'code' => ['regex:/^[a-zA-Z0-9-_.]+$/'],
            'name' => ['required', 'min:2', 'string'],
            'value' => ['required', 'string']
        ];
    }
}
