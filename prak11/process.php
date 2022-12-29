<?php
$nama = $_REQUEST['name'];
$email = $_REQUEST['email'];
$alamat = $_REQUEST['address'];
$gender = $_REQUEST['gender'];
$position = $_REQUEST['position'];
$status = $_REQUEST['status'];
$koneksi = mysqli_connect("localhost:3306", "taorbs", "", "praktikum11");
$mysql = "INSERT INTO karyawan VALUES ('$nama','$email', '$alamat', '$gender','$position','$status')";

    if(mysqli_query($koneksi, $mysql)){
        echo "<h3>data submitted</h3>";
        echo nl2br("\n$nama\n $email\n $alamat\n $gender\n $position\n $status\n");
    } 
    else{
        echo "ERROR: can't submit $mysql. ". mysqli_error($conn);
    }
?>