// var index=1;
// changeImage = function(){
//     var imgs = ["img/battay.jpg", "img/big_image.jpg"];
//     document . getElementById('img').src[index];
//     index++;
//     if(index==2){
//         index= 0;
//     }
// }
// setInterval(changeImage,1000);
var index=1;
changeImage = function(){
    var imgs= ["img/battay.jpg","img/img_01.jpg","img/img_02.jpg","img/img_03.jpg","img/img_04.jpg"];
    document . getElementById('img').src = imgs[index];
    index++;
    if(index==4){
        index = 0;
    }
}
setInterval(changeImage,7000);
