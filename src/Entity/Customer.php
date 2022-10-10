<?php
namespace App\Entity;
use App\AssesseurInterface;
use App\trait\AssesseurIdTrait, App\trait\AssesseurNameTrait, App\trait\AssesseurCodeTrait, App\trait\AssesseurNotesTrait;
class Customer implements AssesseurInterface
{
    use AssesseurIdTrait, AssesseurNameTrait, AssesseurCodeTrait, AssesseurNotesTrait;
    private int $id;
    public function __construct(
        private string $code,
        private string $name,
        private string $notes,
    ){$this->id = 0;}
}
