<?php
class Superball extends Ball
{
	public $name;
	public $level;
	
	public function __construct ()
	{
		$name = 'Superball';
		$level = 30;

		parent::__construct($name, $level);
	}
}
?>