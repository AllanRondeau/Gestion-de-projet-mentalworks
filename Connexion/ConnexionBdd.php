<?php
class ConnexionBdd
{
    static string $serveur = "localhost";
    static string $nomBdd = "gestion_projet";
    static string $utilisateur = "root";
    static string $mdp = "";

    public function __construct(string $serveur, string $nomBdd, string $utilisateur, string $mdp)
    {
        $this->serveur = $serveur;
        $this->nomBdd = $nomBdd;
        $this->utilisateur = $utilisateur;
        $this->mdp = $mdp;
    }
    // nom BD
    public function getNomBdd(): string
    {
        return $this->nomBdd;
    }
    public function setNomBdd(string $nomBdd):void
    {
        $this->nomBdd = $nomBdd;
    }
    //utilisateur
    public function getUtilisateur(): string
    {
        return $this->utilisateur;
    }
    public function setUtilisateur(string $utilisateur):void
    {
        $this->utilisateur = $utilisateur;
    }
    //mot de passe
    public function getMdp(): string
    {
        return $this->mdp;
    }
    public function setMdp(string $mdp):void
    {
        $this->mdp = $mdp;
    }
    //serveur
    public function getServeur(): string
    {
        return $this->serveur;
    }
    public function setServeur(string $serveur):void
    {
        $this->serveur = $serveur;
    }

    public static function Connexion(): PDO
    {
        try{
            // chaine de connexion avec API PDO
            $co = new PDO('mysql:host='.ConnexionBdd::$serveur.';dbname='.ConnexionBdd::$nomBdd.';user='.ConnexionBdd::$utilisateur.';password='.ConnexionBdd::$mdp);
            //On définit le mode d'erreur de PDO sur Exception
            $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }		
        // En cas de problème dans la tentative connexion on termine le script php et on affichera le message d'erreur
        catch(PDOException $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $co;
    }
}
?>