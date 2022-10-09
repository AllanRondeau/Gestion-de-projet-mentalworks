<?php
require_once __DIR__."./trait.php";
require_once __DIR__."./interface.php";
class Host implements AssesseurInterface
{
	use AssesseurIdTrait, AssesseurNameTrait, AssesseurCodeTrait, AssesseurNotesTrait;
	private int $id;
	public function __construct
	(
		private string $codeHost, 
		private string $nameHost, 
		private string $notesHost
	){$this->id = 0;}
}
