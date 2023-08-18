<?php 
    session_start();

    if(!isset($_SESSION["user_id"])){
        $_SESSION["mensagem"] = "Página Restrita, faça login, ou cadastro para entrar.";
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Adicionar um Produto</h1>
    <?php 
       
        if(isset($_SESSION['mensagem'])){
            echo'<p>' . $_SESSION['mensagem'] . '</p>';
                unset($_SESSION['mensagem']);
        }
    ?>
    <form action="process_add_product.php" method="post">

    <label for="name">Nome: </label>
    <input type="text" name="name" required><br>

    <label for="price">Preço: </label>
    <input type="number" name="price" step="0.01" required><br>

    <label for="description">Descrição: </label><br>
    <textarea name="description" cols="50" rows="4"></textarea><br>
    <input type="submit" value="Adicionar">

    </form>
    <a href="home.php">Voltar ao início</a>
</body>
</html>