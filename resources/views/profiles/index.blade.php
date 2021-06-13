@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="/images/4.jpeg" class="rounded-circle" style="height: 150px;"></img>
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{$user->username}}</h1>
        <a href="/p/create">Add New Posts</a>
      </div>
      <a href="/profile/{{$user->id}}/edit">Edit Post</a>
      <div class="d-flex">
        <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
        <div class="pr-5"><strong>41.6k</strong> followers</div>
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
    @foreach($user->posts as $post)
      <div class="col-4 pb-5">
        <a href="/p/{{$post->id}}">
          <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </a>
      </div>

    @endforeach
  </div>
</div>
@endsection
