<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="library.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <title>Video Page</title>
  <style>
    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none;
        box-shadow: none;
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
  <?php
  include "videoconnect.php";
  include "connection.php";
  include "convert.php";
  include "time_period.php";

  if (isset($_SESSION["username"]))
  {
    $username = $_SESSION["username"];
    // $id=$_GET["vid"];
    // echo $username;
    // echo "<br>".$id;
    $query = "select * from registration where username='$username'";
    $result = mysqli_query($con, $query);
    $ans = mysqli_fetch_assoc($result);
    $fvideo = $ans["fvideo"];
    // echo "<br>".$fvideo;
    $separate = explode(",", $fvideo);
    // array_push($separate,$id);
    // $newfvideo=implode(",",$separate);
    // echo "<br>".$newfvideo;
    // $updatequery="update registration set fvideo='$newfvideo'  where username='$username'";
    // mysqli_query($con,$updatequery);
    // $query="select * from video where ID='$id'";
    // $result=mysqli_query($con,$query);
    // $ans=mysqli_fetch_assoc($result);
    // $link=$ans["link"];
    // header("location:$link");
  ?>
    <div class="right-slidebar">
      <div class="title">
        <h3>Favorite Videos</h3>
      </div>
      <?php
      foreach ($separate as $i) 
      {
        if ($i != 0 &&  $i != "") 
        {
          $query = "select * from video where ID='$i'";
          $result = mysqli_query($con, $query);
          $ans = mysqli_fetch_assoc($result);
        ?>
          <div class="side-video-list">
            <a class="small-thumbnail" href="<?php echo $ans["link"]; ?>?id=<?php echo $ans["ID"]; ?>"><img src="<?php echo $ans["path"] ?>"></a>
            <div class="vid-info">
              <a href="<?php echo $ans["link"]; ?>?id=<?php echo $ans["ID"]; ?>"><?php echo $ans["name"]; ?></a>
              <small><?php echo abbrNum($ans["views"]) ?> views &bull; <?php echo old($ans["register_date"]) ?></small>
            </div>
          </div>
        <?php
        }
      }
      ?>
    </div>
  <?php
  }
  ?>