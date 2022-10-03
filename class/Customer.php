<?php
require_once __DIR__."/trait.php";
require_once __DIR__."/interface.php";
class Customer implements Test
{
    use Id, Name, Code, Notes;
    private int $id;
    public function __construct(
        private string $code,
        private string $name,
        private string $notes,
    ){$this->id = 0;}
}
