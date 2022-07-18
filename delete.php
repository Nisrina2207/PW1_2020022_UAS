<?php
include('functions.php');
$pdo = connect();
$qry = $pdo->prepare('delete from anggota where no_ang = :no_ang');
$qry->execute([
 'no_ang' => $_REQUEST['no_ang']
]);
$returnValue = [
 'type' => 'success',
 'message' => 'Data berhasil di Hapus !'
];
echo json_encode($returnValue);