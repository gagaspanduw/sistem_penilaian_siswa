<?php
//koneksi ke mysql 
// koneksi ke mysql
include "koneksi.php";
//id otomatis start
// membaca kode barang terbesar
$query = "SELECT max(kode_pelajaran) as maxId FROM tbl_pelajaran";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
//$ex = explode('/', 'maxId');
$idpelajaran = $data['maxId'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari 2 karakter didepan
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut =substr($idpelajaran, 1, 3);

//if(date('d')=='01'){ $noUrut='01';}
//else { $noUrut =  $ex[0];}
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "P";


$newIdPelajaran = $char . sprintf("%03s", $noUrut);
//idotomatis end
?>