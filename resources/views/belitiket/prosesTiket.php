<?php
require $_SERVER['DOCUMENT_ROOT'] . '/psn/config.php';

//function check key/primary key from db to avoid data collapse
function checkKeys($conn, $randStr)
{
    $sql2 = "SELECT * FROM tiket WHERE id_tiket = '$randStr'";
    $result = mysqli_query($conn, $sql2);

    // If at least one row is found, the key exists
    return mysqli_num_rows($result) > 0;
}

//function generate random id

//1)define str that want to generate
function generateKey1($conn)
{
    $cawanganID = mysqli_real_escape_string($conn, $_POST['cawangan']);

    $keyLength = 13;
    $str = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    if ($cawanganID == "PSNKL") {
        $randStr = substr('KL' . str_shuffle($str), 0, $keyLength);
    } else if ($cawanganID == "PSNCWU") {
        $randStr = substr('CWU' . str_shuffle($str), 0, $keyLength);
    }

    $checkKey = checkKeys($conn, $randStr);

    while ($checkKey == true) {
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        $checkKey = checkKeys($conn, $randStr);
    }

    return $randStr;
}

//2)using php function - uniqid
function generateKey2($conn)
{
    $randStr = uniqid();
    $checkKey = checkKeys($conn, $randStr);

    while ($checkKey == true) {
        $randStr = uniqid();
        $checkKey = checkKeys($conn, $randStr);
    }

    return $randStr;
}

$id_tiket = generateKey1($conn);
$cawangan_tiket = mysqli_real_escape_string($conn, $_POST['cawangan']);
$emel = mysqli_real_escape_string($conn, $_POST['emel']);
$pameran_tiket = mysqli_real_escape_string($conn, $_POST['pameran']);
$tarikh_tiket = mysqli_real_escape_string($conn, $_POST['tarikh']);
$warganegara_tiket = mysqli_real_escape_string($conn, $_POST['warganegara']);
$knk1 = mysqli_real_escape_string($conn, $_POST['knk1']);
$knk2 = mysqli_real_escape_string($conn, $_POST['knk2']);
$dws3 = mysqli_real_escape_string($conn, $_REQUEST['dws3']);
$wms4 = mysqli_real_escape_string($conn, $_POST['wms4']);
$oku5 = mysqli_real_escape_string($conn, $_POST['oku5']);

if ($emel == "" || $cawangan_tiket == "") {
    echo
    "<script>
      window.alert('Emel tidak berjaya dimasukkan');
      window.location = '/psn/belitiket/borangTiket.php';
      </script>";
} else {
    $query = "INSERT INTO tiket VALUES('$id_tiket', '$emel', '$cawangan_tiket', '$pameran_tiket', '$tarikh_tiket', '$warganegara_tiket',
                                    '$knk1', '$knk2', '$dws3', '$wms4', '$oku5')";

    mysqli_query($conn, $query);
    echo
    "<script>
      window.alert('Penambahan Tiket Berjaya');
      window.location = '/psn/belitiket/borangTiket.php';
      </script>";
    mysqli_close($conn);
}
?>