@extends('layouts.main');

@section('content')

<div class="row">
	<div class="col-6">
		@include('periods.create')
	</div>
	<div class="col-6">
		@include('categories.create')
	</div>
</div>
<div class="row">
	<div class="col-6">
		@include('periods.index')
	</div>
	<div class="col-6">
		@include('categories.index')
	</div>
</div>
@endsection