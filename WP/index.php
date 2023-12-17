<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Gaya CSS untuk tata letak */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: white;
      padding: 80px;
      text-align: center;
      width: 100%;
    }

    nav ul {
      list-style: none;
      text-align: center;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      display: inline;
      margin: 0 10px;
    }

    .container {
      width: 80%;
      margin: 20px auto;
    }

    .car-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 20px;
    }

    .car {
      border: 1px solid #ccc;
      padding: 10px;
      background-color: white;
      text-align: center;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 80px;
      position: absolute;
      bottom: 50;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Tentang Kami</h1>
    <nav>
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="about.html">Mobil Baru</a></li>
        <li><a href="contact.html">Kontak</a></li>
      </ul>
    </nav>
  </header>

<body>
    <h1>Formulir Jual Beli Mobil</h1>
    <hr>
    <form action="">
        <label for="nama">Nama Lengkap :</label>
        <input type="text" name="nama" id="nama" require>
        <br>
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" require>
        <br>
        <label for="merk">Merk/Model Mobil :</label>
        <input type="text" name="merk" id="merk" require>
        <br>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" require>
        <br>
        <label for="tahun">Tahun :</label>
        <input type="text" name="tahun" id="tahun" require>
        <br>
        <label for="warna">Warna :</label>
        <input type="text" name="warna" id="warna" require>
        <br>
        <button name="kirim">kirim</button>
    </form>
    <?php
    if (isset($_GET["kirim"])) { ?>
        <h1>Data komentar Anda</h1>
        <hr>
        <p>Nama lengkap: <?= $_GET["nama"] ?></p>
        <p>Alamat: <?= $_GET["alamat"] ?></p>
        <p>Email: <?= $_GET["email"] ?></p>
        <p>Merk/Model Mobil: <?= $_GET["merk"] ?></p>
        <p>Tahun: <?= $_GET["tahun"] ?></p> 
        <p>Warna: <?= $_GET["warna"] ?></p>
    <?php } ?>
    <footer>
    <p>&copy; 2023 Web Jual Beli Mobil</p>
  </footer>
</body>
</html>