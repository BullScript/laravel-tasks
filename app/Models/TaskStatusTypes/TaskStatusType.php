<?php
namespace App\Models\TaskStatusTypes;

use App\Models\BaseModel;
use Illuminate\Support\Facades\DB;

class TaskStatusType extends BaseModel
{
    public static function fetchTaskStatusTypes()
    {
        return self::withoutGlobalScopes()->get(['id', DB::raw("name AS label")]);
    }
}
