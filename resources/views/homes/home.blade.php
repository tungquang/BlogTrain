@extends('layout')
@section('content')
 
  <div class="col-lg-12">      
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
            <div class="post-preview">
              <a href="{{url("post/$post->id")}}">
                <p class="post-title">
                  {{$post->name}}
                </p>
                <h5 class="post-subtitle fix" >
                  {!!$post->description!!}
                </h5>
                <i>{{$post->title->name}}</i>

              </a>
              <p class="post-meta">
                Người đăng : 
                <a href="#">{{$post->user->name}}</a>
                  {{$post->created_at}}
              </p>
            </div>
            <hr>
          @endforeach

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
  </div>
  

@endsection