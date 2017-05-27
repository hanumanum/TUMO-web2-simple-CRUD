<?php
session_start();

function dump($obj){
	echo "<pre>";
	var_dump($obj);
	echo "</pre>";
}



function checkUser($username,$password){
	$admins = array("username"=>"monte", "password"=>"1234");	

	if($admins["username"]==$username && $admins["password"]==$password){
		return true;
	}
	else {
		return false;
	}

}

function logIn($username){
	$_SESSION["username"]=$username;
}

function logOut(){
	session_destroy();
	
}


function isLoggedIn(){
	if(isset($_SESSION["username"]) && $_SESSION["username"]!==""){
		return true;
	}
	else{
		return false;	
	}
	 
}


dump($_SESSION);