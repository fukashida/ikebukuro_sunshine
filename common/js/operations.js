// リストカット・beforeafterのacordion
$('.a').hide();

$('.q').on('click', function() {//タイトル要素をクリックしたら
  var findElm = $(this).next(".a");//直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle();//アコーディオンの上下動作
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去し
  }else{//それ以外は
    $(this).addClass('close');//クラス名closeを付与
  }
});


// リストカット・beforeafterのflexslider
$(document).ready(function(){

    function isMobile() {
        return $(window).width() <= 540;
    }
    function isTablet() {
        return $(window).width() <= 1023;
    }

  function initializeFlexSlider() {
    var settings = {
      animation: "slide",
      animationLoop: true,
      itemMargin: 0,
      move: 1,
      slideshow: true,
      slideshowSpeed: 4000,
      animationSpeed: 600,
      easing: "swing",
      controlNav: false,
      directionNav: true,
      start: function(slider){
        if ($('.custom-slider .slide-counter').length === 0) {
          $('.custom-slider').append('<div class="slide-counter"></div>');
        }
        
        setCenterClass(slider);
        updateCounter(slider);
        fixNavigationHref();
      },
      after: function(slider){
        setCenterClass(slider);
        updateCounter(slider);
      }
    };

    // モバイルの場合の設定を上書き
    if (isMobile()) {
      settings.itemWidth = 81;   // 要調整
      settings.itemMargin = 5;
      settings.minItems = 5;
      settings.maxItems = 5;
    } else if (isTablet()) {
      // タブレットの場合
      settings.itemWidth = 200;
      settings.itemMargin = 30;
      settings.minItems = 3;
      settings.maxItems = 3;
    } else {
      // PCの場合（元の設定）
      settings.itemWidth = 200;
      settings.itemMargin = 5;
      settings.minItems = 5;
      settings.maxItems = 5;
    }

    $('.custom-slider').flexslider(settings);
  }

  function setCenterClass(slider) {
    var $slides = slider.find('.slides li');
    var centerIndex;
    
    if (isMobile()) {
      // モバイル：表示数に応じて中央を決定
      centerIndex = slider.currentSlide;
    } else {
      // PCでは5枚表示の真ん中（3番目）が中央
      centerIndex = slider.currentSlide + 2;
    }
    
    $slides.removeClass('center').eq(centerIndex).addClass('center');
  }

  function updateCounter(slider) {
    var currentSlide = slider.currentSlide + 1;
    var totalSlides = slider.count;
    var counterText = currentSlide + '/' + totalSlides;
    
    $('.custom-slider .slide-counter').text(counterText);
  }
  
  function fixNavigationHref() {
    $('.custom-slider .flex-direction-nav a').removeAttr('href');
    $('.custom-slider .flex-direction-nav a').attr('href', 'javascript:void(0);');
    
    $('.custom-slider .flex-direction-nav a').on('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
    });
  }

  // 初回初期化
  initializeFlexSlider();

  // リサイズ対応（540px境界のみ監視）
  var resizeTimer;
  var wasMobile = isMobile();
  
  $(window).on('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      var nowMobile = isMobile();
      
      // モバイル⇔PC間でサイズが変わった場合のみ再初期化
      if (wasMobile !== nowMobile) {
        wasMobile = nowMobile;
        
        var $slider = $('.custom-slider');
        if ($slider.data('flexslider')) {
          $slider.flexslider('destroy');
          initializeFlexSlider();
        }
      }
    }, 300);
  });
});
