<?php

	session_start(); 

	
	if(!isset($_SESSION['password']) == true){
         
		unset($_SESSION['password']);
        header("Location:login.php");
    }    
     
        echo "User: ".$_SESSION['username']."<br/>";
        echo "Foi cadastrado!"
?>

<style>
*{
    background:#20B2AA;
}
</style>