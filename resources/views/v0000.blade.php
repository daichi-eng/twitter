@extends('layouts.app')

@section('active-panel')
　
@endsection

@section('title')
　Twitter　API
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
                      <li class="list-group-item">予約投稿</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="card m-1">
                    <div class="card-header">
                        ツイート
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="card m-1">
                    <div class="card-header">
                        メンション機能
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>

</main>
@endsection
