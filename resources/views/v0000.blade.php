@extends('layouts.app')

@section('active-panel')
　
@endsection

@section('title')
　Twitter　API
@endsection

@section('content')

{{-- メインコンテンツ --}}
<main class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
                    <div class="card-body">
                        <h5 class="card-title">ツイート</h5>
                        <p class="card-text">ツイートの自動化。時間の指定や、優先度順に投稿したりできます。
                        </p>
                    
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">初期設定</li>
                        <li class="list-group-item">ツイートの登録</li>
                        <li class="list-group-item">パー割登録</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
                    <div class="card-body">
                        <h5 class="card-title">メンション</h5>
                        <p class="card-text">メンションの自動化。ターゲットに適切なメンションを遅れるようにできます。</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">いいね</li>
                        <li class="list-group-item">フォロー</li>
                        <li class="list-group-item">リツイート</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        この複数の折り畳みの見本の1番目の折り畳みコンポーネントのプレースホルダーコンテンツ。...
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        この複数の折り畳みの見本の2番目の折り畳みコンポーネントのプレースホルダーコンテンツ。...
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
