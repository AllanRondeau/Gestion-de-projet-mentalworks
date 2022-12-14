<?php

namespace App\Entity;

use App\Model\Interface\CommonPropertiesInterface;
use App\Model\Trait\IdTrait;
use App\Model\Trait\NameTrait;
use App\Model\Trait\CodeTrait;
use App\Model\Trait\NotesTrait;

class Host implements CommonPropertiesInterface
{
    use IdTrait;
    use NameTrait;
    use CodeTrait;
    use NotesTrait;
    private int $id;
    public function __construct(
        private string $code,
        private string $name,
        private string $notes,
    ) {
        $this->id = 0;
    }
}
