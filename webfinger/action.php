<?php
    include ('connection.php');
    $act=$_GET['act'];

    if ($act=='input') {
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $alamat=$_POST['alamat'];
        $tahun=$_POST['tahun'];

        $q="INSERT INTO students (id,nama,alamat,email,angkatan) VALUES ('$id', '$nama', '$alamat', '$email', '$tahun')";
        mysqli_query($con,$q);

        $URL="form.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
    } elseif ($act=='settime') {
        $start=$_POST['start'];
        $end=$_POST['end'];

        $q="UPDATE timeallow SET startT='$start', endT='$end'";
        mysqli_query($con,$q);

        $URL="settings.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL='.$URL.'">';
    }
    
?>