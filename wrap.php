<?php
session_start();
include "connection.php";
if (isset($_SESSION["username"]))
{
    $username = $_SESSION["username"];
    // $text = $_POST['text'];

    $id = $_GET["vid"];
    $work = $_GET["work"];
    // echo $username;
    // echo "<br>".$id;
    $query = "select * from registration where username='$username'";
    $result = mysqli_query($con, $query);
    $ans = mysqli_fetch_assoc($result);
    $fvideo = $ans["fvideo"];
    // echo "<br>".$fvideo;
    $separate = explode(",", $fvideo);
    if ($work == "Add") 
    {
        array_push($separate, $id);
        $newfvideo = implode(",", $separate);
        // echo "<br>".$newfvideo;
        $updatequery = "update registration set fvideo='$newfvideo'  where username='$username'";
        mysqli_query($con, $updatequery);
    } 
    else if ($work == "Remove") 
    {
        // array_pop($separate);
        $key = array_search($id, $separate);
        if ($key) {
            unset($separate[$key]);
        }
        $newfvideo = implode(",", $separate);
        // echo "<br>".$newfvideo;
        $updatequery = "update registration set fvideo='$newfvideo'  where username='$username'";
        mysqli_query($con, $updatequery);
    }
    // echo "   " . $id;
    // echo $username;
    // $output = wordwrap($text, 60, "<br>");
    $output="";
    echo $output;
}
else
{
    $output="Sign in to add video into your favorite list";
    echo $output;
}
