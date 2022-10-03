<?php
require_once __DIR__."/trait.php";
require_once __DIR__."/interface.php";
class Host implements Test
{
	use Id, Name, Code, Notes;
	private int $id;
	public function __construct
	(
		private string $codeHost, 
		private string $nameHost, 
		private string $notesHost
	){$this->id = 0;}
}
