<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public static function saveProfile($objRequest, $intId = 0) {

        $objProject = self::find($intId) ?? new self();

        $objProject->name = $objRequest->name;
        $objProject->key = $objRequest->key;
        $objProject->url = $objRequest->url;
        $objProject->lead_id = $objRequest->lead_id;

        if ($objProject->save() && is_array($objRequest->teammates)) {

            $arrIntUserIds = [];

            foreach($objRequest->teammates as $intKey => $intUserId) {
                $arrIntUserIds[$intUserId] = ['client_id' => auth()->user()->client_id];
            }

            $objProject->assigneeIdUsers()->sync($arrIntUserIds);
        }

        return $objProject;
    }
}
