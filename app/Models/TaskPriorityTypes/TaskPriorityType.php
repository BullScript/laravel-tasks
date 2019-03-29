<?php
namespace App\Models\TaskPriorityTypes;

use App\Models\BaseModel;
use Illuminate\Support\Facades\DB;

class TaskPriorityType extends BaseModel
{
    public static function fetchTaskPriorityTypes()
    {
        return self::withoutGlobalScopes()->get(['id', DB::raw("name AS label")]);
    }
}