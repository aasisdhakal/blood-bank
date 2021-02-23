<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    private $necessity = 'nullable';

    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        if ( ! empty($this->id)) {
            return;
        }
        $this->necessity = 'required';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => [$this->necessity, 'string'],
            'age'         => ['nullable'],
            'sex'         => [$this->necessity, 'string'],
            'blood_group' => [$this->necessity, 'string'],
            'location'    => [$this->necessity, 'string'],
            'phone'       => [$this->necessity, 'numeric'],
        ];
    }
}
