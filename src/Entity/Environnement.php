<?php
namespace App\Entity;
use App\AssesseurEnvironnementInterface;
use App\trait\AssesseurIdTrait, App\trait\AssesseurNameTrait;
class Environnement implements AssesseurEnvironnementInterface
{
    use AssesseurIdTrait, AssesseurNameTrait;
    private int $id;
    public function __construct(
        private string $name, 
        private string $link,
        private string $ip,
        private int    $sshPort,
        private string $sshName,
        private string $phpMyAdminLink,
        private int    $ipRestriction,
        private ?Project $project
    ){$this->id = 0;}

    public function getLink(): string
    {
        return $this->link;
    }
    public function getIp(): string
    {
        return $this->ip;
    }
    public function getSshPort(): int
    {
        return $this->sshPort;
    }
    public function getIpRestriction(): int
    {
        return $this->ipRestriction;
    }
    public function getPhpMyAdminLink(): string
    {
        return $this->phpMyAdminLink;
    }
    public function getSshName(): string
    {
        return $this->sshName;
    }
    public function getProject(): Project
    {
        return $this->project;
    }

    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }
    public function setIpRestriction(int $ipRestriction): void
    {
        $this->ipRestriction = $ipRestriction;
    }
    public function setLink(string $link): void
    {
        $this->link = $link;
    }
    public function setPhpMyAdminLink(string $phpMyAdminLink): void
    {
        $this->phpMyAdminLink = $phpMyAdminLink;
    }
    public function setSshName(string $sshName): void
    {
        $this->sshName = $sshName;
    }
    public function setSshPort(int $sshPort): void
    {
        $this->sshPort = $sshPort;
    }
    public function setProject(Project $project): void
    {
        $this->project = $project;
    }

}
