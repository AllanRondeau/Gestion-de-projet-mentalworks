<?php
    class Host
	{
		private int $id;
		
		public function __construct(
			private string $codeHost, 
			private string $nameHost, 
			private string $notesHost)
		{
		}

		public function getId(): int
		{
			return $this->id;
		}

		public function setId(string $id): void
		{
			$this->id = $id;
		}

		public function getCodeHost(): string
		{
			return $this->codeHost;
		}

		public function setCodeHost(string $codeHost): void
		{
			$this->codeHost = $codeHost;
		}

		public function getNameHost(): string
		{
			return $this->nameHost;
		}

		public function setNameHost(string $nameHost): void
		{
			$this->nameHost = $nameHost;
		}

		public function getNotesHost(): string
		{
			return $this->notesHost;
		}

		public function setNotesHost(string $notesHost): void
		{
			$this->notesHost = $notesHost;
		}
    }
