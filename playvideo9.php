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
                videoId: '242EpEFDsBA',
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
                            <iframe src="https://www.youtube.com/embed/242EpEFDsBA?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3>Sarvotam strot by neel patel || Anand pathshala(19) and vvnagar pathshala(13) birthday celebration</h3>
                    <p>60 views | 1 year ago</p>
                <button class="fav"><a class="myColor"href="videolike.php?vid=<?php echo $_GET["id"] ?>">Add to favorite</a></button>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <!-- 10 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo10.php"><img src="thumbnails/thumbnail-10.png"></a>
                        <div class="vid-info">
                            <a href="playvideo10.php">Story telling by dhvij || anand(19) and vvnag(13)...</a>
                            <small>17 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 11 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo11.php"><img src="thumbnails/thumbnail-11.png"></a>
                        <div class="vid-info">
                            <a href="playvideo11.php">Inauguration speech by nimishaben patel || anand...</a>
                            <small>30 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 12 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo12.php"><img src="thumbnails/thumbnail-12.png"></a>
                        <div class="vid-info">
                            <a href="playvideo12.php">Pathshala's teacher nimishaben sing kirtan || anand...</a>
                            <small>47 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 13 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo13.php"><img src="thumbnails/thumbnail-13.png"></a>
                        <div class="vid-info">
                            <a href="playvideo13.php">Dhyana gohel dance on achyutam keshavam song || anand...</a>
                            <small>104 views | 1 year ago</small>
                        </div>
                    </div>
                    <!-- 1 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok1.php"><img src="kirtan/thumbnail-1.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok1.php">???????????? ?????? ????????? ????????????????????? | He Mara Ghat Ma Birajta Shrinathji...</a>
                            <small>21M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok2.php"><img src="kirtan/thumbnail-2.png"></a>
                        <div class="vid-info">
                            <a href="playvideok2.php">Shrinathji Ni Zakhi 1 - Shrinathji Na Bhajan</a>
                            <small>2.8M views | 8 years ago</small>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok3.php"><img src="kirtan/thumbnail-3.png"></a>
                        <div class="vid-info">
                            <a href="playvideok3.php">Shrinathji Ni Zakhi 2 - Shrinathji Na Bhajan</a>
                            <small>452k views | 5 years ago</small>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok4.php"><img src="kirtan/thumbnail-4.png"></a>
                        <div class="vid-info">
                            <a href="playvideok4.php">Shrinathji Ni Zakhi 3 - Shrinathji Na Bhajan</a>
                            <small>141k views | 5 years ago</small>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok5.php"><img src="kirtan/thumbnail-5.png"></a>
                        <div class="vid-info">
                            <a href="playvideok5.php">SHRINATHJI NI ZANKHI PART-4 | SHRINATHJI SATSANG | SHRIN...</a>
                            <small>3.9M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok6.php"><img src="kirtan/thumbnail-6.png"></a>
                        <div class="vid-info">
                            <a href="playvideok6.php">SHRINATHJI NI ZANKHI PART-5 | SHRINATHJI SATSANG | SHRIN...</a>
                            <small>1.5M views | 4 years ago</small>
                        </div>
                    </div>
                    <!-- 1 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo1.php"><img src="thumbnails/thumbnail-1.png"></a>
                        <div class="vid-info">
                            <a href="playvideo1.php">"??????????????? ????????? ????????? ????????? ?????????"Performed by Anand Pathshala...</a>
                            <small>79 views | 5 months ago</small>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo2.php"><img src="thumbnails/thumbnail-2.png"></a>
                        <div class="vid-info">
                            <a href="playvideo2.php">NANDMAHOTSAV CELEBRATIONS BY ANAND...</a>
                            <small>621 views | 5 months ago</small>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo3.php"><img src="thumbnails/thumbnail-3.png"></a>
                        <div class="vid-info">
                            <a href="playvideo3.php">Online rangoli competition || Anand pathshala(19)...</a>
                            <small>131 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo4.php"><img src="thumbnails/thumbnail-4.png" style="border:2px solid black"></a>
                        <div class="vid-info">
                            <a href="playvideo4.php">Birthday celebration of 108 dr.shree vagishkumarji...</a>
                            <small>65 views | 1 year ago</small>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideo5.php"><img src="thumbnails/thumbnail-5.png"></a>
                        <div class="vid-info">
                            <a href="playvideo5.php">Aashray pad by delisha modi || anand(19) and vvnag...</a>
                            <small>74 views | 1 year ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>