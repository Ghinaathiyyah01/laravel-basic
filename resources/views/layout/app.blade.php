<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir</title>
    <!-- Judul halaman -->

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- Mengimpor Font Awesome untuk ikon -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Mengimpor Font Awesome untuk ikon (versi lama) -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Mengimpor Bootstrap CSS -->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }
        /* Gaya umum untuk seluruh halaman */

        .sidebar {
            width: 250px;
            height: 100%;
            background-color: rgb(0, 0, 23);
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }
        /* Gaya untuk elemen sidebar */

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
        }
        /* Gaya untuk tautan dalam sidebar */

        .sidebar a:hover {
            background-color: #555;
        }
        /* Gaya saat tautan dihover dalam sidebar */

        .sidebar i {
            margin-right: 10px;
        }
        /* Gaya untuk ikon dalam tautan sidebar */

        .content {
            margin-left: 250px;
            margin-top: 50px;
            padding: 20px;
        }
        /* Gaya untuk elemen konten utama */

    </style>
    <!-- Gaya CSS dalam dokumen -->
</head>
<body>
    <div class="sidebar">
        <a href="#"><i class="fa fa-home"></i>Beranda</a>
        <a href="/barang"><i class="fa fa-database"></i>Barang</a>
        <a href="/kategori"><i class="fa fa-cogs"></i>Kategori</a>
        <a href="#"><i class="fa fa-envelope"></i>Kontak</a>
    </div>
    <!-- Sidebar dengan tautan menu -->

</body>
</html>
