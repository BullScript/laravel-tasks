<?php
namespace App\Models\Tasks;

use App\Models\BaseModel;

class Task extends BaseModel
{
    use TaskRelationship, TaskRepository;

    /**
     * Define model attributes
     *
     * @return array
     */
    public static function defineModel()
    {
        return [
            'parent_id'
        ];
    }

    public static function saveTask($objRequest, $intId = 0) {

        $objTask = self::find($intId) ?? new self();

        $objTask->name = $objRequest->name;
        $objTask->description = $objRequest->description;
        $objTask->sprint_id = $objRequest->sprint_id;
        $objTask->parent_task_id = $objRequest->parent_task_id;
        $objTask->task_type_id = $objRequest->task_type_id;
        $objTask->task_status_type_id = $objRequest->task_status_type_id;
        $objTask->task_priority_type_id = $objRequest->task_priority_type_id;
        $objTask->assignee_id = $objRequest->assignee_id;
        $objTask->developer_id = $objRequest->developer_id;
        $objTask->qa_id = $objRequest->qa_id;
        $objTask->story_points = (int) $objRequest->story_points;
        $objTask->estimated_time = ($objRequest->estimated_time) ? $objRequest->estimated_time : 0;
        $objTask->spend_time = ($objRequest->spend_time) ? $objRequest->spend_time : 0;

        $objTask->save();

        if ($objTask->save() && is_array($objRequest->watchers)) {

            $arrIntUserIds = [];

            foreach($objRequest->watchers as $intKey => $intUserId) {
                $arrIntUserIds[$intUserId] = ['client_id' => auth()->user()->client_id];
            }

            $objTask->assigneeIdUsers()->sync($arrIntUserIds);
        }

        return $objTask;
    }
}
