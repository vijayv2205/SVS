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
			
			/*$r = mysql_query('select * from state') or die('table not connect');
			
			while($row = mysql_fetch_array($r) ){
			  echo $row['state_code'].'<br>';
			}*/
	        //echo 'Welcome';
			$data['name'] = "Vijay";
			$data['surname'] = "Verma22";
			$WelcomeModel->test();
			view('welcome',$data);
	 }
}
?>