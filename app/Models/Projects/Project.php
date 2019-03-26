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

    public static function saveProject($objRequest, $intId = 0) {

        $objProject = self::firstOrCreate(['id' => $intId]);

        $objProject->name = $objRequest->name;
        $objProject->key = $objRequest->key;
        $objProject->url = $objRequest->url;
        $objProject->lead_id = $objRequest->lead_id;

        if ($objProject->save()) {

            $arrIntUserIds = [];

            foreach($objRequest->teammates as $intKey => $intUserId) {
                $arrIntUserIds[$intUserId] = ['client_id' => auth()->user()->client_id];
            }

            $objProject->users()->sync($arrIntUserIds);
        }

        return true;
    }
}
