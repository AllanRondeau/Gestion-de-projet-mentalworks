<?php

namespace App\Entity;

use App\Entity\Host;
use App\Entity\Customer;

class Contact
{
    private int $id;
    public function __construct(
        private string $email,
        private string $phoneNumber,
        private string $role,
        private Host $host,
        private Customer $customer,
    ) {
    }
    public function getMail(): string
    {
        return $this->email;
    }

    public function setMail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phoneNumber;
    }

    public function setPhone(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getHost(): Host
    {
        return $this->host;
    }

    public function setHost(Host $host): void
    {
        $this->host = $host;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }
}
