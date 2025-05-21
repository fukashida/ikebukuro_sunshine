<?php require('../wp-blog-header.php'); ?>
<?php include (STYLESHEETPATH . '/header_iframe_thanks.php'); ?>

<style>
body{
	background: none;
}
#mainContents{
	float: none;
	margin-right: auto;
	margin-left: auto;
}
#header,
.breadcrumbs,
#subContents,
#sideReservationWrap,
#footer{
	display: none;
}
</style>
<div id="mainContents">
	<main class="reservation2 completion">
		<div id="pageTitle" class="reservation" style="margin-bottom: 2200px;">
			<h2>カウンセリング・再診予約</h2>
			<p>カウンセリング・再診のご予約を受け付けております。<br>スターラックスの2回目以降の照射予約はお電話ください。</p>
		</div>
		<ul class="form-step">
			<li>情報入力</li><li>入力内容の確認</li><li class="current">完了</li>
		</ul>
		<section class="secBox">
			<h3 class="baseTitle">〈予約完了〉カウンセリング・再診のご予約をうけたまわりました</h3>
			<p class="mb30">
				ご予約を頂きありがとうございました。<br>
				頂きました内容にてご予約をうけたまわりました。<br>
				ご入力いただきましたメールアドレスに<br>
				予約完了メールをお送りしておりますので、ご確認ください。<br>
				<br>
				ご予約の日時変更やキャンセルはお電話にて承っております。<br>
				<br>
				※メールが受信できなかった場合はクリニックまでお電話ください<br>
			</p>
			<!-- <a href="https://www.ike-sunshine.co.jp/" class="btn-back" target="_blank">トップページへもどる</a> -->
		</section>
	</main>
</div>
<!--/#mainContents-->



<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var yahoo_conversion_id = 1000038478;
    var yahoo_conversion_label = "EoFsCMW2twMQ48-X2wM";
    var yahoo_conversion_value = 1;
    /* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000038478/?value=1&label=EoFsCMW2twMQ48-X2wM&guid=ON&script=0&disvt=true"/>
    </div>
</noscript>

<script type="text/javascript" language="javascript">
  /* <![CDATA[ */
  var yahoo_ydn_conv_io = "W4XTND4OLDXT8KgYjImC";
  var yahoo_ydn_conv_label = "";
  var yahoo_ydn_conv_transaction_id = "";
  var yahoo_ydn_conv_value = "0";
  /* ]]> */
</script>
<script type="text/javascript" language="javascript" charset="UTF-8" src="https://b90.yahoo.co.jp/conv.js"></script>


<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1000038478;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b97.yahoo.co.jp/pagead/conversion/1000038478/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>

<!-- Yahoo Code for your Target List -->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'EU2043XSK3';
var yahoo_retargeting_label = '';
var yahoo_retargeting_page_type = '';
var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="https://b92.yahoo.co.jp/js/s_retargeting.js"></script>


<!-- statics.a8.net -->
<?php
	// 出力コードは半角英数字で50バイトまで
	$a8_order_number_commmon = sprintf("ikesun_order_%d_%d_", time(), mt_rand());
	for ($i=0; $i<6; $i++) {
		$no = $i + 1;
		$a8_order_number[$i] = $a8_order_number_commmon . $no;
	}
?>
<span id="a8sales"></span>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script>
a8sales({
  "pid": "s00000015199001",
  "order_number": "<?php echo $a8_order_number[0]; ?>",
  "currency": "JPY",
  "items": [
    {
      "code": "a8hokuro",
      "price": 1000,
      "quantity": 1
    },
  ],
   "total_price": 1000
});
a8sales({
  "pid": "s00000015199002",
  "order_number": "<?php echo $a8_order_number[1]; ?>",
  "currency": "JPY",
  "items": [
    {
      "code": "a8tatoo",
      "price": 1000,
      "quantity": 1
    },
  ],
   "total_price": 1000
});
a8sales({
  "pid": "s00000015199003",
  "order_number": "<?php echo $a8_order_number[2]; ?>",
  "currency": "JPY",
  "items": [
    {
      "code": "a8kotsujiko",
      "price": 1000,
      "quantity": 1
    },
  ],
   "total_price": 1000
});
a8sales({
  "pid": "s00000015199004",
  "order_number": "<?php echo $a8_order_number[3]; ?>",
  "currency": "JPY",
  "items": [
    {
      "code": "a8wristcut",
      "price": 1000,
      "quantity": 1
    },
  ],
   "total_price": 1000
});a8sales({
  "pid": "s00000015199005",
  "order_number": "<?php echo $a8_order_number[4]; ?>",
  "currency": "JPY",
  "items": [
    {
      "code": "a8wakiga",
      "price": 1000,
      "quantity": 1
    },
  ],
   "total_price": 1000
});
a8sales({
  "pid": "s00000015199006",
  "order_number": "<?php echo $a8_order_number[5]; ?>",
  "currency": "JPY",
  "items": [
    {
      "code": "a8nikibi",
      "price": 1000,
      "quantity": 1
    },
  ],
   "total_price": 1000
});
</script>

<?php include (STYLESHEETPATH . '/footer_iframe.php'); ?>