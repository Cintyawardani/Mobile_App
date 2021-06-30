<?php

$connect = new mysqli("localhost","root","","tabel_customer");

if($connect) {
 echo "Connection Success";
}else{
 echo "Connection Failed";
 exit();
}