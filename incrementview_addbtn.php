<?php
    $num=$_GET["id"];  
    $query="select * from video where ID='$num'";
    
    $result=mysqli_query($con,$query);
    
    $ans=mysqli_fetch_assoc($result);
    $name=$ans["name"];
    $viewStart=$ans["views"];
    $time=$ans["register_date"];
    $view=$ans["views"];
    $view++;
    $updatequery="update video set views='$view' where ID='$num'";
    mysqli_query($con,$updatequery);
    //for add to favorite button
    if(isset($_SESSION["username"]))
    {
        $username=$_SESSION["username"];
        $query="select * from registration where username='$username'";
        $result=mysqli_query($con,$query);
        $ans=mysqli_fetch_assoc($result);
        $fvideo=$ans["fvideo"];
        $separate=explode(",",$fvideo);
        $check=in_array($num,$separate);
        if($check)
        {   
            $GLOBALS['inside']="Remove from favorite";
        }
        else
        {
            $GLOBALS['inside']="Add to favorite";
        }
    }
    else
    {
        $GLOBALS['inside']="Add to favorite";
    }
?>