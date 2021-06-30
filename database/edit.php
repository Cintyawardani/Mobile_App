<?php
 include 'Conn.php';
 $id_cust = $_POST['id_cust'];
 $nama_cust= $_POST['nama_cust'];
 $email_cust = $_POST['email_cust'];
 $no_tlp_cust = $_POST['no_tlp_cust'];
 $alamat_cust = $_POST['alamat_cust'];
 $jenis_kelamin = $_POST['jenis_kelamin'];

 $connect->query("INSERT INTO tabel_customer (id_cust,nama_cust,email_cust,no_tlp_cust,alamat_cust,jenis_kelamin) VALUES('".$itemcode."','".$id_cust."','".$nama_cust."','".$email_cust."','".$no_tlp_cust."','".$alamat_cust."','".jenis_kelamin."')")
?>