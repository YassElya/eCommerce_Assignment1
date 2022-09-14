<?php  
namespace app\controllers;

class Main extends \app\core\Controller{
	private static $file = 'app/resources/counter.txt';
	public $counter;
	// public $num;

	public function index(){
		$this->view ('Main/index');
	}

	public function about_Us(){
		$this->view('Main/about_us');
	}


	public function counter(){
		if (file_exists('app/resources/counter.txt')){
			$fr = fopen(self::$file, 'r');
			flock($fr, LOCK_EX);
			$counter = fread($fr, 1024);
			flock($fr, LOCK_UN);
			fclose($fr);
		}
		else{
			$counter = '{"count":0}';
		}
		$dCounter = json_decode($counter);
		$dCounter->count++;
		$counter = json_encode($dCounter);
		// echo $counter;
		$fh = fopen(self::$file, 'w+');
		fwrite($fh, $counter);
		flock($fh, LOCK_UN);
		fclose($fh);
		echo $counter = json_encode($dCounter->count);
	}

}