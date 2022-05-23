<?php
    class LanguageHelper {
        function checkLang(){
            if (isset($_GET['lang'])){ 
                $lang = $_GET['lang'];
                return "languages/".$lang.".lng.php";
            }else return "languages/en.lng.php";                            
        }
    }
?>