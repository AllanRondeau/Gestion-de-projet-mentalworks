<?php
namespace App;
use App\Entity\Customer;
class HydrateCustomer
{

    public static function createCustomer(array $array): void
    {
        $newCustomer = new Customer();
        //vérifier si l'objet peut etre null sinon modifier le constructeur
        $newCustomer->setName(verifyInput($array["Name"]));
        $newCustomer->setCode(verifyInput($array["Code"]));
        $newCustomer->setNotes(verifyInput($array["Notes"]));

        function verifyInput(string $input): string
        {
            $input = htmlspecialchars($input);
            $input = trim($input);
            $input = stripcslashes($input);
            return $input;

        }
    }
}