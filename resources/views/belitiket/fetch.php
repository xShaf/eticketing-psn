<?php
require $_SERVER['DOCUMENT_ROOT'] . '/psn/config.php';

$id = $_POST['id'];
$sql = "SELECT * FROM pameran WHERE id_cawangan = '$id' AND status_pameran = 'Buka'";
$resultPmrn = mysqli_query($conn,$sql);

$out = '<option value = "">Pilih...</option>';
while($row = mysqli_fetch_assoc($resultPmrn))
{
    $out .= '<option value = '.$row['id_pameran'].'>'.$row['nama_pameran'].'</option>';
}
echo $out;
?>