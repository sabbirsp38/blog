<?php

class Formet{


public function textshortent($text , $limit= 200 ){
	$text = $text. " ";
	$text = substr($text, 0, $limit );
	$text = $text. "....";
	return $text; 

}
public function textshortentt($text , $limit= 180 ){
  $text = $text. " ";
  $text = substr($text, 0, $limit );
  $text = $text. "....";
  return $text; 

}





 public function validation($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }

 public function title(){
  $path = $_SERVER['SCRIPT_FILENAME'];
  $title = basename($path, '.php');
  //$title = str_replace('_', ' ', $title);
  if ($title == 'index') {
   $title = 'home';
  }elseif ($title == 'contact') {
   $title = 'contact';
  }
  return $title = ucfirst($title);
 }






}?>