<?php
namespace App\Models\Projects;

use App\Models\BaseModel;

class Project extends BaseModel
{
    use ProjectRelationship, ProjectRepository;

    /**
     * typecast
     * @var array
     */
    protected $casts = ['extra_data' => 'array'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }

    /**
     * Define model attributes
     *
     * @return array
     */
    public static function defineModel()
    {
        return [
            'defined_fields' => [
                'client_id'
            ]
        ];
    }
}
