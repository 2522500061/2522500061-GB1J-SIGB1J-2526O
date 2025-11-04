<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Header</h1>
	<button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation"> &#9776;
	</button>
    <nav>
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
  </header>
  <main>
    <section id="home">
        <h2>Selamat siang </h2>
        <p>Ini contoh paragraf HTML.</p>
    </section>
    <section id="about">
        <h2>Tentang Saya</h2>
        <p><strong>NiM :</strong>2522500061</p>
        <p><strong>Nama Lengkap:</strong>Savana Destiani &#128526;</p>
        <p><strong>Tempat Lahir:</strong>Pangkalpinang</p>
        <p><strong>Tanggal Lahir : </strong> 17-Desember-2007</p>
        <p><strong>Hobby:</strong> Bernyanyi &#127926:;</p>
        <p><strong>Pasangan :</strong> Belum ada &hearts;</p>
        <p><strong>Pekerjaan: </strong> mahasiswa &copy; 2025</p>
        <p><strong>Nama Ayah : </strong> Agus sani</p>
        <p><strong>Nama Ibu  : </strong> Sumarni</p>
        <p><strong>Nama Abang : </strong>Ziyan Zahran, Dovan Indrawan</p>
        <p>ini emoji nya &#9786; &#128525;</p>
    </section>


	 	<section id="contact">
    	<h2>Kontak kami</h2>

      	<form action="" method="get">

						<label for="txtNama"><span>Nama:</span>
						<input type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama" required autocomplete="name"></label>

						<label for="txtEmail"><span>Email:</span>
						<input type="text" id="txtEmail" name="txtEmail" placeholder="Masukkan Email" required autocomplete="email"></label>

						<label for="txtPesan"><span>Pesan:</span>
						<textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis Pesan Anda..." required></textarea></label>

						<button type="submit">Kirim</button>
						<button type="reset">Batal</button>
				</form>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 Savana Destiani [2522500061] </p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
