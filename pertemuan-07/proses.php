<?php
session_start ();

$akunama = $_POST ["txtNama"];
$akuemail = $_POST ["txtEmail"];
$akupesan = $_POST ["TxtPesan"];

$_SESSION["txtNama"] =$akunama;
$_SESSION["txtEmail"] = $akuemail;
$_SESSION["txtPesan"] = $akupesan;


header("Location: index.php");
  

    