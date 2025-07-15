// // QA
// $(function(){
// 	$('.acbox .question').click(function(){
// 		$(this).next('.answer').slideToggle();
// 		$(this).toggleClass('active');
// 	});
// });


// /*objedt-fit IE対策*/
// $(function(){
//     objectFitImages();
// });

// 	$(function() {
// 		var $accBtn = $('.checkMoreBtn'),
// 			$accContents = $('.checkMore');

// 		$accContents.hide(); //contentsを全て隠す
// 		$accBtn.each(function() {
// 			var flag = "close"; //flagを初期値を設定
// 			$(this).click(function(e) {
// 				e.preventDefault(); //aタグのリンク無効化
// 				$(this).next().slideToggle(); //すぐ次の要素をスライド

// 				if (flag == "close") { //もしflagがcloseだったら
// 					$(this).text("CLOSE　▲");
// 					flag = "open"; //flagをopenにする
// 				} else { //もしflagがopenだったら
// 					$(this).text("MORE　▼");
// 					flag = "close"; //flagをcloseにする
// 				}

// 			});
// 		});
// 	});
