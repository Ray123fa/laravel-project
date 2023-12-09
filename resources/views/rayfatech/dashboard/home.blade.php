@extends('rayfatech/layouts.master')

@section('content')
	@auth
		<h3>Welcome to {{ Auth::user()->name }}</h3>
	@else
		<h3>Welcome to <span class="fw-bold fst-italic">RayfaTech</span></h3>
	@endauth
@endsection