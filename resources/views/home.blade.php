<style>

body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

header nav ul {
    list-style: none;
}

header nav ul li {
    display: inline;
    margin-right: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.hero {
    text-align: center;
    padding: 100px 0;
    background-image: url('hero-background.jpg'); /* Replace with your background image */
    background-size: cover;
    color: #fff;
}

.hero h1 {
    font-size: 36px;
}

.hero p {
    font-size: 18px;
    margin-top: 20px;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f5a623;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    margin-top: 20px;
}

.cta-button:hover {
    background-color: #e09600;
}

.products {
    text-align: center;
    padding: 40px 0;
}

.product {
    display: inline-block;
    margin: 20px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 300px;
}

.product img {
    max-width: 100%;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.product h3 {
    font-size: 24px;
    margin-top: 10px;
}

.product p {
    font-size: 18px;
    margin-top: 10px;
}

.product a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    margin-top: 20px;
}

.product a:hover {
    background-color: #555;
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeHub - Home</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Men's Shoes</a></li>
                <li><a href="#">Women's Shoes</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Welcome to ShoeHub</h1>
        <p>Discover the latest trends in footwear</p>
        <a href="#shop-now" class="cta-button">Shop Now</a>
    </section>

    <section id="shop-now" class="products">
        <h2>Featured Products</h2>

        <div class="product">
            <img src="shoe1.jpg" alt="Product 1">
            <h3>Men's Running Shoe</h3>
            <p>$79.99</p>
            <a href="#">View Details</a>
        </div>

        <div class="product">
            <img src="shoe2.jpg" alt="Product 2">
            <h3>Women's Sneaker</h3>
            <p>$64.99</p>
            <a href="#">View Details</a>
        </div>

        <div class="product">
            <img src="shoe3.jpg" alt="Product 3">
            <h3>Kids' Athletic Shoe</h3>
            <p>$49.99</p>
            <a href="#">View Details</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 ShoeHub. All rights reserved.</p>
    </footer>
</body>
</html>
