@extends('admin.layout');
@section('content')
<div class="right_col" role="main">
   <div class="container">
        <div class="page-title">
		     <div class="title_left">
		        <h3>Danh sách bài viết</h3>
		     </div>
	         <div class="title_right">
	            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
	               <div class="input-group">
	                  <input type="text" class="form-control" placeholder="Search for...">
	                  <span class="input-group-btn">
	                  <button class="btn btn-default" type="button">Go!</button>
	                  </span>
	               </div>
	            </div>
	         </div>
      	</div>
      	{{-- Div to show the new posts --}}
		<div class="clearfix"> 
            <div class="row">
              	<div class="x_content">
	                <p class="text-muted font-13 m-b-30">
	                  <b>
	                     Số bài viết có {{$posts->count()}}
	                  </b>
	                </p>
	                <table id="datatable-fixed-header" class="table table-striped table-bordered">
	                  <thead>
	                    <tr>
	                     
	                      <th>Tiêu đề</th>
	                      <th>Bài viết</th>
	                      <th>Người đăng</th>
	                      <th>Create</th>
	                      <th>Update</th>
	                      <th>Chức năng</th>
	                      
	                    </tr>
	                  </thead>
	                    <tbody>
	                        @foreach($posts as $post)
	                          
	                          <tr id="{{$post->id}}">
	                            
	                            <td>{{$post->title->name}}</td>
	                            <td>{{$post->name}}</td>
	                            <td>{{$post->user->name}}</td>
	                            <td>{{$post->created_at}}</td>
	                            <td>{{$post->updated_at}}</td>
	                            <td><button class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-{{$post->id}}').submit();">Xóa</button>
	                              <form id="delete-{{$post->id}}" action='{{url("post/$post->id")}}' method="POST">
	                                 @method('DELETE ')
	                                @csrf
	                              </form>
	                            </td>
	                          </tr>

	                       	 @endforeach
	                  	</tbody>
	                </table>
              	</div>
            </div>
      	</div>
   </div>
</div>
@endsection