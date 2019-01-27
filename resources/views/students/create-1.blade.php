@extends('layouts.design')

@section('content')

<div class="row">

	<div class="col-md-8 mx-auto bg-light p-4 rounded mt-5">

		{{Form::open(['action' => 'StudentsController@store', 'method' => 'POST'])}}

			<h2 class="text-center bg-info p-1 rounded text-light">Enrollment Info</h2>
			
			<div class="row">

				<div class="col-md-4 form-group mt-3">
					{{Form::label('school-year', 'School Year')}}
					{{Form::select('school-year', ['1' => '2019-2020', '2' => '2018-2019'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::label('semester', 'Semester')}}
					{{Form::select('semester', ['1' => '1st semester', '2' => '2nd semester'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::label('enrollment-type', 'Enrollment Type')}}
					{{Form::select('enrollment-type', ['1' => 'New'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md-3 form-group">
					{{Form::label('date', 'Date')}}
					{{Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Basic Information</h2>

			<div class="row">
				
				<div class="col-md-4 form-group">
					{{Form::label('lname', 'Name')}}
            		{{Form::text('lname', '', ['class' => 'form-control', 'placeholder' => 'LastName'])}}
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::text('fname', '', ['class' => 'form-control mt-3', 'placeholder' => 'FirstName'])}}
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::text('mname', '', ['class' => 'form-control mt-3', 'placeholder' => 'MiddleName'])}}
				</div>

			</div>

			<div class="row">

				<div class="col-md-4 form-group">
					{{Form::label('student-id', 'ID')}}
					{{Form::text('student-id', '', ['class' => 'form-control', 'placeholder' => 'StudentID'])}}
				</div>

				<div class="col-md-4 form-group">
					{{Form::label('year', 'Year')}}
					{{Form::text('year', '', ['class' => 'form-control', 'placeholder' => 'YearLevel'])}}
				</div>

				<div class="col-md-4 form-group">
					{{Form::label('birthdate', 'Birth Date')}}
					{{Form::date('birth-date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
				</div>

			</div>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('place-birth', 'Place of Birth')}}
					{{Form::text('place-birth', '', ['class' => 'form-control', 'placeholder' => 'The place that you were born'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('gender', 'Gender')}}
					{{Form::select('gender', ['1' => 'Male', '2' => 'Female'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('citizenship', 'Citizenship')}}
					{{Form::select('citizenship', ['1' => 'Filipino', '2' => 'Others'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('civ-status', 'Civil Status')}}
					{{Form::select('civ-status', ['1' => 'Single', '2' => 'Married'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('religion', 'Religion')}}
					{{Form::select('religion', ['1' => 'Roman Catholic', '2' => 'Inc'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Contact Information</h2>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('student-mobile-no', 'Mobile No')}}
					{{Form::text('student-mobile-no', '', ['class' => 'form-control', 'placeholder' => 'Your Mobile No'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('student-email', 'Email')}}
					{{Form::email('student-email', '', ['class' => 'form-control', 'placeholder' => 'Your Email Address'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Address')}}
					{{Form::text('student-addr-perm', '', ['class' => 'form-control', 'placeholder' => 'Your Permanent Address'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-addr-pre', '', ['class' => 'form-control mt-3', 'placeholder' => 'Your Present Address'])}}
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Emergency Contact Person</h2>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('Parents')}}
					{{Form::text('parents-name-f', '', ['class' => 'form-control', 'placeholder' => 'Your Father\'s Name'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('parents-name-m', '', ['class' => 'form-control mt-3', 'placeholder' => 'Your Mother\'s Name'])}}
				</div>

			</div>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('Occupation')}}
					{{Form::text('parents-occu-f', '', ['class' => 'form-control', 'placeholder' => 'Your Father\'s Occupation'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('parents-occu-m', '', ['class' => 'form-control mt-3', 'placeholder' => 'Your Mother\'s Occupation'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('parents-mobile-no', 'Mobile No')}}
					{{Form::text('parents-mobile-no', '', ['class' => 'form-control', 'placeholder' => 'Your Parent\'s Mobile No'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('parents-zipcode', 'Zip Code')}}
					{{Form::text('parents-zipcode', '', ['class' => 'form-control', 'placeholder' => 'ZipCode'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('parents-address', 'Address')}}
					{{Form::text('parents-address', '', ['class' => 'form-control', 'placeholder' => 'Your Parent\'s Address'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Guardian')}}
					{{Form::text('guardian-name', '', ['class' => 'form-control', 'placeholder' => 'Guardian\'s Name (Optional)'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('guardian-addr', '', ['class' => 'form-control mt-3', 'placeholder' => 'Guardian\'s Address (Optional)'])}}
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Educational Background</h2>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Elementary')}}
					{{Form::text('student-elem-name', '', ['class' => 'form-control', 'placeholder' => 'Elementary Name'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-elem-addr', '', ['class' => 'form-control mt-3', 'placeholder' => 'Address'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-elem-year', '', ['class' => 'form-control mt-3', 'placeholder' => 'Year'])}}
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Highschool')}}
					{{Form::text('student-high-name', '', ['class' => 'form-control', 'placeholder' => 'Highschool Name'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-high-addr', '', ['class' => 'form-control mt-3', 'placeholder' => 'Address'])}}
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-high-year', '', ['class' => 'form-control mt-3', 'placeholder' => 'Year'])}}
				</div>

			</div>

			<div class="row">
				<div class="col-md form-group">
					{{Form::label('student-other-college', 'Other College')}}
					{{Form::text('student-other-college', '', ['class' => 'form-control', 'placeholder' => 'Other College or University Attended'])}}
				</div>
			</div>

			{{Form::submit('Submit', ['class'=>'btn btn-success'])}}
		{!! Form::close() !!}
	</div>
</div>



@endsection