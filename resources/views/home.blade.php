<!DOCTYPE html>
<html>
<head>
    <title>Ghina's Sport Equipment Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #B31312;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #FFE5CA;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #3D0C11;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            text-align: center;
            background-color: #fff;
            border-radius: 5px;
            display: inline-block;
            width: 30%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product img {
            max-width: 100%;
        }



        .btn {
        background-color: #FFE5CA;
        color: #000;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        }

        .btn:hover {
            background-color: #B31312;
            color: #fff;
        }


        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ghina's Sport Equipment Store</h1>
    </header>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Produk</a>
        <a href="#">Keranjang</a>
        <a href="#">Kontak</a>
    </nav>
    <div class="container">
        <h2>Produk Terbaru</h2>
        <div class="product">
            <img src="product1.jpg" alt="Produk 1">
            <h3>Produk 1</h3>
            <p>Harga: $100</p>
            <button class="btn">Beli</button>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Produk 2">
            <h3>Produk 2</h3>
            <p>Harga: $120</p>
            <button class="btn">Beli</button>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Produk 3">
            <h3>Produk 3</h3>
            <p>Harga: $80</p>
            <button class="btn">Beli</button>
        </div>
    </div>
    <div class="footer">
        &copy; 2023 Toko Online
    </div>
</body>
</html>
