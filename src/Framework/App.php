<?php
	namespace Framework;
/**
* 
*/
class App 
{
	private $module;
	// function __construct($module = null)
	// {
	// 	$this->module = $module;
	// }

	public function run(){
		if (is_null($this->module)) {
			return "Welcome to My Framework";
		}

		return "Welcome to My Framework with {$this->module} module";
		
	}

	public function setModule($name_module){
		$this->module = $name_module;
	}
}