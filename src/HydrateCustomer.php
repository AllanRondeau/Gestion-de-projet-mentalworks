<?php
namespace App;
use App\Entity\Customer;
use App\VerificationForm;
class HydrateCustomer
{

    static protected Customer $validCustomer;
    public static function createCustomer(Customer $customer, array $array): bool
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
            if($customer != null)
            {
                $customer->setName($array["name"]);
                $customer->setNotes($array["note"]);
                return true;
            }
            HydrateCustomer::$validCustomer = new Customer($array["code"], $array["name"], $array["note"]);
            return true;
        }
        else
        {
            echo "La saisie n'est pas bonne";
        }
    }
    public static function getAttributes(): void
    {
        echo self::$validCustomer->getName();
    }

    public static function getCustomer(): Customer
    {
        return self::$validCustomer;
    }
}