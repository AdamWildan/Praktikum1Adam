<?php
$nama = "Adam Wildan";
$kelas = "XI RPL3";
$alamat = "Malang";
function tampil_nama()
{
  global$nama;
  echo " Nama Saya ".$nama."<br>";
}
function tampil_kelas()
{
  global$kelas;
  echo " Kelas Saya ".$kelas."<br>";
}
function tampil_alamat()
{
  global$alamat;
  echo " Nama Saya ".$alamat;
}
tampil_nama();
tampil_kelas();
tampil_alamat();
 ?>
