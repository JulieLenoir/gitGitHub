<?php

class Validator
{


    static function control($liste)
    {
        // for ($i = 0; $i < count($liste); $i++) {
        //     if ($liste[$i] == '') {
        //         return false;
        //     }
        // }

        foreach ($liste as $key => $value) {
            if ($value == '') {
                return false;
            }
        }

        foreach ($liste as $key => $value) {
            if ($value != '') {
                return true;
            }
        }
    }
}
