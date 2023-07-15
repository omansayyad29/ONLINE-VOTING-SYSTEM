<?php
include("connect.php");
$reset = mysqli_query($connect,"update user set status=1");
if($reset)
{
    echo '<script>
    alert("Voting Stop Sucessfully");
    window.location = "../";
    </script>';
}
?>   
