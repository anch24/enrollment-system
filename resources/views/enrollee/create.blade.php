@extends('layouts.design')

@section('content')

<div class="row">

	<div class="col-md-8 mx-auto bg-light p-4 rounded mt-5">

		{{Form::open(['action' => 'EnrolleesController@store', 'method' => 'POST'])}}

			<h2 class="text-center bg-info p-1 rounded text-light">Enrollment Info</h2>
			
			<div class="row">

				<div class="col-md-4 form-group mt-3">
					{{Form::label('school-year', 'School Year')}}
					{{Form::select('school-year', ['2019-2020' => '2019-2020', '2018-2019' => '2018-2019'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::label('semester', 'Semester')}}
					{{Form::select('semester', ['1st semester' => '1st semester', '2nd semester' => '2nd semester'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::label('enrollment-type', 'Enrollment Type')}}
					{{Form::select('enrollment-type', ['New' => 'New'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
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
            		@if($errors->has('lname'))
            			<b class="form-text text-danger">{{$errors->first('lname')}}</b>
            		@endif
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::text('fname', '', ['class' => 'form-control mt-3', 'placeholder' => 'FirstName'])}}
					@if($errors->has('fname'))
            			<b class="form-text text-danger">{{$errors->first('fname')}}</b>
            		@endif
				</div>

				<div class="col-md-4 form-group mt-3">
					{{Form::text('mname', '', ['class' => 'form-control mt-3', 'placeholder' => 'MiddleName'])}}
					@if($errors->has('mname'))
            			<b class="form-text text-danger">{{$errors->first('mname')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">

				<div class="col-md-4 form-group">
					{{Form::label('student-id', 'ID')}}
					{{Form::text('student-id', '', ['class' => 'form-control', 'placeholder' => 'StudentID'])}}
					@if($errors->has('student-id'))
            			<b class="form-text text-danger">{{$errors->first('student-id')}}</b>
            		@endif
				</div>

				<div class="col-md-4 form-group">
					{{Form::label('year', 'Year')}}
					{{Form::text('year', '', ['class' => 'form-control', 'placeholder' => 'YearLevel'])}}
					@if($errors->has('year'))
            			<b class="form-text text-danger">{{$errors->first('year')}}</b>
            		@endif
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
					@if($errors->has('place-birth'))
            			<b class="form-text text-danger">{{$errors->first('place-birth')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('gender', 'Gender')}}
					{{Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('citizenship', 'Citizenship')}}
					{{Form::select('citizenship', ['Filipino' => 'Filipino', 'Others' => 'Others'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('civ-status', 'Civil Status')}}
					{{Form::select('civ-status', ['Single' => 'Single', 'Married' => 'Married'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

				<div class="col-md form-group">
					{{Form::label('religion', 'Religion')}}
					{{Form::select('religion', ['Roman Catholic' => 'Roman Catholic', 'Inc' => 'Inc'], null, ['class' => 'form-control'], ['placeholder' => 'Select'])}}
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Contact Information</h2>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('student-mobile-no', 'Mobile No')}}
					{{Form::text('student-mobile-no', '', ['class' => 'form-control', 'placeholder' => 'Your Mobile No'])}}
					@if($errors->has('student-mobile-no'))
            			<b class="form-text text-danger">{{$errors->first('student-mobile-no')}}</b>
            		@endif
				</div>

				<div class="col-md form-group">
					{{Form::label('student-email', 'Email')}}
					{{Form::email('student-email', '', ['class' => 'form-control', 'placeholder' => 'Your Email Address'])}}
					@if($errors->has('student-email'))
            			<b class="form-text text-danger">{{$errors->first('student-email')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Address')}}
					{{Form::text('student-addr-perm', '', ['class' => 'form-control', 'placeholder' => 'Your Permanent Address'])}}
					@if($errors->has('student-addr-perm'))
            			<b class="form-text text-danger">{{$errors->first('student-addr-perm')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-addr-pre', '', ['class' => 'form-control mt-3', 'placeholder' => 'Your Present Address'])}}
					@if($errors->has('student-addr-pre'))
            			<b class="form-text text-danger">{{$errors->first('student-addr-pre')}}</b>
            		@endif
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Emergency Contact Person</h2>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('Parents')}}
					{{Form::text('parents-name-f', '', ['class' => 'form-control', 'placeholder' => 'Your Father\'s Name'])}}
					@if($errors->has('parents-name-f'))
            			<b class="form-text text-danger">{{$errors->first('parents-name-f')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('parents-name-m', '', ['class' => 'form-control mt-3', 'placeholder' => 'Your Mother\'s Name'])}}
					@if($errors->has('parents-name-m'))
            			<b class="form-text text-danger">{{$errors->first('parents-name-m')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">

				<div class="col-md form-group">
					{{Form::label('Occupation')}}
					{{Form::text('parents-occu-f', '', ['class' => 'form-control', 'placeholder' => 'Your Father\'s Occupation'])}}
					@if($errors->has('parents-occu-f'))
            			<b class="form-text text-danger">{{$errors->first('parents-name-m')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('parents-occu-m', '', ['class' => 'form-control mt-3', 'placeholder' => 'Your Mother\'s Occupation'])}}
					@if($errors->has('parents-occu-m'))
            			<b class="form-text text-danger">{{$errors->first('parents-name-m')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('parents-mobile-no', 'Mobile No')}}
					{{Form::text('parents-mobile-no', '', ['class' => 'form-control', 'placeholder' => 'Your Parent\'s Mobile No'])}}
					@if($errors->has('parents-mobile-no'))
            			<b class="form-text text-danger">{{$errors->first('parents-mobile-no')}}</b>
            		@endif
				</div>

				<div class="col-md form-group">
					{{Form::label('parents-zipcode', 'Zip Code')}}
					{{Form::text('parents-zipcode', '', ['class' => 'form-control', 'placeholder' => 'ZipCode'])}}
					@if($errors->has('parents-zipcode'))
            			<b class="form-text text-danger">{{$errors->first('parents-zipcode')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('parents-addr', 'Address')}}
					{{Form::text('parents-addr', '', ['class' => 'form-control', 'placeholder' => 'Your Parent\'s Address'])}}
					@if($errors->has('parents-addr'))
            			<b class="form-text text-danger">{{$errors->first('parents-addr')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Guardian')}}
					{{Form::text('guardian-name', '', ['class' => 'form-control', 'placeholder' => 'Guardian\'s Name (Optional)'])}}
					@if($errors->has('guardian-name'))
            			<b class="form-text text-danger">{{$errors->first('guardian-name')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('guardian-addr', '', ['class' => 'form-control mt-3', 'placeholder' => 'Guardian\'s Address (Optional)'])}}
					@if($errors->has('guardian-addr'))
            			<b class="form-text text-danger">{{$errors->first('guardian-addr')}}</b>
            		@endif
				</div>

			</div>

			<h2 class="text-center bg-info p-1 rounded text-light mt-4 mb-4">Educational Background</h2>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Elementary')}}
					{{Form::text('student-elem-name', '', ['class' => 'form-control', 'placeholder' => 'Elementary Name'])}}
					@if($errors->has('student-elem-name'))
            			<b class="form-text text-danger">{{$errors->first('student-elem-name')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-elem-addr', '', ['class' => 'form-control mt-3', 'placeholder' => 'Address'])}}
					@if($errors->has('student-elem-addr'))
            			<b class="form-text text-danger">{{$errors->first('student-elem-addr')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-elem-year', '', ['class' => 'form-control mt-3', 'placeholder' => 'Year'])}}
					@if($errors->has('student-elem-year'))
            			<b class="form-text text-danger">{{$errors->first('student-elem-year')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				
				<div class="col-md form-group">
					{{Form::label('Highschool')}}
					{{Form::text('student-high-name', '', ['class' => 'form-control', 'placeholder' => 'Highschool Name'])}}
					@if($errors->has('student-high-name'))
            			<b class="form-text text-danger">{{$errors->first('student-high-name')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-high-addr', '', ['class' => 'form-control mt-3', 'placeholder' => 'Address'])}}
					@if($errors->has('student-high-addr'))
            			<b class="form-text text-danger">{{$errors->first('student-high-addr')}}</b>
            		@endif
				</div>

				<div class="col-md form-group mt-3">
					{{Form::text('student-high-year', '', ['class' => 'form-control mt-3', 'placeholder' => 'Year'])}}
					@if($errors->has('student-high-year'))
            			<b class="form-text text-danger">{{$errors->first('student-high-year')}}</b>
            		@endif
				</div>

			</div>

			<div class="row">
				<div class="col-md form-group">
					{{Form::label('student-other-college', 'Other College')}}
					{{Form::text('student-other-college', '', ['class' => 'form-control', 'placeholder' => 'Other College or University Attended'])}}
					@if($errors->has('student-other-college'))
            			<b class="form-text text-danger">{{$errors->first('student-other-college')}}</b>
            		@endif
				</div>
			</div>

			{{Form::submit('Submit', ['class'=>'btn btn-success'])}}
		{!! Form::close() !!}
	</div>
</div>



@endsection