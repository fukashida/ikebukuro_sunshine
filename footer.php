<?php if( is_home() || is_front_page() ) :  ?>
<?php else: ?>
</div>
<?php endif; ?>
<!--/#container-->

<div id="footer">
	<div class="float_nav">
		<ul>
			<li><a href="/reservation/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic_mail.png" alt="" width="60px" height="auto" loading="lazy">WEB予約フォーム</a></li>
			<li><a href="tel:0120331244"><img src="<?php echo get_template_directory_uri(); ?>/common/img/sp_ic_tel.png" alt="" width="60px" height="auto" loading="lazy">電話相談・ご予約<br><span class="number">0120-331-244</span><br><span class="time">受付時間：9:00～17:30</span></a></li>
			<!--
			<li class="btn_01"><a href="/map/"><img src="/common/img/btn_01.jpg" alt="アクセス"/></a></li>
			<li class="btn_02"><a href="/reservation/"><img src="/common/img/btn_02.jpg" alt="ご予約はこちらから"/></a></li>
			<li class="btn_03"><a data-tel="tel:0120331244" class="touchTel"><img src="/common/img/btn_03.jpg" alt="お電話はこちらから"/></a></li>
			 -->
		</ul>
	</div>
	<footer>
     	<div id="page-top" class="blogicon-chevron-up"></div>
		<div class="inner">
			<div id="footHead">
				<p class="name">池袋サンシャイン美容外科</p>
			</div>
			<nav id="footNav" class="clrfix">
				<p id="footTel"><img src="/wp-content/uploads/footer_2108.png" loading="lazy" width="201" height="36" alt="0120-331-244　受付時間：9:00～17:30（完全予約制）"/></p>
				<div class="contents">
					<p>
						〒170－0013 東京都豊島区東池袋1-15-3 近代ビル9F<br>
						TEL：0120-331-244<br>
						FAX：03-3987-5080<br>
						Email：<a href="mailto:info@ike-sunshine.co.jp">info@ike-sunshine.co.jp</a><br>
						診療時間：9:00～17:30 (完全予約制)<br>
						定休日：火曜・木曜
					</p>
				</div>

			</nav>
		</div>
		<div class="menu">
				<div class="flex">
					<div class="item">
						<div class="title">
							<p>お顔の悩み</p>
						</div>
						<ul>
							<a href="/operations/mwlift/"><li>▶︎ リフトアップ・小顔治療</li></a>
							<a href="/operations/futae/"><li>▶︎ 二重まぶた・タルミ取り</li></a>
							<a href="/operations/nikibi/"><li>▶︎ ニキビ・ニキビ跡</li></a>
							<a href="/operations/placenta/"><li>▶︎ シミ・肝斑・くすみ治療</li></a>
						</ul>
					</div>
					<div class="item">
						<div class="title n2">
							<p>お肌の悩み</p>
						</div>
						<ul>
							<a href="/operations/laser/"><li>▶︎ リストカット・傷跡</li></a>
							<a href="/operations/shiwa/"><li>▶︎ ︎交通事故の傷跡治療</li></a>
							<a href="/operations/skincare/"><li>▶︎ ︎ホクロ・イボ<br class="nb"><span class="nb">　</span>（保険適用）</li></a>
							<a href="/operations/iboaza/"><li>▶︎ 大きなホクロ・あざ・<br class="nb"><span class="nb">　</span>イボ（保険適用）</li></a>
							<a href="operations/faceline/"><li>▶︎ シワ・タルミ治療の<br class="nb"><span class="nb">　</span>注入療法</li></a>
						</ul>
					</div>
					<div class="item">
						<div class="title">
							<p>お身体の悩み</p>
						</div>
						<ul>
							<a href="/operations/hyperhidrosis/"><li>▶︎ 多汗症</li></a>
							<a href="/operations/wakiga/"><li>▶︎ わきが治療<br class="nb"><span class="nb">　</span>（保険適用）</li></a>
							<a href="/operations/bodyline/"><li>▶︎ 刺青除去・<br class="nb"><span class="nb">　</span>タトゥー除去</li></a>
							<a href="/operations/faceline/"><li>▶︎ 注入療法</li></a>
						</ul>
					</div>
					<div class="item">
						<div class="title n2">
							<p>その他の悩み</p>
						</div>
						<ul class="n2">
							<a href="/operations/datumousyou/"><li>▶︎ 男性型脱毛症治療<br class="nb2"><span class="nb2">　</span>（プロペシア）</li></a>
						</ul>
					</div>
				</div>
			</div>
			<ul class="law">
				<li><a href="/law" target="_blank">特商法</a></li>
				<li><a href="/privacy_policy" target="_blank">プライバシーポリシー</a></li>
				<li><a href="/recruit" target="_blank">スタッフ募集</a></li>
			</ul>
			<p id="copyright"><small><?php echo date('Y');?> (c) Ikebukuro Sunshine biyougeka All Rights Reserved.</small></p>
	</footer>
</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/common/js/add_param.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const queryParams = getQueryParams(); // URLからパラメータ取得

  // bookingID と bookingToken を除外
  delete queryParams.bookingID;
  delete queryParams.bookingToken;

  const queryString = Object.keys(queryParams)
    .map(key => encodeURIComponent(key) + "=" + encodeURIComponent(queryParams[key]))
    .join("&");

  // パラメータが存在する場合、localStorageにも保存（再利用用）
  if (queryString) {
    localStorage.setItem("initial_query_params", queryString);
  }

  const button = document.querySelector("#booking-package_pay_locally .book_now_button");

  if (button) {
    button.addEventListener("click", () => {
      // 予約処理を通したあとに送る（遅延させる）
      setTimeout(() => {
        const savedParams = localStorage.getItem("initial_query_params");
        const url = "/thanks/" + (savedParams ? "?" + savedParams : "");
        window.location.href = url;
      }, 1500); // ←送信完了を待つために遅延（1.5秒程度）必要なら調整可能
    });
  }

  // aタグのリンク遷移にもパラメータ付加
  const links = document.querySelectorAll("a");
  links.forEach(link => {
    link.addEventListener("click", event => {
      const savedParams = localStorage.getItem("initial_query_params");
      if (savedParams) {
        event.preventDefault(); // デフォルト動作をキャンセル
        const href = link.getAttribute("href");
        const separator = href.includes("?") ? "&" : "?";
        const newHref = href + separator + savedParams;
        window.location.href = newHref;
      }
    });
  });

});
</script>


<!--/#bodyWrap-->
<?php
$url = $_SERVER['REQUEST_URI'];
 ?>
<?php if (is_home() && $GLOBALS['blog_id'] == 1) { ?>
<!-- Google Code for TOP Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "8lgfCOjJ5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=8lgfCOjJ5AMQ-Km7wwM&amp;guid=ON&amp;script=0">
</div>
</noscript>
<!-- Google Code for TOP Remarketing List -->
<?php }else if($url == "/operations/skincare/"){ ?>
<!-- Google Code for ホクロ・イボ Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "GkcFCODK5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=GkcFCODK5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for ホクロ・イボ Remarketing List -->
<?php }else if($url == "/operations/nikibi/"){ ?>
<!-- Google Code for ニキビ Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "en5JCMjN5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=en5JCMjN5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for ニキビ Remarketing List -->
<?php }else if($url == "/operations/futae/"){ ?>
<!-- Google Code for 二重まぶた Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "jDptCKjR5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=jDptCKjR5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for 二重まぶた Remarketing List -->
<?php }else if($url == "/operations/wakiga/"){ ?>
<!-- Google Code for わきが・多汗症 Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "93FUCNjL5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=93FUCNjL5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for わきが・多汗症 Remarketing List -->
<?php }else if($url == "/operations/faceline/"){ ?>
<!-- Google Code for フェイス・ボディライン Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "tDmECKDS5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=tDmECKDS5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for フェイス・ボディライン Remarketing List -->
<?php }else if($url == "/operations/bodyline/"){ ?>
<!-- Google Code for 刺青・タトゥー Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "74a8CMDO5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=74a8CMDO5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for 刺青・タトゥー Remarketing List -->
<?php }else if($url == "/operations/laser/"){ ?>
<!-- Google Code for リストカット・傷跡 Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "ExxlCNDM5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=ExxlCNDM5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for リストカット・傷跡 Remarketing List -->
<?php }else if($url == "/operations/placenta/"){ ?>
<!-- Google Code for シミ・肝斑・くすみ  Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "7ugaCLDQ5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=7ugaCLDQ5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for シミ・肝斑・くすみ  Remarketing List -->
<?php }else if($url == "/operations/datsumou/"){ ?>
<!-- Google Code for 医療レーザー脱毛 Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "UqbECJjT5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=UqbECJjT5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for 医療レーザー脱毛 Remarketing List -->
<?php }else if( ($url == "/operations/aga/") || ($url == "/operations/datumousyou/") || ($url == "/operations/ikumou/") || ($url == "/operations/hatumou/")){ ?>
<!-- Google Code for AGA・毛髪再生医療 Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 946787576;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "YxNICLjP5AMQ-Km7wwM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/946787576/?label=YxNICLjP5AMQ-Km7wwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Code for AGA・毛髪再生医療 Remarketing List -->
<?php } ?>

<script type="text/javascript" language="javascript">
var yahoo_retargeting_id = 'EU2043XSK3';
var yahoo_retargeting_label = '';
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 985776742;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/985776742/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- 上に戻る -->
<script>
function getScrolled() {
 return ( window.pageYOffset !== undefined ) ? window.pageYOffset: document.documentElement.scrollTop;
}
var topButton = document.getElementById( 'page-top' );
window.onscroll = function() {
  ( getScrolled() > 500 ) ? topButton.classList.add( 'fade-in' ): topButton.classList.remove( 'fade-in' );
};
function scrollToTop() {
  var scrolled = getScrolled();  window.scrollTo( 0, Math.floor( scrolled / 2) );
  if ( scrolled > 0 ) {
    window.setTimeout( scrollToTop, 30 );
  }
};
topButton.onclick = function() {
  scrollToTop();
};
</script>

<?php wp_footer(); ?>
</body></html>