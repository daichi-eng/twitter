@extends('layouts.app')

@section('title')
  基本設定
@endsection

@section('content')

{{-- メインコンテンツ --}}
<main class="">
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-sm-4">
                <div class="card m-1">
                    <div class="card-header">
                        基本設定
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
                        ツイート
                    </div>
				</div>
            </div>
            <div class="col-sm-4">
                <div class="card m-1">
                    <div class="card-header">
                        メンション機能
                    </div>
				</div>	
            </div>
        </div>
    </div>

</main>
@endsection
