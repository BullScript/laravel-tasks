<?php
namespace App\Observers;

use App\Models\BaseModel;

class BaseModelObserve
{

    /**
     * Listen to the saving event.(called both for creating and updating)
     *
     * @param
     *            $objBaseModel
     *
     * @return void
     */
    public function saving(BaseModel $objBaseModel)
    {
        // get defined fields for model and interchange key and value so that compare 2 array using key
        $arrStrDefinedFields = array_flip($objBaseModel->getDefinedFields());

        // get combined which are available in request and defined field
        $arrMixDefinedExtraFields = array_intersect_key(request()->all(), $arrStrDefinedFields);

        // get previously stored data
        $arrMixExtraData = $objBaseModel->extra_data;

        if (is_array($arrMixExtraData)) {
            // merge new data and old data
            $objBaseModel->extra_data = array_merge($arrMixExtraData, $arrMixDefinedExtraFields);
        } else {
            $objBaseModel->extra_data = $arrMixDefinedExtraFields;
        }
    }
}
