<?php

namespace App\Model;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';
    protected $fillable = ['name','display_name','description'];
    function checkName($name)
    {
    	return Permission::where('name',$name)->first();
     }

}
