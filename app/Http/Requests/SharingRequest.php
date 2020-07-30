<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SharingRequest extends FormRequest

{

    public function authorize()
    {
       return true ;

    }


    /**
     * @return array
     */
    public function rules()
    {
        return ['name' => 'required',

            'Prof_name' => 'required',
            'nationality' => 'required',
            'management' => 'required',
            'edulevel' => 'required',
            'school' => 'required',
            'class' => 'required',

            'mobile' => 'required|numeric:sharing',
            'email' => 'required|unique:sharing',
            'areashare' => 'required',

            'sharesort' => 'required',
           'photo' => ' mimes:jpg,png,jpeg,gif,svg,psd',
           'video' => ' mimes:mp4,mkv,oga,ogv,ogg,webm ',
            'file'  =>'file|mimes:pdf,text,application/msword'




        ];
    }






    public function messages()
    {

        return [
            'name.required' => ('يرجى ادخال اسم المشارك'),
            'Prof_name.required' => ('يرجى ادخال السجل المهني  '),
            'nationality.required' => 'يرجى ادخال الجنسية ',
            'email.unique' => 'هذا البريد الإلكتروني مستخدم من قبل ',
            'email.required' => 'هذا البريد الإلكتروني مستخدم من قبل ',

            'mobile.numeric' => 'يجب أن يكون رقم الهاتف صالح للإستخدام',
            'mobile.required' => 'رقم الهاتف مطلوب  ' ,
            'edu_area.required' => 'يرجى ادخال المنظمة التعليمية ',

            'school.required' =>  'يرجى إدخال اسم المدرسة',
            'class.required' =>  'يرجى ادخال الصف ',
            'areashare.required' => 'يرجى ادخال المنطقة التي سيتم فيها المشاركة ',
            'sharesort.required' => 'يرجى ادخال نوع المشاركة ',
            'management.required' => 'يجب ادخال المنظمة التعليمية',
            'edulevel.required' => 'يجب إدخال المستوى الدراسي '






        ];
    }




}
