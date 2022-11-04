<?php
namespace App;
use App\Entity\Host;
use App\VerificationForm;
class HydrateHost
{

    public static Host $validHost;
    public static function createHost(array $array): bool
    {

        //vérifier si l'objet peut etre null sinon modifier le constructeur
        foreach($array as $valueInput)
        {
            // si pas valide alors return le champ qui n'est pas bon 
            $test = VerificationForm::checkInput($valueInput);
            if(!$test)
            {
                return false;
            }
            else
            {
                $check = true;
            }
        }

        if($check)
        {
            HydrateHost::$validHost = new Host($array["code"], $array["name"], $array["notes"]);
            return true;
        }
        else
        {
            echo "La saisie n'est pas bonne";
        }
    }
    public static function getAttributes(): void
    {
        echo self::$validHost->getName();
    }

    public static function getHost()
    {
        return self::$validHost;
    }
}