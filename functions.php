<?php
function connect($options = [])
{
 $options = array_merge([
 'hostname' => '127.0.0.1',
 'username' => 'root',
 'password' => '',
 'dbname' => 'perpus'
 ], $options);
 $pdoConn = new PDO("mysql:host=" . $options['hostname'] . ";dbname=" . $options['dbname'], 
$options['username'], $options['password']);
 return $pdoConn;
}