<?php

namespace App\Models\Users;

trait UserRelationship {

    public function fetchPaginateUsers($request)
    {
        return User::paginate()->all();
    }
}