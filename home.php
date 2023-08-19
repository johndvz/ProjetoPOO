<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

.banner {
    text-align: center;
    padding: 100px 0;
    background-color: #0099cc;
}

.banner h1 {
    font-size: 3em;
    margin-bottom: 10px;
}

.banner p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #003366;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #00ccff;
}

#benefits {
    text-align: center;
    padding: 50px 0;
}

#benefits h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

#benefits p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

#benefits ul {
    text-align: left;
    margin-left: 40px;
}

.cta-banner {
    text-align: center;
    padding: 100px 0;
    background-color: #0099cc;
}

.cta-banner h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #003366;
    color: #fff;
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
            <li><a href="car.php">Shopping Car</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact Us</a></li> 
        </ul>
    </nav>
    
    <div class="banner">
        <h1>Bem-vindo à Futuristic Store</h1>
        <p>Encontre produtos incríveis para todas as suas necessidades</p>
        <a href="#benefits" class="cta-button">Descubra Mais</a>
    </div>
    
    <div class="container">
        <section id="benefits">
            <h2>Por que escolher a Futuristic Store?</h2>
            <p>Nossa loja oferece uma ampla seleção de produtos de alta qualidade que se adaptam às suas necessidades. Com preços competitivos, entrega rápida e atendimento excepcional, você encontrará tudo o que procura.</p>
            <p>Benefícios que oferecemos:</p>
            <ul>
                <li>Variedade de produtos para todos os gostos</li>
                <li>Preços competitivos e promoções exclusivas</li>
                <li>Qualidade imensa nos produtos</li>
                <li>Funcionalidade do site 24 Hrs</li>
            </ul>
        </section>
    </div>
    
    <div class="cta-banner">
        <h2>Pronto para começar a explorar?</h2>
        <a href="products.php" class="cta-button">Ver Produtos</a>
    </div>
    
    <footer>
        <p>&copy; Futuristic Store. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

