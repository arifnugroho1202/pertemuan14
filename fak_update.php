<?
require_once 'koneksi.php';

$idfakul   = $_POST['id_fakul'];
$kodefakul =  $_POST['kode_fakul'];
$namafakul = $_POST['nama_fakul'];

if(!$kodefak||$namafak){
    echo json_encode(array('message'=>'field is empty'));
}
else{
    $query = mysqli_querry($con,"UPDATE fakultas SET kode_fakul='$kodefakul',nama_fakul='$namafakul'WHERE id_fakul= '$idfakul'");
    if($query){
        echo json_encode(array('message'=>'fakultas data sukses update.'));
    }
    else{
        echo json_encode(array('message'=>'fakultas data failed update.'));
    }
}
?>