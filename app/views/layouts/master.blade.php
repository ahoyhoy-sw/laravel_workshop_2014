<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
	<head>
	<!-- Ingore -->
		<title>
		@section('title')
		| Blog
		@show
		</title>
	</head>
	<body>
		@yield('content')
	</body>
</html>
