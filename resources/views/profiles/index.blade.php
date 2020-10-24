@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row pl-5">
       <div class="col-3 p-5">
           <img class="rounded-circle img-thumbnail" src="https://instagram.fcra1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/11296641_412781938928792_2085802707_a.jpg?_nc_ht=instagram.fcra1-1.fna.fbcdn.net&_nc_ohc=KXKPHu19k4cAX9bJPvj&oh=0081c1df42a63424777b429cc0aaf7e6&oe=5FBA92B4" alt="">
       </div>
       <div class="col-9">
           <div class="pt-5 d-flex justify-content-between align-items-baseline">
               <h1>{{ $user->username }}</h1>
               <a href="#">Add new post</a>
           </div>
           <div class="d-flex">
               <div class="pr-2"><strong>153</strong> posts</div>
               <div class="pr-2"><strong>250</strong> followers</div>
               <div class="pr-2"><strong>500</strong> following</div>
           </div>
           <div class="font-weight-bolder">{{ $user->profile->title }}</div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#">{{$user->profile->url}}</a></div>
       </div>
   </div>
    <div class="row">
        <div class="col-4"><img class="w-100" src="https://instagram.fcra1-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/38811863_2127253374158471_1431584115257245696_n.jpg?_nc_ht=instagram.fcra1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=xjl52qFbLBAAX_DiM2t&_nc_tp=15&oh=b88df60da505c03300ed848cc21f53d2&oe=5F950C18" alt=""></div>
        <div class="col-4"><img class="w-100" src="https://instagram.fcra1-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/38811863_2127253374158471_1431584115257245696_n.jpg?_nc_ht=instagram.fcra1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=xjl52qFbLBAAX_DiM2t&_nc_tp=15&oh=b88df60da505c03300ed848cc21f53d2&oe=5F950C18" alt=""></div>
        <div class="col-4"><img class="w-100" src="https://instagram.fcra1-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/38811863_2127253374158471_1431584115257245696_n.jpg?_nc_ht=instagram.fcra1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=xjl52qFbLBAAX_DiM2t&_nc_tp=15&oh=b88df60da505c03300ed848cc21f53d2&oe=5F950C18" alt=""></div>
    </div>
</div>
@endsection
