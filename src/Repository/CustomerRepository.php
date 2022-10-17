<?php
namespace App\Repository;
use FFI\Exception;
use PDO;
class CustomerType
{
    public static function selectCustomer(PDO $co): array
    {
        try
        {
            $reqSelect = $co->prepare("SELECT * FROM customer");
            $reqSelect->execute();
            return $reqSelect->fetchAll();
            
        }
        catch(Exception $e)
        {
            echo "test";
        }
    }
    public static function insertCustomer(PDO $co, array $postData): string
    {
        try
        {
            $reqInsert = $co->prepare("INSERT INTO customer(code, name, note) VALUES(?, ?, ?)");
            $reqInsert->execute(array($postData["code"], $postData["name"], $postData["note"]));
            return "Insertion réussie";
        }
        catch(Exception $e)
        {
            return $e;
        }
    }
    public static function updateCustomer(PDO $co, array $postData): string
    {
        try
        {
            $reqUpdate = $co->prepare("UPDATE customer SET name = ?, note = ?");
            $reqUpdate->execute(array($postData["name"], $postData["note"]));
            return "Modification réussie";
        }
        catch(Exception $e)
        {
            return $e;
        }
    }
}