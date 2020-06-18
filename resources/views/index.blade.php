@extends('layouts.app')

@section('content')

<div class="container">
    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <h2>東京</h2>
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            新宿区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',1) }}">歌舞伎町店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',2) }}">新宿小滝橋通り店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
            港区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',3) }}">三田本店</a>
            </div><!-- /.card-body -->
            <div class="card-body">
            <a href="{{ route('store.show',4) }}">新橋店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
            </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
            江東区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',5) }}">亀戸店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
            品川区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',6) }}">品川店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
            目黒区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',7) }}">目黒店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
            大田区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',8) }}">JR西口蒲田店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
            <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
            世田谷区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',9) }}">環七新代田店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',10) }}">上野毛店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            杉並区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',11) }}">荻窪店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            豊島区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',12) }}">池袋東口店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            北区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',13) }}">赤羽店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            板橋区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',14) }}">西台駅前店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            練馬区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',15) }}">桜台駅前店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            足立区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',16) }}">千住大橋駅前店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
            <a class="text-body d-block p-3 m-n3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
            江戸川区
            </a>
            </h5>
            </div><!-- /.card-header -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',17) }}">環七一之江店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            <a href="{{ route('store.show',18) }}">小岩店</a>
            </div><!-- /.card-body -->
            </div><!-- /.collapse -->

        </div><!-- /.card -->
    </div><!-- /#accordion -->
</div>

@endsection