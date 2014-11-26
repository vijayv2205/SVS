<?php
class Welcome{
	 function __construct(){
		 echo 'constructor<br>';
		 
	 }
	 
	 function index(){
	   echo 'index function';	 
	 }
	 function display(){
		    $WelcomeModel = model('welcomeModel'); 
			$data['name'] = "Vijay";
			$data['surname'] = "Verma";
			$WelcomeModel->test();
			view('welcome',$data);
	 }
}
?>
