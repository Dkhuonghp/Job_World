<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>応募</title>
    <script 
    src="http://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ung_tuyen.css">
    <!-- header -->
    <link rel="stylesheet" href="css/header_top.css">
    <!-- pege top -->
    <link rel="stylesheet" href="css/style.css">
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
<!-- Top page -->
<a class="gotopbtn" href="#"><i class="fa fa-angle-double-up"></i></a>

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
    <div id="menuToggle">
        <input type="checkbox" class="input">
        <span></span>
        <span></span>
        <span></span>
        <ul class="mcd-menu">
                    <li class="main_menu_li">
                        <a href="home_page.php">
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
                        <ul>
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
                        </ul>
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


<!-- ung tuyen -->
<div class="container">
    <h1><?php echo $main ['apply']?></h1>
        <form>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                <!-- お名前 -->
                <?php echo $main ['name']?>
                </dt>
                <dd class="entryInputArea">
                    <input type="text" class="entryInputElem">
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                <!-- お名前(ふりがな) -->
                <?php echo $main ['katakana']?>
                </dt>
                <dd class="entryInputArea">
                    <input type="text" class="entryInputElem">
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                <!-- メールアドレス -->
                <?php echo $main ['mailaddress']?>
                </dt>
                <dd class="entryInputArea">
                    <input type="text" class="entryInputElem">
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                    <!-- birthDay -->
                    <?php echo $main ['birthday']?>
                </dt>
                <dd class="entryInputArea entryInputSelectArea">
                    <div class="entryInputSelectWrap">
                    <select id="birthdayMonth" name="birthdayMonth" class="entryInputSelect">
                        <option value="1" selected><?php echo $main ['Month']?></option>
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="marth">Marth</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                    </select>
                    </div>
                    <div class="entryInputSelectWrap">
                    <select id="birthdayDay" name="birthdayDayy" class="entryInputSelect">
                    <option value="1" selected><?php echo $main ['Day']?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    </div>
                    
                    <div class="entryInputSelectWrap">
                    <select id="birthdayYear" name="birthdayYear" class="entryInputSelect">
                        <option value="1" selected><?php echo $main ['year']?></option>
                        <option value="2021">2021</option>
                        <option value="2021">2020</option>
                        <option value="2021">2019</option>
                        <option value="2021">2018</option>
                        <option value="2021">2017</option>
                        <option value="2021">2016</option>
                        <option value="2021">2015</option>
                        <option value="2021">2014</option>
                        <option value="2021">2013</option>
                        <option value="2021">2012</option>
                        <option value="2021">2011</option>
                        <option value="2021">2010</option>
                        <option value="2021">2009</option>
                        <option value="2021">2008</option>
                        <option value="2021">2007</option>
                        <option value="2021">2006</option>
                        <option value="2021">2005</option>
                        <option value="2021">2004</option>
                        <option value="2021">2003</option>
                    </select>
                    </div>
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt>
                    <!-- 性別 -->
                    <?php echo $main ['sex']?>
                </dt>
                <dd class="entryInputArea entryInputRadioArea">
                    <input type="radio" name="sex" value="1" class="entryInputRadio" id="male" aria-invalid="false">
                    <label class="entryInputLabel" tabindex="0" for="male"><?php echo $main ['male']?></label>
                    <input type="radio" name="sex" value="2" class="entryInputRadio" id="female" aria-invalid="false">
                    <label class="entryInputLabel" tabindex="0" for="female"><?php echo $main ['flame']?></label>
                </dd>
            </dl>
            
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                <!-- 電話番号 -->
                <?php echo $main ['tell']?>
                </dt>
                <dd class="entryInputArea">
                    <input type="text" class="entryInputElem">
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                    <!-- 現在の職業 -->
                    <?php echo $main ['cv']?>
                </dt>
                <dd class="entryInputArea entryInputSelectArea">
                    <div class="entryInputSelectWrap">
                    <select id="" name="userJobId" class="entryInputSelect selected">
                        <option value="1" selected>選択してください</option>
                        <option value="1">高校生</option>
                        <option value="1">大学生</option>
                        <option value="2">大学院生</option>
                        <option value="3">短大性</option>
                        <option value="4">専門学校生</option>
                        <option value="5">フリーター</option>
                        <option value="6">主婦・主夫</option>
                        <option value="7">正社員</option>
                        <option value="8">契約・派遣社員</option>
                        <option value="9">フリー・自営業</option>
                        <option value="10">無職</option>
                        <option value="11">その他</option>
                    </select>
                    </div>
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                    <!-- 住所 -->
                    <?php echo $main ['dc']?>
                </dt>
                <dd class="entryInputArea entryInputSelectArea">
                    <div class="entryInputLabel">
                    <select id="" name="userJobId" class="entryInputSelect selected">
                        <option value="1" selected>選択してください</option>
                        <option value="220">愛知県</option>
                        <option value="27">大阪</option>
                        <option value="24">北海道</option>
                        <option value="26">青森</option>
                        <option value="202">東京</option>
                        <option value="25">千葉県</option>
                        <option value="197">福井県</option>
                        <option value="222">福岡県</option>
                        <option value="198">福島県</option>
                        <option value="200">岐阜県</option>
                        <option value="203">広島県</option>
                        <option value="199">茨城県</option>
                        <option value="223">長野県</option>
                        <option value="201">奈良</option>
                        <option value="204">その他</option>	
                    </select>
                    </div>
                    <div class="entryInputLabel">
                    <select id="" name="userJobId" class="entryInputSelect selected">
                        <option value="1" selected>選択してください</option>
                        <option value="220">愛知県</option>
                        <option value="27">大阪</option>
                        <option value="24">北海道</option>
                        <option value="26">青森</option>
                        <option value="202">東京</option>
                        <option value="25">千葉県</option>
                        <option value="197">福井県</option>
                        <option value="222">福岡県</option>
                        <option value="198">福島県</option>
                        <option value="200">岐阜県</option>
                        <option value="203">広島県</option>
                        <option value="199">茨城県</option>
                        <option value="223">長野県</option>
                        <option value="201">奈良</option>
                        <option value="204">その他</option>	
                    </select>
                    </div>
                </dd>
            </dl>
            <dl class="entryInputList">
                <dt class="entryInputTerm">
                <!-- 備考 -->
                <?php echo $main ['comment']?>
                </dt>
                <dd class="entryInputArea">
                    <textarea type="text" class="entryInputTextArea"></textarea>
                </dd>
            </dl>
            <div class="rememberme">
                <label for="rememberme">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                    Remember Me
                </label>
            </div>
            <p class="entryInputList">
                または履歴書を送る
            </p>
            <?php
                if (isset($_POST['upload'])){
                    if (isset($_FILES['avata']) && !empty($_FILES['avata'])){
                        move_uploaded_file($_FILES['avata']['tmp_name'],'./upload/'.$_FILES['avata']['name']);
                        echo "upload thành công";
                    } 
                }
            ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <span>chọn file ảnh
                        <input type="file" name="avata">
                    </span>
                    <input type="submit" name="upload" value="upload">
                </form>

            <input type="submit" class="entryInpuSubmit" value="同意">
        </form>
</div>


</body>
</html>