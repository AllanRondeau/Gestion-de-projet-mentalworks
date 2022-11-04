<?php

namespace App\Model\Trait;

trait IdTrait
{
    public function getId(): int
    {
        return $this->id;
    }
}
