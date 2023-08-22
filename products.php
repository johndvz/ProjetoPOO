<?php 
    session_start();
        if(!isset($_SESSION["user_id"])){
            $_SESSION["mensagem"] = "Página Restrita, faça login, ou cadastro para entrar.";
            header("Location: login.php");
            exit();
        }
    include "connect.php";
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Produtos</title>
</head>
<body>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

nav {
    background: linear-gradient(to right, #003366, #0099cc);
    color: #fff;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    position: relative;
    transition: color 0.3s;
}

nav ul li a::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #fff;
    bottom: -5px;
    transform: scaleX(0);
    transform-origin: center;
    transition: transform 0.3s ease-in-out;
}

nav ul li a:hover {
    color: #00ccff;
}

nav ul li a:hover::before {
    transform: scaleX(1);
}


.content-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}


.products-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 20px;
}

.product {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 10px;
    padding: 20px;
    text-align: center;
    width: calc(33.33% - 20px);
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s;
}

.product:hover {
    transform: translateY(-5px);
}

.product img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.product h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.product p {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.price {
    font-size: 1.3em;
    color: #0099cc;
}

.buy-button {
    background-color: #0099cc;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.buy-button:hover {
    background-color: #0077aa;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
}

@media (max-width: 768px) {
    .product {
        width: 100%;
    }
}


    </style>
    <?php 
       
       if(isset($_SESSION['mensagem'])){
           echo'<p>' . $_SESSION['mensagem'] . '</p>';
               unset($_SESSION['mensagem']);
       }
   ?>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="car.php">Shopping Car</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="buys.php">Buys</a></li>
        </ul>
    </nav>

    <div class="content-container">
        <div class="products-container">
            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 1</h2>
                <p>Descrição do Produto 1. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$29.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>
            
            <div class="product">
                <img src="product2.jpg" alt="Produto 2">
                <h2>Produto 2</h2>
                <p>Descrição do Produto 2. Consectetur adipiscing elit...</p>
                <p class="price">R$49.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>
           
            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 3</h2>
                <p>Descrição do Produto 3. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$259.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>

            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 3</h2>
                <p>Descrição do Produto 4. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$129.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>

            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 4</h2>
                <p>Descrição do Produto 4. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$329.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>

            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 5</h2>
                <p>Descrição do Produto 5. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$289.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>

            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 6</h2>
                <p>Descrição do Produto 1. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$929.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>

            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 7</h2>
                <p>Descrição do Produto 7. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$329.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>

            <div class="product">
                <img src="product1.jpg" alt="Produto 1">
                <h2>Produto 8</h2>
                <p>Descrição do Produto 8. Lorem ipsum dolor sit amet...</p>
                <p class="price">R$29.99</p>
                <button class="buy-button"><a href="car.php"></a>Adicionar ao Carrinho</button>
            </div>
            <!-- Adicionar Mais Produtos -->
        </div>
    </div>
   </form> 
    <footer>
        <p>&copy; 2023 Sua Loja. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
