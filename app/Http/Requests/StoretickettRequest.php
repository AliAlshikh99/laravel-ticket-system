<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretickettRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|',
            'phone' => 'required|max:10',
            'project' => 'required|',
           
        ];
    }
    public function messages()
{
return [
'name.required' => 'أدخل الاسم من فضلك',
'email.required' => 'أدخل الايميل من فضلك',
'phone.required' => 'أدخل رقم الموبايل من فضلك',
'project.required' => 'أدخل اسم المشروع من فضلك',


];
}
}
