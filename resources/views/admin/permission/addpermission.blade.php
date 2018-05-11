
@extends('admin.layout')
@section('content')
<div class="right_col" role="main">
   <div class="container">
      <div class="clearfix">
        <div class="x_content">
              <br />
               <form class="form-horizontal form-label-left input_mask" method="post" action="{{url('/permission')}}">   
                               @csrf
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên viết không dấu</label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Tên tiêu đề
                                    " name="name" placeholder="create-user" value="<?php 
                      
                                          if(isset($_GET['usedpermission']))
                                          {
                                            echo $_GET['usedpermission'];
                                          }
                                        ?>"   
                                    >
                                    <span style="color: red; font-size: 15px;">
                                      <?php 
                      
                                          if(isset($_GET['usedpermission']))
                                          {
                                            if(!empty($_GET['usedpermission']))
                                            {
                                              echo 'Quyền đã đã tồn tại !';
                                            }
                                          }
                                        ?>
                                    </span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên quyền:</label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control"  placeholder="Ví dụ : Dùng để thêm người dùng " name="display_name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Miêu tả : </label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control"  placeholder="Ví dụ : Dùng để thêm người dùng " name="description">
                                  </div>
                               
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                       <button type="submit" class="btn btn-success" id="create">Tạo</button>
                                     </div>
                                </div>
                </form>
                 

                
        </div>
       </div>
   </div>
   <div class="container">
         <div class="x_panel">
                  <table class="table">
                    <caption>Danh sách quyền</caption>
                      <tr>
                        <th>ID </th>
                        <th>Tên</th>
                        <th>Nhiệm Vụ</th>
                        <th>Action</th>
                      </tr> 
                      <tbody>
                         @foreach($permissions as $permission)
                          <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->description}}</td>
                            <td><button class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-{{$permission->id}}').submit();">Xóa</button>
                                <form id="delete-{{$permission->id}}" action='{{url("permission/$permission->id")}}' method="POST">
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

@endsection
