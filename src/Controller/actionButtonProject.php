<?php

use App\HydrateProject;
use App\Repository\ProjectRepository;

// insertion d'un customer
if (isset($_POST["projectInsertBtn"])) {
    if (HydrateProject::createProject(array(
        "name" => $_POST["projectName"], 
        "code" => $_POST["projectCode"], 
        "lastpass_folder" => $_POST["projectLastpass"], 
        "link_mock_ups" => $_POST["projectMockupLink"], 
        "manage_server" => 1, 
        "notes" => $_POST["projectNotes"],
        "host_id" => 1,  
        "customer_id" => 1)))
    {
        $project = HydrateProject::getProject();
        $valid = ProjectRepository::insertProject($co, array(
            "name" => $project->getName(),                                           
            "code" => "code_" . $project->getCode(),                          
            "lastpass_folder" => $project->getLastpassFolder(), 
            "link_mock_ups" => $project->getLinkMockUps(), 
            "manage_server" => $project->getManageServer(), 
            "host_id" => $project->getHost(), 
            "notes" => $project->getNotes(), 
            "customer_id" => $project->getCustomer()));
        echo $valid;
    } else {
        $errorInput = "La saisie n'est pas bonne !";
        echo $errorInput;
    }
}

// update d'un customer
if(isset($_POST["projectUpdateBtn"]))
{
    if (HydrateProject::createProject(array(
        "name" => $_POST["projectName"], 
        "code" => $_POST["projectCode"], 
        "lastpass_folder" => $_POST["projectLastpass"], 
        "link_mock_ups" => $_POST["projectMockupLink"], 
        "manage_server" => $_POST["manage_server"], 
        "notes" => $_POST["projectNotes"],
        "host_id" => $_POST["projectHost"],  
        "customer_id" => $_POST["projectCustomer"]))) 
    {
        $project = HydrateProject::getProject();
        $valid = ProjectRepository::updateProject($co, array(
            "name" => $project->getName(),                                           
            "code" => "code_" . $project->getCode(),                          
            "lastpass_folder" => $project->getLastpassFolder(), 
            "link_mock_ups" => $project->getLinkMockUps(), 
            "manage_server" => $project->getManageServer(), 
            "host_id" => $project->getHost(), 
            "notes" => $project->getNotes(), 
            "customer_id" => $project->getCustomer()));
        echo $valid;
    } else {
        $errorInput = "La saisie n'est pas bonne !";
        echo $errorInput;
    }
}

// suppression d'un customer
if(isset($_POST["projectDeleteBtn"]))
{
    $valid = ProjectRepository::deleteProject($co, array("code" => $_POST["codeNewProject"]));
    echo $valid;
}
