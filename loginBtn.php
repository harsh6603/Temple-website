<?php
    if(isset($_SESSION["username"]))
    {
        ?>
            <a href="logout.php" onclick="logout()">
                Hello <?php echo $_SESSION["username"]; ?>
            </a>
            <script>
                function logout()
                {
                    confirm("Are you sure you want to logout?");
                }
            </script>
        <?php
    }
    else
    {
         ?>
            <a href="loginform.php">
                <i class="fa fa-user-circle"></i>
            </a>
        <?php
    }
?>