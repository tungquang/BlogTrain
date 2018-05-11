<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Model\Role;
use App\Model\Permission;
use App\Http\Controllers;
use App\Http\Controllers\RoleController;

class UserController extends Controller
{   
    
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attachRole(Request $request)
    {
        $user = User::find($request->user_id);
        $roleChek =  RoleController::getUserId($request->user_id);
        $roleId = Role::where('name',$request->role)->first();
        if($roleChek==null)
        {
            
            $user->roles()->attach($roleId);
             return redirect('/admin');
        }
        else
        {   
            if($roleChek->role_id==$roleId->id)
            {
                return view('errors.errorRole')->with(['user'=>$user]);
            }
            else
            {
                RoleController::deleteRoleUser($request->user_id);
                $user->roles()->attach($roleId);
                return redirect('/admin');
            }
            
        }
        //role attach alias
        
        
    }
    public function getUserRole($user_id)
    {
        return  User::find($user_id)->roles;
    }
    public function attachPermission($role,$permission)
    {
    
           $role = Role::where('name',$role)->first();
           $permissionParam = Permission::where('name',$permission)->first();
           $role->attachPermission($permission);
           return redirect('/admin');
    }
    public function index()
    {
        
        $user = Auth::user();
        $users_list = User::all();
        
        return view('admin.user.list')->with(['user'=>$user,'users_list'=>$users_list,'roles'=>Role::all()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'hello create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'hello store';
        dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.user')->with(['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view('admin.user.user')->with(['user'=>$user]);
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
        echo 'hello update';
        // dd($request->all());
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
}
