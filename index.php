<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Job World</title>
    <!-- slider_image -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Home page -->
    <link rel="stylesheet" href="css/home_page.css">
    <!-- contact -->
    <link rel="stylesheet" href="css/contact.css">
    <script src='https://google.com/recaptcha/api.js'></script>
    <!-- hamburger -->
    <link rel="stylesheet" href="css/header_top.css">
    <!-- <link rel="stylesheet" href="css/job_02.css"> -->
    <!-- image new -->
    <link rel="stylesheet" href="css/image.css">
    <!-- favicon -->
    <link rel="shortcut icon" style="image/png" href="img/icon.png">
    <!-- tell ring -->
    <link rel="stylesheet" href="css/tell_ring.css">
    <!-- chu chay -->
    <link rel="stylesheet" href="css/typing.css">
    <!-- top page code-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/fixedsticky.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" id="bootstrap"> -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/flag-icon.css">
    <!-- <link rel="stylesheet" href="assets/docs.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="js/wow.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- loader -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="js/loader.js"></script>
    <link rel="stylesheet" href="css/loader.css">
    <!-- wow -->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!-- changeImage -->
    <script src="js/changeImage.js"></script>
</head>
<style>

  main{
      background: #fff;
  }
  .container{
      /* position: relative;
      top: 100px; */
      background: #FFF;
      margin: 0 auto;
      padding: 40px 0;
      width: 100%;
      height: 55vw;
      background: url(../img/contact_01.jpg) center top/cover no-repeat fixed;
  }


  h1 {
      font-family: 'Poppins', sans-serif, 'arial';
      font-size: 40px;
      color: #333;
      text-align: center;
      position: relative;
      top:5px;
      padding:30px;

  }


  /* ///// inputs /////*/

  input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
      font-size: 0.75em;
      color: #999;
      top: -5px;
      -webkit-transition: all 0.225s ease;
      transition: all 0.225s ease;
  }

  .styled-input {
      float: left;
      width: 230px;
      margin: 10px 0;
      position: relative;
      border-radius: 4px;
  }

  @media only screen and (max-width: 768px){
      .styled-input {
          width:100%;
      }
  }

  .styled-input label {
      color: #333;
      /* padding: 1.3rem 30px 1rem 30px; */
      margin:10px;
      position: absolute;
      top: 10px;
      left: 0;
      -webkit-transition: all 0.25s ease;
      transition: all 0.25s ease;
      pointer-events: none;
  }

  .styled-input.wide { 
      width: 650px;
      max-width: 100%;
  }

  input,
  textarea {
      padding: 20px;
      border: 0;
      width: 100%;
      font-size: 1rem;
      background-color: #fff;
      color: #333;
      border-radius: 4px;
  }

  input:focus,
  textarea:focus { outline: 0; }

  input:focus ~ span,
  textarea:focus ~ span {
      width: 100%;
      -webkit-transition: all 0.075s ease;
      transition: all 0.075s ease;
  }

  textarea {
      width: 100%;
      min-height: 10em;
  }

  .input-container {
      width: 480px;
      margin:0 auto;
      /* position: relative;
      top: 50px; */
  }

  .submit-btn {
      margin-top: 100px;
      padding: 7px 35px;
      border-radius: 60px;
      display: inline-block;
      background-color: #4b8cfb;
      color: white;
      font-size: 18px;
      cursor: pointer;
      box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
                0 2px 10px 0 rgba(0,0,0,0.07);
      -webkit-transition: all 300ms ease;
      transition: all 300ms ease;
  }

  .submit-btn:hover {
      transform: translateY(1px);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
                0 1px 1px 0 rgba(0,0,0,0.09);
  }

  @media (max-width: 768px) {
      .submit-btn {
          width:100%;
          float: none;
          text-align:center;
      }
  }

  input[type=checkbox] + label {
    color: #ccc;
    font-style: italic;
  } 

  input[type=checkbox]:checked + label {
    color: #f00;
    font-style: normal;
  }
  .navigation{
      top: 0;
      /* background: #FFF; */
  }
  /* .container::before{
      content:'';
      background: url(../img/big_image.jpg);
      position: absolute;
      height: 2000px;
      width: 2000px;
      top: -10%;
      right: 48%;
      transform: translateY(-50%);
      background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
      background-image: linear-gradient(-45deg, #8400ff 0%, #04befe 90%);
      transition: 1.8s ease-in-out;
      z-index: 6;
      border-radius: 100%;
  } */
  legend {
      background-color: gray;
      color: white;
      padding: 10px;
      text-align:center;
    
  }
</style>
<body>
<!-- loader -->
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

<!-- Top page -->
<a class="gotopbtn " href="#"><i class="fa fa-angle-up"></i></a>
<!-- Tell -->
<div class="hotline-phone-ring-wrap ">
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
        


<main>
  <!-- slider -->
  <div id="slider">
      <!-- <header>
      </header> -->
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
        <a href="job_02.php"><img src="img/logo.png" width="250" height ="auto" alt=""></a>
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

    <!-- slider_Image -->
    </nav>
    <div class="swiper-container">
      <div class="slides">
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="catchTxt">
              <p class='css-typing1'><span><?php echo $main ['Wellcom']?></span></p>
              <p class='css-typing2'><em><?php echo $main ['Wellcom2']?></em></p>
              <p class='css-typing3'><em><?php echo $main ['Wellcom3']?></em></p>
            </div>
          </div>
          <div class="image">
          </div>
          <!-- <h3 class="job wow slideInRight" data-wow-duration="1.5s" data-wow-delay="4.1s">Job World</h3> -->
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>What is job World</h1>
              <h2>World jobs website will bring you the best experiences with rich job types</h2>
            </div>
          </div>
          <div class="image01">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>What is job World</h1>
              <h2>World jobs website will bring you the best experiences with rich job types</h2>
            </div>
          </div>
          <div class="image02">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>What is job World</h1>
              <h2>World jobs website will bring you the best experiences with rich job types</h2>
            </div>
          </div>
          <div class="image03">
          </div>
        </div>
      </div>
    </div>

    <div class="switch">
      <ul>
        <li>
          <div class="on"></div>
        </li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <!-- Add Arrows -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>
    <!-- <script>
          var swiper = new Swiper('.swiper-container', {
              pagination: '.swiper-pagination',
              paginationClickable: true,
              nextButton: '.swiper-button-next',
              prevButton: '.swiper-button-prev',
              spaceBetween: 30,
              autoplay: 5000,
              autoplayDisableOnInteraction: false
          });
    </script>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
  </div>

  <!-- quick search -->
  <div class="nav wow bounceInUp" data-wow-duration="1.5s">
    <h2 class="nav wow bounceInUp" data-wow-duration="1.5s"><i class="fa fa-search" aria-hidden="true"></i>
        <?php echo $main ['Quick search']?>
        <span>job search</span>
    </h2>
    <nav>
        <ul class="clearfix wow bounceInUp" data-wow-duration="1.5s">
            <li>
                <a href="#area" class="n_area">
                    <!-- 人気の場所から -->
                    <?php echo $main['popular areas'] ?>
                    <span>popular areas</span>
                </a>
            </li>
            <li>
                <a href="#location" class="n_location">
                    <!-- 働く場所から探す -->
                    <?php echo $main ['Work location'] ?>
                    <span>Work location</span>
                </a>
            </li>
            <li>
                <a href="#condition" class="n_category">
                    <!-- 人気の場所から -->
                    <?php echo $main['Job condition'] ?>
                    <span>Job condition</span>
                </a>
            </li>
            <li>
                <a href="" class="n_condition">
                    <!-- 人気の場所から -->
                    <?php echo $main['commitment'] ?>
                    <span>commitment</span>
                </a>
            </li>
        </ul>
    </nav> 
  </div>

  <!-- area -->
  <div id="area" class="wrap-inner">

          <h2 class="nav wow bounceInUp" data-wow-duration="1.5s">人気の場所から探す<span>Popular areas</span></h2>
          <section>
            <!-- hieu ung tuyet roi -->
            <!-- <div class="snowflakes" aria-hidden="true">
              <div class="snowflake">
              ❅
              </div>
              <div class="snowflake">
              ❅
              </div>
              <div class="snowflake">
              ❆
              </div>
              <div class="snowflake">
              ❄
              </div>
              <div class="snowflake">
              ❅
              </div>
              <div class="snowflake">
              ❆
              </div>
              <div class="snowflake">
              ❄
              </div>
              <div class="snowflake">
              ❅
              </div>
              <div class="snowflake">
              ❆
              </div>
              <div class="snowflake">
              ❄
              </div>
            </div> -->
            <dl class="clearfix ac_menu_sp wow bounceInUp" data-wow-duration="1.5s">
              <dt>
                <!-- <p>東京<span>Tokyo</span></p> -->
                <img src="img/tokyo.png" alt="tokyo">
              </dt>
              <dd>
                <ul class="clearfix wow bounceInUp" data-wow-duration="1.5s">
                  <li><a href="job.php">新宿区<span>Shinjuku  , Takadanobaba...</span></a></li>
                  <li><a href="job.php">豊島区<span>Ikebukuro , Otsuka...</span></a></li>
                  <li><a href="job.php">墨田区<span>Ryogoku , Tokyo sky tree...</span></a></li>
                  <li><a href="job.php">千代田区<span>Tokyo sta. , Akihabara...</span></a></li>
                  <li><a href="job.php">渋谷区<span>Shibuya , Harajuku...</span></a></li>
                </ul>
              </dd>
            </dl>
            <dl class="clearfix ac_menu_sp wow bounceInUp" data-wow-duration="1.5s">
              <dt>
                <!-- <p>大阪<span>Osaka</span></p> -->
                <img src="img/osaka.png" alt="osaka">
              </dt>
              <dd>
                <ul class="clearfix wow bounceInUp" data-wow-duration="1.5s">
                  <li><a href="job.php">北区<span>Osaka sta. , Umeda sta...</span></a></li>
                  <li><a href="job.php">中央区<span>Shinsaibashi , Namba...</span></a></li>
                  <li><a href="job.php">天王寺区<span>Tennoji...</span></a></li>
                </ul>
              </dd>
            </dl>
            <dl class="clearfix ac_menu_sp wow bounceInUp" data-wow-duration="1.5s">
              <dt>
                <!-- <p>その他エリア<span>Other areas</span></p> -->
                <div id="japanImg">
                <img src="img/japan.png"  alt="japan">
                </div>
              </dt>
              <dd>
                <ul class="clearfix wow bounceInUp" data-wow-duration="1.5s">
                  <li><a href="job.php">横浜市<span>Yokohama</span></a></li>
                  <li><a href="job.php">川崎市<span>Kawasaki</span></a></li>
                  <li><a href="job.php">千葉市<span>Chiba</span></a></li>
                  <li><a href="job.php">船橋市<span>Funabashi</span></a></li>
                  <li><a href="job.php">さいたま市<span>Saitama</span></a></li>
                  <li><a href="job.php">京都市<span>Kyoto</span></a></li>
                  <li><a href="job.php">神戸市<span>Kobe</span></a></li>
                  <li><a href="job.php">福岡市<span>Fukuoka</span></a></li>
                  <li><a href="job.php">名古屋市<span>Nagoya</span></a></li>
                  <li><a href="job.php">札幌市<span>Sapporo</span></a></li>
                  <li><a href="job.php">仙台市<span>Sendai</span></a></li>
                  <li><a href="job.php">長野市<span>Nagano</span></a></li>
                  <li><a href="job.php">広島市<span>Hiroshima</span></a></li>
                </ul>
              </dd>
            </dl>
          </section>
  </div>

  <!-- location -->
  <div id="location" class="wrap-inner">
    <h2 class="nav wow slideInRight" data-wow-duration="1.5s">
        働く場所から探す
        <span>Work location</span>
    </h2>
    <!-- <div id="location" class="wrap-inner"> -->
          <section>
            <dl class="clear ac_menu_sp wow slideInRight" data-wow-duration="1.5s">
              <dt>
                <img src="img/kantou.jpg" alt="tokyo">
              </dt>
              <dd>
                <ul class="clear wow slideInRight" data-wow-duration="1.5s">
                  <li><a  onclick="document.getElementById('id05').style.display='block'">新宿区<span>Shinjuku</span></a></li>
                  <div id="id05" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>新宿区<span>Shinjuku</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id10').style.display='block'">豊島区<span>Ikebukuro</span></a></li>
                  <div id="id10" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>豊島区<span>Ikebukuro</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id11').style.display='block'">墨田区<span>Ryogoku</span></a></li>
                  <div id="id11" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>墨田区<span>Ryogoku</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id12').style.display='block'">千代田区<span>Tokyo sta</span></a></li>
                  <div id="id12" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>千代田区<span>Tokyo sta</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id13').style.display='block'">渋谷区<span>Shibuya</span></a></li>
                  <div id="id13" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>渋谷区<span>Shibuya</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id14').style.display='block'">新宿区<span>Shinjuku</span></a></li>
                  <div id="id14" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>豊島区<span>Ikebukuro</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id15').style.display='block'">豊島区<span>Ikebukuro</span></a></li>
                  <div id="id15" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>豊島区<span>Ikebukuro</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id16').style.display='block'">墨田区<span>Ryogoku</span></a></li>
                  <div id="id16" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>墨田区<span>Ryogoku</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id17').style.display='block'">千代田区<span>Tokyo sta.</span></a></li>
                  <div id="id17" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>千代田区<span>Tokyo sta</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                  <li><a onclick="document.getElementById('id18').style.display='block'">渋谷区<span>Shibuya</span></a></li>
                  <div id="id18" class="modal">
                  <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                      <div class="region_modal_popup">
                        <h2>渋谷区<span>Shibuya</span></h2>
                        <section class="region_modal_popup_clearfix">
                          <ul>
                            <li>
                              <a href="job.php">東京都</a>
                            </li>
                            <li>
                              <a href="job.php">神奈川県</a>
                            </li>
                            <li>
                              <a href="job.php">千葉県</a>
                            </li>
                            <li>
                              <a href="job.php">埼玉県</a>
                            </li>
                            <li>
                              <a href="job.php">群馬県</a>
                            </li>
                            <li>
                              <a href="job.php">栃木県</a>
                            </li>
                            <li>
                              <a href="job.php">茨城県</a>
                            </li>
                          </ul>
                        </section>
                      </div>
                    </div>        
                  </div>
                </ul>
              </dd>
            </dl>
            <dl class="clear ac_menu_sp wow slideInRight" data-wow-duration="1.5s">
              <dt>
                <img src="img/kansai.jpg" alt="osaka">
              </dt>
              <dd>
                <ul class="clear wow slideInRight" data-wow-duration="1.5s">
                  <li><a href="job.php">北区<span>Osaka sta.</span></a></li>
                  <li><a href="job.php">中央区<span>Shinsaibashi</span></a></li>
                  <li><a href="job.php">天王寺区<span>Tennoji...</span></a></li>
                  <li><a href="job.php">北区<span>Osaka sta.</span></a></li>
                  <li><a href="job.php">中央区<span>Shinsaibashi</span></a></li>
                  <li><a href="job.php">天王寺区<span>Tennoji</span></a></li>
                </ul>
              </dd>
            </dl>
            <dl class="clear ac_menu_sp wow slideInRight" data-wow-duration="1.5s">
              <dt>
                <div id="japanImg">
                <img src="img/hokkaido.jpg"  alt="japan">
                </div>
              </dt>
              <dd>
                <ul class="clear wow slideInRight" data-wow-duration="1.5s">
                  <li><a href="job.php">横浜市<span>Yokohama</span></a></li>
                  <li><a href="job.php">川崎市<span>Kawasaki</span></a></li>
                  <li><a href="job.php">千葉市<span>Chiba</span></a></li>
                  <li><a href="job.php">船橋市<span>Funabashi</span></a></li>
                  <li><a href="job.php">さいたま市<span>Saitama</span></a></li>
                  <li><a href="job.php">京都市<span>Kyoto</span></a></li>
                  <li><a href="job.php">神戸市<span>Kobe</span></a></li>
                  <li><a href="job.php">福岡市<span>Fukuoka</span></a></li>
                  <li><a href="job.php">名古屋市<span>Nagoya</span></a></li>
                  <li><a href="job.php">札幌市<span>Sapporo</span></a></li>
                  <li><a href="job.php">仙台市<span>Sendai</span></a></li>
                  <li><a href="job.php">長野市<span>Nagano</span></a></li>
                  <li><a href="job.php">広島市<span>Hiroshima</span></a></li>
                </ul>
              </dd>
            </dl>
          </section>
        </div>
  </div> 
  <!-- condition -->
  <div id="condition" class="wrap-inner">
          <h2 class="wow bounceInUp" data-wow-duration="1.5s"><i class="fa fa-bookmark"></i>
            仕事の条件から探す
            <span>Job Conditions</span>
          </h2>
          <section class="clearfix wow bounceInUp" data-wow-duration="1.5s">
            <dl class="ac_menu" onclick="document.getElementById('id01').style.display='block'">
              <dt class="c_income">
                高収入<span>High Income</span>
              </dt>
               <!-- đây là modal-->
                <div id="id01" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>高収入<span>High Income</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                          <li>
                            <a href="job.php">大阪府</a>
                          </li>
                          <li>
                            <a href="job.php">兵庫県</a>
                          </li>
                          <li>
                            <a href="job.php">奈良県</a>
                          </li>
                          <li>
                            <a href="job.php">滋賀県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
            <dl class="ac_menu" onclick="document.getElementById('id02').style.display='block'">
              <dt class="c_income">
              シフト自由<span>Shift free</span>
              </dt>
               <!-- đây là modal-->
                <div id="id02" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>シフト自由<span>Shift free</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
            <dl class="ac_menu" onclick="document.getElementById('id03').style.display='block'">
              <dt class="c_income active">
              未経験歓迎<span>No Experience Required</span>
              </dt>
               <!-- đây là modal-->
                <div id="id03" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>未経験歓迎<span>No Experience Required</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
            <dl class="ac_menu" onclick="document.getElementById('id04').style.display='block'">
              <dt class="c_income active">
              留学生歓迎<span>International students welcome</span>
              </dt>
               <!-- đây là modal-->
                <div id="id04" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>留学生歓迎<span>International students welcome</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
          </section>
          <section>
          <dl class="ac_menu" onclick="document.getElementById('id06').style.display='block'">
              <dt class="c_income active">
              短期<span>Short term</span>
              </dt>
               <!-- đây là modal-->
                <div id="id06" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>短期<span>Short term</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
            <dl class="ac_menu" onclick="document.getElementById('id07').style.display='block'">
              <dt class="c_income active">
              長期<span>Long term</span>
              </dt>
               <!-- đây là modal-->
                <div id="id07" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>長期<span>Long term</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
            <dl class="ac_menu" onclick="document.getElementById('id08').style.display='block'">
              <dt class="c_income active">
              日払い<span>Daily payment</span>
              </dt>
               <!-- đây là modal-->
                <div id="id08" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>日払い<span>Daily　payment</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
            <dl class="ac_menu" onclick="document.getElementById('id09').style.display='block'">
              <dt class="c_income active">
              夜勤の仕事<span>Night shift work</span>
              </dt>
               <!-- đây là modal-->
                <div id="id09" class="modal">
                <div data-remodal-id="modal15" role="dialog" aria-labelledby="modal15Title" aria-describedby="modal1Desc" class="remodal remodal-is-initialized with-red-theme remodal-is-opened" tabindex="-1">
                    <div class="region_modal_popup" >
                      <h2>夜勤の仕事<span>Night shift work</span></h2>
                      <section class="region_modal_popup_clearfix">
                        <ul>
                          <li>
                            <a href="job.php">東京都</a>
                          </li>
                          <li>
                            <a href="job.php">神奈川県</a>
                          </li>
                          <li>
                            <a href="job.php">千葉県</a>
                          </li>
                          <li>
                            <a href="job.php">埼玉県</a>
                          </li>
                          <li>
                            <a href="job.php">群馬県</a>
                          </li>
                          <li>
                            <a href="job.php">栃木県</a>
                          </li>
                          <li>
                            <a href="job.php">茨城県</a>
                          </li>
                        </ul>
                      </section>
                    </div>
                  </div>        
                </div>
            </dl>
          </section>
  </div>


  <script>
    // Get the modal
    var modal = document.getElementById('id01');
    var modal02 = document.getElementById('id02');
    var modal03 = document.getElementById('id03');
    var modal04 = document.getElementById('id04');
    var modal05 = document.getElementById('id05');
    var modal06 = document.getElementById('id06');
    var modal07 = document.getElementById('id07');
    var modal08 = document.getElementById('id08');
    var modal09 = document.getElementById('id09');
    var modal09 = document.getElementById('id09');

    var modal10 = document.getElementById('id10');
    var modal11 = document.getElementById('id11');

    var modal12 = document.getElementById('id12');

    var modal13 = document.getElementById('id13');

    var modal14 = document.getElementById('id14');

    var modal15 = document.getElementById('id15');

    var modal16 = document.getElementById('id16');

    var modal17 = document.getElementById('id17');
    var modal18 = document.getElementById('id18');





    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
      if (event.target == modal02) {
        modal02.style.display = "none";
      }
      if (event.target == modal03) {
        modal03.style.display = "none";
      }
      if (event.target == modal04) {
        modal04.style.display = "none";
      }
      if (event.target == modal05) {
        modal05.style.display = "none";
      }
      if (event.target == modal06) {
        modal06.style.display = "none";
      }
      if (event.target == modal07) {
        modal07.style.display = "none";
      }
      if (event.target == modal08) {
        modal08.style.display = "none";
      }
      if (event.target == modal09) {
        modal09.style.display = "none";
      }
      if (event.target == modal10) {
        modal10.style.display = "none";
      }
      if (event.target == modal11) {
        modal11.style.display = "none";
      }
      if (event.target == modal12) {
        modal12.style.display = "none";
      }
      if (event.target == modal13) {
        modal13.style.display = "none";
      }
      if (event.target == modal14) {
        modal14.style.display = "none";
      }
      if (event.target == modal15) {
        modal15.style.display = "none";
      }
      if (event.target == modal16) {
        modal16.style.display = "none";
      }
      if (event.target == modal17) {
        modal17.style.display = "none";
      }
      if (event.target == modal18) {
        modal18.style.display = "none";
      }
    }
  
  </script>
        <!-- img -->
  <div id="recommend" class="clearfix">
          <article class="wow slideInLeft" data-wow-duration="1.5s">
            <div class="text wow slideInRight" data-wow-duration="2s">

                <h2><?php echo $main ['title_01']?>
                <span>Popular jobs for international</span>
              </h2>
              <p><?php echo $main ['title_02']?></p>
            </div>
          </article>
          <div class="imgTxt wow slideInLeft" data-wow-duration="1.5s">
            <div class="text wow slideInRight" data-wow-duration="2s">
              <h2><?php echo $main ['title01']?>
                <span>Popular jobs for international</span>
              </h2>
                <p><?php echo $main ['title02']?></p>
            </div>
          </div>
  </div>
  <!-- <div class="newWrap">
    <h1>News</h1>
    <div class="newTxt">
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>

    </div>
  </div> -->
  <!-- contact -->

    <div class="containerContact">
        <div id="contact" class="row input-container">
        <div class="row">
                <h1><?php echo $main ['contact us']?></h1>
        </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="text" required />
                        <label><?php echo $main ['First name']?></label> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="text" required />
                        <label><?php echo $main ['Last name']?></label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label><?php echo $main ['phone number']?> </label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label><?php echo $main ['Email Address']?></label> 
                    </div>
                </div>
                <!-- <div class="container_select">
                    <select name="input" class="gfield_select" aria-invalid="false">
                        <option value selected="selected" class="gf_placeholder">Select country<option>
                            <opition value="english">english</opition>
                            <opition value="vietnam">vietnam</opition>
                            <opition value="japan">japan</opition>
                    </select>
                </div> -->
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea required></textarea>
                        <label><?php echo $main ['Message']?></label>
                    </div>
                </div>
                    <div class="g-recaptcha" data-sitekey="6LfpywkaAAAAAGaMCX420jr38pQdYw7m-HWC4UrI"></div>
                <div class="col-xs-12">
                    <div class="btn-lrg submit-btn"><?php echo $main ['submit']?></div>
                </div>
        </div>
    </div>

  <!-- quick search -->
  <div class="nav wow bounceInUp" data-wow-duration="1.5s">
    <h2 class="nav wow bounceInUp" data-wow-duration="1.5s"><i class="fa fa-search" aria-hidden="true"></i>
        <?php echo $main ['Quick search']?>
        <span>job search</span>
    </h2>
    <nav>
        <ul class="clearfix wow bounceInUp" data-wow-duration="1.5s">
            <li>
                <a href="#area" class="n_area">
                    <!-- 人気の場所から -->
                    <?php echo $main['popular areas'] ?>
                    <span>popular areas</span>
                </a>
            </li>
            <li>
                <a href="#location" class="n_location">
                    <!-- 働く場所から探す -->
                    <?php echo $main ['Work location'] ?>
                    <span>Work location</span>
                </a>
            </li>
            <li>
                <a href="#condition" class="n_category">
                    <!-- 人気の場所から -->
                    <?php echo $main['Job condition'] ?>
                    <span>Search from the station</span>
                </a>
            </li>
            <li>
                <a href="" class="n_condition">
                    <?php echo $main['commitment'] ?>
                    <span>commitment</span>
                </a>
            </li>
        </ul>
    </nav> 
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
                    <img class="is-hidden-mobile" src="data:image/png;base64,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" alt="Mobile app">
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