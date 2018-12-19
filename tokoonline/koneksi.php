<?php
$koneksi=mysqli_connect("localhost","root","","database");

if(mysqli_connect_error())
{
    echo"koneksi database gagal :".mysqli_connect_error();
}

?>