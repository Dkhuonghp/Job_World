$(document).ready(function(){
    $('area-menu a').click(function(){
        $('.n_area').removeClass("n_area");
        var posClick = $(this).attr('href');
        var pos = $(posClick).position().top;
        $("[href='"+posClick+"']").addClass("n_area");
        $('html,body').animate({
            scrollTop:pos+20
        },1500);
    })
})