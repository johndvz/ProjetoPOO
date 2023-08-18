<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    animation: fadeIn 2s ease-in-out;
}

.container h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.container form {
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: 300px;
}

.container label {
    font-size: 1.2em;
    margin-top: 10px;
    display: block;
}

.container input[type="text"],
.container input[type="password"],
.container input[type="email"] {
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

.container input[type="text"]:focus,
.container input[type="password"]:focus,
.container input[type="email"]:focus {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid #00ccff;
}

.container input[type="checkbox"] {
    margin-top: 10px;
    margin-right: 5px;
}

.container input[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background: linear-gradient(to right, #003366, #0099cc);
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.container input[type="submit"]:hover {
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
        
</style>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cart.php">Carrinho</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="pages/products.php">Products</a></li>
            <li><a href="pages/contact.php">Contact Us</a></li>
        </ul>
    </nav>
    
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h1>Cadastre-se</h1>
 
      
        <form action="process_registration.php" method="post">
            <label for="iusername">Nome de usuário:</label><br>
            <input type="text" name="username" id="iusername"><br>

            <label for="iemail">E-mail: </label><br>
            <input type="email" name="email"><br>

            <label for="ipassword">Senha: </label><br>
            <input type="password" name="password" id="ipassword"><br>

            <input type="checkbox" id="showPassword">
            <label for="showPassword">Mostrar Senha</label><br>        
            <input type="submit" value="Cadastrar">
        </form>

    </div>
    <script>
        const passwordInput = document.getElementById('ipassword');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('click', function (){
            if (showPasswordCheckbox.checked){
                passwordInput.type = 'text';
            }else{
                passwordInput.type = 'password';
            }
        }); 
      </script>
</body>
</html>
</html>
</html>