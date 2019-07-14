<h3>Add period</h3>
<div class="input-datarange" id="data-range">
{{Form::open(['route'=>'periods.store','class'=>'form-inline'])}}
{{Form::hidden('company_id', auth()->user()->company_id)}}
{{Form::label('name', 'Range')}} 
{{Form::text('from','',['class'=>'form-control col-3 mx-1','id'=>'from'])}}
{{Form::label('name', 'To')}} 
{{Form::text('to','',['class'=>'form-control col-3 ml-1','id'=>'to'])}}
{{Form::submit('Save',['class'=>'btn btn-primary ml-3 '])}}
{{Form::close()}}
</div>
