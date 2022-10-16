<?php
namespace App;
use App\Entity\Customer;
use App\VerificationForm;
class HydrateCustomer
{

    private static Customer $validCustomer;
    public static function createCustomer(array $array): bool
    {

        //vérifier si l'objet peut etre null sinon modifier le constructeur
        foreach($array as $valueInput)
        {
            // si pas valide alors return le champ qui n'est pas bon 
            $test = VerificationForm::checkInput($valueInput);
            if($test != $valueInput)
            {
                return FALSE;
            }
            else
            {
                $check = TRUE;
            }
        }
        if($check)
        {
            HydrateCustomer::$validCustomer = new Customer($array["Name"], $array["Code"], $array["Notes"]);
            return TRUE;
        }
    }
    public static function getAttributes()
    {
        $customer = HydrateCustomer::$validCustomer;
        return array($customer->getName(), $customer->getCode(), $customer->getNotes());
    }
}