<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrolleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_year');
            $table->string('semester');
            $table->string('enrollment_type');
            $table->date('date');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->string('student_id');
            $table->string('year');
            $table->date('birth_date');
            $table->string('place_birth');
            $table->string('gender');
            $table->string('citizenship');
            $table->string('civ_status');
            $table->string('religion');
            $table->string('student_mobile');
            $table->string('student_email');
            $table->string('student_addr_perm');
            $table->string('student_addr_pre');
            $table->string('parents_name_f');
            $table->string('parents_name_m');
            $table->string('parents_occu_f');
            $table->string('parents_occu_m');
            $table->string('parents_mobile_no');
            $table->string('parents_zipcode');
            $table->string('parents_addr');
            $table->string('guardian_name');
            $table->string('guardian_addr');
            $table->string('student_elem_name');
            $table->string('student_elem_addr');
            $table->string('student_elem_year');
            $table->string('student_high_name');
            $table->string('student_high_addr');
            $table->string('student_high_year');
            $table->string('student_other_college');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollees');
    }
}
