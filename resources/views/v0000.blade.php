@extends('layouts.app')

@section('active-panel')
　
@endsection

@section('title')
　Twitter　API
@endsection

@section('content')

{{-- メインコンテンツ --}}
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-sm-4">
                <div class="card mx-1 mb-3">
					<div class="card-header">
						ツイート
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="" target="_blank">予約投稿</a></li>
						<li class="list-group-item"><a href="" target="_blank">Dapibus ac facilisis in</a></li>
						<li class="list-group-item"><a href="" target="_blank">Vestibulum at eros</a></li>
					</ul>
				</div>
            </div>
            <div class="col-sm-4">
                <div class="card mx-1 mb-3">
                    <div class="card-header">
                        メンション機能
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><a href="" target="_blank">予約投稿</a></li>
                      <li class="list-group-item"><a href="" target="_blank">Dapibus ac facilisis in</a></li>
                      <li class="list-group-item"><a href="" target="_blank">Vestibulum at eros</a></li>
                    </ul>
                  </div>
			</div>
			<div class="col-sm-4">
				<div class="card m-1">
					<div class="card-header">
						アナリティクス
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="" target="_blank">フォロワーの推移</a></li>
						<li class="list-group-item"><a href="" target="_blank">インプレッション</a></li>
						<li class="list-group-item"><a href="" target="_blank">メンション</a></li>
					</ul>
					</div>
			</div>
		</div>
	</div>

@endsection
