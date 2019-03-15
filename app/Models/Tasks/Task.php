<?php
namespace App\Models\Tasks;

use App\Models\BaseModel;

class Task extends BaseModel
{
    use TaskRelationship, TaskRepository;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot(new self());
    }

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
}
