<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job World</title>
    <link rel="stylesheet" href="css/job_02.css">
    <link rel="stylesheet" href="css/fixedsticky.css">
    <!-- slider_image -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- hamburger -->
    <link rel="stylesheet" href="css/header_job.css">
    <!-- ung tuyen css -->
    <link rel="stylesheet" href="css/ung_tuyen.css">
    <!-- favicon -->
    <link rel="shortcut icon" style="image/png" href="img/icon.png">
    <!-- chuyen tap -->
    <link rel="stylesheet" href="css/tabs.css">
    <script src="js/tabs.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap link -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- flag-icon -->
    <link rel="stylesheet" href="css/flag-icon.css">
    <!-- <link rel="stylesheet" href="assets/docs.css"> -->
    <!-- <script 
    src="http://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script> -->
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <!-- tell ring -->
    <link rel="stylesheet" href="css/tell_ring.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- loader -->
    <script src="js/loader.js"></script>
    <script src="js/change_tab.js"></script>
    <link rel="stylesheet" href="css/loader.css">
    <!-- wow js -->
    <script type="text/javascript">
        new WOW().init();
    </script>
</head>
<body>
<!-- Loading -->
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
<!-- Top page -->
<a class="gotopbtn wow slideInRight" data-wow-duration="2s" href="#"><i class="fa fa-angle-double-up"></i> </a>
<!-- Languages -->
<?php
    // Include LanguageHelper class
    include_once('languageHelper.php');
    // Gọi hàm checkLang để xem user chọn ngôn ngữ nào
    $object = new LanguageHelper();
    $lang = $object->checkLang();

    include_once("$lang");
?>
<!-- header -->
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
                <!-- <ul>
                    <li><a href="#"><i class="fa fa-globe"></i>Mission</a></li>
                    <li>
                        <a href="#"><i class="fa fa-group"></i>Our Team</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
                            <li>
                                <a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                    <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                </ul> -->
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
<!-- Tell -->
<div class="hotline-phone-ring-wrap wow slideInLeft" data-wow-duration="2s">
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

<!-- icon -->
<!-- <div class="social-media wow slideInLeft" data-wow-duration="2s" >
    <a href="http://facebook.com" class="social-icon">
        <i class="fa fa-facebook"></i>
    </a>
                                
    <a href="http://twitter.com" class="social-icon">
        <i class="fa fa-twitter"></i>
    </a>
                            
    <a href="http://gmail.com" class="social-icon">
        <i class="fa fa-google-plus"></i>
    </a>
</div> -->

<!--search -->
<div class="prefectureTopUpperAreaWrap">
    <section class="ImgWrap">
        <img src="" class="wow slideInLeft" data-wow-duration="2s" alt="">
    </section>

    <section class="prefectureTopUpperAreaInner wow slideInRight" data-wow-duration="2s">
        <marquee behavior="" direction="left">
            <p style="color:lavenderblush;font-size:20px;">chào mừng mọi người đến với trang web tìm việc Job World chúng tôi sẽ mang đến trải nghiệm tốt nhất về công việc cho các bạn.Hãy nhanh tay truy cập và tìm những công việc phù hợp cho mình ngay nào</p>
        </marquee>
        <div class="bgAddColorPcWrap">
            <div class="prefectureTopCountWrap floatL">
                <p class="prefectureTopCountInner"></p>
            </div>
            <div class="prefectureTopSearch">
                <div class="prefectureTopSearchInnerWrap">
                    <div class="prefectureTopSearchInnerTextWrap">
                        <input type="text" placeholder="Search" autocomplete="off">
                        <a class="prefectureTopTriangleBtn jsCloseBtn"></a>
                    </div>
                    <input class="inputTxt" type="submit" value="検索">
                </div>
            </div>
            <nav class="prefectureTopNavWrap">
                <ul class="prefectureTopBtnWrap">
                    <li class="prefectureTopBtnbox shadow">
                        <a href="#" onclick="document.getElementById('id01').style.display='block'" class="modalOpen modalArea">
                            <img src="img/area.png" alt="地図" class="btnMapImage">
                            <p><?php echo $main ['area']?></p>
                        </a>
                    </li>
                    <!-- đây là modal area -->
                    <div id="id01" class="modal">
                        <div class="modal-content wow bounceInUp" data-wow-duration="1s">
                            <div class="container_01">
                                <div class="modalHeaderShow">
                                    <img src="img/area.png" alt="">
                                    <h3>アリアから探す</h3>
                                </div>
                                <div class="modalContentFooter">
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="1">
                                                    <a href="#"></a>
                                                    <input name="" id="1" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="2">
                                                    <a href="#"></a>
                                                    <input name="" id="2" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="3">
                                                    <a href="#"></a>
                                                    <input name="" id="3" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="4">
                                                    <a href="#"></a>
                                                    <input name="" id="4" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="5">
                                                    <a href="#"></a>
                                                    <input name="" id="5" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="6">
                                                    <a href="#"></a>
                                                    <input name="" id="6" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="7">
                                                    <a href="#"></a>
                                                    <input name="" id="7" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="8">
                                                    <a href="#"></a>
                                                    <input name="" id="8" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="9">
                                                    <a href="#"></a>
                                                    <input name="" id="9" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="10">
                                                    <a href="#"></a>
                                                    <input name="" id="10" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="11">
                                                    <a href="#"></a>
                                                    <input name="" id="11" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="12">
                                                    <a href="#"></a>
                                                    <input name="" id="12" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="13">
                                                    <a href="#"></a>
                                                    <input name="" id="13" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overflowBtn">
                                <button onclick="document.getElementById('id01').style.display='none'" type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">キャンセル</span>
                                </button>
                                <button type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">この条件で探す</span>
                                </button>
                                </div>
                        </div>
                    </div>

                    <li class="prefectureTopBtnbox shadow">
                        <a href="#" onclick="document.getElementById('id02').style.display='block'" class="modalOpen modalArea" class="modalOpen modalStation">
                            <img src="img/Icon_subway.png" alt="電車" class="btnTrainImage">
                            <p><?php echo $main ['Stations']?></p>
                        </a>
                    </li>
                        <!-- đây là modal subway -->
                    <div id="id02" class="modal">
                        <div class="modal-content wow bounceInUp" data-wow-duration="1s">
                            <div class="container_01">
                                <div class="modalHeaderShow">
                                    <img src="img/Icon_subway.png" alt="">
                                    <h3>駅・路線</h3>
                                </div>
                                <div class="modalContentFooter">
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="14">
                                                    <a href="#"></a>
                                                    <input name="" id="14" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="15">
                                                    <a href="#"></a>
                                                    <input name="" id="15" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="16">
                                                    <a href="#"></a>
                                                    <input name="" id="16" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="17">
                                                    <a href="#"></a>
                                                    <input name="" id="17" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="18">
                                                    <a href="#"></a>
                                                    <input name="" id="18" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="19">
                                                    <a href="#"></a>
                                                    <input name="" id="19" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="20">
                                                    <a href="#"></a>
                                                    <input name="" id="20" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="21">
                                                    <a href="#"></a>
                                                    <input name="" id="21" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="22">
                                                    <a href="#"></a>
                                                    <input name="" id="22" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="23">
                                                    <a href="#"></a>
                                                    <input name="" id="23" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="24">
                                                    <a href="#"></a>
                                                    <input name="" id="24" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="25">
                                                    <a href="#"></a>
                                                    <input name="" id="25" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="26">
                                                    <a href="#"></a>
                                                    <input name="" id="26" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="27">
                                                    <a href="#"></a>
                                                    <input name="" id="27" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">横浜市</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overflowBtn">
                                <button onclick="document.getElementById('id02').style.display='none'" type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">キャンセル</span>
                                </button>
                                <button type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">この条件で探す</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <li class="prefectureTopBtnbox shadow">
                        <a href="#" onclick="document.getElementById('id03').style.display='block'" class="modalOpen modalOccupation">
                            <img src="img/Icon-drink.png" alt="drink" class="btnHitoImage">
                            <p><?php echo $main ['Type']?></p>
                        </a>
                    </li>
                        <!-- đây là modal type -->
                    <div id="id03" class="modal">
                        <div class="modal-content wow bounceInUp" data-wow-duration="1s">
                            <div class="container_01">
                                <div class="modalHeaderShow">
                                    <img src="img/Icon-drink.png" alt="">
                                    <h3>種類から探す</h3>
                                </div>
                                <div class="modalContentFooter">
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="28">
                                                    <a href="#"></a>
                                                    <input name="" id="28" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">飲食・フード</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="29">
                                                    <a href="#"></a>
                                                    <input name="" id="29" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">販売・接客・サービス</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="30">
                                                    <a href="#"></a>
                                                    <input name="" id="30" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">アパレル・ファッション関連</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="31">
                                                    <a href="#"></a>
                                                    <input name="" id="31" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">レジャー・アミューズメント</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="32">
                                                    <a href="#"></a>
                                                    <input name="" id="32" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">クリエイティブ・編集</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="33">
                                                    <a href="#"></a>
                                                    <input name="" id="33" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">エンジニア・サポート・保守</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="34">
                                                    <a href="#"></a>
                                                    <input name="" id="34" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">イベント・キャンペーン</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="35">
                                                    <a href="#"></a>
                                                    <input name="" id="35" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">教育</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="36">
                                                    <a href="#"></a>
                                                    <input name="" id="36" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">医療・介護・保育</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="37">
                                                    <a href="#"></a>
                                                    <input name="" id="37" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">オフィスワーク</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="38">
                                                    <a href="#"></a>
                                                    <input name="" id="38" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">営業</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="39">
                                                    <a href="#"></a>
                                                    <input name="" id="39" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">エステ・理美容</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="40">
                                                    <a href="#"></a>
                                                    <input name="" id="40" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">配送・引越・ドライバー</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="41">
                                                    <a href="#"></a>
                                                    <input name="" id="41" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">軽作業</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="42">
                                                    <a href="#"></a>
                                                    <input name="" id="42" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">工場・倉庫・建築・土木</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="areaModalList">
                                        <li class="areaModal">
                                            <p>
                                                <label for="43">
                                                    <a href="#"></a>
                                                    <input name="" id="43" type="checkbox" value="forever">
                                                    <span class="areaModalCheckBox">警備・清掃・ビル管理</span>
                                                </label>
                                            </p>
                                            <span class="IconTop">
                                                <span></span>
                                            </span>
                                            <span class="IconBottom" style="display:none;">
                                                <span></span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overflowBtn">
                                <button onclick="document.getElementById('id03').style.display='none'" type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">キャンセル</span>
                                </button>
                                <button type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">この条件で探す</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <li class="prefectureTopBtnbox shadow">
                        <a href="#" onclick="document.getElementById('id04').style.display='block'" class="modalOpen modalKodawari">
                            <img src="img/Icon-bookmark.png" alt="メモ" class="btnMemoImage">
                            <p><?php echo $main['Commitment']?></p>
                        </a>
                    </li>
                        <!-- đây là modal commitment-->
                    <div id="id04" class="modal">
                        <div class="modal-content wow bounceInUp" data-wow-duration="1s">
                            <div class="container_01">
                                <div class="modalHeaderShow">
                                    <img src="img/Icon-bookmark.png" alt="">
                                    <h3>こだわりから探す</h3>
                                </div>
                                <div class="modalContentFooter">

                                    <div class="SearchModalBorder">
                                        <div class="ModalCategory">
                                            <p>給与</p>
                                            <div class="ModalSalary">
                                                <div class="SelectWrap floatL ModalSalarySelect">
                                                    <select class="Select">
                                                        <option class="default" value="">給与区分</option>
                                                        <option class="choices" value="[object Object]">時給</option>
                                                        <option class="choices" value="[object Object]">日給</option>
                                                        <option class="choices" value="[object Object]">月給</option>
                                                    </select>
                                                </div>
                                            <div class="SelectWrap floatL ModalSalarySelect">
                                                <select disabled="disabled" class="Select">
                                                    <option class="default" value="">金額設定</option>
                                                </select>
                                            </div>
                                        </div>
                                        <ul class="searchModalCheck">
                                            <li>
                                                <label>
                                                    <input type="checkbox" class="ModalInput" value="5">
                                                    <span class="ModalCheckBox">
                                                        <a href="#" class="disabledLink">高収入・高時給</a>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" class="ModalInput" value="6">
                                                    <span class="ModalCheckBox">
                                                        <a href="#" class="disabledLink">日払い／週払い</a>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>

                                    </div>
                                    <div class="SearchModalBorder">
                                        <div class="ModalCategory">
                                            <p>経験</p>
                                            <div>
                                                <ul class="searchModaCheck">
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" class="ModalInput" value="61">
                                                            <span class="categoryExperience ModalCheckBox">
                                                                <a href="#" class="disabledLink">英語力・語学力を活かす</a>
                                                            </span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" class="ModalInput" value="32">
                                                            <span class="categoryExperience ModalCheckBox">
                                                                <a href="#" class="disabledLink">PCスキルを活かす</a>
                                                            </span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" class="ModalInput" value="35">
                                                            <span class="categoryExperience ModalCheckBox">
                                                                <a href="#" class="disabledLink">経験者優遇</a>
                                                            </span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type="checkbox" class="ModalInput" value="53">
                                                            <span class="categoryExperience ModalCheckBox">
                                                                <a href="#" class="disabledLink">資格を活かせる</a>
                                                            </span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="SearchModalBorder"><div class="ModalCategory"><p>勤務期間</p><div><ul class="searchModalCheck"><li><label><input type="checkbox" class="ModalInput" value="101"><span class="ModalCheckBox"><a href="#" class="disabledLink">単発（1日）</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="102"><span class="ModalCheckBox"><a href="#" class="disabledLink">短期（1週間以内）</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="103"><span class="ModalCheckBox"><a href="" class="disabledLink">短期（1ヶ月以内）</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="104"><span class="ModalCheckBox"><a href="#" class="disabledLink">短期（3ヶ月以内）</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="201"><span class="ModalCheckBox"><a href="#" class="disabledLink">長期（3ヶ月以上）</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="202"><span class="ModalCheckBox"><a href="#" class="disabledLink">春/夏/冬休み期間限定</a></span></label></li></ul></div></div></div>

                                    <div class="SearchModalBorder"><div class="ModalCategory"><p>シフト</p><div><div class="searchModalShift"><div class="SelectWrap floatL searchModalShiftSelect"><select class="Select"><option value="0" class="default">日数選択</option><option value="1" class="choices">週1日</option><option value="2" class="choices">週2日</option><option value="3" class="choices">週3日</option><option value="4" class="choices">週4日</option><option value="5" class="choices">週5日</option></select></div><div class="searchModalShiftRadios floatL"><div class="searchModalShiftRadio floatL"><label><input type="radio" name="shift" disabled="disabled" value="true" checked="checked" class="ModalInput"><span class="ModalShiftRadio">以上</span></label></div><div class="searchModalShiftRadio floatL"><label><input type="radio" name="shift" disabled="disabled" class="ModalInput" value="false"><span class="ModalShiftRadio">以内</span></label></div></div></div><ul class="searchModalCheck"><li><label><input type="checkbox" class="ModalInput" value="25"><span class="ModalCheckBox"><a href="#" class="disabledLink">土日祝のみ勤務</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="24"><span class="ModalCheckBox"><a href="#" class="disabledLink">平日のみ可</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="23"><span class="ModalCheckBox"><a href="#" class="disabledLink">シフト自由・自己申告</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="64"><span class="ModalCheckBox"><a href="#" class="disabledLink">フレックスタイム制</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="68"><span class="ModalCheckBox"><a href="#" class="disabledLink">完全週休2日制 (土日祝休み)</a></span></label></li></ul></div></
                                    <div class="SearchModalBorder"><div class="ModalCategory"><p>時間帯</p><div><ul class="searchModalCheck"><li><label><input type="checkbox" class="ModalInput" value="5"><span class="ModalCheckBox"><a href="#" class="disabledLink">早朝</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="1"><span class="ModalCheckBox"><a href="#" class="disabledLink">朝</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="2"><span class="ModalCheckBox"><a href="#" class="disabledLink">昼</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="3"><span class="ModalCheckBox"><a href="#" class="disabledLink">夕方</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="7"><span class="ModalCheckBox"><a href="#" class="disabledLink">夜</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="4"><span class="ModalCheckBox"><a href="#" class="disabledLink">夜勤</a></span></label></li></ul></div></div></div>

                                    <div class="SearchModalBorder"><div class="ModalCategory"><p>働き方</p><div><ul class="searchModalCheck"><li><label><input type="checkbox" class="ModalInput" value="51"><span class="ModalCheckBox"><a href="#" class="disabledLink">扶養控除内勤務可</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="47"><span class="ModalCheckBox"><a href="#" class="disabledLink">1日4h以内可</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="11"><span class="ModalCheckBox"><a href="#" class="disabledLink">体を動かす仕事</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="19"><span class="ModalCheckBox"><a href="#" class="disabledLink">在宅ワーク・内職</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="18"><span class="ModalCheckBox"><a href="#" class="disabledLink">リゾートの仕事</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="65"><span class="ModalCheckBox"><a href="#" class="disabledLink">残業月10時間以下</a></span></label></li></ul></div></div></div>

                                    <div class="SearchModalBorder"><div class="ModalCategory"><p>待遇</p><div><ul class="searchModalCheck"><li><label><input type="checkbox" class="ModalInput" value="10"><span class="ModalCheckBox"><a href="#" class="disabledLink">まかない(食事)あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="15"><span class="ModalCheckBox"><a href="#" class="disabledLink">研修制度あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="39"><span class="ModalCheckBox"><a href="#" class="disabledLink">交通費支給</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="22"><span class="ModalCheckBox"><a href="#" class="disabledLink">送迎制度あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="37"><span class="ModalCheckBox"><a href="#" class="disabledLink">寮・社宅あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="21"><span class="ModalCheckBox"><a href="#" class="disabledLink">昇給あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="14"><span class="ModalCheckBox"><a href="#" class="disabledLink">制服貸与</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="38"><span class="ModalCheckBox"><a href="#" class="disabledLink">社員割引あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="36"><span class="ModalCheckBox"><a href="#" class="disabledLink">社会保険完備</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="29"><span class="ModalCheckBox"><a href="#" class="disabledLink">社員登用あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="63"><span class="ModalCheckBox"><a href="#" class="disabledLink">託児所あり</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="66"><span class="ModalCheckBox"><a href="#" class="disabledLink">産休・育休取得実績あり</a></span></label></li></ul></div></div></div>

                                    <div class="SearchModalBorder balloonWrap"><div class="ModalCategory"><p>応募時に嬉しい</p><div><ul class="searchCheck"><li><label><input type="checkbox" class="ModalInput" value="49"><span class="kodawariModalCheckBox"><a href="#" class="disabledLink">履歴書不要</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="46"><span class="kodawariModalCheckBox"><a href="#" class="disabledLink">すぐ働ける</a></span></label></li><li><label><input type="checkbox" class="ModalInput" value="17"><span class="ModalCheckBox"><a href="#" class="disabledLink">友達と応募歓迎</a></span></label><!----></li><li><label><input type="checkbox" class="ModalInput" value="4"><span class="ModalCheckBox"><a href="#" class="disabledLink">オープニングスタッフ</a></span></label><!----></li><li><label><input type="checkbox" class="kodawariModalInput" value="8"><span class="ModalCheckBox"><a href="#" class="disabledLink">大量募集(10名以上)</a></span></label><!----></li><li><label><input type="checkbox" class="ModalInput" value="117"><span class="ModalCheckBox"><a href="#" class="disabledLink">オンライン面接可能</a></span></label><input type="text" readonly="readonly" class="infoIcon"></li><li><label><input type="checkbox" class="ModalInput" value="119"><span class="ModalCheckBox"><a href="" class="disabledLink">動画応募可能</a></span></label><input type="text" readonly="readonly" class="infoIcon"></li></ul></div></div><div class="balloon" style="display:none;"><div></div><a class="link">詳しくはこちら＞＞</a><!----></div><div style="display:none;"><div class="arrow"></div><div class="arrowBody"></div></div></div>
                            
                                </div>
                            </div>
                            <div class="overflowBtn">
                                <button onclick="document.getElementById('id04').style.display='none'" type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">キャンセル</span>
                                </button>
                                <button type="submit" class="modalJobOfferSearchBtn">
                                    <span class="commonModalSearchglassIcon"></span>
                                    <span data-v-4cda330d="">この条件で探す</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
    </section>
</div>
<script>
    // Get the modal
    var id = document.getElementById('id01');
    var id02 = document.getElementById('id02');
    var id03 = document.getElementById('id03');
    var id04 = document.getElementById('id04');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == id) {
        id.style.display = "none";
    }
    if (event.target == id02) {
        id02.style.display = "none";
    }
    if (event.target == id03) {
        id03.style.display = "none";
    }
    if (event.target == id04) {
        id04.style.display = "none";
    }
    }
</script>
<style>
    .swiper-container {
        width: 960px;
        padding:50px 0;
        position: relative;
        top: 600px;
        background:#eee;
        margin-bottom:20px;
    }
        .swiper-container h5{
        font-size: 14px;
        background: #222;
        color: #fff;
        margin: 0 auto 15px auto;
        width: 50%;
        padding: 10px 20px;
        text-align: center;
        border-radius: 30px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width:  300px;
        height: auto;
        background: #fff;
        overflow:hidden;
    /* -webkit-box-reflect:below 1px linear-gradient(transparent,transparent,#333) ; */
    }
    .swiper-slide img{
        width:300px;
        height:200px;
    }
    .item{
        overflow:hidden;
        width:300px;
        height:200px;
    }
    .row{
        margin:0 -15px;
    }
    .sliderTxt h4{
        margin-left:33px;
        width:60%;
    }
    .sliderTxt li a{
        text-decoration: none;
        color:black;
        text-align:left;
        font-size:14px;
        font-weight: bold;
        transition:.3s;
    }
    .sliderTxt li a:hover{
        color:orange;
    }
    span.opening_job{
        background-color: #fab500;
        display: inline-block;
        padding: 5px;
        color: #fff;
        font-weight: 500;
        text-transform: uppercase;
        position: absolute;
        right: -35px;
        top: 25px;
        z-index: 22;
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        font-size: 13px;
        width:150px;
        text-align:center;
    }
    .text-center{
        text-align:center;
    }
    .text-center span{
        font-size:10px;
    }
    .item img.over {
        transition: ease-in-out .8s;
        transform: scale(1.2, 1.2);
        opacity: 1;
    }
    .like{
        float:right;
        margin-right:33px;
        /* padding:20px; */
        position:relative;
        top:-20px;
    }
    .like li{
        text-align:center;
    }
    .like li i{
        font-size:26px;
    }
</style>
<main>
    <div class="swiper-container wow bounceInUp" data-wow-duration="1.5s">
        <h5>
            <span class="pl10 pr10">
            <i class="fa fa-user-plus"></i>
            <?php echo $main ['Companies are recruiting']?>
            </span>
        </h5>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_06.jpg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_01-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_02.jpg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_03-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_04-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_03-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination">
      </div>
  </div>
  <div class="swiper-container wow bounceInUp" data-wow-duration="1.5s">
        <h5>
            <span class="pl10 pr10">
            <i class="fa fa-user-plus"></i>
            <?php echo $main ['Companies with the most views']?>
            </span>
        </h5>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_06.jpg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_01-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_02-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_03-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_04-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_03-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination">
      </div>
  </div>
  <div class="swiper-container wow bounceInUp" data-wow-duration="1.5s">
        <h5>
            <span class="pl10 pr10">
            <i class="fa fa-user-plus"></i>
            <?php echo $main ['The companies with the most followers']?>
            </span>
        </h5>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_06.jpg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_01-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_02-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_03-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_04-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="swiper-slide">
                <span class="opening_job"><?php echo $main['dang tuyen']?></span>
                <div class="item">                
                    <img src="img/img_03-2.jpeg" alt="">
                </div>
                <div class="row">
                    <ul class="sliderTxt">
                        <li>
                            <h4><a href="job.php"><?php echo $main ['ECC Computer Co., Ltd.'] ?></a></h4>
                        </li>
                    </ul>
                    <ul class="like">
                        <li class="text-center">
                            <i class="fa fa fa-heart-o"></i>
                        </li>
                        <li class="text-center">
                            <span>1000</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination">
      </div>
  </div>

    <script>
            var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
            spaceBetween: 30,
            centeredSlides: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            loop: true,
            autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
            });
    </script>
    <script>
        {
            const images=document.querySelectorAll(".item img");
            for(let i=0;i<images.length;i++){
                images[i].onmouseover=function(event){
                    let img=event.currentTarget;
                    img.classList.add("over");
                }
                // .item imgのマウスアウトイベント
                images[i].onmouseout=function(event){
                    let img=event.currentTarget;
                    img.classList.remove("over");
                }
            }
        }
    </script>
    <!-- Tabs -->
    <!-- <section class="wrapper">
        <ul class="tabs">
            <li class="active">関東</li>
            <li>関西</li>
            <li>九州</li>
        </ul>
        <ul class="tab__content">
            <li class="active">
                <div class="content_wrapper">
                    <ul>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                    </ul>
                </div>
                <div class="content_wrapper">
                    <ul>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                    </ul>
                </div>
                <div class="content_wrapper">
                    <ul>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                        <li>
                            <a href="">東京</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="content_wrapper">
                    <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="content_wrapper">
                    <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                        <ul>
                        <li>
                            <a href="">大阪</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </section> -->
    <div class="Section_body wow slideInLeft" data-wow-duration="1.5s">
        <h1><?php echo $main ['Benefits of Job World scout service']?></h1>
        <ul class="ItemList">
        <li class="Item">
            <div class="Item_read">
            <span>1</span>
            <p><?php echo $main ['1'] ?></p>
            </div>
            <div class="Item_thumb">
            <img src="img/img_01-2.jpeg" alt="Receiving scout mails">
            </div>
            <p class="Item_text"><?php echo $main ['text1'] ?></p>
            </li>
            <li class="Item">
            <div class="Item_read">
            <span>2</span>
            <p><?php echo $main ['2'] ?></p>
            </div>
            <div class="Item_thumb">
            <img src="img/img_02.jpg" alt="Exemption from document screening and a speedy recruitment process!"></div>
            <p class="Item_text"><?php echo $main ['text2'] ?></p>
            </li>
            <li class="Item">
            <div class="Item_read">
            <span>3</span>
            <p><?php echo $main ['3'] ?></p>
            </div>
            <div class="Item_thumb">
            <img src="img/img_03-2.jpeg" alt="High match rate!">
            </div>
            <p class="Item_text"><?php echo $main ['text3'] ?></p>
            <p></p>
        </li>
        </ul>
    </div>

</main>
<footer class="jbw">
    <div class="footer">
      <div class="footer_container">
        <div class="columns">
          <div class="column">
            <ul class="footer__link">
              <li class="footer__link-head">Job World</li>
              <li><a href=""><?php echo $main ['About Us']?></a></li>
              <li><a href=""><?php echo $main ['Contact Us']?></a></li>
              <li><a href=""><?php echo $main ['Press Corner']?></a></li>
              <li><a href=""><?php echo $main ['FAQ']?></a></li>
              <li><a href=""><?php echo $main ['Terms Of Use']?></a></li>
              <li><a href=""><?php echo $main ['Privacy Statement']?></a></li>
              <li><a href=""><?php echo $main ['Operation Regulation Of']?> </a></li>
            </ul>
          </div>
          <div class="column">
            <ul class="footer__link">
            <li class="footer__link-head"><?php echo $main ['For Employers']?></li>
              <li><a href=""><?php echo $main ['Post Job']?></a></li>
              <li><a href=""><?php echo $main ['Search Resume']?></a></li>
              <li><a href=""><?php echo $main ['Other Products and Services']?></a></li>
              <li><a href=""><?php echo $main ['Contact']?></a></li>
            </ul>
          </div>
          <div class="column">
            <ul class="footer__link">
            <li class="footer__link-head"><?php echo $main ['Jobs by location']?></li>
              <li><a href=""><?php echo $main ['Osaka']?></a></li>
              <li><a href=""><?php echo $main ['Tokyo']?></a></li>
              <li><a href=""><?php echo $main ['Kyoto']?></a></li>
              <li><a href=""><?php echo $main ['Nagoya']?></a></li>
              <li><a href=""><?php echo $main ['Hokkaido']?></a></li>
            </ul>
            <div class="footer__link">
              <div class="footer__link-cta">
                <a href=""><?php echo $main ['See all locations ']?>
                    <span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></span>
                </a>
              </div>
            </div>
          </div>
          <div class="column">
            <ul class="footer__link">
            <li class="footer__link-head"><?php echo $main ['Jobs by categories']?></li>
              <li><a href=""><?php echo $main ['Accounting']?></a></li>
              <li><a href=""><?php echo $main ['Banking']?></a></li>
              <li><a href=""><?php echo $main ['IT - Software']?></a></li>
              <li><a href=""><?php echo $main ['IT - Hardware/Networking']?></a></li>
              <li><a href=""><?php echo $main ['Civil/Construction']?></a></li>
            </ul>
            <div class="footer__link">
              <div class="footer__link-cta">
                <a href=""><?php echo $main ['See all categories']?>
                    <span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 fa-sm " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></span>
                </a>
              </div>
            </div>
          </div>
          <div class="column">
            <ul class="footer__link">
              <li class="footer__link-head"><?php echo $main ['Mobile app']?></li>
              <li class="is-mobile is-variable is-1-mobile row-app-download">
                <div class="column is-narrow wrapper-app-download">
                  <a href="">
                    <img class="is-hidden-tablet mr-2" src="data:image/png;base64,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" alt="Mobile app">
                  </a>
                  <a href="" title="Mobile app" target="_blank" rel="noreferrer" class="wrap-android">
                    <img class="is-hidden-mobile" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATQAAABcCAMAAADXj7kuAAAC8VBMVEWIiIgAAACioqJ8fHyFhYV1dXVubm5zc3NYWFigoKB+fn6Dg4NpaWmTk5Obm5uVlZWGhoaLi4tdXV0AAAD///+wsLAhISEHBwcA8HaOjo6jo6MA4P+dnZ0AxP8FBAQA1f8A0//39/f8/PysrKwAyP8A1/8Ayv//yQAA2//Q0NDt7e0fHx8Axv+2trZUVFQXFxcICAiUlJT4NEgyMjIA0P/y8vI1NTUKCwv6+vppaWk8PDz+/v7Z2dm6urr/zgAA2f8ZGRmlpaUdHR3j4+PLy8uZmZkA8XPzMkoA3f+goKDU1NQ5OTkrLCx1dXX7Nkb/wwBjY2NPT0/+OUVCQkIvLy8jIyMAwf+ysrJXV1fwL0sVFRQREhIA4v/q6uq0tLRYWFgODg4A3//g4OCJiYmGhoZ9fX1ZWVkAzf8pKSkA8f8Azv8AzP+RkZFsbGwAXmtgYGDsLU4A0v/W1tYA18Nubm5dXV0Az//09PTv7++pqal7e3tbW1v/0gDn5+f/1QDd3d3Nzc3AwMC9vb1wcHBmZmZMTEzb29t4eHjoKVBJSUn+MkI/Pz8lJSUA6/+AgIAF6XSDg4MB9XtGRkb/xgDExMT/NElEREQQEBD/2ADIyMjxKEoA5v/GxsYC7XUAVWvoIk//vgGNjY0AWWv2MEmLi4sJ4nQ85lrtKFH+WTRrja+fn58O/IQN2nIFz8NokLEF/X4AW2tFRUUQNSL/twRkkLMj0XriJ1L5MkkKHhQmBwz/5AL/2gJviK0Y8YMf3n4htGnLJUhrFSFSDxwXBwYMAQQa6H8beEncLkG8JDylIDTv0RYVUjN/GCnrxwnqwwnmwgBANQAjHQANu+AFU2MimFwGPUggZUOSGzDGqR+qlB5qWRdCDRX/4BP/1RNLQxInIwztwAi6mACcggBjVABolbxxg7IV7oEfnF1czlwdk1cfjVUjglMWTk0dY0AYXjqNICfKUiXevh2MeBw9CxVFOxI1DA9wYw4wKQ1XRgHQrAB8ZQDlnjLYAAAAE3RSTlPQAPSaxoZgMAjvq25H5ePauq0VBKGDawAAEQhJREFUeNrtnXdcOmUYwNt7Pw9aZBTQAkMgQ4ioELQBWJoSBmGkaFQSZZgry5VmmplN23vvvffee++99/6rdxweh0aC0OT7+3w4f8dx48vzPO/73undMstyVl59+RWWKZCGFZZffWVBFpe2xjrLqX2yAmnxqVddd+U5aausKG/atabOHSkq8Id43HW9lb6SFQVpq6ymVo/YocCfUjSs7lmeS1teJrdCgUVxsrxnRSptpZ7KCiiwSKw9lSstu8x6a8rqoMCi6WtaZpVlVlJfoIACi8Zs7FljmRWaxqFABjQ2rbbMWnIHFMiAiHrtZZZrN0OBDPBXr7qM/NxiKJABxRsst4x8g/+TNIXd8O+S5j6xIw5/L4Ye7az9XyWteqDfpId01FS1KyCPGHZFJ87q/03SQtZ+WbptKcZwFnv8kCUBx59+1KE26searPmTdstLX1639JbGuGsJQz5DQ63ZAZSWSg+bRivbQ3Q6oe7l3cYSt1Ftpfo2qPTy0JOXlFxmbPWwt1vkEaCcWxkBg7FyGChx2QzvqPc0dzkr2xJ2qvl2L5OXl/fQH1roSLG+p9pI/slroK2yhGWpp7Ill9K+uPGuu258YanaiiwoUEOOS6UcAYoLr2VTOZ1NqMUhOomdoURlsITqOhLdQFEjQ2kMkEhy4gRQbGRqcGIX9QA+3Ja8lm6PaOm2IOqKgNKACRrrkdFdC9CJnEGYRjQCYQZtOZQWeO7KK6644sG7Pr9laUWkLNbXjoN9sRhRUYnoA0oV1vMih9g9CfRgdOQ1jCp5a7sNO7xUKzVCP7JrW6y1CbHJDKfYkCeWhkwNo4hDCqaV2AgMYPcFDXrPtAnHeSVojPWVoK4v1qkfR1tfZ1SH3Q2wD2r6Ojs7YxPQituprDT2UJNDaS9uuhG1duFHN7601Da6DndlU722y2QqlUqzoCwhrQ5NNJACOipDlFbLRi4mrEmVptoOowlp7djMI/PaGMxRixvQyVEsjE8ZJWtoRB9wWlGJVYZcS3v+kI32vJJIu/C4O+9+fIljNZQL0+rLsFYqTd6MbVxa8YkY5RkdVNUnSduWTXvRFjJLpB1pqcb+Ui7Nq1U1wjy2RSOXNshLQQvZg6Y5aWoN1uRa2lkbb0SsXUg4bv07774uF9LUeFQZ6qTStq3FZj2TVqrssoOw3PA8af5+bFBIpW3n8WEll1aGA4o00mik2TUYJek5pCcEqLTwOGoncy5tK27tOMLxD352y5KlObTBU/Tabq9EWg352cikuVVVwn6MYXieNCKsPEUaFnmUqjombVvcnuVjSzg8HZ7Sp0ob7e1t1aDTQaRZtASbg0hrhyZU514as3YcY/3L73rIsERpZaimbV0sRdqERdlAA9CKTXMHe8GipHkgjB1mWvXiXFoVMqyp0hgdbqDSTCZTl9NLpBkh0o3jFbmVttmmRBq3dibh+MtvfHxp0tQ4qtPZUCeVRl90I2RuhcpmBoYRa+ZJCzmZNLdEGm0aekmZJDKqWIszVlMTNqnKU6U5N9DggB+ApqedomDSyIumMbfSdtx0UxZrhzJn66+//tWXk9KWvTS702I7cnTUEixKkaZ34gCRpjepGoBRhW3zpI2omgMwi3U86gRpVIjJRaRFTJZx4NSrbKH5NS0SVNUyaUI0c2nmAaxS5Vba5glr3BnVduent2QtrRFPNBQXm2exNkUatCFiEyh6UA2UGDb7U7scbidOA+zK+y51lqCDS6OztqNLyNHFO7X2ATQu1HoOY5eHSvMlSyOlAXEgl9K23HzO2k7UGNd210PmLKWpMcr7DrpUaeCj0qBci7t6Q/6RLmpBlHZuhbuzxITbk+3OWFRjev2MDashIc3Rj3RxPanzcYdfH7PhqH0haQodDhUTabNuq9U6ERGkQXWupR2YZG1OWzalrY+GkKMLI3x8Y/FCx9wwio05IybWK5hpRnR2YRcV2SwdRqE6AIQWxG4tostOpAWxgeUtsgQuqkI0absRNR5IMIwlLDBZwfNoMUz2hDME0/Q9VhpsuZS2y37c2kaiNa4t49I24SMarLIw3+K5vpOhXebhhyVcPKz1TbHc6pWr1S3MRbXMy7sfMoJ6gxngjAxYLP1GB11PiZpOQNHuY2+aa05UWpQDvf6kkYiP1UM3X3lMJi+ekHF6oc9XKyzTnlNpByxkjZe2F26BPDGpgLSYS0v9f3QsDofDDPkmvbR9DyPWpBkqanvwoRDkg1hXC/zj+WNp5224TRprpLR9pYDc0xacgn88aaWls8ZLW+7x/wsu9qeRtvchaazx0vbxdfB/JJ20Tbi11NZAWtpugf8faaVtkjbWeI5+8tq/IJ/+Sml/bu34ix5785Uf4H9GGmmnb5zWGnf25AlbHPHmqz/DYjH8Fy7mp5WW1hp3tvsWW2yxw+2PfedfhK+KsZKmqjN81XHPvzyj00pLa407O4FK2+Hw27/9s9Lmjw9YUMAy1AY5Ynh7nS4MadA36eZQT48Le+nVEaz5kLaZaC21DeXOntqdSyPWTn3jlbcgDZ2jKGH7BsgJcnYRMw1FKOGMo4BSgYR9ci/tmtM32yxNrFFn54jSDj/i9jdefRv+APOumIqpNic5WkK/AEhD6XYo5QIglCOhLA/Sjt0sjTXi7B3iLEnaEafe9tgfBJt+EBnOppbocPugFilax98jDdvzKm3HNNaos1RpxNqCsWbYHim2be3AmJwKEmcz8NdJK2ljjFUhpS2v0tJYu+ip6+dJI9Z+ggVoR4oxIM6Z3L77ZPgLpcUSRzuFhA5zHqVt+QfWNtpq8w8vuX73+dJuv+19mM8M3e3t4tIi54G/Utq2kuVxJq/SFra26X53HHMMsTY/PZ9+doEtsJxogQzIozSvlrYF+ZS2sLXNtyHO9jiJWJNKu/22p5+B+dSxll4BnL9bGswiojxv0g46dkvCfGv7HUKd7UGtnSDpchzx3rOwAD6anOPwJ/hLHfZ5YkMLnb8OlZbq/0ia3kHeSy/tRETcVSotVOqZ1OdK2i4LWTtgE+Jst924tS3Ezu2p7z4DC2HvR8Sq9CNOfVzXrNX2n9jSkLxn+6g7tNrgQLWkma2/zKXVOpvaYDw8NV0nkeYf1jm12mZfmyKNtFOaaZuULO2oSpcJVc6hXjvt9IanpsLiXkSnp6bGzJlI23+XJGsEZm2bjZmzOWtc2hFH/Po+LIwbCdOQjhEnCijbQyAwcQYm0HlAoKgHBUqaELEyWVrbkSgwNPnH0oaREBOl6XswgTMG0KBCRDUIVLCxS3Fm0qg1aV3bZLNLjzlmayaNWTtnCyrtiKd/u/8Px09IqBObzYok3BHhWqbIiQ7hY0oUcQr9k4YOcZ6KpZkobQxFbJMp0kZA4NpuRNTq56T5qzCJYT4s6/YC51wkHAUZSdt3vrUtqTMiTbS2wxaHnyAtZlJakeARA69bmYSGhH4YGaM2E7fGYq1OxW3ZgkgJelim25CitbHIlErbBykWzRlsLZqAVFprkZfiblEiIQwJaYpKpPS7bMiwgpVuuBcYAVpZBhQZSpNaI+xCnVFEa7vvQIpZGpgT8ZunOyXSb4eTkVLp9ge8vaZE58TuZP6OsgccMRtrfQ1kLjvC5tqigL3OlSJNzz6gbjArvBdYEHEDqbSuoJbCt10VEqW1OxH7RxyhQIWMpaICBukXaABKLbIgzUzahvtSbWJd24w4u5k5E4PtpG9+UUAaeBGpEKVZMAmtl+0kjgk1hH61Jq+QsZV81/2DwtDHraIxVMqD4AyJNJ6c5wJDxlciSpNyhiN57GmPz7rFdrgrAmViEzFEYz2QqbQUa/teevPNO+8sWOPSHr73AUgL34mYmJ5KVQIaaYEGVtWBw5OsFUI2PtjhTNI61MSPSukGjsckkTaQOEMUGBmyIA21P5CmNPpTz3KE3G1j2874/VpWfA20bvpYBbWwVM5UmsTajhteev75O1NpHOJsr69vhT+j3MKPTiBUf+3JjPpqWrEhSr/fBhBQ0LqsgwZpi2ekVS2ksPGGTUCdLK2IKuwjx9niRMZAp0SaRcnorrqgHEAqbfLcZpa1QbmTB/QwVesRmgFTJGNphLm6tiVzRhGcnbT1oz/Cn2N2SYNcouJE9uoSE/xc9l8ancpJSbBaGhxaiclosrQJC6LJfZRPyaNJXWeQ1rQaPcNPj1Mqra8fk9kHQB9khZX36Cohc2mitV32vur88/faec7aSSc9ch8sCiMSovNljrIkUtPKLK2AwVAZfbVDggriYruJSJdkZNGXLG2cmFGOImM0LIkOaZcjVVrZdiiVJpyUaT6FbUA1kY00bo1wOnVGpHFrN58kFrP0CKWhv3TB/tsMXEaLu7SDcmRxI+0sOcRRgApR5Z40SYaLncnSrlUhxzLYGUg3jJJK49GEZ0St1vqxKosgzaNkub49zQRFVtJ4Xdvw9EtPO20vAnd20sNP3J/ZaXwcTNlEkZMGxSkQlgaVjOXsBBLqIUENrXv2QFBSl1uSpTXwvOw30mY6A2n7sDaDmwlouTReLpsmubospHGIs6uYM27tpL0evRUyYDKIBJle4kwj/IlZHQrHJLaJ1WAPJtd8A11Ww3pQYpNq7kiWZmimXqOJTegXK22aZyKjTpWQVk9bABpoo6HspTFnBx/Mpd18/iOvQ2Z0IkUzI845yoaEKrNQbvs9wFDokHAyDzhVDDjTvB8CI8ldibC0n9ZOU7MNONHm2gyk2fjB212YkGaYRc4UZC1t72NvIM4I1Nn595Bilik1SFHJGlmL6G1rYuW3u2LuveZxFpKJXjmcrKKNYI2ZZk0LXVhLaqKfjciNNJdD0yiVFjFRa9sq6CGPWRDVkUVJG6G71csq7yxyaZQYMrSlWUjbW3DG4oxZu5kXs8ytqYTd6NBoOrTIMB3F8+wMJvTElmmZls0u500uxWXsvawZKSPigNS565SxY97Yc4xHc3trNX+vbVHSSrtZxLe3yEyYJC10JFKqIRtpewvODj6aOdv56JdvhezYx4kpdFiB47VhEspO4c/zxVliUvaiiFQaH3qLjC0qPaVrVDJp4lkGizsraQTq7OKjjybW9jr40dcha0qNJkyiq1os1g4dcniecgztKnHhGhCIdqPAkRomTbzCXswG6hxTNOUKe3RBaY3EtRETTLnE5tLRzUYmWUoj9exi4oxI2+uR+x6ApeCZ1iiRoXS1lEMytSeyd1RHhh3izHohZbQlSQuXy9lMpS5SzaVNdWhcQhpN9AgfuKwBROwaUhEaIYWIS6NxXctyYJbKVrkaQe3SdIwnRsg0ELOSxpydfTZRdvHF99x7PyyV4khZPBqPlnkMkIKiIRaPR+vNKdFZFo/H6/QgwdEYj48QK7vywY7CUGxQiB8YJh+wp2y1mC8hxUDmCtsurx3edsJMFhRXRePXZc5KGnd2E3F2Eylm/wRCYiQOsqzLD14asvGs/hx7/9O5s4uPfvR7+CfgrTmSX6FJjHXckB82QMSgPhtpL56+P3f2yH3/jN/BK9eyboDYDT7yFMgL/n72azLZSDM/9wFxdjHtzP4zCGn4KW2Dwmwd4uf68wI/oxbJShp47jn7pnue+GcUM4a1CwmWqiEXUkYDkBfMNkSUZXvbnPvvu+8fpIxQZkKRoBXyQyMSxv85N2haKuMdmGAgX62AWUPXXvzfkQanRGeDKpXFOVhrhjyh721tnbL+g24FlgtKKyrK7ZA1hdsb/h1waYUbaWYhrXDL1ixu2Vq4OXAWNwcu3IY6i9tQF254nsUNzwu31s/i1vqFhzhk/hCHwuNCMn9cSOHBNJk/mKbwCKTMH4FUeNhWlg/bKjzWLYvHuv0OFD1u1E/EAFAAAAAASUVORK5CYII=" alt="Mobile app">
                  </a>
                </div>
                <p class="social-text">Follow Us</p>
                <div class="social-media">
                    <a href="http://facebook.com" id="fb" class="social-icon">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                                
                    <a href="http://twitter.com" id="tw" class="social-icon">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="http://gmail.com" id="gl" class="social-icon"> 
                        <i class="fa fa-google"></i>
                    </a>
                </div>                 
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__content has-text-centered">Copyright © Job World<br>
        <address class="address">2 Chome-3-35 Nakazakinishi, Kita Ward, Osaka, 530-0015</address>
      </div>
    </div>
</footer>
</body>
</html>