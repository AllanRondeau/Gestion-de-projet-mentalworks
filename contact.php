<?php
require __DIR__("/host.php");
require __DIR__("/customer.php");

    class contact{
        private int $idContact;
        private string $email;
        private string $phoneNumber;
        private string $role;
        private host $host;

    public function getIdContact(): int
	{
		return $this->idContact;
	}

	public function setIdContact(string $idContact): void
	{
		$this->idContact = $idContact;
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

    public function getHost(): host 
	{
		return $this->host;
	}

	public function setHost(host $host): void
	{
		$this->host = $host;
	}

    public function getCustomer(): customer 
	{
		return $this->customer;
	}

	public function setCustomer(customer $customer): void
	{
		$this->customer = $customer;
	}

    }
?>