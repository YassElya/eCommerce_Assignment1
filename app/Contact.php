<?php
namespace app\controllers;

class Contact extends \app\core\Controller{
	public function index(){
		//process the form data if it is submitted
		if(isset($_POST['action'])){
			//create a info object
			$newInfo = new \app\controllers\Info();
			//populate the info object
			$newInfo->email = $_POST['inputEmail'];
			$newInfo->message = $_POST['inputMessage'];
			//call insert
			$newInfo->insert();
			header('location:/Contact/read');
		}
		$this->view('Contact/index');
	}

	public function read(){
		$this->view('Contact/read');
		//read the log.txt file into a variable
		//$readInfo = new \app\controllers\Info();
		//$readInfos = $readInfo->getAll();
	}
}
