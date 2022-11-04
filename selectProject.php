<?php
header('Content-Type: application/json; charset=utf-8');
require "./src/autoloader.php";
require "./Connexion/ConnexionBdd.php";

use App\HydrateProject;
use App\Repository\ProjectRepository;


$co = ConnexionBdd::Connexion();
$allProject = ProjectRepository::selectProject($co);
$listProject = array();
echo json_encode(getAllProject($allProject));
function getAllProject(array $allProject): array
{
    foreach ($allProject as $createProject){
        HydrateProject::createProject(array("name"=>$createProject["name"], "code" => $createProject["code"], "lastpass_folder" =>$createProject["lastpass_folder"], "link_mock_ups"=>$createProject["link_mock_ups"], "manage_server" => $createProject["manage_server"], "notes" => $createProject["notes"],"host_id" => $createProject["host_id"], "customer_id" => $createProject["customer_id"]));
        $listProject[] = (object) [
            "name" => HydrateProject::getProject()->getName(),
            "code" => HydrateProject::getProject()->getCode(),
            "lastpass_folder" => HydrateProject::getProject()->getLastpassFolder(),
            "link_mock_ups" => HydrateProject::getProject()->getLinkMockUps(),
            "manage_server" => HydrateProject::getProject()->getManageServer(),
            "notes" => HydrateProject::getProject()->getNotes(),
            "host_id" => HydrateProject::getProject()->getHost(),
            "customer_id" => HydrateProject::getProject()->getCustomer(),
        ];
    }
    return $listProject;
}