<?php

namespace App\Models\Tasks;

trait TaskRepository {

    public function fetchPaginateTasks($request)
    {
        return Task::paginate(10);
    }
}
