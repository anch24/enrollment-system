<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollee;
use App\Http\Requests\StoreEnrollee;
use App\User;

class EnrolleesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollees = Enrollee::all();
        return view('enrollee.index')->with('enrollees', $enrollees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enrollee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnrollee $request)
    {
       
        $validate = $request->validated();

        $enrollee = new Enrollee;
        $enrollee->school_year = $request->input('school-year');
        $enrollee->semester = $request->input('semester');
        $enrollee->enrollment_type = $request->input('enrollment-type');
        $enrollee->date = $request->input('date');
        $enrollee->lname = $request->input('lname');
        $enrollee->fname = $request->input('fname');
        $enrollee->mname = $request->input('mname');
        $enrollee->student_id = $request->input('student-id');
        $enrollee->year = $request->input('year');
        $enrollee->birth_date = $request->input('birth-date');
        $enrollee->place_birth = $request->input('place-birth');
        $enrollee->gender = $request->input('gender');
        $enrollee->citizenship = $request->input('citizenship');
        $enrollee->civ_status = $request->input('civ-status');
        $enrollee->religion = $request->input('religion');
        $enrollee->student_mobile = $request->input('student-mobile-no');
        $enrollee->student_email  = $request->input('student-email');
        $enrollee->student_addr_perm  = $request->input('student-addr-perm');
        $enrollee->student_addr_pre  = $request->input('student-addr-pre');
        $enrollee->parents_name_f  = $request->input('parents-name-f');
        $enrollee->parents_name_m  = $request->input('parents-name-m');
        $enrollee->parents_occu_f  = $request->input('parents-occu-f');
        $enrollee->parents_occu_m  = $request->input('parents-occu-m');
        $enrollee->parents_mobile_no  = $request->input('parents-mobile-no');
        $enrollee->parents_zipcode  = $request->input('parents-zipcode');
        $enrollee->parents_addr  = $request->input('parents-addr');
        $enrollee->guardian_name  = $request->input('guardian-name');
        $enrollee->guardian_addr  = $request->input('guardian-addr');
        $enrollee->student_elem_name  = $request->input('student-elem-name');
        $enrollee->student_elem_addr  = $request->input('student-elem-addr');
        $enrollee->student_elem_year  = $request->input('student-elem-year');
        $enrollee->student_high_name  = $request->input('student-high-name');
        $enrollee->student_high_addr  = $request->input('student-high-addr');
        $enrollee->student_high_year  = $request->input('student-high-year');
        $enrollee->student_other_college  = $request->input('student-other-college');
        $enrollee->save();

        return redirect('/register')->with('success', 'Form Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollee = Enrollee::find($id);
        return view('enrollee.show')->with('enrollee', $enrollee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
