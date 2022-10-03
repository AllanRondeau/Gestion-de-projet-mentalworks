<?php


trait TimeStampableTrait 
{
    private DateTime $dateCreation;
    private DateTime $dateMAJ;

    public function setDateCreation(DateTime $date): void
    {
         $this->dateCreation = $date;
    }

    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function setDateMiseAJour(DateTime $date): void
    {
         $this->dateMAJ = $date;
    }

    public function getDateMiseAJour(): DateTime
    {
        return $this->dateMAJ;
    }
}

interface EstDateInterface
{
    public function setDateCreation(DateTime $date): void;
    public function getDateCreation(): DateTime;
    public function setDateMiseAJour(DateTime $date):void;
    public function getDateMiseAJour(): DateTime;
}

class Article implements EstDateInterface
{
    use TimeStampableTrait;

    public function __construct(private string $nom)
    {
        $this->dateCreation = new DateTime();
        $this->dateMAJ = new DateTime();
        $this->nom = $nom;
    }

}

class Utilisateur implements EstDateInterface
{
    use TimeStampableTrait;
    private $nom;
    private $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->dateCreation = new DateTime();
        $this->dateMAJ = new DateTime();
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

$article = new Article('Titre');
echo $article->getDateCreation()->format('Y-m-d');
