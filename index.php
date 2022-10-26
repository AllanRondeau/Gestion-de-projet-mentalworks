<?php
require "./src/autoloader.php";
require "./Connexion/ConnexionBdd.php";

use App\Entity\Host;
use App\Entity\Customer;
use App\Entity\Project;
use App\Entity\Environnement;
use App\Entity\Contact;
use App\HydrateCustomer;
use App\Repository\CustomerRepository;

// création d'une liste pour stocker les utilisateur de la bd
$listCustomer = array();

$conn = new ConnexionBdd("localhost", "gestion_projet", "phpmyadmin", "NewPassword123");
$co = $conn->Connexion();

$host1 = new Host("test", "salut", "upload");
$customer1 = new Customer("sbhdf", "sdbkf", "skjdbf");
$projet1 = new Project("premier projet", "patate", "racine", "sbhdof", 1, "attention", $host1, $customer1);
$environnement = new Environnement("environment1", "http://", "000.000.000", 22, "ssh", "localhost", 232, $projet1);
$contact1 = new Contact("email@gmail.com", "06 36 98 65 74", "admin", $host1, $customer1);

// lors du clic utilisateur pour sauvegarder un client
if(isset($_POST["customerSaveBtn"]))
{
    if($_POST["selectUserObject"] == null)
    {
        if(HydrateCustomer::createCustomer(array("name"=>$_POST["nameNewCustomer"], "code"=>"code".$_POST["nameNewCustomer"], "note"=>$_POST["noteNewCustomer"])))
        {
            $cust = HydrateCustomer::getCustomer();
            $valid = CustomerRepository::insertCustomer($co, array("name"=>$_POST["nameNewCustomer"], "code"=>"code".$_POST["nameNewCustomer"], "note"=>$_POST["noteNewCustomer"]));
            echo $valid;
        }
        else
        {
            $errorInput = "La saisie n'est pas bonne !";
            echo $errorInput;
        }
    }
    else
    {
        if(HydrateCustomer::createCustomer($listCustomer[$_POST["selectUserObject"]], array("name"=>$_POST["nameNewCustomer"], "code"=>"code".$_POST["nameNewCustomer"], "note"=>$_POST["noteNewCustomer"])))
        {
            $cust = HydrateCustomer::getCustomer();
            $valid = CustomerRepository::insertCustomer($co, array("name"=>$_POST["nameNewCustomer"], "code"=>"code".$_POST["nameNewCustomer"], "note"=>$_POST["noteNewCustomer"]));
            echo $valid;
        }
        else
        {
            $errorInput = "La saisie n'est pas bonne !";
            echo $errorInput;
        }
    }
}

// récupération de tout les customer et création d'un objet customer et ajout dans une liste des objets
$allCustomer = CustomerType::selectCustomer($co);
foreach($allCustomer as $createCustomer)
{
    HydrateCustomer::createCustomer(array("code"=>$createCustomer["code"], "name"=>$createCustomer["name"], "note"=>$createCustomer["note"]));
    array_push($listCustomer, HydrateCustomer::getCustomer());
}
?>

<!doctype html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion de projet</title>
    <link href="asset/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
    <img src="asset/images/logo-mentalworks-blanc.png" alt="logo mentalworks">
    </header>
    <main>
    <nav>
        <a id="dashboardNav"><i class="fa-solid fa-house"></i>tableau de bord</a>
        <a id="projectsNav"><i class="fa-regular fa-user"></i>projets</a>
        <a id="customerNav"><i class="fa-regular fa-building"></i>clients</a>
        <a id="hostNav"><i class="fa-regular fa-square-check"></i>hébergeurs</a>
    </nav>
    <div id="mainContent">
        <section id="dashboard"><h1>dashboard</h1></section>
        <section id="projects"></section>
        <section id="customer">
        <header>
            <h3>Client</h3>
        </header>
        <button type="button" id="newCustomerBtn">Nouveau client</button>
        <button type="button" id="updateContactBtn">Modifier le client</button>
        <article>
            <form method="post" id="newCustomerForm" action="">
                <?php
                    echo "<select name='selectUserObject'>";
                        echo "<option>New User</option>";
                    foreach($listCustomer as $key => $customer)
                    {
                        echo "
                            <option value=".$key.">".$customer->getName()."</option>
                        ";
                    }
                    echo "</select>";
                ?>
            <fieldset>
                <label for="nameNewCustomer">Nom</label>
                <input type="text" name="nameNewCustomer">
                <label for="codeNewCustomer">Code interne</label>
                <input type="text" name="codeNewCustomer" placeholder="Champ généré automatiquement" disable>
                <label for="noteNewCustomer">Notes / Remarques</label>
                <input type="text" name="noteNewCustomer">
            </fieldset>
                <button type="submit" name="customerCancelBtn" class="cancelBtn">Annuler</button>
                <button type="submit" name="customerSaveBtn" class="saveBtn">Sauvegarder</button>
            </form>
            <form method="post" id="updateContactForm" action="">
                <fieldset>
                    <label for="nameUpdContact">Nom du contact</label>
                    <input type="text" name="nameUpdContact">
                    <label>Rôle</label>
                    <input type="text" name="roleUpdContact">
                    <label for="emailUpdContact">Email</label>
                    <input type="text" name="emailUpdContact">
                    <label for="telUpdContact">Téléphone</label>
                    <input type="tel" name="telUpdContact">
                </fieldset>
            <button type="submit" name="updCancelBtn" class="cancelBtn">Annuler</button>
            <button type="submit" name="updSaveBtn" class="saveBtn">Sauvegarder</button>
            </form>
        </section>
        <section id="host"></section>
    </div>
    </main>
    <footer></footer>
    </body>
    <script src="asset/script/navbar.js"></script>
    <script src="asset/script/formCustomer.js"></script>
    <script src="asset/script/onload.js"></script>
</html>

