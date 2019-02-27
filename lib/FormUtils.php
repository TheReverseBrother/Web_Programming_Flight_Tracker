<?php
class FormUtils
{
    public static function validateSTRING($strVAL)
    {
        if (isset($strVAL))
        {
            $val = filter_var($strVAL, FILTER_SANITIZE_STRING);
            $val = trim($val);
            return $val;
        }
        else
        {
            return null;
        }
    }

    public static function validateINT($intVAL)
    {
        if (isset($intVAL))
        {
            $intVAL = trim($intVAL);
            $intVAL = filter_var($intVAL, FILTER_SANITIZE_NUMBER_INT);

            return $intVAL;
        }
        else
        {
            return NULL;
        }
    }

    public static function validateFlight($flightVAL)
    {

    }
}
?>