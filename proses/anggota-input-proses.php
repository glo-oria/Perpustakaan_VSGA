<?php
include '../koneksi.php';
$id_anggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status="Tidak Meminjam";

if (isset($_POST['simpan'])) {
    extract($_POST);
    $nama_file = $_FILES['foto']['nama'];
    if (!empty($nama_file)) {
        // Baca lokasi file sementara dan nama file dari form (upload)
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota . "." . $tipe_file;

        // Tentukan folder untuk menyimpan file
        $folder = "../images/$file_foto";
        // Apabila file berhasil di upload
        move_uploaded_file($lokasi_file, $folder);
    } 
    else
        $file_foto = url('9Perpustakaan/images/');

        $sql = 
        "INSERT INTO tbanggota
        VALUES ('$id_anggota', '$nama', '$jenis_kelamin', '$alamat', '$status', '$file_foto')";
        $query = mysqli_query($db, $sql);

        header("location:../index.php?p=anggota");
}
?>