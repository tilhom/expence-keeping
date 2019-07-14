@extends('layouts.main');

@section('content')
<a class="btn btn-primary float-right" href="{{route('companies.index')}}">Back</a>
<h1>Add Period</h1>
{{Form::open(['route'=>'periods.store'])}}
{{Form::hidden('company_id', auth()->user()->company_id)}}
<div class="input-datarange" id="data-range">
{{Form::label('name', 'Range')}} 
{{Form::text('from','',['class'=>'form-control col-2','id'=>'from'])}}
{{Form::label('name', 'To')}} 
{{Form::text('to','',['class'=>'form-control col-2','id'=>'to'])}}
	
</div>
<hr>
{{Form::submit('Save',['class'=>'btn btn-primary '])}}
{{Form::close()}}
@endsection