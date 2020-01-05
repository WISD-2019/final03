<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'user_id'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
            'id_number'=>'required',
            'phone'=>'required',
            'type'=>'required',
            'book_start'=>'required',
            'book_end'=>'required',

        ];
    }
}
