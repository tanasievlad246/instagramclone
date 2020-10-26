@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="/storage/{{$post->user->profile->image}}" class="w-100 rounded-circle pr-3" style="max-width: 50px">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                            <a href="#" class="primary pl-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p><span>{{$post->caption}}</span></p>
            </div>
        </div>
    </div>
@endsection
