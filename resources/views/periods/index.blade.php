@php
use App\Providers\AppServiceProvider as ASP;
@endphp
<table class="table table-striped">
	<thead>
		<tr>
			<th>From</th>
			<th>To</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@if(count($periods))
		@foreach($periods as $period)
		<tr>
			<td>{{ASP::format_date($period->from)}}</td>
			<td>{{$period->to}}</td>
			<td>
				<a href="{{route('periods.edit', $period->id)}}">[ ! ]</a>
				<a href="{{route('periods.delete', $period->id)}}">[ # ]</a>
			</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>