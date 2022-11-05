<?php
require "./src/Controller/actionButtonCustomer.php";
require "./src/Controller/actionButtonHost.php";
require "./src/Controller/actionButtonProject.php";
require 'vendor/autoload.php';
$co = ConnexionBdd::Connexion();
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
    <section id="projects">
      <header>
        <h3>Projets</h3>
      </header>
      <article id="projectList">
        <form>
          <fieldset>
            <div id="projectsLabel">
              <label for="projectNameSearch">Nom</label>
              <label for="projectCustomerSearch">Client</label>
              <label for="projectHostSearch" id="projectHost">Hébergeur</label>
            </div>
            <input type="text" name="projectNameSearch">
            <input type="text" name="projectCustomerSearch">
            <input type="text" name="projectHostSearch">
          </fieldset>
        </form>
        <div id="projectsSorting">
          <h5>Résultats/Page</h5>
          <select>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
          </select>
          <article id="projectListContainer"></article>
          <button type="button"><</button>
          <button type="button">1</button>
          <button type="button">2</button>
          <button type="button">3</button>
          <button type="button">4</button>
          <button type="button"> 5</button>
          <button type="button"> ></button>
          <button type="submit" id="projectsButtonAdd">Ajouter</button>
        </div>
      </article>
      <article class="hook" id="projectForm">
        <button id="backToProjectListBtn"><i class="fa-solid fa-arrow-left"></i>Retour à la liste des projets</button>
        <form method="post">
          <label for="projectName">Nom</label>
          <input name="projectName">
          <label for="projectCode">Code interne</label>
          <input name="projectCode">
          <label for="projectCustomer">Client</label>
          <select name="projectCustomer" id="projectCustomer"></select>
          <label for="projectHost">Hébergeur</label>
          <select name="projectHost" id="projectHost"></select>
          <label for="projectNotes">Notes / remarques</label>
          <input name="projectNotes">
          <label for="projectLastpass">Dossier LastPass</label>
          <input name="projectLastpass">
          <label for="projectMockupLink">Lien Maquettes</label>
          <input name="projectMockupLink">
          <button type="submit" id="ProjectSaveBtn" name="projectInsertBtn" class="saveBtn">Sauvegarder</button>
        </form>
      </article>
    </section>
    <section id="customer">
      <header>
        <h3>Client</h3>
      </header>
      <button type="button" id="newCustomerBtn">Nouveau client</button>
      <button type="button" id="updateContactBtn">Modifier le client</button>
      <article>
        <form method="post" id="newCustomerForm" action="">
          <select id="selectUserObject">
            <option value="none">New User</option>
          </select>
          <fieldset>
            <label for="nameNewCustomer">Nom</label>
            <input type="text" name="nameNewCustomer">
            <label for="codeNewCustomer">Code interne</label>
            <input type="text" name="codeNewCustomer" placeholder="Champ généré automatiquement" disabled>
            <label for="noteNewCustomer">Notes / Remarques</label>
            <input type="text" name="noteNewCustomer">
          </fieldset>
          <button type="submit" name="customerCancelBtn" class="cancelBtn">Annuler</button>
          <button type="submit" id="customerSaveBtn" name="customerInsertBtn" class="saveBtn">Sauvegarder</button>
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
    <section id="host">
      <header>
        <h3>Hébergeurs</h3>
      </header>
      <button type="button" id="newHostBtn">Nouveau client</button>
      <button type="button" id="updateContactHostBtn">Modifier le client</button>
      <article>
        <form method="post" id="newHostForm" action="">
          <select id='selectHostObject'>
            <option>New User</option>
          </select>
          <fieldset>
            <label for="nameNewHost">Nom</label>
            <input type="text" name="nameNewHost">
            <label for="codeNewHost">Code interne</label>
            <input type="text" name="codeNewHost" placeholder=" Champ généré automatiquement" disabled>
            <label for="noteNewHost">Notes / Remarques</label>
            <input type="text" name="noteNewHost">
          </fieldset>
          <button type="submit" name="hostCancelBtn" class="cancelBtn">Annuler</button>
          <button type="submit" name="hostInsertBtn" id="hostSaveBtn"  class="saveBtn">Sauvegarder</button>
        </form>
        <form method="post" id="updateContactFormHost" action="">
          <fieldset>
            <label for="nameUpdContactHost">Nom du contact</label>
            <input type="text" name="nameUpdContactHost">
            <label>Rôle</label>
            <input type="text" name="roleUpdContactHost">
            <label for="emailUpdContactHost">Email</label>
            <input type="text" name="emailUpdContactHost">
            <label for="telUpdContactHost">Téléphone</label>
            <input type="tel" name="telUpdContactHost">
          </fieldset>
          <button type="submit" name="updCancelBtn" class="cancelBtn">Annuler</button>
          <button type="submit" name="updSaveBtn" class="saveBtn">Sauvegarder</button>
        </form>
    </section>
  </div>
</main>
<footer></footer>
</body>
<script src="asset/script/navbar.js"></script>
<script src="asset/script/formCustomer.js"></script>
<script src="asset/script/formHost.js"></script>
<script src="asset/script/updateForm.js"></script>
<script src="asset/script/AsyncDataFetch.js"></script>
<script src="asset/script/formProject.js"></script>
<script src="asset/script/onload.js"></script>
</html>

