<?php

class Environnement
{
    public function __construct(
        private int    $id,
        private string $name,
        private string $link,
        private string $ip,
        private int    $sshPort,
        private string $sshName,
        private string $phpMyAdminLink,
        private int    $ipRestiction,

    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @return int
     */
    public function getSshPort(): int
    {
        return $this->sshPort;
    }

    /**
     * @return int
     */
    public function getIpRestiction(): int
    {
        return $this->ipRestiction;
    }

    /**
     * @return string
     */
    public function getPhpMyAdminLink(): string
    {
        return $this->phpMyAdminLink;
    }

    /**
     * @return string
     */
    public function getSshName(): string
    {
        return $this->sshName;
    }

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @param int $ipRestiction
     */
    public function setIpRestiction(int $ipRestiction): void
    {
        $this->ipRestiction = $ipRestiction;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $phpMyAdminLink
     */
    public function setPhpMyAdminLink(string $phpMyAdminLink): void
    {
        $this->phpMyAdminLink = $phpMyAdminLink;
    }

    /**
     * @param string $sshName
     */
    public function setSshName(string $sshName): void
    {
        $this->sshName = $sshName;
    }

    /**
     * @param int $sshPort
     */
    public function setSshPort(int $sshPort): void
    {
        $this->sshPort = $sshPort;
    }

}