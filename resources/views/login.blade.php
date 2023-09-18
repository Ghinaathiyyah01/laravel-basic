<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 340px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    header{
        background-color: #B31312;
        border-radius: 5px;
        padding: 5px;
    }

    h2 {
        align-self: center;
        color: #fff;
    }

    .form-group {
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
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

    </style>
</head>
<body>
    <div class="container">
        <header><h2>Login</h2></header>
        <form action="proses_login.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
