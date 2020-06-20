@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="/storage/img/sample.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{$store->store_name}}</h5>
            <p class="card-text">{{$store->wait_people}}人待ち:{{$store->created_at}}時点</p>
            <p class="card-text">{{$store->introduction}}</p>
            <a href="{{ route('store.edit',1) }}" class="btn btn-primary">待ち時間の投稿</a>
        </div>
    </div>
    <a href="/" class="btn btn-primary">戻る</a>
</div>

@endsection