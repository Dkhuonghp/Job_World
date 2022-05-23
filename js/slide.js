$(document).ready(function(){


    $(window).scroll(function(){
        $('#area').each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
                if ( pos < winTop + 600){
                    $(this).addClass("clearfix");
            }
        });
    });
})