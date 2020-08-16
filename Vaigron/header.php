
<?php 
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="style/style.css" rel="stylesheet"/>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
            <a class="navbar-brand" href="#">
                <div id="logoimg">
                    <img src="images/Logo1.png" width="100em" height="60em" 
                    style="border-radius: 1em;"
                    ></div><!--end of logoimg-->
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-end ">     
            <a class="nav-link" href="index.php"><li class="nav-item">HOME</li></a>
            <a class="nav-link" href=""><li class="nav-item">ABOUT US</li></a>
            <a class="nav-link" href=""><li class="nav-item">SUPPORT</li></a>
            <a class="nav-link" href=""><li class="nav-item">CONTACT US</li></a>
            <a class="nav-link" href="Signup.php"><li class="nav-item">Profile</li></a>
            <a class="nav-link" href=""><li class="nav-item">Wishlist</li></a>
            <a class="nav-link" href=""><li class="nav-item">Bag</li></a>
                            <?php  
                                if (isset($_SESSION["user_det"]["uname"])) {
                                    echo '<li class="nav-item"><a class="nav-link" href="logout.php">logout ('.$_SESSION["user_det"]["uname"].')</li></a>';
                                }
                            ?>
            </ul>
        </div>
        </nav>
        
        
