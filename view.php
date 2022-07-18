<?php
include('functions.php');
$pdo = connect();
$qry = $pdo->query('select * from anggota');
$qry->setFetchMode(PDO::FETCH_OBJ);
$row = $qry->fetchAll();
echo json_encode($row);