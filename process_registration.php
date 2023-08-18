<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "connect.php";

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT id FROM users WHERE email = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
        
        session_start();
        $_SESSION['mensagem']= "E-mail já Cadastrado.";
        header("Location: registration.php");
        exit;
        }
    
        $stmt->close();
    

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);
    if ($stmt->execute()){
        session_start();
        $_SESSION['mensagem']= "Usuário Cadastrado com Sucesso";
        header("Location: login.php");
    }else{
        session_start();
        $_SESSION['mensagem']= "Erro ao cadastrar o usuario". $conn->error; 
        
    }
    $stmt->close();
    $conn->close();
}
?>