
@extends('admin.layout')
@section('content')
  <div class="right_col" role="main">
     <div class="container">
           <div class="x_panel">
                    <table class="table">
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Email</th>
                          <th>Chức Năng</th>
                          @if($user->can('role-user'))
                            <th>Quyền</th>
                          @endif

                        </tr> 
                        <tbody>
                          @foreach($users_list as $ls)
                            <tr>
                              <td>{{$ls->id}}</td>
                              <td>{{$ls->name}}</td>
                              <td>{{$ls->email}}</td>
                              <td>{{ $ls->roles->first()['name']}}</td>
                              @if($user->can('role-user'))
                              <td>
                                <form method="post" action="{{route('add_role')}}">
                                  @csrf
                                  <input type="text" name="user_id" value="{{$ls->id}}" class="hidden">
                                  @if(!$ls->hasRole('admin'))
                                    <select name="role">
                                      @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->display_name}}</option>
                                      @endforeach
                                    </select>
                                    <input type="submit" name="" value="Đặt Quyền">
                                  @else
                                    {{__('Admin')}}
                                  
                                  @endif
                                </form>
                              </td>
                              @endif
                              
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
            </div>
     </div>
  </div>
@endsection
