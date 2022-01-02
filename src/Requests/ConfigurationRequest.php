<?php

namespace Division\Configurations\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'code' => ['regex:/^[a-zA-Z0-9-_.]+$/', Rule::unique('configurations', 'code')->ignore($this->id)],
            'name' => ['required', 'min:2', 'string'],
            'value' => ['required', 'string']
        ];
    }
}
