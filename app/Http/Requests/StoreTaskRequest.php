<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           "title"=>'required|string|max:40',
            "description"=>'nullable|string',
            "priority"=>'required|integer|min:1|max:4',
            'user_id'=>'required'
        ];
    }
    public function messages(){
    return [
        'required'=> 'hey nour this requierd field'
    ];
    }
}
