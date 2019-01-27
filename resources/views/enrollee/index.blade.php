@extends('layouts.app')

@section('content')

<div class=''>
	
</div>

<div class='container'>
	
	<div class="row">

		<div class="col-md-2 col-md-offset-2">
			<div class="panel panel-default">
				<ul class="nav flex-column">
				  <li class="nav-item">
				    <a class="nav-link" href="#">Active</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>
				</ul>
			</div>
		</div>
		
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<ul class="nav flex-column">
				  <li class="nav-item">
				    <a class="nav-link" href="#">Active</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li>
				</ul>
			</div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                	<h3>Name</h3>
                    <ul class="list-group">
					  <li class="list-group-item">Address</li>
					  <li class="list-group-item">Age</li>
					  <li class="list-group-item">Gender</li>
					  <li class="list-group-item">Parents</li>
					  <li class="list-group-item">Status</li>
					</ul>
                </div>
            </div>
        </div>

	</div>

</div>
			

@endsection