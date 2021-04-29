@extends('layout.main')
@section('title','Home')

@section('container')
<div class="container mt-5 pt-3">
	<div class="col-md-8 offset-md-2 d-flex justify-content-center align-content-center">
		<h2 class="display-1 mt-5">EZ Lara</h2>
	</div>
	<div class="col-md-8 offset-md-2 text-center d-flex justify-content-center align-content-center mt-2">
		<h3 class="display-4">We use <i class="fab fa-laravel fa-fw"></i> & <i class="fab fa-bootstrap fa-fw"></i></h3>
	</div>
	<div class="col-md-8 offset-md-2 text-center d-flex justify-content-center align-content-center mt-5">
		<a href="{{url('student')}}" class="btn btn-lg btn-outline-dark" style="border-radius: 50px">START</a>
	</div>

</div>
@endsection