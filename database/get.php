<?php
include 'Conn.php';

$queryResult=$connect->query("SELECT * FROM tabel-customer");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
 $result[]=$fetchData;
}

echo json_encode($result)

?>