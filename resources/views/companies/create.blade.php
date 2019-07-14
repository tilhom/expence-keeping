@extends('layouts.main');

@section('content')
<a class="btn btn-primary float-right" href="{{route('companies.index')}}">Back</a>
<h1>Create Company</h1>
{{Form::open(['route'=>'companies.store'])}}

{{Form::label('name', 'Name')}} 
{{Form::text('name','',['class'=>'form-control'])}}
<hr>
{{Form::submit('Save',['class'=>'btn btn-primary '])}}
{{Form::close()}}
@endsection