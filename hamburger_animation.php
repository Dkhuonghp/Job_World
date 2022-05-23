<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hamburger_animation.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <title>Hamburger Menu Overlay</title>
</head>
<body>
<?php
// Include LanguageHelper class
include_once('languageHelper.php');
// Gọi hàm checkLang để xem user chọn ngôn ngữ nào
$object = new LanguageHelper();
$lang = $object->checkLang();

include_once("$lang");
?>

        <!-- <ul>
            <li>
                <a href="#"><i class="fa fa-globe"></i></a>
                    <ul class="navchild">     
                        <li>
                            <a href="?lang=en">En</a>
                        </li>
                        <li>
                            <a href="?lang=vi">Vn</a>
                        </li>
                    </ul>
            </li>
        </ul> -->



<div class="header">
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="#"><i class="fa fa-home"></i><?php echo $main ['Home']?></a></li>
            <li><a href="#"><i class="fa fa-address-card"></i>Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

  <header class="showcase">
    <div class="container showcase-inner">
      <!-- <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas maiores sint impedit delectus quam molestiae explicabo cum facere ratione veritatis.</p>
      <a href="#" class="btn">Read More</a> -->
    </div>
  </header>
</body>
</html>
    
