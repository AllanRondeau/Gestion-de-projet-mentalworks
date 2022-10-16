<?php

namespace App;

class VerificationForm
{
    public static function checkInput($input): bool
    {
        if(!empty($input))
        {
            $input = htmlspecialchars($input);
            $input = trim($input);
            $input = stripcslashes($input);
            return true;
        }
        else{return false;}
        
    }
}