<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Job World</title>
    <script 
    src="http://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- hamburder -->
    <link rel="stylesheet" href="css/header_top.css">
    <!-- favicon -->
    <link rel="shortcut icon" style="image/png" href="img/icon.ico">
    <!-- tell ring -->
    <link rel="stylesheet" href="css/tell_ring.css">
    <!-- loader code -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="js/loader.js"></script>
    <link rel="stylesheet" href="css/loader.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="css/flag-icon.css">
    <link rel="stylesheet" href="assets/docs.css">
    <!-- jquery code -->
    <script src='https://google.com/recaptcha/api.js'></script>
</head>
<body>
<?php
    include 'connect.php';
    if(isset($_POST['dangki'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        if($username==""||$email==""||$password==""){
            echo '<p style="text-align:center;">Hay dien day du thong tin cua ban</p>';

        }
        else{
            $password=md5($password);
            $sql="INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
            $query=mysqli_query($connect,$sql);
            if(!$query!=0){
                echo'<p style="text-align:center;">ban da dang nhap thanh cong</p>';
            }else{
                echo'<p style="text-align:center;">ban da dang nhap khong thanh cong</p>';
            }
        }
    }
?>

<!-- Loading -->
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>

<!-- Languages -->
<?php
// Include LanguageHelper class
include_once('languageHelper.php');
// Gọi hàm checkLang để xem user chọn ngôn ngữ nào
$object = new LanguageHelper();
$lang = $object->checkLang();

include_once("$lang");
?>

<!-- Tell -->
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="#" class="pps-btn-img">
                <img src="img/Icon ionic-ios-call.png" alt="iconTell" width="50">
            </a>
        </div>
    </div>
</div>

<!-- Hamburger -->
<nav class="navigation" id='nav'>
    <div class="drop">
        <ul>
            <li>
                <a href="#"><i class="fa fa-globe"></i></a>
                    <ul class="navchild">     
                        <li>
                            <a href="?lang=en">
                            <span class="flag-icon flag-icon-gb"></span>
                            EN
                            </a>
                        </li>
                        <li>
                            <a href="?lang=vi">
                            <span class="flag-icon flag-icon-vn"></span>
                            VN
                            </a>
                        </li>
                        <li>
                            <a href="?lang=jp">
                            <span class="flag-icon flag-icon-jp"></span>
                            JP
                            </a>
                        </li>
                    </ul>
            </li>
        </ul>
    </div>
    <div class="logoImg" >
        <a href="index.php"><img src="img/logo.png" class="ImgHeader" width="250" height ="auto" alt=""></a>
    </div>  <!-- logo end -->
    <div id="menuToggle">
        <input type="checkbox" class="input">
        <span></span>
        <span></span>
        <span></span>
        <ul class="mcd-menu">
                    <li class="main_menu_li">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            <strong><?php echo $main ['Home']?></strong>
                        </a>
                    </li>
                    <li class="main_menu_li">
                        <a href="login.php">
                            <i class="fa fa-user"></i>
                            <strong><?php echo $main ['Login']?></strong>        
                        </a>
                    </li>
                    <li class="main_menu_li">
                        <a href="">
                            <i class="fa fa-globe"></i>
                            <strong><?php echo $main ['News']?></strong>
                        </a>
                    </li>
                    <li class="main_menu_li">
                        <a href="">
                            <i class="fa fa-comments-o"></i>
                            <strong>Blog</strong>
                        </a>
                    </li>
                    <li class="main_menu_li">
                        <a href="contact.php">
                            <i class="fa fa-envelope-o"></i>
                            <strong><?php echo $main ['Contact']?></strong>
                        </a>
                    </li>
                    <li class="float">
                        <a class="search">
                            <button><i class="fa fa-search"></i></button>
                            <input type="text">
                        </a>
                        <a href="" class="search-mobile">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
    </div>
</nav>







<!-- HTML login -->

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title"><?php echo $main['Sign in']?></h2>
                        <div class="input-field">
                            <i class="fa fa-user"></i>
                            <!-- <?php echo $main['Username']?> -->
                            <input type="text" name="username" placeholder="username">
                        </div>
                        <div class="input-field">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" placeholder="password">
                        </div>
                        <div class="rememberme">
                            <label for="rememberme">
                                <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                                Remember Me
                            </label>
                        </div>
                    
                        <div class="g-recaptcha" data-sitekey="6LfpywkaAAAAAGaMCX420jr38pQdYw7m-HWC4UrI"></div>
                        <input type="submit" name="dangnhap" class="btn solid">

                        <!-- login -->
                        <!-- <div class="login">
                            <a href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <?php echo $main ['Login']?>
                            </a>
                        </div> -->
                        <p class="social-text">Or sign in with social platforms</p>
                        <div class="social-media">
                            <a href="http://facebook.com"  class="social-icon">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                                
                            <a href="http://twitter.com" class="social-icon">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="http://gmail.com" class="social-icon"> 
                                <i class="fa fa-google"></i>
                            </a>
                        </div>
                </form>

                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title"><?php echo $main['Sign up']?></h2>
                        <div class="input-field">
                            <i class="fa fa-user"></i>
                            <input type="text" name="username" placeholder="username">
                        </div>
                        <div class="input-field">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="email" placeholder="email">
                        </div>
                        <div class="input-field">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" placeholder="password">
                        </div>
                        <div class="rememberme">
                            <label for="rememberme">
                                <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                                Remember Me
                            </label>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfpywkaAAAAAGaMCX420jr38pQdYw7m-HWC4UrI"></div>
                        <input type="submit" name="dangki" class="btn solid">
                        
                        <!-- <div class="login">
                            <a href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <?php echo $main ['Login up']?>
                            </a>
                        </div> -->
                        

                        <p class="social-text">Or sign up with social platforms</p>
                        <div class="social-media">
                            <a href="http://facebook.com" class="social-icon">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                                
                            <a href="http://twitter.com" class="social-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            
                            <a href="http://gmail.com" class="social-icon">
                                <i class="fa fa-google"></i>
                            </a>
                        </div>
                </form>
            </div>
        </div>




        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <!-- <h3>New here?</h3> -->
                    <button class="btn transparent" id="sign-up-btn"><?php echo $main['Sign up']?></button>
                </div>

                <img src="img/undraw_welcome_cats_thqn.svg" class="image" alt="">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <!-- <h3>One of us ?</h3> -->
                    <button class="btn transparent" id="sign-in-btn"><?php echo $main['Sign in']?></button>
                </div>

                <img src="img/undraw_secure_login_pdn4.svg" class="image" alt="">
            </div>
        </div>
    </div>
<script src="js/index.js"></script>
</body>
</html>