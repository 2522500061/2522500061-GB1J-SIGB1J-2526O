<?php
require 'koneksi.php';
require_ONCE 'fungsi.php';

$fieldConifg = [
  "nim"   => ["label" => "NIM:", "suffix" => ""],
  "nama"  => ["label" => "Nama Lengkap:", "suffix" => "&#128526;"],
 "tempat" => ["label" => "Tempat lahir:", "suffix" => ""],
"tanggal" => ["label" => "Tanggal lahir:", "suffix" => ""],
"hobi"  => ["label" => "Hobi:", "suffix" => "&#127926;"],
"pasangan" => ["label" => "pasangan:", "suffix" => "&hearts;"],
"pekerjaan" => ["label" => "pekerjaan:", "suffix" => "&copy; 2025"],
"ortu" => ["label" => "Nama Orang Tua:", "suffix" => ""],
"kaka" => ["label" => "Nama kaka:", "suffix" => ""],
"adik" => ["label" => "Nama Adik:", "suffix" => ""],
];

$sql = "SELECT * FROM tbl_biodata_mahasiswa_sederhana ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
  echo "<p>Gagal membaca data tamu: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data tamu yang tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {
    $arrBiodata = [
      "nim"      => $row["cnim"],
      "nama"     => $row["cnama_legkap"],
      "tempat"   => $row["ctempat_lahir"],
      "tanggal"  => $row["ctanggal_lahir"],
      "hobi"     => $row["chobi"],
      "pasangan" => $row["cpasangan"],
      "pekerjaan"=> $row["cpekerjaan"],
      "ortu"     => $row["cnamaorangtua"],
      "kaka"     => $row["cnama_kaka"],
      "adik"     => $row["cnama_adik"],
    ];
    echo tampilkanBiodata($fieldContact, $arrContact);
  }
}
?>
