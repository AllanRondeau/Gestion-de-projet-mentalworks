<?php

namespace App\Repository;

use FFI\Exception;
use PDO;

class CustomerRepository
{
    // fonction pour la récupération des customers
    public static function selectCustomer(PDO $co): array
    {
        try {
            $reqSelect = $co->prepare("SELECT * FROM customer");
            $reqSelect->execute();
            return $reqSelect->fetchAll();
        } catch(Exception $e) {
            echo $e;
        }
    }
    // fonction pour l'insertion d'un customer
    public static function insertCustomer(PDO $co, array $postData): string
    {
        try {
            $reqInsert = $co->prepare("INSERT INTO customer(code, name, note) VALUES(?, ?, ?)");
            $reqInsert->execute(array($postData["code"], $postData["name"], $postData["note"]));
            return "Insertion réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
    // fonction pour la modification d'un customer
    public static function updateCustomer(PDO $co, array $postData): string
    {
        try {
            $reqUpdate = $co->prepare("UPDATE customer SET name = ?, note = ? WHERE id = ?");
            $reqUpdate->execute(array($postData["name"], $postData["note"], $postData["id"]));
            return "Modification réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
    // fonction pour la suppression d'un customer
    public static function deleteCustomer(PDO $co, array $postData): string
    {
        try {
            $reqUpdate = $co->prepare("DELETE FROM customer WHERE id = ?");
            $reqUpdate->execute(array($postData["name"], $postData["note"], $postData["id"]));
            return "Modification réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
}
