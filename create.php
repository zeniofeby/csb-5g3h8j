<?php

include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['lahir'];
$jenis_kelamin = $_POST['kelamin'];
$nomor = $_POST['nomor_hp'];
$email = $_POST['email'];
$kecamatan = $_POST['kecamatan'];

$sql = "INSERT INTO pendaftaran(nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, nomor_hp, email, kecamatan) VALUES('$nama', '$alamat', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$nomor', '$email', '$kecamatan')";
$db->query($sql);
$db->close();
header("location: index.php");
