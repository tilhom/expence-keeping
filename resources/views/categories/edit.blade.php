@extends('layouts.main');

@section('content')

<h3>Edit category</h3>
{{Form::open([
	'route'=>['categories.update',$category->id],
	'class'=>'form-inline',
	'method' => 'PUT'
	])}}
{{Form::hidden('company_id', auth()->user()->company_id)}}
{{Form::label('name', 'Name')}} 
{{Form::text('name',$category->name,['class'=>'form-control mx-1'])}}
{{Form::submit('Save',['class'=>'btn btn-primary '])}}
{{Form::close()}}

@endsection