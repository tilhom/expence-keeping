@extends('layouts.main');

@section('content')
<a class="btn btn-primary float-right" href="{{route('companies.create')}}">Create</a>
<h1>Companies</h1>
<div class="list-group col-6">
@foreach($companies as $c)
<a class="list-group-item list-group-item-action {{auth()->user()->company_id==$c->id?'active':''}}"  
href="{{route('companies.activate',$c->id)}}"  >{{$c->name}}</a>
@endforeach
</div>
@endsection