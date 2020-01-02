<?php
include'koneksi.php'
$kodefak = $_POST['kode_fak'];
$namafak = $_POST['nama_fak'];
if(!$kodefak|| $namafak){
    echo json_encode(array('message'=>'required failed'));
}
else{
    $query = mysqli_query($con,"INSERT Fakultas('','$kodefak','$namafak')");
    if($query){
        echo json_encode(array('message'=>'fakultas data sukses added.'));
    }
    else{
        echo json_encode(array('message'=>'fakultas data failed to add.'));
    }
}
?>