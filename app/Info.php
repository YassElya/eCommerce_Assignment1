<?php
namespace app\controllers;

//self:: refers to the class
//$this-> refers to the object

class Info{
	public $email;
	public $message;
	//public $id;//line number in the file
	private static $file = 'app/resources/log.txt';

	public function insert(){
		//add the new entry to the end of the file
		$fh = fopen(self::$file, 'a');
		flock($fh, LOCK_EX);
		fwrite($fh, "Email:" . $this->email . "\n" . "Message:" . $this->message . "\n" . "\n");
		flock($fh, LOCK_UN);
		fclose($fh);
	}


	public function getAll(){
		$infos = file(self::$file);
		$output = [];//or array() to build an empty array
		$i = 0;
		foreach ($infos as $info) {
			$item = new Info();
			$item->email = $info;
			$item->message = $info;
			$item->id = $i;
			$output[] = $item;
			$i++;
		}
		return $output;
	}

}