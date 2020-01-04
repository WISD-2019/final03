<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //設定 authorize()回傳 true
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
            //單元2 < 練習2-2> 設定 rules() 內回傳的驗證陣列
            'job_name'=>'required|boolean',
            'name'=>'required',
            'gender'=>'required|boolean',
            'birthday'=>'required',
            'id_number'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',
        ];
    }
}
