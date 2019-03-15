<?php
namespace App\Models;

use App\Scopes\ClientScope;
use Illuminate\Database\Eloquent\Model;
use App\Observers\BaseModelObserve;

class BaseModel extends Model
{

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot($objModel)
    {
        parent::boot();

        /** Added client id filter for every query. */
        static::addGlobalScope(new ClientScope());

        /** Call on save method */
        self::observe($objModel);
    }

    /**
     * This function is used in extended models, So it need to define here also.
     */
    public static function defineModel()
    {}

    /**
     * To get the extra data values
     *
     * @return mixed Always json_decode settings so they are usable
     */
    public function getExtraDataAttribute()
    {
        return (isset($this->attributes['extra_data'])) ? json_decode($this->attributes['extra_data'], true) : [];
    }

    /**
     * Get defined fields for model
     *
     * @return bool return false OR defined fields
     */
    public static function getDefinedFields()
    {
        return isset(static::defineModel()['defined_fields']) ? static::defineModel()['defined_fields'] : [];
    }
}