<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<body class="pt-5">
	@include('partials._nav')
	<div class="container mt-3">
		@include('partials._messages')
		@yield('content')
		@include('partials._footer')
	</div>
	@yield('script')
</body>
</html>