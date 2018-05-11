<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Model\Permission;

class PermissionRole extends Model
{
    protected $table ='permission_role';
   
    /*
    	Method is use to get Permisson Detail
    	@return app/Model/Role
     */
    public function getPerm()
    {
    	return $this->hasOne('App\Model\Permission','id','permission_id');
    }
    /*
        @return App/Http/Controllers/PermissionController
     */
    static public function delete_permission_role($id)
    {
        return DB::table('permission_role')->where('permission_id',$id)->delete();
    }
    /*
        @return App/Http/Controllers/PermissionController
     */
    static public function get_permission_id($role_id)
    {
        return DB::table('permission_role')->where('role_id',$role_id);
    }

}
