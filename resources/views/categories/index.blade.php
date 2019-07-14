<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@if(count($categories))
		@foreach($categories as $category)
		<tr>
			<td>{{$category->name}}</td>
			<td>
				<a href="{{route('categories.edit',$category->id)}}">[ ! ]</a>
				<a href="{{route('categories.destroy',$category->id)}}">[ # ]</a>
			</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>