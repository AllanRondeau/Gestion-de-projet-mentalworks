<?php
namespace App\Entity;
use App\AssesseurInterface;
use App\trait\AssesseurIdTrait, App\trait\AssesseurNameTrait, App\trait\AssesseurCodeTrait, App\trait\AssesseurNotesTrait;
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
