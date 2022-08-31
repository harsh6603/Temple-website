<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <title>Video player</title>
        <link rel="stylesheet" href="playvideo.css">
        <script>
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
          
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
          
            // 3. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;
            function onYouTubeIframeAPIReady() {
              player = new YT.Player('player', {
                width: '100%',
                videoId: 'VjD0WceBjt8',
                playerVars: {'autoplay': 1, 'playsinline': 1 },
                events: {
                  'onReady': onPlayerReady
                }
              });
            }
          
            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
            //    event.target.mute();
              event.target.playVideo();
            }
        </script>
    </head>
    <body>
        <?php              
            include "videoconnect.php";
            include "connection.php";
            include "incrementview_addbtn.php";
            include "convert.php";
            include "time_period.php"
        ?>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="image-dailydarshan.php">IMAGES</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="video-all.php">VIDEOS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about-shrinathji.php">ABOUT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                      </li><li class="nav-item">
                        <a class="nav-link" href="library.php">LIBRARY</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="loginbtn">
                    <?php
                        include "loginBtn.php";
                    ?>
                </div>
              </nav>
        </section>


        <div class="container play-container">
            <div class="row">
                <div class="play-video">
                    <div class="responsive">    
                        <div id="player">
                            <iframe src="https://www.youtube.com/embed/VjD0WceBjt8?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3><?php echo $name?></h3>
                    <p><?php echo $viewStart ?> views  &bull; <?php echo date("M j,Y",strtotime($time)); ?></p>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <button class="fav" name="like" id="like"><a id="insideBtn" class="myColor"><?php echo $inside ?></a></button>
                    </form>
                    <p class="err"></p>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <?php
                        include "playsuggestion.php";
                    ?>
                </div>
            </div>
        </div>
    </body>
    <script>
        like=document.getElementById("like");
        insideBtn=document.getElementById("insideBtn");
        like.addEventListener("click",(e) => {
            url1="";
            e.preventDefault();
            if(insideBtn.innerHTML=="Add to favorite")
                url1="wrap.php?vid=<?php echo $_GET["id"] ?>&work=Add";
            else if(insideBtn.innerHTML=="Remove from favorite")
                url1="wrap.php?vid=<?php echo $_GET["id"] ?>&work=Remove";
            $.ajax({
            method: "POST",
            url: url1,
            data: { }
            })
            .done(function( response ) {
                $("p.err").html(response);
                changeBtn(response);
            });
        })

        function changeBtn(res)
        {
            if(res=="")
            {
                insideBtn=document.getElementById("insideBtn");
                if(insideBtn.innerHTML=="Add to favorite")
                    insideBtn.innerHTML="Remove from favorite";
                else if(insideBtn.innerHTML=="Remove from favorite")
                    insideBtn.innerHTML="Add to favorite";
            }
        }
    </script>
</html>