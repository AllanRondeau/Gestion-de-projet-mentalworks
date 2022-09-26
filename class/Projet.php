<?php
    class Projet
    {
        private int $id;

        public function __construct(
                private string $name, 
                private string $code, 
                private string $lastpass_folder, 
                private string $link_mock_ups, 
                private int $manage_server,
                private string $notes,
                private ?host $host_id,
                private ?Customer $customer_id,
            ){}

        public function getId(): ?int
        {
            return $this->id;
        }
        public function getName(): ?string
        {
            return $this->name;
        }
        public function getCode(): ?string
        {
            return $this->code;
        }
        public function getLastpassFolder(): ?string
        {
            return $this->lastpass_folder;
        }
        public function getLinkMockUps(): ?string
        {
            return $this->link_mock_ups;
        }
        public function getManageServer(): ?int
        {
            return $this->manage_server;
        }
        public function getNotes(): ?string
        {
            return $this->notes;
        }
        public function getHost(): ?host
        {
            return $this->host_id;
        }
        public function getCustomer(): ?Customer
        {
            return $this->customer_id;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }
        public function setCode(string $code): void
        {
            $this->code = $code;
        }
        public function setLastPassFolder(string $lastpass_folder): void
        {
            $this->lastpass_folder = $lastpass_folder;
        }
        public function setLinkMockUps(string $link_mock_ups): void
        {
            $this->link_mock_ups = $link_mock_ups;
        }
        public function setManageServer(string $manage_server): void
        {
            $this->manage_server = $manage_server;
        }
        public function setNotes(string $notes): void
        {
            $this->notes = $notes;
        }
    }