<?php
namespace App;
use App\Entity\Customer;
class HydrateCustomer
{

    public static function createCustomer(array $array): void
    {
        $newCustomer = new Customer();
        //vérifier si l'objet peut etre null sinon modifier le constructeur
        $newCustomer->setName($array["Name"]);
        $newCustomer->setCode($array["Code"]);
        $newCustomer->setNotes($array["Notes"]);
    }
}