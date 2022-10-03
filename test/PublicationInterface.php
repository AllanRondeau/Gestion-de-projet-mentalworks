<?php

interface PublicationInterface
{
    public function setAuthor(Author $author);
    public function setDate(DateTime $dateTime);
    public function getDate ();
    public function getAuthor();
}


class Article implements PublicationInterface {
    // Implémentation des fonctions de l'interface
}

class Event implements PublicationInterface {
    // Implémentation des fonctions de l'interface
}


class Alert {
    public function sendAlert(PublicationInterface $publication)
    {
        // Send alert
    }
}

trait sePresenteTrait{
    public function ditBonjour(): string{
        return "Bonjour ! ".$this->name;
    }

}
class Animal{
    private string $name = 'toto';
    use SePreseneteTrait;
}

$animal= new Animal();
$animal->sePresenteTrait();
