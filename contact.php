<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>
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


.contact-form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    animation: fade-in 1s ease-in-out;
}

.contact-form h1 {
    font-size: 2em;
    margin-bottom: 10px;
    animation: slide-up 1s ease-in-out;
}

.contact-form p {
    font-size: 1.2em;
    margin-bottom: 20px;
    animation: slide-up 1s ease-in-out;
}

.contact-info {
    text-align: left;
    margin-top: 30px;
}

.contact-info p {
    font-size: 1.2em;
    margin-bottom: 10px;
}


.contact-form-container {
    margin-top: 30px;
}

.contact-form-container h2 {
    font-size: 1.5em;
    margin-bottom: 15px;
}

.contact-form form {
    text-align: left;
}

.contact-form label {
    font-size: 1.1em;
    margin-bottom: 5px;
    display: block;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.contact-form button {
    background-color: #0099cc;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form button:hover {
    background-color: #0077aa;
}


footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
    position: center;
    bottom: 0;
    width: 100%;
}


@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slide-up {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
    
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="cart.php">Shopping Car</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
    </nav>

    <div class="content-container">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <p>Se você tiver alguma dúvida, sinta-se à vontade para entrar em contato conosco..</p>
            
            <div class="contact-info">
                <p><strong>Email:</strong> joaovitorpiagempereira8@gmail.com</p>
                <p><strong>Phone:</strong> 63 98502-2769</p>
                <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/jo%C3%A3o-v%C3%ADtor-piagem-pereira-811318270?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bjf1C3P8wTv6MDcwBObyVqA%3D%3D" target="_blank">Your Profile</a></p>
                <p><strong>Discord:</strong> Jhonnyz</p>
          

    <footer>
      &copy; 2023 Your Company. All rights reserved.
    </footer>
</body>
</html>
