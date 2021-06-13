<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('layouts.head')
</head>


<body>
	{{-- ====== Start Header-navigation ================ --}}
	@include('layouts.header-nav')
	

	{{-- ===== Start main ============================== --}}
	@yield('content')
			

	{{-- ===== Start footer ============================== --}}
	@include('layouts.footer')
	

</html>