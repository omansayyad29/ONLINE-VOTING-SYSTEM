<?php
session_start();
include("connect.php");
    $adhar= $_POST['adhar'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    $check = mysqli_query($connect, "select * from user where adhar='$adhar' and password='$pass' and role='$role' ");
    if(mysqli_num_rows($check)>0)
    {
        $getGroups = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data=mysqli_fetch_array($check);
        $_SESSION['id']=$data['id'];
        $_SESSION['status']=$data['status'];
        $_SESSION['data']=$data;
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';

    }
    else{
        echo '<script>
                alert("Adhar No and Password Not Matched!");
                window.location = "../routes/Vlogin.html";
            </script>';
    }


?>