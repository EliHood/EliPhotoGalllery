<?php


namespace Eli;

class View{


	public function render($name)
	{
		$views = require_once 'views/'. $name . '.php';

	}


}