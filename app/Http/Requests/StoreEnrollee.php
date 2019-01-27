<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollee extends FormRequest
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
            'lname' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'student-id' => 'required',
            'year' =>'required',
            'place-birth' => 'required',
            'student-mobile-no' => 'required|numeric',
            'student-email' => 'required|email',
            'student-addr-perm' => 'required',
            'student-addr-pre' => 'required',
            'parents-name-f' => 'required',
            'parents-name-m' => 'required',
            'parents-occu-m' => 'required',
            'parents-occu-f' => 'required',
            'parents-mobile-no' => 'required|numeric',
            'parents-zipcode' => 'required|max:5',
            'parents-addr' => 'required',
            'guardian-name' => 'required',
            'guardian-addr' => 'required',
            'student-elem-name' => 'required',
            'student-elem-addr' => 'required',
            'student-elem-year' => 'required|numeric',
            'student-high-name' => 'required',
            'student-high-addr' => 'required',
            'student-high-year' => 'required|numeric',
            'student-other-college' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'lname.required' => 'LastName is required!',
            'fname.required' => 'FirstName is required!',
            'mname.required' => 'MiddleName is required!',
            'student-id.required' => 'Student ID is required',
            'year.required' =>'Year Level is required!',
            'place-birth.required' => 'This field is required!',
            'student-mobile-no.required' => 'This field is required!',
            'student-mobile-no.numeric' => 'Must contain only numbers',
            'student-email.required' => 'This field is required!',
            'student-email.email' => 'Should be a valid email!',
            'student-addr-perm.required' => 'This field is required!',
            'student-addr-pre.required' => 'This field is required!',
            'parents-name-f.required' => 'This field is required!',
            'parents-name-m.required' => 'This field is required!',
            'parents-occu-m.required' => 'This field is required!',
            'parents-occu-f.required' => 'This field is required!',
            'parents-mobile-no.required' => 'This field is required!',
            'parents-mobile-no.numeric' => 'Must contain numbers only!',
            'parents-zipcode.required' => 'This field is required!',
            'parents-zipcode.max' => 'Should not exceeds max length!',
            'parents-addr.required' => 'This field is required!',
            'guardian-name.required' => 'This field is required!',
            'guardian-addr.required' => 'This field is required!',
            'student-elem-name.required' => 'This field is required!',
            'student-elem-addr.required' => 'This field is required!',
            'student-elem-year.required' => 'This field is required!',
            'student-elem-year.numeric' => 'Must contain numbers only',
            'student-high-name.required' => 'This field is required!',
            'student-high-name.alpha' => 'Must contain letters only',
            'student-high-addr.required' => 'This field is required!',
            'student-high-year.required' => 'This field is required!',
            'student-high-year.numeric' => 'Must contain numbers only',
            'student-other-college.required' => 'This field is required!',
        ];
    }
}
