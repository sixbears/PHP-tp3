<?php
class Masterball  extends Ball
{
	public $name;
	public $level;
	
	public function __construct ()
	{
		$this->name = 'Masterball';
		$this->level = 100;

		parent::__construct($name, $level);
	}
}
?>