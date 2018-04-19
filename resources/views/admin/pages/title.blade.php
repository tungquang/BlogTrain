@extends('admin.layout')
@section('content')
	<div class="right_col" role="main">
      <div class="container">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
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
            <div class="clearfix">
               <div class="row">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Thêm Tiêu Đề <small>different form elements</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix">
                         <div class="x_content">
                         <br />
                          <form class="form-horizontal form-label-left input_mask" method="post" action="{{route('addTitle')}}">    @csrf
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Tiêu Đề</label>
                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" placeholder="Tên tiêu đề" name="name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Viết Gọn : </label>
                              <div class="col-md-4 col-sm-9 col-xs-12">
                                <input type="text" class="form-control"  placeholder="Ví dụ : lap-trinh-can-ban" name="sorttitle">
                              </div>
                           
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                 
                </div>
                <div class="row">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Fixed Header Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <b>
                         Số tiêu đề đã tạo là {{$titles->count()}}
                      </b>
                    </p>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         
                          <th>Tên Title</th>
                          <th>Tên Tắt</th>
                          <th>Tạo</th>
                          <th>Cập Nhật</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($titles as $title)
                          
                          <tr>
                            
                            <td>{{$title->name}}</td>
                            <td>{{$title->sorttitle}}</td>
                            <td>{{$title->created_at}}</td>
                            <td>{{$title->updated_at}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                    </div>
                   
                  </div>
                 
                </div>
            </div>
          

           
        </div>
      </div>
@endsection