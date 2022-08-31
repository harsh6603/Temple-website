<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Index Website
    </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">    
    <style>
        figure img{
            width:380px;
            height:800px;
        }
        @media(max-width:400px)
        {
            figure img{
                width:190px;
                height:500px
            }
        }
    </style>
</head>

<body>
    <section id="nav-bar">
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
                        </li>
                        <li class="nav-item">
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

    <section id="banner">
        <div class="text-box">
            <h1>Shri Dhwarkadhish Bethak Mandir<br>Anand</h1>
            <a href="about-temple.php" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>
    
    <!-------------------------Images---------------------------->

    <!-- <div style="background-color: #f8f9fa">
        <div class="small-container-image">
            <h1 class="title">Daily Darshan</h1>
            <div id="slider">
                <figure>
                    <img class="set" src="DD/30-1.jpeg">
                    <img class="set" src="DD/30-3.jpeg">
                    <img class="set" src="DD/30-1.jpeg">
                    <img class="set" src="DD/30-3.jpeg">
                    <img class="set" src="DD/30-1.jpeg">
                </figure>
            </div>
        </div>
    </div> -->

    <div style="background-color: #f8f9fa">
        <div class="small-container-image">
            <h1 class="title">Daily Darshan</h1>
            <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="set" src="DD/28-3.jpeg"></div>
                <div class="swiper-slide"><img class="set" src="DD/28-3.jpeg"></div>
                <div class="swiper-slide"><img class="set" src="DD/28-3.jpeg"></div>
                <div class="swiper-slide"><img class="set" src="DD/28-3.jpeg"></div>
                <div class="swiper-slide"><img class="set" src="DD/28-3.jpeg"></div>
                <div class="swiper-slide"><img class="set" src="DD/28-3.jpeg"></div>
                <!-- <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div> -->
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    
    <!-- --------------------------End Images---------------------------- -->
    <!-- --------------------------videos--------------------------------------- -->

    <div class="video-container">
        <h1 class="title">Videos</h1>
    </div>
    <!-- <div class="list-container">
        <div class="vid-list">
            <a href="playvideo1.php"><img src="thumbnails/thumbnail-1.png" class="thumbnail"></a>
            <div class="vid-info">
                <a href="playvideo1.php">"પ્રભુ કરે સો ભલી કરે" Performed By Anand Path...</a>
                <small>79 views | 5 months ago</small>
            </div>
        </div>
        <div class="vid-list">
            <a href="playvideo2.php"><img src="thumbnails/thumbnail-2.png" class="thumbnail"></a>
            <div class="vid-info">
                <a href="playvideo2.php">Nandmahotsav Celebration By Anand Pathshala...</a>
                <small>621 views | 5 months ago</small>
            </div>
        </div>
        <div class="vid-list">
            <a href="playvideo3.php"><img src="thumbnails/thumbnail-3.png" class="thumbnail"></a>
            <div class="vid-info">
                <a href="playvideo3.php">Online Rangoli Compitition | Anand Pathshala(19)...</a>
                <small>131 views | 1 year ago</small>
            </div>
        </div>
        <div class="vid-list">
            <a href="playvideo4.php"><img src="thumbnails/thumbnail-4.png" class="thumbnail" style="border:2px solid black"></a>
            <div class="vid-info">
                <a href="playvideo4.php">Birthday Celebration Of 108 Dr.Shree Vagishkumarji...</a>
                <small>65 views | 1 year ago</small>
            </div>
        </div>
        <div class="vid-list">
            <a href="playvideo5.php"><img src="thumbnails/thumbnail-5.png" class="thumbnail"></a>
            <div class="vid-info">
                <a href="playvideo5.php">Aashray Pad By Delisha Modi | Anand(19) And Vvnagar...</a>
                <small>74 views | 1 year ago</small>
            </div>
        </div>
    </div> -->
    <?php 
    include "videoconnect.php";
    include "convert.php";
    include "time_period.php";

    $query="select * from video where views>1000000 limit 5";

    $result=mysqli_query($con,$query);

    $rows=mysqli_num_rows($result);

    ?>
    <div class="list-container">
        <?php
        while($ans=mysqli_fetch_array($result))
        {
        ?>
            <div class="vid-list">
                <a href="<?php echo $ans["link"];?>?id=<?php echo $ans["ID"];?>"><img src="<?php echo $ans["path"] ?>" class="thumbnail"></a>
                <div class="vid-info">
                    <a href="<?php echo $ans["link"]?>?id=<?php echo $ans["ID"]; ?>"><?php echo $ans["name"] ?></a>
                    <small><?php echo abbrNum($ans["views"]) ?> views  &bull; <?php echo old($ans["register_date"]) ?></small> 
                </div>                                      
            </div>
        <?php   
        }
        ?>
    </div>

    <!-- ---------------------------------end videos--------------------------------------- -->
    
    <!-- --------------About Us--------------- -->

    <div class="main-aboutus">
        <div class="small-container">
            <h1 class="title">ABOUT US</h1>
            <div class="row2">
                <div class="aboutus-col">
                    <img src="shrinathji-circle.jpg">
                    <h5>Shrinathji</h5>
                    <p>Shrinathji is the real form of Lord Shri Krishna situated at the door of
                       Nikunj. You are calling your devotees to you by raising your left (left) hand...</p>
                    <a href="about-shrinathji.php" class="moreread">Read More</a>
                </div>
                <div class="aboutus-col">
                    <img src="Mahaprabhuji-circle.jpg">
                    <h5>Mahaprabhuji</h5>
                    <p>A Guru mean - a brilliant Character who commands respect. He must be great. 
                       He must be the best also. He must be capable of lending the boat of life...</p>
                    <a href="about-mahaprabhuji.php" class="moreread">Read More</a>
                </div>
                <div class="aboutus-col">
                    <img src="yamunaji-circle.jpg">
                    <h5>Yamunaji</h5>
                    <p>In pushtimarg, two mothers are popular. One is Shree Yashodaji and the other is 
                        Shree Yamunaji. Shree Yamunaji is the mother of...</p>
                    <a href="about-yamunaji.php" class="moreread">Read More</a>
                </div>
                <div class="aboutus-col">
                    <img src="Pustimarg-circle.jpg">
                    <h5>Pusti Marg</h5>
                    <p>According to Shreemad Vallabhacharyaji, following are some of apshri’s teachings 
                       and principles about Ved marg. According to Shree Bhagwa...</p>
                    <a href="about-pustimarg.php" class="moreread">Read More</a>
                </div>
                <div class="aboutus-col">
                    <img src="bawashri-circle.gif">
                    <h5>Pu Bawa Shri</h5>
                    <p>Dr. Vagishkumar Goswami was born to Trutiya Gruhadhish Kankroli Naresh Pujya Goswami 
                        108 Shree Vrajeshkumar Maharajshri and Pujya...</p>
                    <a href="about-bawashri.php" class="moreread">Read More</a>
                </div>
                <div class="aboutus-col">
                    <img src="bethakmandir-circle.jpg">
                    <h5>Temple</h5>
                    <p>There is a fundamental difference between a Bethakji and a Gaadiji.When we go on our travels,
                        we witness places which are mostly known as...</p>
                    <a href="about-temple.php" class="moreread">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-------------------end AboutUs---------------------->

    <!-- ------------------------social media section---------------------------- -->

    <div id="social-media">
        <div class="container text-center">
            <h1>Find Us On Social Media</h1>
            <div class="social-icons">
                <a href="https://www.facebook.com/Shree-Dwarkadhish-Bethak-Mandir-Anand-112647566774161/?msclkid=0436edfdb4e911ecb36a04f4f51d36f8"><img src="facebook-icon.png"></a>
                <a href="https://www.instagram.com/bethak_mandir_anand/?hl=en"><img src="instagram-icon.png"></a>
                <a href="#"><img src="whatsapp-icon.png"></a>
                <a href="https://www.youtube.com/channel/UCFuXo9QsJtWksWXHU3_zuqQ/videos"><img src="youtube-icon.jpg"></a>
            </div>
        </div>
    </div>

    <!-- ------------------------------End social media section---------------------------- -->

    <!-- -----------------------------------footrer------------------------------------------- -->

    <div class="footer">
        <div class="row1">
            <div class="footer-col footer-box">
                <p><b>CONTACT US</b></p>
                <p><i class="fa fa-map-marker"></i>Shri Dhwarkadhish Bethak Manir, Anand</p>
                <p><i class="fa fa-phone"></i>9898745623</p>
                <p><i class="fa fa-envelope-o"></i>bethak5656@gmail.com</p>
            </div>
            <div class="footer-col footer-box">
                <p><b>SUBSCRIBE NEWSLATTER</b></p>
                <input type="email" class="form-control" placeholder="Your Email">
                <button type="button" class="hero-btn">Subscribe</button>
            </div>
        </div>
        <div>
            <hr>
            <p class="copyright">Website crafted by Shri Dhwarkadhish Bethak Mandir, Anand</p>
        </div>
    </div>
    <!-- ---------------------------------------end footrer----------------------------------- -->

</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="index.js"></script>
</html>