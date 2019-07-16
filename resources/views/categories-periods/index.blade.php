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