<?php

    include 'koneksi.php';

    // penghubung
    if(isset($_POST['input'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // ambil data dari database
        $data = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($data)){
            echo "login berhasil";
            header("Location: https://rayzen7.github.io/Setio-Profile/");
            exit();
        } else {
            echo "login gagal, maaf password/username anda salah";
        }
    }

?>