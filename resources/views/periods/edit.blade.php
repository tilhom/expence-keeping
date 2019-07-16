@extends('layouts.main');

@section('content')
<h1>Edit Period</h1>
{{Form::open(['url'=>route('periods.update',$period->id), 'method' =>'PUT'])}}
{{Form::hidden('company_id', auth()->user()->company_id)}}
{{Form::hidden('user_id', auth()->user()->id)}}
<div class="input-datarange" id="data-range">
{{Form::label('name', 'Range')}} 
{{Form::text('from',$period->from,['class'=>'form-control col-2','id'=>'from'])}}
{{Form::label('name', 'To')}} 
{{Form::text('to',$period->to,['class'=>'form-control col-2','id'=>'to'])}}
	
</div>
<hr>
{{Form::submit('Save',['class'=>'btn btn-primary '])}}
{{Form::close()}}
@endsection

@section('script')
<script type="text/javascript">
	$(function(){
		$('#from').datepicker({
			defaultDate:"-1w",
			changeMonth: true,
			dateFormat:"yy-mm-dd",
			onClose: function(selectedDate){
				$('#to').datepicker("option","minDate",selectedDate);
			}
		});
		$('#to').datepicker({
			defaultDate:"+1w",
			dateFormat:"yy-mm-dd",
			onClose: function(selectedDate){
				$('#from').datepicker("option","maxDate",selectedDate);
			}
		});
	})

</script>

@endsection