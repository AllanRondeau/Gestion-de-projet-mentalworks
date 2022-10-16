<?php
namespace App\Form;
use FFI\Exception;
use PDO;
class CustomerType
{
    public static function insertCustomer(PDO $co, array $postData): string
    {
        try
        {
            $reqInsert = $co->prepare("INSERT INTO customer(code, name, note) VALUES(?, ?, ?)");
            $reqInsert->execute(array(700, $postData["name"], $postData["note"]));
            return "Insertion réussie";
        }
        catch(Exception $e)
        {
            return $e;
        }
    }
}