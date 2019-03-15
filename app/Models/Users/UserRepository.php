<?php

namespace App\User;

trait UserRepository {

    public static function isSuperAdmin()
    {
        return true;

        $arrMixUserData = $this->extra_data;
        if (false != isset($arrMixUserData['is_admin']) && true == $arrMixUserData['is_admin']) {
            return true;
        }

        return false;
    }

    public static function isClientAdmin()
    {
        return true;

        $arrMixUserData = $this->extra_data;
        if (false != isset($arrMixUserData['is_admin']) && true == $arrMixUserData['is_admin']) {
            return true;
        }

        return false;
    }
}

