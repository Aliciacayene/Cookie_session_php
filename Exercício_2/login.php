<?php 

	session_start(); 
	
	if(isset($_SESSION['username']) == true){

		header("Location: mensagem.php");

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    *{
        margin:10;
        padding:10;
    }
    
    body{
        margin: 530px;
        margin-top: 270px;
        background:#20B2AA;
       
    }
    form{
        border: 1px solid;
        margin-top: 10px;
        align:center;
        background:#5F9EA0;
        padding:7px 25px;
        font-size: 18px;
        font-family:"Courier New";
        cursor: pointer;
        color:#1C1C1C;  
    }
    .btn1{ 
        margin-top: 10px;
        align:center;
        background:#C0C0C0;
        padding:7px 25px;
        font-size: 18px;
        font-family:"Courier New";
        cursor: pointer;
        color:#1C1C1C;
    }
   
    .btn1:before{
        button:0;
        border-radius:50% 50% 0 0;
        background:#1C1C1C;
        z-index: -1;
        overflow:hidden;
       
    }
    .btn1:hover{
        color:#fff;
        button:0;
        border-radius:0 0 50% 50%;
        background:#1C1C1C;
    }
</style>

</head>
<body>
    <form action="" method="POST">
        <h2>Login</h2>

Email   <input  type="text" method="POST" name="user"><br>
Senha   <input  type="password" method="POST" name="password">
        
        <button class="btn1" type="submit" name="env">Entrar</button>
</form>

<?php


		if(isset($_POST['env'])){
			
            $password = $_POST['password'];
            $user=$_POST['user'];
            $_SESSION['username']=$user;

			if( $password == $_POST['password'] ){

				$_SESSION['password'] = $password;

				header("Location: mensagem.php");

			}else{

				echo "Não está cadastrado";

			}



		}

	?>
</body>
</html>