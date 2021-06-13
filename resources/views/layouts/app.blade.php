<!doctype html>
<html lang="ja">
	<head>
		@include('layouts.head')
	</head>
	<body>
		{{--Start Header-navigation  --}}
		@include('layouts.header-nav')
		

		{{--  Start container-fluid  --}}
		<div class="container-fluid">
			<div class="row">
				{{-- Start main --}}
				<main class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mb-3">
					@yield('content')
				</main>

				{{-- Start aside --}}
				<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-3">
					@include('layouts.aside')
				</aside>
			</div>
		</div>

		{{-- Start footer
			--------------------- ----}}
		@include('layouts.footer')



		{{-- JavaScriptの読み込み
			---------------------------- --}}
		<script src="{{ asset('js/app.js') }}" defer></script>	

		<style>
			.drop-hover:hover > .dropdown-menu {
			  display: block !important;
			}
		</style>

	</body>
</html>