<?php
 include 'Conn.php';

 $id=$_POST['id_customer'];
 $connect->query("DELETE FROM tabel_customer WHERE id=".$id_customer);

?>