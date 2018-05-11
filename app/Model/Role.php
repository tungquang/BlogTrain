<?php

namespace App\Model;

use Zizaco\Entrust\EntrustRole;
use App\Model\PermissionRole;
use App\Model\Permission;
use Illuminate\Support\Facades\DB;
use App\Model\RoleUser;


class Role extends EntrustRole
{
    protected $table = 'roles';
    /*
    	The Method is use to get permission 
    	@return app/Http/Controllers/RoleController
     */
    public function perm()
    {
    	return $this->hasMany('App\Model\PermissionRole','id','role_id');
    }
    
    
}
