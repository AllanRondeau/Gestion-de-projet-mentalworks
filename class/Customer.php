<?php
require_once __DIR__."/trait.php";
require_once __DIR__."/interface.php";
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
