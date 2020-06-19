@extends('layouts.app')

@section('content')

<div class="container">
@if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @guest
    <div class="mb-4">
        <a class="btn btn-primary" href="{{ route('login') }}" >
                投稿(ご協力で二郎おごります)
        </a>
        <br>
        <h2>並びの確認↓</h2>
    </div>

    @else
        <div class="mb-4">
            <a class="btn btn-primary" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                ログアウト
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
            </form>
        </div>
    @endguest

    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <h2>東京</h2>
        <ul class="list-group">
        <li class="list-group-item">
            <div class="card-body">
                <a href="{{ route('store.show',1) }}">歌舞伎町店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',2) }}">新宿小滝橋通り店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',3) }}">三田本店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',4) }}">新橋店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',5) }}">亀戸店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',6) }}">品川店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',7) }}">目黒店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
                <a href="{{ route('store.show',8) }}">JR西口蒲田店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',9) }}">環七新代田店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',10) }}">上野毛店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',11) }}">荻窪店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',12) }}">池袋東口店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',13) }}">赤羽店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',14) }}">西台駅前店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',15) }}">桜台駅前店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',16) }}">千住大橋駅前店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',17) }}">環七一之江店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',18) }}">小岩店</a>
            </div><!-- /.card-body -->
        </li>
        </ul>
    </div><!-- /#accordion -->
</div>

@endsection