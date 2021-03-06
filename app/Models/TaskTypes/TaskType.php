<?php
namespace App\Models\TaskTypes;

use App\Models\BaseModel;
use Illuminate\Support\Facades\DB;

class TaskType extends BaseModel
{
    public static function fetchTaskTypes()
    {
        return self::withoutGlobalScopes()->get(['id', DB::raw("name AS label")]);
    }
}