<?php

class Route
{
	private $_uri = array();
	/**
	* Builds a collection of internal urls to look for
	* @param type $uri
	*/


	public function addController($uri){
		$this->_uri[] = ($uri);
	}

	

	public function submit(){

		echo "<br>SEARCH TERM</br>";
		echo $uri = isset($_GET['uri']) ?  $_GET['uri'] : '/';
		echo "</br>";
		echo "..........................................";
		foreach ($this->_uri as $key => $value) {
			
			if(preg_match("#^$value$#",$uri)){
				echo "<br> match : "."$value" . "</br>";

				

			} else{
				echo "<br> non match:" . $value . "</br>";
			}
		}
	}
}