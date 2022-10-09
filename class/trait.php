<?php
trait AssesseurIdTrait
{
    public function getId(): int
    {
        return $this->id;
    }
}

trait AssesseurNameTrait
{
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    } 
}

trait AssesseurCodeTrait
{
    public function getCode(): ?string
    {
        return $this->code;
    }
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}

trait AssesseurNotesTrait
{
    public function getNotes(): ?string
    {
        return $this->notes;
    }
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }
}