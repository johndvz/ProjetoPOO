<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Reset de estilos */
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

/* Estilos do Navbar */
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

/* Estilos da Content Container */
.content-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Estilos da página de carrinho */
.cart-items {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
}

.cart-item {
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.cart-item img {
    max-width: 80px;
    height: auto;
    margin-right: 10px;
}

.cart-item .item-details h2 {
    font-size: 1.2em;
    margin-bottom: 5px;
}

.cart-item button.remove-item {
    background-color: #ff4444;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.cart-item button.remove-item:hover {
    background-color: #cc0000;
}

/* Estilos do Footer */
footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
    position: absolute;
    bottom: 0;
    width: 100%;
}

</style>
<body>
    
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="car.php">Shopping Car</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    
        <div class="content-container">
            <!-- Conteúdo da página de carrinho -->
            <h1>Your Cart</h1>
            <div class="cart-items">
                <div class="cart-item">
                    <img src="product_image.jpg" alt="Product">
                    <div class="item-details">
                        <h2>Product Name</h2>
                        <p>Price: $19.99</p>
                    </div>
                    <button class="remove-item">Remove</button>
                </div>
                <!-- Mais itens do carrinho podem ser adicionados aqui -->
            </div>
        </div>
    
        <footer>
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </footer>
    
        <script src="script.js"></script>
    </body>
    </html>
