<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulario</title>
    <style>
    *{
        margin:10;
        padding:10;
    }
    
    body{
        margin: 530px;
        margin-top: 270px;
        background:#696969;
       
    }
    form{
        border: 1px solid;
        margin-top: 10px;
        align:center;
        background:#DCDCDC;
        padding:7px 25px;
        font-size: 18px;
        font-family:"Courier New";
        cursor: pointer;
        color:#1C1C1C;  
    }
    .btn1{ 
        margin-top: 10px;
        align:center;
        background:#A9A9A9;
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
<?php 
    if(isset($_COOKIE['nome']) && isset($_GET['deletecookie'])){ 
        
        unset($_COOKIE['nome']); 
        echo '<script>alert("cookie deletado")</script>'; 
    } 
        if(isset($_POST['user'])){
         setcookie('nome', $_POST['user'], time()+60*60*24*30); header("location: index.php");
         }
    else{ 
            if(isset($_COOKIE['nome'])){ echo $_COOKIE['nome']; 
                echo "<a href='?deletecookie=true'><button>Deletar</button></a>"; 
            }
    else{ 
?>     
            
        <form method="POST" action="index.php"><h2>Nome</h2> <input type="text" id="user" name="user" placeholder="Nome"><br>
        <input class="btn1" type="submit" value="Enviar"> </form> 
         
         <?php }
         } 
         ?>

</body>
</html>