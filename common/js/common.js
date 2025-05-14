
/*目次
 *
 *useragent判定
 *スムーススクロール
 *ロールオーバ
 *フォームテキスト処理
 *並んでいるボックスの高さを揃える
 *テーブルセルの色を交互に変更
 *タブの切り替え
 *SP用画像切り替え
 *SP用ナビ
 *
*/

//useragent判定
var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1) 
      || u.indexOf("ipad") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

$(function() {
    if(_ua.Mobile){
    var meta = document.createElement('meta');
    meta.setAttribute('name', 'viewport');
    meta.setAttribute('content', 'width=device-width,initial-scale=1.0,minimum-scale=1.0');
    document.getElementsByTagName('head')[0].appendChild(meta);
    }
});


//スムーススクロール
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
		var displayW = $(window).innerWidth();
		if(displayW < 768){
			var ScrTop = $(document).scrollTop();
			if (ScrTop < 50) {
      var position = target.offset().top - 90;
        } else if (ScrTop >= 50) {
      var position = target.offset().top - 50;
        }
		}
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});


//ロールオーバ

function smartRollover() {
	if(document.getElementsByTagName) {
		var images = document.getElementsByTagName("img");

		for(var i=0; i < images.length; i++) {
			if(images[i].getAttribute("src") != null){	//オブジェクトエラー回避
				if(images[i].getAttribute("src").match("_off."))
				{
					images[i].onmouseover = function() {
						this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
					}
					images[i].onmouseout = function() {
						this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
					}
				}
			}
		}
	}
}

if(window.addEventListener) {
	window.addEventListener("load", smartRollover, false);
}
else if(window.attachEvent) {
	window.attachEvent("onload", smartRollover);
}


//並んでいるボックスの高さを揃える

/**
 * Flatten height same as the highest element for each row.
 *
 * Copyright (c) 2011 Hayato Takenaka
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * @author: Hayato Takenaka (http://urin.take-uma.net)
 * @version: 0.0.2
**/
;(function($) {
	$.fn.tile = function(columns) {
		var tiles, max, c, h, last = this.length - 1, s;
		if(!columns) columns = this.length;
		this.each(function() {
			s = this.style;
			if(s.removeProperty) s.removeProperty("height");
			if(s.removeAttribute) s.removeAttribute("height");
		});
		return this.each(function(i) {
			c = i % columns;
			if(c == 0) tiles = [];
			tiles[c] = $(this);
			h = tiles[c].height();
			if(c == 0 || h > max) max = h;
			if(i == last || c == columns - 1)
				$.each(tiles, function() { this.height(max); });
		});
	};
})(jQuery);

/*↓クラスで制御するボックスを指定↓*/
$(function() {

function resizeList() {
	$(".troubleBox .box > a").tile(4);
	$("#mediaArea .box > a").tile(2);
	$(".causeStep li .box").tile(2);
    if(_ua.Mobile){
    $(".faceList li a span").tile(2);
    $(".laserList li a").tile(2);
    }
}

$(window).bind("load resize", function(){ resizeList();});
});


//タブの切り替え
$(function() {
	$(".map_select li").click(function() {
		var num = $(".map_select li").index(this);
		$(".gmap").addClass('disnon');
		$(".gmap").eq(num).removeClass('disnon');
		$(".map_select li").removeClass('select');
		$(this).addClass('select')
	});
});


//右ナビお問い合わせスクロール
$(function() {
	//ロード or スクロールされると実行
	$(window).on('load scroll', function(){
		//ヘッダーの高さ分スクロールするとfixedクラスを追加
		var containerPos = $('#container').offset().top;
		if ($(window).scrollTop() > containerPos) {
			$('#sideReservationWrap').addClass('fixed');
		} else {
			//fixedクラスを削除
			$('#sideReservationWrap').removeClass('fixed');
		}
	});	
});


//スマホナビ固定
$(function() {
	//ロード or スクロールされると実行
	$(window).on('load scroll', function(){
		var headHeight = $('#header').innerHeight();
		var displayW = $(window).innerWidth();
		//ヘッダーの高さ分スクロールするとfixedクラスを追加
		if ($(window).scrollTop() > headHeight) {
			$('#header').addClass('fixed');
		} else {
			//fixedクラスを削除
			$('#header').removeClass('fixed');
		}
	});	
});
//スマホメニュー
// $(function() {
// 	var $gnav = $('#gnav');
// 	$('.spBtn').click(function(){
// 		$gnav.after('<div id="navLayer">')
// 		$gnav.append('<a id="spNavClose">')
// 		$gnav.fadeIn();
// 		$('#navLayer').fadeIn();
// 	});
// 	$('#header').on('click','#navLayer, #spNavClose',function(){
// 		$('#navLayer').fadeOut('normal', function(){
// 			$(this).remove();
// 		});
// 		$('#spNavClose').fadeOut('normal', function(){
// 			$(this).remove();
// 		});
// 		$gnav.fadeOut();
// 	});
// });


//トップページ：マウスオーバーテキスト
$(document).ready(function() {
       if (Modernizr.touch) {
        $('.overItem .box').click(function() {
			if(!$(this).hasClass('hover')) {
          $(this).addClass('hover');
         }
        });
        // handle the closing of the overlay
        $('.overItem .close').click(function(e) {
			  e.preventDefault();
			  e.stopPropagation();
			  $(this).parent().removeClass('hover');
        });
       } else {
        // handle the mouseenter functionality
        $('.overItem .box').mouseenter(function() {
          $(this).addClass('hover');
         })
         // handle the mouseleave functionality
         .mouseleave(function() {
          $(this).removeClass('hover');
         });
       }
});



//症例ボタン
$(function(){
    $(".btncase dd").hide();
    $(".btncase dt").click(function(){
      $("+dd", this).slideUp();
   $(this).removeClass("select");
      if($("+dd",this).css("display")=="none"){
        $("+dd",this).slideDown();
    $(this).addClass("select");
      }
    });
});


//TOPへ戻る
$(function(){
    var pagetop = $('#gotoTop');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
});

//スマホ時のみ電話番号タッチ可能に
$(function(){
	if (Modernizr.touch) {
		$('.touchTel').each(function(){
			var telLink = $(this).attr('data-tel');
			$(this).attr('href',telLink);
		});
	}
});

// SP用画像切り替え
$(function() {
    if(_ua.Mobile){
        var wid = $(window).width();
        if (wid < 768) {
            $('.img_change').each(function() {
                $(this).attr("src", $(this).attr("src").replace('_pc', '_sp'));
            });
        }
    }
});

// SP用ナビ
$(function() {
//    if(_ua.Mobile){
    $(".spMenu").on("click", function() {
            $(".spNav").slideToggle('fast');
            $(".spMenu").toggleClass("active");//追加部分
        });
//    }
});

// SP用footer固定問い合わせ
$(function() {
    if(_ua.Mobile){
    $(".icon-down-open-big").on("click", function() {
            $("#sideReservationWrap").toggleClass("fixed_close");
        });
    }
});

// アコーディオン
 $(function(){
 	var openflag = false;
        $("#accordion > dt").on("click", function() {
        	 if ( openflag ==  false ) {
				$(this).next().slideDown();
				$(this).addClass("is-open");
				openflag = !openflag;
			} else {
				$(this).next().slideUp();
				$(this).removeClass("is-open");
				openflag = !openflag;
			}
        });
 });
 
// 目次
$(function(){
	$('.toc_title').click(function(){
		$(this).next('.toc_list').slideToggle();
		$(this).toggleClass("open");
	});
});