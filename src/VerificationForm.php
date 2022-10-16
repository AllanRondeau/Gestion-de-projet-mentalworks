<?php

namespace App;

class VerificationForm
{
    public static function checkInput($input): string
    {
        if(!empty($input))
        {
            $input = htmlspecialchars($input);
            $input = trim($input);
            $input = stripcslashes($input);
            return $input;
        }
        else{return "".$input. "n'est pas une valeur valide";}
        
    }
}