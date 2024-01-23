<?php
    include("config.php");

    if(isset($_POST['daftar'])){
        // ambil data dari formulir

        $nama = $_POST['nama'];

        $jk = $_POST['jenis_kelamin'];
        
        $alamat = $_POST['alamat'];

        $nt = $_POST['no_telepon'];

        $email = $_POST['email'];

        // buat query

        $sql = "INSERT INTO data_guru (nama, jenis_kelamin, alamat, no_telepon, email) 
        VALUE ('$nama', '$jk', '$alamat', '$nt', '$email')";

        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?

        if($query) {
            header('Location: index.php?status=sukses');
        // kalau berhasil alihkan ke halaman index.php dengan status-sukses header('Location: index.php?status=sukses');
        }else{
            
            header('Location: index.php?status=gagal');
        }
    }else{
        die("Akses dilarang...");
    }
?>