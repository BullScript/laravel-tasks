<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ProjectUniqueKeyNameRule;

class SaveUserRequest extends FormRequest
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
            'name' => 'required|alpha_dash|max:255',
            'key' => ['required', 'alpha_dash', 'max:20', new ProjectUniqueKeyNameRule()],
            'url' => 'url|max:255'
        ];
    }
}
