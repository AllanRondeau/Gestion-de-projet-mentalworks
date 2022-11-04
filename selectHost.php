<?php
header('Content-Type: application/json; charset=utf-8');
require "./src/autoloader.php";
require "./Connexion/ConnexionBdd.php";

use App\HydrateHost;
use App\Repository\HostRepository;

$co = ConnexionBdd::Connexion();
$allHost = HostRepository::selectHost($co);
$listHost = array();

echo json_encode(getAllHost($allHost));

function getAllHost(array $allHost): array
{
    foreach ($allHost as $createHost){
        HydrateHost::createHost(array("code"=>$createHost["code"], "name" => $createHost["name"], "notes" => $createHost["notes"]));
        $listHost[] = (object)[
            "name" => HydrateHost::getHost()->getName(),
            "code" => HydrateHost::getHost()->getCode(),
            "notes" => HydrateHost::getHost()->getNotes(),
        ];
    }
    return $listHost;
}