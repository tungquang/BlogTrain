<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Role;
use App\Model\RoleUser;
use App\Model\PermissionRole;
use App\Model\Permission;
use App\Http\Controllers\PermissionController;


class RoleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('admin.role')->with(['roles'=>Role::all(),'user'=>Auth::user(),'permissions'=>Permission::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($user_id);
        //role attach alias
        $roleId = Role::where('name',$role_name)->first();
        // $user->attachRole($user);//parameter can be Role Object , array, or id 
        // // or eloquent's original technique
        $user->roles()->attach($roleId);
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*
        The method is use to add Permission with Role 
            
     */
    public function attachPermission(Request $request)
    {       $flag = 0;

            $role = Role::where('name',$request->role_name)->first();
            $permission = Permission::where('name',$request->permission)->first();
            $per = new PermissionController ;
            $arr = $per->getPermissionRole($role->id);
            $count = $arr->count()-1;
            
           while ($count>-1 && $flag == 0) {
                
                if($arr[$count]->permission_id == $permission->id)
                    {
                        $flag = 1;   
                    }
                    $count--;  
           }
            if($flag==1)
            {
                return view('errors.errorRole')->with(['user'=>Auth::user()]);
            }
            else 
            {
                 $role->attachPermission($permission);
                 return redirect('/role');
            }
            
           
    }
    static public function getUserId($user_id)
    {
        return RoleUser::where('user_id',$user_id)->first();
    }
    static function deleteRoleUser($user_id)
    {
        return RoleUser::where('user_id',$user_id)->delete();
    }
}
