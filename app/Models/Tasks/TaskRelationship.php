<?php

namespace App\Models\Tasks;

use App\Models\Users\User;
use App\Models\TaskNotes\TaskNote;
use App\Models\TaskWatchers\TaskWatcher;

trait TaskRelationship {

    public function taskWatchers()
    {
        return $this->hasMany(TaskWatcher::class);
    }

    public function assigneeIdUsers()
    {
        return $this->belongsToMany(User::class, 'task_watchers', 'task_id', 'assignee_id');
    }

    public function taskNotes()
    {
        return $this->hasMany(TaskNote::class)->orderBy('id', 'desc');
    }
}