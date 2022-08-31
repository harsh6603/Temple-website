<?php
    $num=$_GET["id"];
    $randomnNum=array();
    if($num<20)
        $n=range(1,25);
    else
        $n=range(15,42);

    shuffle($n);

    for ($x=0; $x< 16; $x++)
        $randomnNum[$x]=$n[$x];

    //if current video id is present then remove
    $key = array_search($num, $randomnNum);
    if($key){
        unset($randomnNum[$key]);
    }

    foreach($randomnNum as $i)
    {
        $query="select * from video where ID='$i'";
        $result=mysqli_query($con,$query);
        $ans=mysqli_fetch_assoc($result);
        ?>
        <div class="side-video-list">
            <a class="small-thumbnail" href="<?php echo $ans["link"];?>?id=<?php echo $ans["ID"];?>"><img src="<?php echo $ans["path"] ?>"></a>
            <div class="vid-info">
                <a href="<?php echo $ans["link"];?>?id=<?php echo $ans["ID"];?>"><?php echo $ans["name"] ?></a>
                <small><?php echo abbrNum($ans["views"]) ?> views  &bull; <?php echo old($ans["register_date"]) ?></small>
            </div>
        </div>
        <?php
    }
?>