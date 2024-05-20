<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ReceiptID' =>[
                'required',
                'integer'
            ],
            'StudentNumber' =>[
                'required',
                'string'
            ],
            'StudentName' =>[
                'required',
                'string'
            ],
            'Amount' => [
                'required',
                'decimal:2'
            ],
            'College' => [
                'required',
                'string'
            ],
            'DueDate' => [
                'required',
                'date'
            ],
            'DatePaid' => [
                'date'
            ]
            ];
    }
}
