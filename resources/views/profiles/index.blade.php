@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="https://github.com/Akanksha1212/UniConnectWT/blob/main/images/logo.png?raw=true" class="rounded-circle" style="height: 130px;"></img>
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{$user->username}}</h1>
        <a href="#">Add New Posts</a>
      </div>
      <div class="d-flex">
        <div class="pr-5"><strong>694</strong> posts</div>
        <div class="pr-5"><strong>41.4k</strong> followers</div>
        <div class="pr-5"><strong>82</strong> following</div>
      </div>
        <div class="pt-4 font-weight-bold">
          {{$user->profile->title}}
        </div>
        <div>{{$user->profile->description}}</div>
        <div><a href="www.mobilopedia.co/">{{$user->profile->url}}</a></div>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
      <img src="/images/1.png" class="w-100" alt="">
    </div>
    <div class="col-4">
      <img src="/images/2.png" class="w-100"alt="">
    </div>
    <div class="col-4">
      <img src="/images/3.png" class="w-100" alt="">
    </div>
  </div>
</div>
@endsection
