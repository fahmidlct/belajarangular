<?php
header("Access-Control-Allow-Origin: *");

$host = 'localhost';
$user = 'root';
$password = 'password';
$database = 'test_angular';

$koneksi = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($koneksi));

$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query) or die('query gagal');

$output = "";

/*while($row = mysqli_fetch_assoc($result)) {
    if($output != '') {
        $output .= ',';
    }
    $output .= '{"nama": "' . $row['nama'] . '",';
    $output .= '"kota": "' . $row['kota'] . '"}';
}

$output = '[' . $output . ']';*/

while($row = mysqli_fetch_assoc($result)) {
    $output[] = $row;
}

echo json_encode($output);
//echo $output;