<?php

    class ConnexionBdd
    {
        private string $serveur;
        private string $nomBdd;
        private string $utilisateur;
        private string $mdp;

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

        public function Connexion(): PDO
        {
            try{
                // chaine de connexion avec API PDO
                $co = new PDO('mysql:host='.$this->serveur.';dbname='.$this->nomBdd.';user='.$this->utilisateur.';password='.$this->mdp);
                //On définit le mode d'erreur de PDO sur Exception
                $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }		
            // En cas de problème dans la tentative connexion on termine le script php et on affichera le message d'erreur
            catch(PDOException $e){
                die('Erreur : ' . $e->getMessage());
            }
            return $co;
        }
}

    $co1 = new ConnexionBdd('localhost','gestion_projet','root','');
    $co1->Connexion();
    
?>