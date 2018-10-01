<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 10:29 AM
 */

namespace App\Services\Impl;

use App\Services\RoleService;
use App\Repositories\RoleRepo;
use App\Entities\Role;
class RoleServiceImpl implements RoleService
{
    private $roleRepo;
    public function __construct(RoleRepo $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }
    public function getAllActiveRoles()
    {
        return $this->roleRepo->getAllActiveRoles();
    }
    public function getAllRoles()
    {
        return $this->roleRepo->getAllRoles();
    }
    public function getRoleById($id)
    {
        return $this->roleRepo->getRoleById($id);
    }
    public function saveRole($data)
    {
        $role = new Role();
        $role->setRole($data->get('role'));
        $permission = $data->get('permission');
        $permissions = $this->allowPostAuthorization($permission);
        $role->setPermissions(json_encode($permissions,JSON_FORCE_OBJECT));
        $role->setIsActive(1);
        $role->setDeleted(0);
        $role->setCreatedAt(new \DateTime(now()));
        return $this->roleRepo->saveRole($role);
    }
    public function updateRole($data, $id)
    {
        $role = $this->roleRepo->getRoleById($id);
        $role->setRole($data->get('role'));
        $permission = $data->get('permission');
        $permissions = $this->allowPostAuthorization($permission);
        $role->setPermissions(json_encode($permissions,JSON_FORCE_OBJECT));
        $role->setIsActive($data->get('active'));
        $role->setDeleted(0);
        $role->setCreatedAt(new \DateTime(now()));
        return $this->roleRepo->updateRole($role,$id);
    }

      public function allowPostAuthorization($permission){
        foreach ($permission as $per){
            $method=substr($per,strpos($per,".")+1);
            $page = substr($per,0,strpos($per,"."));
            $method=='create'?$permission[]=$page.'.store':'';// check if page have create permission then allow for save data
            $method=='edit'?$permission[]=$page.'.update':'';// same as for edit
        }
        return $permission;
    }

}