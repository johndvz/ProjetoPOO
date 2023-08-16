<?php 
    
    $hostname = "localhost"; //Server Adress
    $username = "joaovitor"; 
    $password = "joaovitordatabasedev";
    $dbname = "lojinha";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (mysqli_connect_errno()){
        die("Erro ao conectar ao banco de dadops: " . mysqli_connect_error());
   
    }else{
        echo"Conexão realizada com sucesso";
    }
?>

