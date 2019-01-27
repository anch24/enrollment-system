@extends('layouts.app')

@section('content')

<div class='container'>
	
	<div class="row">
		
		<div class="col-md mx-auto bg-light p-4 rounded mt-5">
			
			<div class="well">
				<h2>{{$enrollee->fname .' '. $enrollee->mname .' '. $enrollee->lname}}</h2>
				<h4>{{$enrollee->student_addr_perm}}</h4>
			</div>

		</div>

	</div>

</div>

@endsection