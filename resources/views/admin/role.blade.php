
@extends('admin.layout')
@section('content')
<div class="right_col" role="main">
   <div class="container">
         <div class="x_panel">
                  <table class="table">
                      <tr>
                        <th>Thứ tự </th>
                        <th>Tên</th>
                        <th>Nhiệm Vụ</th>
                        <th>Chức năng</th>
                        <th>Quyền Hạn</th>
                      </tr> 
                      <tbody>
                        <?php $i=1; ?>
                        @foreach($roles as $role )
                          <tr>
                            <td>{{$i++}}</td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->display_name}}</td>
                            <td>{{$role->description}}</td>
                            <td>
                              <form action="{{url('role/permission')}}" method="post">
                                @csrf
                                <input type="text" name="role_name" value="{{$role->name}}" class="hidden">
                                  <select name="permission">
                                    @foreach($permissions as $permission)
                                      <option value="{{$permission->name}}">{{$permission->display_name}}</option>
                                    @endforeach
                                  </select>
                                  <input type="submit" name="" value="Thêm Quyền">
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
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
                      </tr> 
                      <tbody>
                         @foreach($permissions as $permission)
                          <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->display_name}}</td>
                            <td>{{$permission->description}}</td>
                          </tr>
                         @endforeach 
                      </tbody>
                  </table>
          </div>
   </div>
</div>
@endsection
