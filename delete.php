<?
require_once 'koneksi.php'

$idfakul = $_POST['id_fakul'];

if(!$idfakul){
    echo json_encode(array('message'=>'field empty.'));
}
else{
    $query = mysqli_query($con, "DELETE FROM fakultas WHERE id_fakul= '$idfakul'");
if{
echo json_encode(array('message'=>'fakultas data sukses deleted.'));
}
else{
    echo json_encode(array('message'=>'fakultas data failed deleted.'));
}
}
?>
