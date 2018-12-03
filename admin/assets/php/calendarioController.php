<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once '../assets/php/classes/classDatabase.php';
require_once '../assets/php/classes/classHosted.php';


$hosted = new Hosted();

if(isset($_GET['data'])){
    $data = $_GET['data'];
} else{
    $data = date('Y-m-d');
}

$result = $hosted->getAllRoomsWithStatus($data);
$result = $result->fetchAll(PDO::FETCH_OBJ);

?>
