@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/universe_powershell.jpg" style="height:120px; width:120px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> Posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">PythonUniverse.com</div>
            <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At omnis ratione atque maiores quidem aliquid vero ut, unde placeat fuga.</div>
            <div><a href="#">www.PythonUniverse.com</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="img/p1.jpg" class="w-100 h-100"> 
        </div>
        <div class="col-4">
            <img src="img/p2.jpg" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="img/p3.jpg" class="w-100 h-100">
        </div>
    </div>
</div>
@endsection