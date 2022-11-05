<?php

namespace App\Repository;

use FFI\Exception;
use PDO;

class ProjectRepository
{
    // fonction pour la récupération des customers
    public static function selectProject(PDO $co): array
    {
        try {
            $reqSelect = $co->prepare("SELECT * FROM project");
            $reqSelect->execute();
            return $reqSelect->fetchAll();
        } catch(Exception $e) {
            echo $e;
        }
    }
    // fonction pour l'insertion d'un Project
    public static function insertProject(PDO $co, array $postData): string
    {
        try {
            $reqInsert = $co->prepare("INSERT INTO 
                                        project(name, code, lastpass_folder, link_mock_ups,
                                        manage_server, notes, host_id, customer_id, ) 
                                        VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
            $reqInsert->execute(array($postData["name"], $postData["code"],
                                        $postData["lastpass_folder"], $postData["link_mock_ups"],
                                        $postData["manage_server"], $postData["notes"],
                                        $postData["host_id"], $postData["customer_id"]));
            return "Insertion réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
    // fonction pour la modification d'un Project
    public static function updateProject(PDO $co, array $postData): string
    {
        try {
            $reqUpdate = $co->prepare("UPDATE project SET 
                                        name = ?, code = ?,
                                        lastpass_folder = ?, link_mock_ups = ?,
                                        manage_server = ?, notes = ?,
                                        host_id = ?, customer_id = ?, 
                                        WHERE id = ?");
            $reqUpdate->execute(array($postData["name"], $postData["code"],
                                        $postData["lastpass_folder"], $postData["link_mock_ups"],
                                        $postData["manage_server"], $postData["notes"],
                                        $postData["host_id"], $postData["customer_id"]));
            return "Modification réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
    // fonction pour la suppression d'un Project
    public static function deleteProject(PDO $co, array $postData): string
    {
        try {
            $reqUpdate = $co->prepare("DELETE FROM project WHERE code = ?");
            $reqUpdate->execute(array($postData["code"]));
            return "Modification réussie";
        } catch(Exception $e) {
            return $e;
        }
    }
}
