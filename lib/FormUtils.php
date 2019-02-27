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

    public function checkRegex($check)
    {
        $checked = preg_match('/[a-Z]{2}[0-9]{4}/',$check);
        return $checked;
    }

    public function Comparing($flightID, $table)
    {
        foreach ($table as $row)
        {
            if($row['FlightID'] == $flightID)
            {
                return TRUE;
            }
        }
    }
}
?>