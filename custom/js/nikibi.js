jQuery(window).on("load", function() {

    $('.flexslider').fadeIn(1000);
    jQuery('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });

    $('.slider').fadeIn(1000);
    jQuery('.slider').flexslider({
        animation: "slide",
        prevText: "",
        nextText: "",
        controlNav: false,
        directionNav: true,
        itemWidth: 400,
        itemMargin: 5,
        minItems: 1,
        maxItems: 4,
        move: 1
    });

});




$(function() {
    var $accBtn = $('.checkMoreBtn2'),
        $accContents = $('.checkMore2');

    $accContents.hide(); //contentsを全て隠す
    $accBtn.each(function() {
        var flag = "close"; //flagを初期値を設定
        $(this).click(function(e) {
            e.preventDefault(); //aタグのリンク無効化
            $(this).next().slideToggle(); //すぐ次の要素をスライド
            
            if (flag == "close") { //もしflagがcloseだったら
                $(this).text("さらに詳しく　▲");
                flag = "open"; //flagをopenにする
            } else { //もしflagがopenだったら
                $(this).text("さらに詳しく　▼");
                flag = "close"; //flagをcloseにする
            }
            
        });
    });
});
