<?php

    include("config.php");

    $id=$_GET['id'];



    $delete = mysqli_query($connection,"delete from flower_data where no='$id'");

    if($delete){
        echo "<script> window.alert('Deleted')</script>";
        echo "<script> window.location.assign('remove.php')</script>";
    }else{
        echo "<script> window.alert('Not Delete')</script>";
        echo "<script> window.location.assign('remove.php')</script>";
    }

?>