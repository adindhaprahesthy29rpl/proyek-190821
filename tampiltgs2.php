<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	
      <link rel="stylesheet" type = "text/css" href = "styletgs2.css">
      <title>BIODATA</title>
  </head>
  
<?php
$nama         = $_POST['nama'];
$jenisKelamin = $_POST['jenisKelamin'];
$agama        = $_POST['agama'];
$alamat       = $_POST['alamat'];
$tempatLahir  = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tanggalLahir'];
$hobi         = $_POST['hobi'];
$cita         = $_POST['cita'];
$usia         = $_POST['usia'];
$asalSekolah  = $_POST['asalSekolah'];

// menampilkan data nama
echo "Nama          : " . $nama;
echo "<br/>";
echo "Jenis kelamin : " . $jenisKelamin;
echo "<br/>";
echo "Agama         : " . $agama;
echo "<br/>";
echo "Alamat        : " . $alamat;
echo "<br/>";
echo "Tempat Lahir  : " . $tempatLahir;
echo "<br/>";
echo "Tanggal Lahir : " . $tanggalLahir;
echo "<br/>";
echo "Hobi          : " . $hobi;
echo "<br/>";
echo "Cita-Cita     : " . $cita;
echo "<br/>";
echo "Usia          : " . $usia;
echo "<br/>";
echo "Asal Sekolah  : " . $asalSekolah;
echo "<br/>";
?>