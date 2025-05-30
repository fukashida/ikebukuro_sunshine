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

<section class="secBox">
<h3 class="baseTitle">ご挨拶</h3>
<div class="photoR spFull"><img src="/wp-content/themes/ikebukuro_sunshine//img/greetings/img_01.jpg" alt="スタッフ"></div>
<p class="mb10">私たち池袋サンシャイン美容外科は、豊富な経験を元に高い技術を提供しております。</p>
<p class="mb10">また薬品・材料は本当に効果のあるよいものだけを使用し、より低コストで仕入れるためのルート開拓に努めています。広告も、内容やメディアを厳選して実施するようにしています。これらは地味な作業ですが、とても大切なことです。徹底して実践するのが私たち流だと心がけています。</p>
<p class="mb10">
医師の携わる医療機関として、ウソのない施術を行いたい。もっと美しくありたいと願う方が「ここにしてよかった」とおっしゃる笑顔をたくさん見たい。それが誇りであり、あなたへの誠意だと思うのです。
私たちは確かなノウハウを活かし、ムダのない施術・経営を実現することで、よい治療を、よりリーズナブルな料金で、よりたくさんの方にご提供差し上げたいと、つねに考えています。
</p>
【お知らせ】<br />2009年12月より池袋サンシャイン美容外科は、医療法人社団　栄真会　池袋サンシャイン美容外科となりました。<br />今後も皆様へ積極的な美へのご提案ができますよう努力いたします。
宜しくお願いいたします。
</section>
<section class="secBox">
	<h3 class="baseTitle">院長紹介</h3>
	<div class="secBox">
		<h4 class="subTitle">「美しくなりたい」を応援します。</h4>
		<p class="mb10">どんな時代も「美」を願う「心」の本質は変わりません。</p>
		<p>当院は「患者様の安心と満足を目標にする。」という当たり前のことを第一に考え、本物の美容形成外科を開設いたしました。 「美」と「心」がつながった「ありがとう」と言っていただける病院でありたい。 「美のホームドクターになれたら…」が私たちの願いです。</p>
		<div class="history clrfix">
			<div class="photo"><img src="/wp-content/themes/ikebukuro_sunshine//img/greetings/img_02.jpg" alt="院長　鈴木 栄樹" class="mb10"><p>院長　鈴木 栄樹</p></div>
				<div class="txt fsS">
					<ul class="baseList mb20">
						<li>日本美容外科学会正会員・認定医</li>
						<li>日本美容外科医師会正会員</li>
						<li>日本抗加齢医学会正会員</li>
					</ul>
					<p class="bold">＜院長略歴＞</p>
					<ul class="baseList border">
						<li><span class="w20">95年</span>聖マリアンナ医科大学卒業</li>
						<li><span class="w20">95－97年</span>同大学麻酔科勤務</li>
						<li><span class="w20">97－02年</span>大手美容外科勤務　のちに、分院院長歴任</li>
						<li><span class="w20">03－06年</span>医療法人博済会 鈴木病院　美容外科外来開設</li>
						<li><span class="w20">06年</span>池袋サンシャイン美容外科開設</li>
					</ul>
					<div class="sns-button">
						<a href="https://twitter.com/ikesunshine?ref_src=twsrc%5Etfw" target="_blank" rel="noopener noreferrer" class="btn x">公式Xへ</a>
						<a href="https://www.instagram.com/ikesunshine331244/" target="_blank" rel="noopener noreferrer" class="btn instagram">公式インスタグラムへ</a>
					</div>
				</div>
			</div>
	</div>
</section>
<section class="sec-con media secBox">
	<div class="sec-title">
		<h2 class="sec-heading">メディア掲載</h2>
		<p class="sec-subtext">テレビ、雑誌等の取材の模様を<br class="sp-blank">紹介します</p>
	</div>
	<p class="media-topic">刺青除去・タトゥー除去<br class="sp-blank">テレビ取材</p>
	<div class="slideshow-container">
		<div class="slides-wrapper">
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide01.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide02.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide03.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide04.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide05.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide06.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide07.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide08.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide09.png" alt=""></div>
			<div class="slide only-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/pc-slide10.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide01.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide02.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide03.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide04.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide05.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide06.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide07.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide08.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide09.png" alt=""></div>
			<div class="slide only-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/greetings/sp-slide10.png" alt=""></div>
		</div>
	</div>
</section>
<section class="secBox">
<h4 class="subTitle">治療の一例をご紹介しましょう。たとえば二重まぶたにする時。</h4>
<p>わざわざサングラスや帽子を用意するのはわずらわしくありませんか。まぶたの腫れない治療を工夫できないでしょうか。適切な麻酔、適量のコラーゲン、最小限の注入痕、施術のテクニックがしっかりしていて、よい器具・材料を惜しまず使えば、腫れを抑え、その日から普段と変わりなく過ごせるのです。もちろん施術の前には入念なカウンセリングを行います。好みのラインをじっくりデザインして、お望みどおりのラインに仕上げていきます。</p>
</section>
<section class="secBox">
<h4 class="subTitle">信頼関係は、医師が患者様を想うことから始まると思います。</h4>
<p class="mb10">患者様の満足、安心のために医師は何ができるか。幅広い経験から親身になって答えを導き出して差し上げたい。そこを私は大切にしています。</p>
<p>病院に行くのではありません。一人の医師に会いに来てください。その時からあなたは“掛かりつけの美容外科医”を持つことになります。</p>
</section>
</section>
<section class="secBox">
<h3 class="baseTitle">人気施術ランキング</h3>
<p class="mb10">当院にて人気の施術ランキングです（2012年6月）</p>
<div class="ranking clrfix">
<ul>
<li>1位：刺青除去</li>
<li>2位：ほくろ除去</li>
<li>3位：リストカットの傷跡治療</li>
<li>4位：交通事故の傷跡治療</li>
<li>5位：ワキガ・多汗症</li>
<li>6位：シミ取りクリーム</li>
</ul>
<ul>
<li>7位：AGA治療</li>
<li>8位：ニキビ跡治療</li>
<li>9位：筋肉の縮小に作用する薬剤注射</li>
<li>10位：レーザー脱毛</li>
</ul>
</div>
</section>
<section class="secBox">
<h3 class="baseTitle">日本美容外科学会　発表論文掲載</h3>
<h4 class="subTitle">当院院長の論文が日本美容外科学会にて発表されました。</h4>
<p class="labelTitle">医学論文（日本美容外科学会誌）</p>
<ul class="baseList border">
<li>2005年42巻　脂肪吸引手術の出血対策 -当院の症例による検討-</li>
<li>2006年43巻　顔面表情筋に対する筋肉の縮小に作用する薬剤注射の効果とその持続期間</li>
<li>2009年45巻　脂肪吸引手術における切開部の保護 -Masaki Skin protectorを用いて-</li>
</ul>
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

<script src="<?php echo get_template_directory_uri(); ?>/common/js/script.js"></script>

<?php get_footer(); ?>
