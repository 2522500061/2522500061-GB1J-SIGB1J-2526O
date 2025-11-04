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
        <?php
        $NIM="2522500061";
        $NAMA="SAVANA DESTIANI";
        $TEMPATLAHIR="PANGKALPINANG";
        $TANGGALLAHIR="17 DESEMBER 2007";
        $HOBBY="BERNYANYI";
        $PASANGAN="BELUM ADA";
        $PEKERJAAN="MAHASISWA";
        $NAMAAYAH="AGUS SANI";
        $NAMAIBU="SUMARNI";
        $NAMAABANG="ZIYAN ZAHRAN, DOVAN INDRAWAN"; 
        ?>

        <h2>Tentang Saya</h2>
        <p><strong>NiM :</strong><?php echo $NIM; ?></p>
        <p><strong>Nama Lengkap:</strong><?php echo $NAMA; ?></p>
        <p><strong>Tempat Lahir:</strong><?php echo $TEMPATLAHIR; ?></p>
        <p><strong>Tanggal Lahir : </strong><?php echo $TANGGALLAHIR; ?></p>
        <p><strong>Hobby:</strong><?php echo $HOBBY; ?></p>
        <p><strong>Pasangan :</strong><?php echo $PASANGAN; ?></p>
        <p><strong>Pekerjaan: </strong><?php echo $PEKERJAAN; ?></p>
        <p><strong>Nama Ayah : </strong><?php echo $NAMAAYAH; ?></p>
        <p><strong>Nama Ibu  : </strong><?php echo $NAMAIBU; ?></p>
        <p><strong>Nama Abang : </strong><?php echo $NAMAABANG; ?></p>
        <p>ini emoji nya &#9786; &#128525;</p>
    </section>
    <section id="ipk"
     $namamatkul1='Aplikasi Perkantoran';
        $sksmatkul1='3';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';
            $namamatkul2='Logika Informatika';
        $sksmatkul2='3';
        $nilaihadir2='70';
        $nilaitugas2='50';
        $nilaiuts2='60';
        $nilaiuas2='80';
            $namamatkul3='Pengantar Basis Data';
        $sksmatkul3='3';
        $nilaihadir3='80';
        $nilaitugas3='70';
        $nilaiuts3='70';
        $nilaiuas3='90';
            $namamatkul4='Pengantar Teknologi';
        $sksmatkul4='3';
        $nilaihadir4='90';
        $nilaitugas4='90';
        $nilaiuts4='90';
        $nilaiuas4='90';
         $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='80';
        $nilaitugas5='80';
        $nilaiuts5='80';
        $nilaiuas5='80';

     $nilaiAkhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiuas1);
     $nilaiAkhir2 = (0.1 * $nilaihadir2) + (0.2 * $nilaitugas2) + (0.3 * $nilaiuts2) + (0.4 * $nilaiuas2);
     $nilaiAkhir3 = (0.1 * $nilaihadir3) + (0.2 * $nilaitugas3) + (0.3 * $nilaiuts3) + (0.4 * $nilaiuas3);
     $nilaiAkhir4 = (0.1 * $nilaihadir4) + (0.2 * $nilaitugas4) + (0.3 * $nilaiuts4) + (0.4 * $nilaiuas4);
     $nilaiAkhir5 = (0.1 * $nilaihadir5) + (0.2 * $nilaitugas5) + (0.3 * $nilaiuts5) + (0.4 * $nilaiuas5);

      if ($nilaihadir1 < 70){ 
            $grade1="E";
            $mutu1="0.00";
            $status1="Gagal";
        } else {
            if ($nilaiAkhir1>=91){
                $grade1="A";
                $mutu1=4.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=81){
                $grade1="A-";
                $mutu1=3.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=76){
                $grade1="B+";
                $mutu1=3.30;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=71){
                $grade1="B";
                $mutu1=3.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=66){
                $grade1="B-";
                $mutu1=2.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=61){
                $grade1="C+";
                $mutu1=2.30;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=56){
                $grade1="C";
                $mutu1=2.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=51){
                $grade1="C-";
                $mutu1=1.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=36){
                $grade1="D";
                $mutu1=1.00;
                $status1="Gagal";
            } elseif
                ($nilaiAkhir1>=0){
                $grade1="E";
                $mutu1=0.00;
                $status1="Gagal";
            }
        }


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
