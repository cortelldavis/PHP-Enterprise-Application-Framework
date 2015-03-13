<?php

$home = new Home_Controller();
class Home_Controller{

	public function __construct(){
			include('classes/views/home/header.php');
			include('classes/views/home/page.php');
			include('classes/views/home/footer.php');
	}
}

?>