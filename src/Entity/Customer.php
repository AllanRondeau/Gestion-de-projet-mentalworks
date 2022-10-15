<?php
namespace App\Entity;
use App\Model\Interface\CommonPropertiesInterface;
use App\Model\Trait\IdTrait;
use App\Model\Trait\NameTrait;
use App\Model\Trait\CodeTrait;
use App\Model\Trait\NotesTrait;
class Customer implements CommonPropertiesInterface
{
    use IdTrait, NameTrait, CodeTrait, NotesTrait;
    private int $id;
    private string $code;
    private string $name;
    private string $notes;

    public function __construct()
    {}

}
