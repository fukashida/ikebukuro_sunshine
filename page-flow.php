<?php get_header(); ?>

<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<div id="mainContents">
<main>
<div id="pageTitle" class="<?php echo get_page($page_id)->post_name; ?>">
<h1><?php the_title(); ?></h1>
<?php if(get_post_meta( $post->ID, 'titlesub', true )): ?>
<p><?php echo get_post_meta($post->ID,'titlesub', true);?></p>
<?php endif; ?>
</div>

<!--/#mainContents-->

<link rel="stylesheet" type="text/css" href="/wp-content/themes/ikebukuro_sunshine/css/operations.css">

	<!-- ご予約から治療までの全体の流れ -->
	<section class="secBox laser_operation" id="toc7">
		<h2 class="ttl"><img src="/wp-content/themes/ikebukuro_sunshine/img/operations/test_laser/title_icon.png" alt="ご予約から治療までの全体の流れ">ご予約から治療までの全体の流れ</h2>
		
		<div id="flow" class="mb40">
		
			<div class="box">
				<div class="txt">
					<p class="number">1</p>
					<p class="ttl">予約のお申込み</p>
					<p>
						まずは、お電話かご予約フォームからご来院希望日時をお申し込みください。<br>
						当日のご予約も承っております。<br>
						当日のご予約はお電話にてご予約下さい。<br>
						<br>
						お電話　<a href="tel:0120331244" class="bold italic">0120-331-244</a><br>
						<a href="/reservation/" class="linkBtn01" style="display: inline-block;">　ご予約フォームへの入力はこちら　</a>
					</p>
				</div>
				<div class="img">
					<img src="/wp-content/themes/ikebukuro_sunshine/img/operations/laser/flow01.jpg" alt="予約のお申込み">
				</div>
			</div>
			
			<div>
				<div class="box">
					<div class="txt">
						<p class="number">2</p>
						<p class="ttl">問診票のご記入</p>
						<p>
							ご来院頂きまして受付にて問診票をご記入頂きます。<br>
							この問診票を元に患者様へ詳しくご説明をさせていただいております。<br>
							ご記入内容は個人情報管理を徹底し、厳粛に管理しております。
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/09/a6e168ebf7cc6e3cd453149468fa518d.png" alt="問診票のご記入">
					</div>
				</div>
				
				<div class="box">
					<div class="txt">
						<p class="number">3</p>
						<p class="ttl">女性カウンセラーによる<br>詳しい治療のご説明</p>
						<p>
							女性カウンセラーにて個室へとご案内させていただきます。<br>
							ご相談されたい傷がある場所の確認とその面積を計測させていただきます。<br>
							その後、治療の全体の流れや傷跡治療のレーザーの詳しい仕組みの説明、
							ご帰宅後の注意事項など詳しく症例写真を使用してご説明させていただいております。<br>
							男性医師には聞きづらいことなどを何でもお尋ねください。
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/09/e65a06146cdff605bbf0b4d20a1cb01f.png" alt="女性カウンセラーによる詳しい治療のご説明">
					</div>
				</div>
				
				<div class="box">
					<div class="txt">
						<p class="number">4</p>
						<p class="ttl">ドクターの診察</p>
						<p>
							院長の鈴木栄樹みずから詳しく患者様お一人お一人に合った治療法をご説明いたします。<br>
							修正手術をする場合、修正手術後レーザーを併用する場合、レーザー照射のみにて治療を行う場合など、患者様のご要望やご予算に沿ったご提案をすることで、患者様のお気持ちに添える様にいたします。
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/09/a9385223abc3932442545f89a570af54.png" alt="ドクターの診察">
					</div>
				</div>
				
				<div class="box">
					<div class="txt">
						<p class="number">5</p>
						<p class="ttl">お見積りのご提示</p>
						<p>
							医師と患者様にて決めていただいた治療法についてお見積りを作成します。
							計測しました内容を元にお見積りを作成いたしますので、全体照射をご希望か一部だけの照射をご希望かなど具体的にご指示いただければ何通りでもお見積りを作成することが可能です。
							また、モニターをご希望の方には割引したお値段でのご提示も可能です。<br>
							どうぞご遠慮なく、ご希望をおっしゃってください。
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/09/60ee0a84f605594ad7b1c14741a65da4.png" alt="お見積りのご提示">
					</div>
				</div>
				
				<div class="box">
					<div class="txt">
						<p class="number">6</p>
						<p class="ttl">同意書のご記入とお支払い</p>
						<p>
							お見積りの内容をご確認頂き、その日にそのまま治療をご希望であれば
							カウンセリング当日治療をご案内いたします。
							もちろん、ご相談のみでお帰り頂いて、ご自宅でご家族とゆっくりご検討いただいても大丈夫です。
							当日そのまま治療をご希望の方は、同意書のご記入を頂き、その後お支払いとなります。
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/09/7bb67947c82000a6a765635bcad95eeb.png" alt="同意書のご記入とお支払い">
					</div>
				</div>
				
				<div class="box">
					<div class="txt">
						<p class="number">7</p>
						<p class="ttl">治療</p>
						<p>
							傷跡治療レーザーの場合：看護師がレーザー室へご案内し、改めて照射範囲の確認と諸注意をお伝えし、レーザー照射を実施します。実施後はアイスで15分冷やしてからご帰宅いただきます。<br>
							<br>
							手術の場合：手術室へご案内し、治療箇所を確認後局所麻酔を行い手術を実施します。手術後は患部の保護を行い内服薬をお渡しいたします。
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/06/7c45cf837520a13078b705e2d9ee90c7.jpg" alt="レーザー照射">
					</div>
				</div>
				
				<div class="box">
					<div class="txt">
						<p class="number">8</p>
						<p class="ttl">ご帰宅</p>
						<p>
							傷跡治療レーザーの場合：次回1か月後の照射のご予約をお取り下さい<br>
							<br>
							手術の場合：次回3日目経過診察・7～10日目の抜糸のご予約をお取りください<br>
							<br>
							ほくろ除去の場合：10日目検診・1ヶ月検診のご予約をお取りください
						</p>
					</div>
					<div class="img">
						<img src="/wp-content/uploads/2019/09/2bd6194b18f55057615d3da99eb97948.png" alt="ご帰宅">
					</div>
				</div>
			</div>
		</div>
	</section>
























<section class="secBox clrfix">
<h3 class="baseTitle">未成年者の施術について</h3>
<p class="mb10">池袋サンシャイン美容外科では未成年者の方の施術において、親権者の同意書が必要になっております。</p>
<p>下のボタンよりダウンロード出来る親権者同意書（pdf形式）をプリントアウトしていただきまして、全ての項目にご記入のうえ、お手数ですが当院までご持参ください。</p>
<div class="btnPdf mb10">
<a href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer"><span>親権者同意書をダウンロード</span></a>
</div>
<p>※PDF書を閲覧・印刷するにはADOBE READERが必要です。</p>

<a href="http://get.adobe.com/jp/reader/" target="_blank" class="getPdf" rel="noopener noreferrer">
<div class="photoL">
<img src="/wp-content/themes/ikebukuro_sunshine/common/img/img_adobe.jpg" alt="ADOBE READER">
</div>
<p>ADOBE READERはこちらから無料でダウンロードできます。</p>
</a>
</section>


<!--/#mainContents-->

</main>
</div>
<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>

<?php get_footer(); ?>
