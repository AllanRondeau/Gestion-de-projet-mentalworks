<?php
require __DIR__("/host.php");
require __DIR__("/customer.php");

    class Contact{
        private int $idContact;
        private string $email;
        private string $phoneNumber;
        private string $role;
        private Host $host;

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
?>