<?php
namespace App\Entity;
use App\Model\Interface\AssesseurInterface;
use App\Model\Trait\IdTrait;
use App\Model\Trait\NameTrait;
use App\Model\Trait\CodeTrait;
use App\Model\Trait\NotesTrait;
class Customer implements AssesseurInterface
{
    use IdTrait, NameTrait, CodeTrait, NotesTrait;
    private int $id;
    public function __construct(
        private string $code,
        private string $name,
        private string $notes,
    ){$this->id = 0;}
}
