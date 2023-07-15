<?php
include("connect.php");
$reset = mysqli_query($connect,"update user set votes=0");
$reset1=mysqli_query($connect,"update user set status=0");
if($reset & $reset1)
{
    echo '<script>
    alert("Reset Sucessful!");
    window.location = "../";
    </script>';
}
?>   

