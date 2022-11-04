<?php
namespace App;
use App\Entity\Project;
use App\VerificationForm;
class HydrateProject
{

    public static Project $validProject;
    public static function createProject(array $array): bool
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
            HydrateProject::$validProject = new Project($array["name"], $array["code"], $array["lastpass_folder"], $array["link_mocks_up"], 
            $array["manage_server"], $array["notes"], $array["host_id"], $array["customer_id"]);

            return true;
        }
        else
        {
            echo "La saisie n'est pas bonne";
        }
    }
    public static function getAttributes(): void
    {
        echo self::$validProject->getName();
    }

    public static function getProject()
    {
        return self::$validProject;
    }
}