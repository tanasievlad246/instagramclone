@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row pl-5">
       <div class="col-3 p-5">
           <img class="rounded-circle img-thumbnail" src="{{$user->profile->profileImage()}}" alt="">
       </div>
       <div class="col-9">
           <div class="pt-5 d-flex justify-content-between align-items-baseline">
               <div class="d-flex align-items-center pb-3">
                   <div class="h4">{{ $user->username }}</div>
                   @cannot('update', $user->profile)
                   <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                   @endcannot
               </div>
               @can('update', $user->profile)
                   <a href="/p/create">Add new post</a>
               @endif
           </div>
           @can ('update', $user->profile)
               <a href="/profile/{{$user->id}}/edit">Edit profile</a>
           @endcan
           <div class="d-flex">
               <div class="pr-2"><strong>{{$user->posts->count()}}</strong> posts</div>
               <div class="pr-2"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
               <div class="pr-2"><strong>{{$user->following->count()}}</strong> following</div>
           </div>
           <div class="font-weight-bolder">{{ $user->profile->title }}</div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#">{{$user->profile->url}}</a></div>
       </div>
   </div>
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{$post->id}}"><img class="img-thumbnail" src="/storage/{{ $post->image }}" style="" alt=""></a>
            </div>
        @endforeach
    </div>
</div>
@endsection
