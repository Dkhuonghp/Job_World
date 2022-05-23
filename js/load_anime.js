// $(window).on('loader', function(event){
//     $('body').removeClass('preloading');
//     $('loader').delay(1000).fadeOut('fast');
// });


var loader = function() {
    setTimeout(function() {
        $('.loader').css({ 'opacity': 0, 'visibility':'hidden' });
    }, 1000);
};
$(function(){
    loader();
});