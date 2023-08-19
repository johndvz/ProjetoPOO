<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "connect.php";

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $isEmail = filter_var($username, FILTER_VALIDATE_EMAIL);

        if($isEmail){
            $sql = "SELECT id, username, password FROM users WHERE email = ?";
        }else{
            $sql = "SELECT id, username, password FROM users WHERE username = ?"; 
        }
        $stmt = $conn->prepare($sql);

        if($isEmail){
            $stmt->bind_param("s", $username);
        }else{
            $stmt->bind_param("s", $username);
        }     
        $stmt->execute();
        $stmt->store_result();
        
      
        if($stmt->num_rows == 1){
        $stmt->bind_result($userId, $username, $hashedpassword);
        $stmt->fetch();

        if(password_verify($password, $hashedpassword)){
            $_SESSION["user_id"] = $userId;
            $_SESSION["username"] = $username;
            header("Location: home.php");
            }else{
                $_SESSION["mensagem"] = "Senha Incorreta";
                header("Location: login.php");
                
            }
        }else{
            $_SESSION["mensagem"] = "Usuário não Encontrado";
            header("Location: login.php");
        }
        $stmt->close();
        $conn->close();
    }
?>