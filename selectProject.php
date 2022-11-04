<?php
header('Content-Type: application/json; charset=utf-8');
require "./src/autoloader.php";
require "./Connexion/ConnexionBdd.php";

use App\Entity\Project;
use App\;
use App\Repository\ProjectRepository;

$co = ConnexionBdd::Connexion();
$allProject = ($co);
$listProject = array();

function getAllProject(array $allProject)