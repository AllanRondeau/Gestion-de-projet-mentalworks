<?php

namespace App\Model\Interface;

interface CommonPropertiesInterface
{
    public function getId(): int;
    public function getName(): ?string;
    public function setName(string $name): void;
    public function getCode(): ?string;
    public function setCode(string $code): void;
    public function getNotes(): ?string;
    public function setNotes(string $notes): void;
}
