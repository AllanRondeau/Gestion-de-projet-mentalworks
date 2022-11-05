<?php

namespace App\Repository;

use FFI\Exception;
use PDO;

class HostRepository
{
    // fonction pour la récupération des host
    public static function selectHost(PDO $co): array
    {
        try {
            $reqSelect = $co->prepare("SELECT * FROM host");
            $reqSelect->execute();
            return $reqSelect->fetchAll();
        } catch(Exception $e) {
            echo $e;
        }
    }
    // fonction pour l'insertion d'un host
    public static function insertHost(PDO $co, array $postData): string
    {
        try {
            $reqInsert = $co->prepare("INSERT INTO host(code, name, notes) VALUES(?, ?, ?)");
            $reqInsert->execute(array($postData["code"], $postData["name"], $postData["note"]));
            return "Insertion réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
    // fonction pour la modification d'un host
    public static function updateHost(PDO $co, array $postData): string
    {
        try {
            $reqUpdate = $co->prepare("UPDATE host SET code = ?, name = ?, note = ? WHERE id = ?");
            $reqUpdate->execute(array($postData["name"], $postData["name"], $postData["notes"], $postData["id"]));
            return "Modification réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
    // fonction pour la suppression d'un host
    public static function deleteHost(PDO $co, array $postData): string
    {
        try {
            $reqUpdate = $co->prepare("DELETE FROM host WHERE id = ?");
            $reqUpdate->execute(array($postData["id"]));
            return "Modification réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
}
