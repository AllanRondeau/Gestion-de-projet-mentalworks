<?php
interface AssesseurInterface
{
    public function getId(): int;
    public function getName(): ?string;
    public function getCode(): ?string;
    public function getNotes(): ?string;
    public function setName(string $name): void;
    public function setCode(string $code): void;
    public function setNotes(string $notes): void;
}


