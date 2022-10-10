<?php
namespace App\Model\Interface;
interface EnvironnementInterface
{
    public function getId(): int;
    public function getName(): ?string;
    public function setName(string $name): void;
}