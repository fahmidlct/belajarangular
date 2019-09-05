<?php
header("Access-Control-Allow-Origin: *");

$host = 'localhost';
$user = 'root';
$password = 'password';
$database = 'test_angular';

$koneksi = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($koneksi));

//terima input data
$data = json_decode(file_get_contents("php://input"));

//ambil nilai dari nama dan kota $_POST['nama'] dsb
$nama = $data->nama;
//query insert
$sql = "DELETE FROM user WHERE nama = '$nama'";
//tulis pesan
if(mysqli_query($koneksi, $sql)) {
    $pesan = 'berhasil';
}
else {
    $pesan = 'input gagal';
}

echo $pesan;