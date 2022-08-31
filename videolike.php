<?php
    session_start();
    include "videoconnect.php";
    include "connection.php";
    $username=$_SESSION["username"];
    $id=$_GET["vid"];
    echo $username;
    echo "<br>".$id;
    $query="select * from registration where username='$username'";
    $result=mysqli_query($con,$query);
    $ans=mysqli_fetch_assoc($result);
    $fvideo=$ans["fvideo"];
    echo "<br>".$fvideo;
    $separate=explode(",",$fvideo);
    array_push($separate,$id);
    $newfvideo=implode(",",$separate);
    echo "<br>".$newfvideo;
    $updatequery="update registration set fvideo='$newfvideo'  where username='$username'";
    mysqli_query($con,$updatequery);
    $query="select * from video where ID='$id'";
    $result=mysqli_query($con,$query);
    $ans=mysqli_fetch_assoc($result);
    $link=$ans["link"];
    header("location:$link");
?>