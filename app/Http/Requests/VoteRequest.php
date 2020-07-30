<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class VoteRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:vote',
            'avg_percent' => 'required'


        ];
    }

    public function messages()
    {

        return [
            'email.required' => 'يرجى ادخال البريد الإلكتروني',
            'email.unique' => ' لا يمكن التصويت لى نفس المشاركة من نفس البريد الإلكتروني'
        ];
    }
}
