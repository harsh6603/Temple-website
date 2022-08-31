<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="video.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    </head>
    <body>
        <?php 
            include "videoconnect.php";
            $query="select * from video";

            $result=mysqli_query($con,$query);

            $rows=mysqli_num_rows($result);

            while($ans=mysqli_fetch_array($result))
            {
            ?>
            <div id="myList" class="list-container">
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
    </body>
</html>
<?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>
                <?php $ans=mysqli_fetch_array($result) ?>
                <div class="vid-list">
                    <a href="<?php echo $ans["link"]?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                    <div class="vid-info">
                        <a href=<?php echo $ans["link"]?>><?php echo $ans["name"] ?></a><br>
                        <small><?php echo $ans["view_time"] ?></small>
                    </div>
                </div>