<h3>Add category</h3>
{{Form::open(['route'=>'categories.store','class'=>'form-inline'])}}
{{Form::hidden('company_id', auth()->user()->company_id)}}
{{Form::label('name', 'Name')}} 
{{Form::text('name','',['class'=>'form-control mx-1'])}}
{{Form::submit('Save',['class'=>'btn btn-primary '])}}
{{Form::close()}}
