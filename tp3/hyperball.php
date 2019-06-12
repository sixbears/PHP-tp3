<?php
class Hyperball extends Ball
{
	public $name;
	public $level;
	
	public function __construct ()
	{
		$name = 'Hyperball';
		$level = 50;

		parent::__construct($name, $level);
	}
}
?>