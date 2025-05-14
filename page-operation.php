<?php get_header(); ?>

<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<!--/ここからコンテンツ-->
<div id="mainContents">
<main>

<ul class="operationsList clrfix">
<li><a href="/operations/skincare/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist01.jpg" alt="ホクロ除去・イボ治療"></dt>
<dd>
<h3><span>ホクロ・イボ（保険適用）</span></h3>
</dd>
</dl>
<p>ホクロ・イボは保険で一度に除去</p>
</a></li>
<li><a href="/operations/iboaza/">
<dl class="clrfix">
<dt><img src="https://www.ike-sunshine.co.jp/wp-content/uploads/2020/10/im_operationslist01_1.jpg" alt="アザ除去(保険適用)"></dt>
<dd>
<h3><span>大きなホクロ・あざ・いぼ（保険適用）</span></h3>
</dd>
</dl>
<p>手術で確実に除去（保険適用)</p>
</a></li>

<li><a href="/operations/wakiga/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist05.jpg" alt="わきが治療（保険適用）"></dt>
<dd>
<h3><span>わきが治療（保険適用）</span></h3>
</dd>
</dl>
<p>ワキの臭い対策には保険適用のわきが手術で永久に解決いたします</p>
</a></li>

<li><a href="/operations/hyperhidrosis/">
<dl class="clrfix">
<dt><img src="https://www.ike-sunshine.co.jp/wp-content/uploads/2020/10/im_operationslist05_1.jpg" alt="多汗症"></dt>
<dd>
<h3><span>多汗症</span></h3>
</dd>
</dl>
<p>とまらない汗には筋肉の縮小に作用する薬剤注射による治療がお勧めです</p>
</a></li>

<li><a href="/operations/mwlift/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist16.jpg" alt="MWデュアルリフトによるリフトアップ・小顔治療"></dt>
<dd>
<h3><span>リフトアップ・小顔治療</span></h3>
</dd>
</dl>
<p>切らずにフェイスラインを引き上げる</p>
</a></li>
<li><a href="/operations/laser/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist15.jpg" alt="傷跡・リストカット治療"></dt>
<dd>
<h3><span>リストカット・傷跡</span></h3>
</dd>
</dl>
<p>リストカット・傷跡の治療にはスターラックスレーザーがお勧めです</p>
</a></li>

<li><a href="/operations/nikibi/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist02.jpg" alt="ニキビ・ニキビ跡"></dt>
<dd>
<h3><span>ニキビ・ニキビ跡</span></h3>
</dd>
</dl>
<p>ニキビ・ニキビ跡の治療にはスターラックスレーザーがお勧めです</p>
</a></li>

<li><a href="/operations/shiwa/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist10.jpg" alt="交通事故の傷跡治療"></dt>
<dd>
<h3><span>交通事故の傷跡治療</span></h3>
</dd>
</dl>
<p>交通事故や傷害の傷跡に悩んでいる方へ</p>
</a></li>

<li><a href="/operations/faceline/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist06.jpg" alt="フェイス・ボディライン"></dt>
<dd>
<h3><span>注入療法</span></h3>
</dd>
</dl>
<p>鼻や輪郭の悩みに短時間でコンプレックス解消</p>
</a></li>

<li><a href="/operations/futae/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist03.jpg" alt="二重まぶた・タルミ取り"></dt>
<dd>
<h3><span>二重まぶた・タルミ取り</span></h3>
</dd>
</dl>
<p>お望みの美しい目元へと生まれ変わります</p>
</a></li>
<li><a href="/operations/faceline/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist04.jpg" alt="シミ・タルミ治療の注入療法"></dt>
<dd>
<h3><span>シミ・タルミ治療の注入療法</span></h3>
</dd>
</dl>
<p>簡単な注入療法から</p>
</a></li>


<li><a href="/operations/bodyline/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist07.jpg" alt="刺青除去・タトゥー除去"></dt>
<dd>
<h3><span>刺青除去・タトゥー除去</span></h3>
</dd>
</dl>
<p>レーザーで取れない刺青・タトゥー除去</p>
</a></li>

<li><a href="/operations/placenta/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist08.jpg" alt="シミ・肝斑・くすみ治療"></dt>
<dd>
<h3><span>シミ・肝斑・くすみ治療</span></h3>
</dd>
</dl>
<p>東大式トレチノインクリーム療法</p>
</a></li>


<li><a href="/operations/datumousyou/">
<dl class="clrfix">
<dt><img src="/img/operations/im_operationslist12.jpg" alt="男性型脱毛症治療（プロペシア）"></dt>
<dd>
<h3><span>男性型脱毛症治療（プロペシア）</span></h3>
</dd>
</dl>
<p>プロペシアを処方いたします</p>
</a></li>



</ul>

</main>
</div>
<!--/#mainContents--> 
<!--/ここまでコンテンツ-->

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<li>
			<?php echo esc_html($category_name); ?>
		</li>
	</ol>
</div>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>
<?php get_footer(); ?>