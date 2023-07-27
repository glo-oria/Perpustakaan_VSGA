<?php
session_start();
$_SESSION['sesi'] = null;

include 'koneksi.php';
if(isset($_POST['submit'])){
    $username = isset($_POST['user']) ? $_POST['user'] : "";
    $password = isset($_POST['pass']) ? $_POST['pass'] : "";

    // Use mysqli_real_escape_string to prevent SQL injection
    $user = mysqli_real_escape_string($db, $user);
    $pass = mysqli_real_escape_string($db, $pass);

    $qry = mysqli_query($db, "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'");
    $sesi = mysqli_num_rows($qry);

    if($sesi == 1){
        $data_admin = mysqli_fetch_array($qry);
        $_SESSION['id_admin'] = $data_admin['id_admin'];
        $_SESSION['sesi'] = $data_admin['nm_admin'];

        echo "<script> alert('Selamat Anda berhasil login');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?user=$sesi'>";
    }else {
        echo "<script> alert('Maaf Anda Gagal Login');</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
    }
}
else{
    include("login.php");
}
?>
