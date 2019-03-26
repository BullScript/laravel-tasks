<?php

namespace App\Models\Projects;

use App\Models\ProjectTeammates\ProjectTeammate;
use App\Models\Users\User;

trait ProjectRelationship {

    public function projectTeammates()
    {
        return $this->hasMany(ProjectTeammate::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_teammates', 'project_id', 'assignee_id');
    }
}