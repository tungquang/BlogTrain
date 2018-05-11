@extends('layout')
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h4 class="">
                  {{$post->name}}
                </h4>
                <p class="" >
                  <b>{!!$post->description!!}</b>
                </p>
              <div class="">{!!$post->content!!}</div>
              <p class="post-meta">Người đăng : 
                <a href="#">{{$post->user->name}}</a>
                  {{$post->created_at}}</p>
            </div>
            <hr>
         
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
@endsection