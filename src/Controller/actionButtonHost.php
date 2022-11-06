<?php

require_once 'vendor/autoload.php';
require_once 'Connexion/ConnexionBdd.php';
use App\HydrateHost;
use App\Repository\HostRepository;
$co = ConnexionBdd::Connexion();

// insertion d'un host
if (isset($_POST["hostInsertBtn"])) {
    if (HydrateHost::createHost(array(
            "name" => $_POST["nameNewHost"], 
            "code" => "code_" . $_POST["nameNewHost"], 
            "note" => $_POST["noteNewHost"]))) {
        $host = HydrateHost::getHost();
        $valid = HostRepository::insertHost($co, array(
            "name" => $host->getName(), 
            "code" => $host->getCode(), 
            "note" => $host->getNotes()));
        echo $valid;
    } else {
        $errorInput = "La saisie n'est pas bonne !";
        echo $errorInput;
    }
}

// update d'un host
if(isset($_POST["hostUpdateBtn"]))
{
    if (HydrateHost::createHost(array(
            "name" => $_POST["nameNewHost"], 
            "code" => $_POST["codeNewHost"], 
            "notes" => $_POST["noteNewHost"]))) 
    {
        $host = HydrateHost::getHost();
        $valid = HostRepository::updateHost($co, array(
            "name" => $host->getName(), 
            "code" => $host->getCode(), 
            "notes" => $host->getNotes()));
        echo $valid;
    } else {
        $errorInput = "La saisie n'est pas bonne !";
        echo $errorInput;
    }
}

// suppression d'un host
if(isset($_POST["hostDeleteBtn"]))
{
    $valid = HostRepository::deleteHost($co, array("code" => $_POST["codeNewHost"]));
    echo $valid;
}
