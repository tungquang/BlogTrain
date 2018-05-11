
@extends('admin.layout')
@section('content')
<div class="right_col" role="main">
   <div class="container">
         <div class="x_panel">
                  <div class="x_title">
                    <h2>Thông tin cá nhân </h2>
                  <div class="clearfix"></div>
                  </div>
                  <div class="container">
                  	<div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="{{url('/user/'.$user->id)}}">
                       @method('PATCH')
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name" value="{{$user->name}}" name="name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" value="{{$user->role}}" name="role">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" value="{{$user->email}}" name="email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone" value="{{$user->phone}}">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label for="date">Ngày Sinh :</label>
                        <input type="date" name="date" id="date">
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3"> 
                          <button type="submit" class="btn btn-success">Cập nhật</button>
                        </div>
                      </div>

                    </form>
                  </div>
                  </div>
                </div>
   </div>
</div>
@endsection
