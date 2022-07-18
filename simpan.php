<?php
include('functions.php');
$pdo = connect();
$qry = $pdo->prepare('select count(1) as counts
 from anggota where no_ang = :no_ang');
$qry->execute([
 'no_ang' => $_REQUEST['txtNo']
]);
$qry->setFetchMode(PDO::FETCH_OBJ);
$row = $qry->fetch();
if ($row->counts < 1) {
 // insert new data
 $qry = $pdo->prepare('insert into anggota(no_ang, nm_ang)
 values(:no_ang, :nm_ang)');
 $qry->execute([
 'no_ang' => $_REQUEST['txtNo'],
 'nm_ang' => $_REQUEST['txtNama']
 ]);
 $returnValue = [
 'type' => 'success',
 'message' => 'Data berhasil di Tambahkan !'
];