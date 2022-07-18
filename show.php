<?php
include('functions.php');
$pdo = connect();
$qry = $pdo->prepare('select * from anggota where no_ang = :no_ang');
$qry->execute([
 'no_ang' => $_REQUEST['no_ang']
]);
$qry->setFetchMode(PDO::FETCH_OBJ);
$row = $qry->fetch();
echo json_encode($row);
