<!-- Header Start -->
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="{{ url('/') }}">Twitter Started</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">ツイート</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">メンション</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">アナリティクス</a>
				</li>
			</ul>
			
			{{-- dropdown mneu 
				--------------------- --}}
				<div class="dropdown">
					<!-- 切替ボタンの設定 -->
					<button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  アカウント
					</button>
					<!-- ドロップメニューの設定 -->
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">ユーザー情報</a>
						@if (Route::has('login'))
							@auth
								<a class="dropdown-item" href="{{ url('/') }}">ホーム</a>
								<a class="dropdown-item" href="{{ route('login') }}">ログアウト</a>
							@else
								<a class="dropdown-item" href="{{ route('login') }}">ログイン</a>
		
								@if (Route::has('register'))
									<a class="dropdown-item" href="{{ route('register') }}">ユーザー登録</a>
								@endif
							@endauth
						
						@endif
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Twitter情報</a>
					</div><!-- /.dropdown-menu -->
			</div><!-- /.dropdown -->
		</div>
	</nav>
</header>
<!-- Header End -->