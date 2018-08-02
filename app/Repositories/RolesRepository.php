<?php

namespace  Corp\Repositories;

use Corp\Role;
use Corp\Permission;

class RolesRepository extends Repository {

    public function __construct(Role $role)
    {
        $this->model = $role;
    }
}