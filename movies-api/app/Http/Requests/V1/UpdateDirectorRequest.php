<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDirectorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();

        if($user == null)
        {
            return false;
        }

        return $user->tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if($method == 'PUT')
        {
            return [
                'firstName' => ['required'],
                'lastName' => ['required']
            ];
        }
        else if($method == 'PATCH')
        {
            return [
                'firstName' => ['sometimes', 'required'],
                'lastName' => ['sometimes', 'required']
            ];
        }
    }

    protected function prepareForValidation()
    {
        if($this->firstName)
            $this->merge(['first_name' => $this->firstName]);
        if($this->lastName)
            $this->merge(['last_name' => $this->lastName]);
    }
}
