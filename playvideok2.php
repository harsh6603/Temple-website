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
                videoId: 'SeyEn9My6Mk',
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
                            <iframe src="https://www.youtube.com/embed/SeyEn9My6Mk?autoplay=1" title="YouTube video player" 
                            frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3>Shrinathji Ni Zakhi 1 - Shrinathji Na Bhajan</h3>
                    <p>2.8M views | 8 years ago</p>
                <button class="fav"><a class="myColor"href="videolike.php?vid=<?php echo $_GET["id"] ?>">Add to favorite</a></button>
                </div>
                <div class="right-slidebar">
                    <div class="title">
                        <h3>More Videos</h3>
                    </div>
                    <!-- 3 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok3.php"><img src="kirtan/thumbnail-3.png"></a>
                        <div class="vid-info">
                            <a href="playvideok3.php">Shrinathji Ni Zakhi 2 - Shrinathji Na Bhajan</a>
                            <small>452k views | 5 years ago</small>
                        </div>
                    </div>
                    <!-- 8 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok8.php"><img src="kirtan/thumbnail-8.png"></a>
                        <div class="vid-info">
                            <a href="playvideok8.php">SHRINATHJI NI ZAKHI PART - 7 | NEW SHRINATHJI SATSUNG GUJ...</a>
                            <small>233K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok9.php"><img src="kirtan/thumbnail-9.png"></a>
                        <div class="vid-info">
                            <a href="playvideok9.php">SHRINATHJI NI ZAKHI PART-8 | ????????????????????????????????? ?????? ???????????? | BEST BHAJAN</a>
                            <small>618K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 10 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok10.php"><img src="kirtan/thumbnail-10.png"></a>
                        <div class="vid-info">
                            <a href="playvideok10.php">SHRINATHJI NI ZAKHI PART-9 | ????????????????????????????????? ?????? ???????????? | BEST BHA...</a>
                            <small>2.2M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 11 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok11.php"><img src="kirtan/thumbnail-11.png"></a>
                        <div class="vid-info">
                            <a href="playvideok11.php">SHRINATHJI NI ZANKHI PART-10 | SHRINATHJI SATSANG | 8...</a>
                            <small>308K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 12 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok12.php"><img src="kirtan/thumbnail-12.png"></a>
                        <div class="vid-info">
                            <a href="playvideok12.php">SHRINATHJI NI ZANKHI PART-11 | SHRINATHJI SATSANG | K...</a>
                            <small>311K views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 13 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok13.php"><img src="kirtan/thumbnail-13.png"></a>
                        <div class="vid-info">
                            <a href="playvideok13.php">SHRINATHJI NI ZANKHI PART-12 | ???????????? ??????????????? ??????????????? ??????????????? ??????</a>
                            <small>855K views | 3 years ago</small>
                        </div>
                    </div>

                    <!-- 14 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok14.php"><img src="kirtan/thumbnail-14.png"></a>
                        <div class="vid-info">
                            <a href="playvideok14.php">SHRINATHJI NI ZANKHI - 13 | ?????????????????? ????????? ?????? ??? ????????? ???????????? ???????????? | ???????????????...</a>
                            <small>300K views | 3 years ago</small>
                        </div>
                    </div>

                    <!-- 15 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok15.php"><img src="kirtan/thumbnail-15.png"></a>
                        <div class="vid-info">
                            <a href="playvideok15.php">8 SHAMA NA DARSHAN | SHRINATHJI NI ZANKHI...</a>
                            <small>1.6M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 16 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok16.php"><img src="kirtan/thumbnail-16.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok16.php">Shrinathji Satsang (Part 1) | ??????????????????????????? ?????????????????? | Shrinathji...</a>
                            <small>4.2M views | 6 years ago</small>
                        </div>
                    </div>
                    <!-- 17 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok17.php"><img src="kirtan/thumbnail-17.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok17.php">??????????????????????????? ?????????????????? 2 | Shrinathji Satsang Part 2 | Shrinathji...</a>
                            <small>267K views | 6 years ago</small>
                        </div>
                    </div>

                    <!-- 18 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok18.php"><img src="kirtan/thumbnail-18.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok18.php">???????????? ??????????????? ???????????? ????????? | Shree Krishna Sharnam Mamah...</a>
                            <small>4.5M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 19 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok19.php"><img src="kirtan/thumbnail-19.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok19.php">????????? ??????????????? ????????????????????? ???????????? | Ami Bhareli Najaryu Rakho | Hemant...</a>
                            <small>6M views | 4 years ago</small>
                        </div>
                    </div>

                    <!-- 20 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok20.php"><img src="kirtan/thumbnail-20.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok20.php">???????????? ?????? ????????? ?????????????????? ????????? | Chalo Re Jaiye | Shree Krushna Bhajan...</a>
                            <small>2.4M views | 2 years ago</small>
                        </div>
                    </div>

                    <!-- 21 -->
                    <div class="side-video-list">
                        <a class="small-thumbnail" href="playvideok21.php"><img src="kirtan/thumbnail-21.jpg"></a>
                        <div class="vid-info">
                            <a href="playvideok21.php">??????????????? ????????? ??????????????????????????? | Mathura Ma Shreenathji | Hemant...</a>
                            <small>12K views | 7 months ago</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>