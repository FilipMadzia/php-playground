<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class BulkStoreMovieRequest extends FormRequest
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

        return $user->tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '*.directorId' => ['required', 'integer'],
            '*.name' => ['required'],
            '*.description' => ['nullable']
        ];
    }

    protected function prepareForValidation()
    {
        $data = [];

        foreach($this->toArray() as $obj)
        {
            $obj['director_id'] = $obj['directorId'] ?? null;

            $data[] = $obj;
        }

        $this->merge($data);
    }
}
