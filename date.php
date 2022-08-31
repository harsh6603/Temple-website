<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $date1 = "2007-03-24";
    $date2 = "now";
    
    $diff = abs(strtotime($date2) - strtotime($date1));
    
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    
    printf("%d years, %d months, %d days\n", $years, $months, $days);
    
    $d=strtotime("05/25/2020");
    echo $d;
    echo date("M j,Y",strtotime("05/25/2020"));

    $date1 = new DateTime("2007-03-24");
    $date2 = new DateTime("now");
    $interval = $date1->diff($date2);
    echo "<br>difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
    
    // shows the total amount of days (not divided into years, months and days like above)
    echo "<br>difference " . $interval->days . " days ";
    ?>
</body>
</html>