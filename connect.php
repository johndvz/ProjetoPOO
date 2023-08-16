<?php 
    
    //Conexão com o DataBase Mysql
    
    $hostname = "localhost"; 
    $username = "joaovitor"; 
    $password = "joaovitordatabasedev";
    $dbname = "project";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (mysqli_connect_errno()){
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
   
    }else{
        echo"Conexão realizada com sucesso";
    }
?>

