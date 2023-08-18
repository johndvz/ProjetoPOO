<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>


body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #000;
    color: #fff;
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

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
    animation: fadeIn 2s ease-in-out;
}

h1 {
    font-size: 3em;
    margin: 0;
}

p {
    font-size: 1.2em;
    margin-top: 10px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}

label {
    font-size: 1.2em;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    padding: 10px;
    margin-top: 5px;
    width: 100%;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 1em;
}

button[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background: linear-gradient(to right, #003366, #0099cc);
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #00ccff;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.login-form {
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    margin-top: 20px;
    width: 300px;
}

.login-form {
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    margin-top: 20px;
    width: 300px;
    background-color: rgba(255, 255, 255, 0.1); /* Cor de fundo diferenciada */
}

.login-form a {
    color: #00ccff;
    text-decoration: none;
    transition: color 0.3s;
}

.login-form a:hover {
    color: #0099cc;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    padding: 10px;
    margin-top: 5px;
    width: 100%;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 1em;
    transition: background-color 0.3s, border 0.3s;
}

.login-form input[type="text"]:focus,
.login-form input[type="password"]:focus {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid #00ccff;
}

.login-form button[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background: linear-gradient(to right, #003366, #0099cc);
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-form button[type="submit"]:hover {
    background-color: #00ccff;
}

</style>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="pages/cart.php">Shopping Cart</a></li>
            <li><a href="pages/login.php">Login</a></li>
            <li><a href="pages/products.php">Products</a></li>
            <li><a href="pages/contact.php">Contact Us</a></li> 
        </ul>
    </nav>
    
    <div class="container">
        <h1>Login</h1>
        
        <?php 
        
        if(isset($_SESSION['mensagem'])){
            echo "<p>" . $_SESSION['mensagem'] . "</p>";
            unset ($_SESSION['mensagem']);
            }
        ?>
        <div class="login-form">
            <form action="login_process.php" method="POST">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Entrar</button>
            </form>
            
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
        </div>
    </div>
</body>
</html>