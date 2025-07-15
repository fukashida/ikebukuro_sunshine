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
<main id="bodyline">
<!--/ここからコンテンツ-->

	<section class="top-menu">
		<div class="container">
			<picture>
				<source srcset="/wp-content/uploads/2021/03/bodyline-top-1.jpg.webp" type="image/webp">
				<img src="/wp-content/uploads/2021/03/bodyline-top-1.jpg" alt="タトゥー刺青除去">
			</picture>
			<div class="topNav">
				<ul>
					<li class="heightAjst"><a href="#toc3">治療方法</a></li>
					<li class="heightAjst"><a href="#toc3-4">ご料金</a></li>
					<li class="heightAjst"><a href="#toc6">症例写真</a></li>
					<li class="heightAjst"><a href="#toc5">アフターケア</a></li>
					<li class="heightAjst"><a href="#toc7">よくある質問</a></li>
					<li class="heightAjst"><a href="#toc8">刺青除去について</a></li>
					<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">無料<br class="pc">カウンセリング</a></li>
				</ul>
			</div>
			<div id="toc_box" class="mb20">
				<p class="toc_title">目次</p>
				<div class="toc_list" style="display: none;">
					<ul>
						<li>
							<a href="#toc1">
								<span class="toc_num">1.</span> 一度入れてしまったタトゥー・刺青...実は後悔していませんか？
							</a>
							<ul>
								<li>
									<a href="#toc1-1">
										<span class="toc_num n25">1-1.</span> 後悔１｜結婚したいんだけど…相手の親に嫌われたくない
									</a>
								</li>
								<li>
									<a href="#toc1-2">
										<span class="toc_num n25">1-2.</span> 後悔２｜子供への悪影響が心配…刺青を入れて欲しくない
									</a>
								</li>
								<li>
									<a href="#toc1-3">
										<span class="toc_num n25">1-3.</span> 後悔３｜仕事上で問題になった/就職活動に支障がある
									</a>
								</li>
								<li>
									<a href="#toc1-4">
										<span class="toc_num n25">1-4.</span> 後悔４｜元彼・元彼女の名前を入れたけど別れてしまった
									</a>
								</li>
								<li>
									<a href="#toc1-5">
										<span class="toc_num">1-5.</span> 後悔５｜生命保険に加入できない
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc2">
								<span class="toc_num">2.</span> 当院でタトゥー除去・刺青除去手術を半額モニターで受けてみませんか
							</a>
							<ul>
								<li>
									<a href="#toc2-1">
										<span class="toc_num">2-1.</span> モニター制度で費用を抑えて治療が可能
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc3">
								<span class="toc_num">3.</span> 池袋サンシャイン美容外科で行っているタトゥー除去の手術について
							</a>
							<ul>
								<li>
									<a href="#toc3-1">
										<span class="toc_num n25">3-1.</span> 皮膚切除法はレーザー治療よりも確実かつ負担が少ない
									</a>
								</li>
								<li>
									<a href="#toc3-5">
										<span class="toc_num">3-2.</span> 皮膚切除術とは
									</a>
								</li>
								<li>
									<a href="#toc3-2">
										<span class="toc_num">3-3.</span> 当院の治療が選ばれる理由
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc4">
								<span class="toc_num">4.</span> 池袋サンシャイン美容外科の刺青除去・タトゥー除去手術について
							</a>
							<ul>
								<li>
									<a href="#toc4-1">
										<span class="toc_num">4-1.</span> 刺青除去・タトゥー除去手術の概要
									</a>
								</li>
								<li>
									<a href="#toc4-2">
										<span class="toc_num">4-2.</span> 刺青除去・タトゥー除去のご料金案内
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc5">
								<span class="toc_num">5.</span> タトゥー・刺青除去前後の注意事項とアフターケア
							</a>
							<ul>
								<li>
									<a href="#toc5-1">
										<span class="toc_num">5-1.</span> 手術前のご注意事項
									</a>
								</li>
								<li>
									<a href="#toc5-2">
										<span class="toc_num">5-2.</span> 治療期間中の注意
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc6">
								<span class="toc_num">6.</span> 手術後の傷跡ケアと再発防止
							</a>
							<ul>
								<li>
									<a href="#toc6-1">
										<span class="toc_num">6-1.</span> ケロイド予防の薬
									</a>
								</li>
								<li>
									<a href="#toc6-2">
										<span class="toc_num">6-2.</span> テーピングによる保護
									</a>
								</li>
								<li>
									<a href="#toc6-3">
										<span class="toc_num">6-3.</span> 保湿ケア
									</a>
								</li>
								<li>
									<a href="#toc6-4">
										<span class="toc_num n25">6-4.</span> 傷跡を目立たなくする方法①：ステロイド注射
									</a>
								</li>
								<li>
									<a href="#toc6-5">
										<span class="toc_num n25">6-5.</span> 傷跡を目立たなくする方法②：スターラックス
									</a>
								</li>
								<li>
									<a href="#toc6-6">
										<span class="toc_num n25">6-6.</span> 傷跡を目立たなくする方法③：色素沈着を抑える塗り薬
									</a>
								</li>
								<li>
									<a href="#toc6-7">
										<span class="toc_num n25">6-7.</span> 傷跡を目立たなくする方法④：傷跡の修正手術
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc7">
								<span class="toc_num">7.</span> 池袋サンシャイン美容外科のタトゥー除去・刺青除去の流れ
							</a>
							<ul>
								<li>
									<a href="#toc7-1">
										<span class="toc_num">7-1.</span> 1. カウンセリング
									</a>
								</li>
								<li>
									<a href="#toc7-2">
										<span class="toc_num">7-2.</span> 2. 診察
									</a>
								</li>
								<li>
									<a href="#toc7-3">
										<span class="toc_num">7-3.</span> 3. 手術（初回手術の流れ）
									</a>
								</li>
								<li>
									<a href="#toc7-4">
										<span class="toc_num">7-4.</span> 4. 包帯外し・抜糸
									</a>
								</li>
								<li>
									<a href="#toc7-5">
										<span class="toc_num">7-5.</span> 5. 経過診察
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc8">
								<span class="toc_num">8.</span> タトゥー除去・刺青除去の症例写真
							</a>
							<ul>
								<li>
									<a href="#toc8-1">
										<span class="toc_num">8-1.</span> 左上腕・右上腕の症例
									</a>
								</li>
								<li>
									<a href="#toc8-2">
										<span class="toc_num">8-2.</span> 左前腕・右前腕の症例
									</a>
								</li>
								<li>
									<a href="#toc8-3">
										<span class="toc_num">8-3.</span> 手の甲・指の症例
									</a>
								</li>
								<li>
									<a href="#toc8-4">
										<span class="toc_num">8-4.</span> 胸部の症例
									</a>
								</li>
								<li>
									<a href="#toc8-5">
										<span class="toc_num">8-5.</span> 腹部・腰の症例
									</a>
								</li>
								<li>
									<a href="#toc8-6">
										<span class="toc_num">8-6.</span> 背中の症例
									</a>
								</li>
								<li>
									<a href="#toc8-7">
										<span class="toc_num">8-7.</span> 手の甲・指の太もも・足の症例症例
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc9">
								<span class="toc_num">9.</span>タトゥー除去・刺青除去手術のよくあるご質問
							</a>
							<ul>
								<li>
									<a href="#toc9-1">
										<span class="toc_num">9-1.</span> 未成年でも治療はできますか？
									</a>
								</li>
								<li>
									<a href="#toc9-2">
										<span class="toc_num">9-2.</span> 保険適用治療はできますか？
									</a>
								</li>
								<li>
									<a href="#toc9-3">
										<span class="toc_num">9-3.</span> なぜレーザー除去を行っていないのですか？
									</a>
								</li>
								<li>
									<a href="#toc9-4">
										<span class="toc_num">9-4.</span> 手術が難しい部位はありますか？
									</a>
								</li>
								<li>
									<a href="#toc9-5">
										<span class="toc_num">9-5.</span> 手術は痛いですか？
									</a>
								</li>
								<li>
									<a href="#toc9-6">
										<span class="toc_num">9-6.</span> 手術後気を付けることはありますか？
									</a>
								</li>
								<li>
									<a href="#toc9-7">
										<span class="toc_num n25">9-7.</span> 足の手術を受けた場合に気を付けることはありますか？
									</a>
								</li>
								<li>
									<a href="#toc9-8">
										<span class="toc_num n25">9-8.</span> 手の手術を受けた場合に気を付けることはありますか？
									</a>
								</li>
								<li>
									<a href="#toc9-9">
										<span class="toc_num n25">9-9.</span> 同時に複数の箇所のタトゥー・刺青除去手術はできますか？
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc10">
								<span class="toc_num">10.</span> その他のタトゥー・刺青除去手術について
							</a>
							<ul>
								<li>
									<a href="#toc10-1">
										<span class="toc_num">10-1.</span> レーザー治療
									</a>
								</li>
								<li>
									<a href="#toc10-2">
										<span class="toc_num n25">10-2.</span> 皮膚移植術（ティッシュエキスパンダー法）
									</a>
								</li>
								<li>
									<a href="#toc10-3">
										<span class="toc_num">10-3.</span> アブレーション(削皮)手術
									</a>
								</li>
								<li>
									<a href="#toc10-4">
										<span class="toc_num">10-4.</span> 当院は皮膚切除術をおすすめしています
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc11">
								<span class="toc_num">11.</span> 院長 鈴木栄樹からのご挨拶
							</a>
							<ul>
								<li>
									<a href="#toc11-1">
										<span class="toc_num n45">11-1.</span> 若い頃に入れたタトゥーを切り取り、新たな人生のスタートを
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc12">
								<span class="toc_num">12.</span> タトゥー除去・刺青除去治療のブログや体験レポート
							</a>
							<ul>
								<li>
									<a href="#toc12-1">
										<span class="toc_num">12-1.</span> Instagram
									</a>
								</li>
								<li>
									<a href="#toc12-2">
										<span class="toc_num n45">12-2.</span> タトゥー除去・刺青除去治療のブログランキング
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#toc13">
								<span class="toc_num">13.</span> アクセス
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="intro yellow">
		<div class="container">
			<div class="title-container" id="toc1">
				<div class="decorative-bg">
					<div class="decorative-bg-inner">
						<div class="blur-circle-large"></div>
						<div class="blur-circle-medium"></div>
						<div class="blur-circle-small"></div>
					</div>
				</div>
				<div class="title-content">
					<h2 class="main-title">    
						<span class="mini">一度入れてしまった</span><br class="sp">タトゥー・刺青...<br>
						実は<span class="big">後悔していませんか？</span>
					</h2>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="reasons-section">
						<div class="reason-card">
							<div class="reason-header">
								<div class="reason-title-row">
									<div class="reason-number">
										<div class="reason-number-text">後悔①</div>
									</div>
									<h3 id="toc1-1" class="reason-title">結婚したいんだけど…<br class="sp">相手の親に嫌われたくない</h3>
								</div>
								<div class="separator"></div>
							</div>
							<p class="reason-description">
								<strong>刺青が入っていることが原因で婚約解消されるケース</strong>もあるようです。当院でも、男女関係無く、<strong>結婚が決まったという理由</strong>で、刺青を除去される方が多く見受けられます。
							</p>
						</div>
						<div class="reason-card">
							<div class="reason-header">
								<div class="reason-title-row">
									<div class="reason-number">
										<div class="reason-number-text">後悔②</div>
									</div>
									<h3 id="toc1-2" class="reason-title">子供への悪影響が心配…<br class="sp">刺青を入れて欲しくない</h3>
								</div>
								<div class="separator"></div>
							</div>
							<p class="reason-description">
								子供が生まれてから自分と同じように、綺麗な肌にタトゥーを入れてしまったら…親同士の視線が気になる…と気にする方は多くいらっしゃいます。また、<strong>プールや温泉など公共施設で子供と一緒に過ごせない</strong>など、<strong>お子様がきっかけとなり、施術を決める方が多くご来院</strong>されます。
							</p>
						</div>
						<div class="reason-card">
							<div class="reason-header">
								<div class="reason-title-row">
									<div class="reason-number">
										<div class="reason-number-text">後悔③</div>
									</div>
									<h3 id="toc1-3" class="reason-title">仕事上で問題になった/<br class="sp">就職活動に支障がある</h3>
								</div>
								<div class="separator"></div>
							</div>
							<p class="reason-description">
								刺青が入っていることで、<strong>公務員や大企業への就職が困難になるケース</strong>は大いに考えられます。日本だけでなくアメリカやヨーロッパでも、刺青は社会的に認められていないのです。
							</p>
						</div>
						<div class="reason-card">
							<div class="reason-header">
								<div class="reason-title-row">
									<div class="reason-number">
										<div class="reason-number-text">後悔④</div>
									</div>
									<h3 id="toc1-4" class="reason-title">元彼・元彼女の名前を<br class="sp">入れたけど別れてしまった</h3>
								</div>
								<div class="separator"></div>
							</div>
							<p class="reason-description">
								元恋人の名前を彫ってしまったけど、結局関係が続かず別の恋人が出来た。<br>
								今の恋人に苦しい言い訳や説明をするのも大変…。<strong>良い関係を築きたいけど刺青が気になって親密になれない。</strong>そのような理由から施術をする方も多くいらっしゃいます。							
							</p>
						</div>
						<div class="reason-card">
							<div class="reason-header">
								<div class="reason-title-row">
									<div class="reason-number">
										<div class="reason-number-text">後悔⑤</div>
									</div>
									<h3 id="toc1-5" class="reason-title">生命保険に加入できない</h3>
								</div>
								<div class="separator"></div>
							</div>
							<p class="reason-description">
								刺青のある方は、生命保険への加入を断られることがあります。<br>
								理由は、モラルリスク、医学的リスクの2つのリスク。 <strong>保険会社には社会的に健全な方法で保険料を運用するという決まりがあります。</strong> 刺青を入れている方に支払うことは、健全な支払いとは考えられていないので原則的に加入が出来ないのです。
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="mini-container">
				<h2>同じ悩みで、<br class="sp">当院を選ばれた方の実例です</h2>
				<img class="bfaf-title" src="<?php echo get_template_directory_uri(); ?>/img/operations/laser/bfaf-title.webp" alt="beforeafter">
			</div>
			<div class="flexslider custom-slider">
				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 6600%; transition-duration: 0.6s; transform: translate3d(-2480px, 0px, 0px);">
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0101_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0101_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0102_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0102_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0103_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0103_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0104_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0104_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0105_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0105_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0106_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0106_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0107_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0107_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0108_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0108_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0109_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0109_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0110_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0110_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0111_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0111_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0112_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0112_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0113_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0113_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0114_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0114_thumb.jpg" /></picture>
						</li>
						<li>
							<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115_thumb.jpg" />
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0116_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0116_thumb.jpg" /></picture>
						</li>
						<li>
							<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11_thumb.jpg" />
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg" /></picture>
						</li>
						<li>
							<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401_thumb.jpg" />
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0402_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0402_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0403_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0403_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0404_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0404_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0405_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0405_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0406_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0406_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0407_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0407_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0408_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0408_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0409_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0409_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03im_case0501_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0501_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0502_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0502_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0503_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0503_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0602_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0602_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0603_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0603_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0604_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0604_thumb.jpg" /></picture>
						</li>
						<li>
							<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605_thumb.jpg" />
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0606_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0606_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0607_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0607_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0608_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0608_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0609_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0609_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0610_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0610_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0611_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0611_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0301_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0301_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0302_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0302_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0303_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0303_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0304_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0304_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0305_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0305_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0306_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0306_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0307_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0307_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg" /></picture>
						</li>
						<li>
							<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201_thumb.jpg" />
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0202_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0202_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0203_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0203_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0204_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0204_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0205_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0205_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0206_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0206_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0207_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0207_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0208_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0208_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0209_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0209_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0210_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0210_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0211_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0211_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0212_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0212_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0213_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0213_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg" /></picture>
						</li>
						<li>
							<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701_thumb.jpg" />
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0703_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0703_thumb.jpg" /></picture>
						</li>
						<li>
							<picture><source srcset="/wp-content/uploads/2021/03/im_case0704_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0704_thumb.jpg" /></picture>
						</li>
					</ul>
				</div>
				<div class="slide-counter"></div>
				<ul class="flex-direction-nav">
					<li class="flex-nav-prev">
						<a class="flex-prev" onclick="javascript:void(0);"></a>
					</li>
					<li class="flex-nav-next">
						<a class="flex-next" onclick="javascript:void(0);"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="aco">
			<div class="aco-block">
				<div class="aco-content q content-q">
					<p>症例写真を一覧で見る</p>
				</div>
				<div class="aco-content a content-a">
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0101_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0101_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0102_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0102_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0103_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0103_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0104_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0104_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0105_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0105_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0106_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0106_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0107_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0107_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0108_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0108_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0109_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0109_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0110_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0110_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0111_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0111_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0112_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0112_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0113_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0113_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0114_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0114_thumb.jpg" /></picture>
						<img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115_thumb.jpg" />
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0116_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0116_thumb.jpg" /></picture>
						<img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11_thumb.jpg" />
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg" /></picture>
						<img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401_thumb.jpg" />
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0402_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0402_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0403_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0403_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0404_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0404_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0405_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0405_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0406_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0406_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0407_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0407_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0408_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0408_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0409_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0409_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0502_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0502_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0503_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0503_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0602_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0602_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0603_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0603_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0604_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0604_thumb.jpg" /></picture>
						<img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605_thumb.jpg" />
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0606_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0606_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0607_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0607_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0608_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0608_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0609_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0609_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0610_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0610_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0611_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0611_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0301_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0301_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0302_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0302_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0303_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0303_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0304_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0304_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0305_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0305_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0306_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0306_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0307_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0307_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg" /></picture>
						<img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201_thumb.jpg" />
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0202_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0202_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0203_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0203_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0204_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0204_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0205_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0205_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0206_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0206_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0207_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0207_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0208_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0208_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0209_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0209_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0210_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0210_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0211_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0211_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0212_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0212_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0213_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0213_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg" /></picture>
						<img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701_thumb.jpg" />
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0703_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0703_thumb.jpg" /></picture>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0704_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0704_thumb.jpg" /></picture>
				</div>
			</div>
		</div>
	</section>
	<section class="info">
		<div class="container">
			<h2 id="toc2"><span class="sub">当院でタトゥー除去・刺青除去手術を</span><span class="main blue">半額モニターで<br class="sp">受けてみませんか</span></h2>
			<p>タトゥー除去・刺青除去について、<br>
			池袋サンシャイン美容外科では<br class="sp">皮膚切除による手術を行っております。</p>
			<h3 id="toc2-1">モニター制度で費用を抑えて<br class="sp">治療が可能</h3>
			<div class="flex">
				<div class="left">
					<p>当院は、刺青除去に関してご希望される方は<br class="sp"><strong>全員モニターで半額のお値段</strong>で<br>
					治療を承っており、<br class="sp">カウンセリングは無料です。<br><br>
	
					初回カウンセリング時に<br class="sp"><strong>治療回数・お値段・治療期間の明確な提示</strong>を<br class="sp">行っております。<br><br class="sp">
					お値段の中には、<br class="sp">麻酔代もお薬代も<br class="sp">すべて含んだ価格設定を行っており、<br>
					後から追加でのご料金の発生などは<br class="sp">ございません。<br><br class="sp">
					また手術回数や期間に関しても<br class="sp">具体的にしっかりご提示<br class="sp">させていただいておりますため、<br>
					今後の治療予定が立てやすいと<br class="sp">ご好評いただいております。</p>
					<img src="/wp-content/uploads/2021/03/Dr_sign.png" alt="院長 鈴木栄樹" loading="lazy">
				</div>
				<div class="right">
					<img class="bfaf-title" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/Dr_bg_x_sp.png" alt="院長 鈴木栄樹">
				</div>
			</div>
			<a href="/reservation/">
				<picture>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
				</picture>
			</a>
			<div class="slider slider-normal">
				<ul class="slides">
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0101_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0101_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0102_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0102_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0103_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0103_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0104_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0104_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0105_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0105_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0106_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0106_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0107_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0107_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0108_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0108_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0109_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0109_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0110_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0110_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0111_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0111_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0112_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0112_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0113_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0113_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0114_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0114_thumb.jpg" /></picture>
					</li>
					<li>
						<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115_thumb.jpg" />
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0116_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0116_thumb.jpg" /></picture>
					</li>
					<li>
						<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11_thumb.jpg" />
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg" /></picture>
					</li>
					<li>
						<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401_thumb.jpg" />
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0402_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0402_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0403_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0403_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0404_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0404_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0405_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0405_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0406_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0406_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0407_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0407_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0408_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0408_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0409_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0409_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03im_case0501_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0501_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0502_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0502_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0503_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0503_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0602_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0602_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0603_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0603_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0604_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0604_thumb.jpg" /></picture>
					</li>
					<li>
						<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605_thumb.jpg" />
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0606_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0606_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0607_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0607_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0608_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0608_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0609_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0609_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0610_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0610_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0611_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0611_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0301_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0301_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0302_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0302_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0303_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0303_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0304_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0304_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0305_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0305_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0306_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0306_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0307_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0307_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg" /></picture>
					</li>
					<li>
						<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201_thumb.jpg" />
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0202_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0202_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0203_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0203_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0204_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0204_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0205_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0205_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0206_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0206_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0207_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0207_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0208_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0208_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0209_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0209_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0210_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0210_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0211_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0211_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0212_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0212_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0213_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0213_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg" /></picture>
					</li>
					<li>
						<img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701_thumb.jpg" />
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0703_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0703_thumb.jpg" /></picture>
					</li>
					<li>
						<picture><source srcset="/wp-content/uploads/2021/03/im_case0704_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" loading="lazy" src="/wp-content/uploads/2021/03/im_case0704_thumb.jpg" /></picture>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="method yellow">
		<div class="container">
			<h2 id="toc3"><span class="sub">池袋サンシャイン美容外科で<br class="sp">行っている</span>
			<span class="main blue">タトゥー除去の手術について</span></h2>
			<p class="subtitle">当院では皮膚切除法を<br class="sp">推奨しています</p>
			<div class="box-item">
				<div class="sub-container">
					<h3 id="toc3-1">皮膚切除法はレーザー治療よりも<br class="sp">確実にかつ負担が軽い</h3>
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/method1-1.webp" alt="皮膚切除法はレーザー治療よりも確実にかつ負担が軽い" loading="lazy">
						<p>当院では、レーザー除去を行っておらず<br>
							皮膚切除による刺青除去手術を行っております。<br><br>
							
							<span class="att"><strong>レーザー除去治療では、<br>
								色のあるタトゥーの除去が<br class="sp">できなかったり、<br>
								何度も照射に時間がかかり<br class="sp">自宅療養中の制限が多くあるため</strong></span>です。<br><br>

							またレーザー治療は傷跡が残らない為、<br>
							気軽なイメージをお持ちの方が<br class="sp">多くいらっしゃいますが<br><br>
							
							全体的に薄くなるだけで<br>
							タトゥーが完全に消えることが<br class="sp">なかったり、<br>
							術後の腫れや痛みが<br class="sp">大きい場合が多数あります。<br><br>

							結局、手術で切り取ってしまうほうが<br class="sp">傷跡も美しく、<br>
							痛みに関してもレーザーの様な<br>
							ずっと残る痛みがない分<br class="sp"><br class="sp">お体への負担も<br class="pc">軽いという<br class="sp">見解に至ったためです。</p>
					</div>
					<h3 class="mt" id="toc3-2">皮膚切除術とは</h3>
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/method1-2.webp" alt="皮膚切除術とは" loading="lazy">
						<p>タトゥー部分の皮膚を切除し、<br>
							周りの皮膚を引っ張って縫合する<br class="sp">治療法です。<br><br>

							切除する皮膚が小さい場合は<br>
							<span class="att"><strong>1回の手術で完全にタトゥーを<br class="sp">除去することが可能です</strong></span>。<br><br>
							
							大きい場合は、<br class="sp">タトゥーの内側の皮膚を一度手術し、<br>
							タトゥーの範囲を小さくしながら<br class="sp">何度か切除することで<br>
							完全に除去することができます。<br><br>
							
							皮膚を切除するので、<br>
							どのような色でも完全に<br class="sp">タトゥーを消すことができます。<br><br class="sp">
							<span class="att"><strong>タトゥーを完全に消したい、<br>
							すぐにタトゥーを消したい方に<br class="sp">おすすめの治療法</strong></span>です。</p>
					</div>
					<h3 class="mt" id="toc3-3">当院の治療が選ばれる理由</h3>
					<div class="point mb20">
						<ul>
							<li>
								<img class="point" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point01.png" alt="土日も治療可 当日予約・当日治療ＯＫ" loading="lazy">
								<p>
									当院では当日予約し<br class="sp">当日治療することも可能です。<br>
									土日の治療も行っておりますので、<br>
									お仕事や学校を休まず<br class="sp">治療することが可能です。
								</p>
							</li>
							<li>
								<img class="point" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point02.png" alt="傷跡ケアに注力" loading="lazy">
								<div class="textbox">
									<p>
										傷跡治療専用レーザーを導入。<br>
										手術後の傷跡が気になる方へは<br class="sp">レーザー治療を行っております。<br>
										またその他にも多彩な傷跡治療を<br class="sp">ご用意しております。
									</p>
									<a href="#toc6">詳しくはこちら</a>
								</div>
							</li>
							<li>
								<img class="point" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point03.png" alt="半額モニター募集中" loading="lazy">
								<p>
									当院では多くの方にタトゥーを<br class="sp">除去する流れや傷跡のイメージを<br>
									具体的に持っていただくため<br class="sp">モニター募集をしています。	<br>				
									※お顔やお名前など個人が特定される<br class="sp">情報は載せません。
								</p>
							</li>
							<li>
								<img class="point" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point04.png" alt="1回30分～1時間完全予約制" loading="lazy">
								<p>
									当院の皮膚切除法であれば<br class="sp">該当箇所を切除するので<br>
									小さいサイズであれば1回で<br class="sp">除去することができます。
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="detail orange">
		<div class="container">
			<h2 id="toc4"><span class="sub">池袋サンシャイン美容外科の</span>
			<span class="main blue">刺青除去・タトゥー除去手術<br class="sp">について</span></h2>
			<h3 id="toc4-1">刺青除去・タトゥー除去手術の概要</h3>
			<table>
				<tbody>
					<tr>
						<th>手術時間</th>
						<td>1回　30分～1時間程度<br>
						※5cm以上の場合<br>2回以上の分割切除になる<br class="sp">可能性があります。</td>
					</tr>
					<tr>
						<th>麻酔</th>
						<td>局所麻酔。3～4時間程度で<br class="sp">なくなります。</td>
					</tr>
					<tr>
						<th>通院</th>
						<td>手術　⇒　3日目検診　⇒10日目抜糸</td>
					</tr>
					<tr>
						<th>入浴</th>
						<td>手術当日から可能<br>※手術部位は抜糸が<br class="sp">終わるまで濡らせません</td>
					</tr>
				</tbody>
			</table>
			<h3 id="toc4-2">刺青除去・タトゥー除去の<br class="sp">ご料金案内</h3>
			<div class="banner-text">
				<p><span class="title">タトゥー除去・刺青除去手術</span></p>
				<p><span class="sub-title">5×5</span><span class="sub1">cm</span><span class="sub2">あたり</span></p>
				<p><span class="price-label">定価</span> <span class="price">196,000<span>円</span></span></p>
				<p><span class="price-label monitor">モニター</span> <span class="price monitor-price">98,000<span>円</span></span></p>
				<p class="note">
				モニターについて<br>
				・5×5cm以上大きな刺青でも対応可能です。<br>
				・治療部位・大きさなどには制限はございません<br>
				・お顔やお名前など個人が特定されるような掲載はいたしません。<br>
				・治療部位のbefore&amp;afterのお写真を参考資料としてご協力いただいております。<br>
				</p>
			</div>
			<a href="/reservation/">
				<picture>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
				</picture>
			</a>
		</div>
	</section>
	<section class="attention">
		<div class="container">
			<h2 id="toc5"><span class="sub">タトゥー・刺青除去前後の</span><span class="main blue">注意事項とアフターケア</span></h2>
			<p class="subtitle">治療前〜治療中の注意点</p>
			<div class="box-item">
				<div class="sub-container">
					<h3 id="toc5-1">手術前のご注意事項</h3>
					<p>
						(1) 施術部位やタトゥーのデザインによっては数回に分けて切除を行うことがございます。<br>
						数回に分けて施術を行う場合、2回目の切除は通常1回目の施術の3か月後～6か月後となります。<br>
						1回目の治療経過によっては2度目の切除時期が多少前後いたしますので都度調整が必要となります。<br><br>
						(2) 縫合部分のケロイド化を予防するために、リザベンを術前1か月前から服用されることをお勧めいたします。<br><br>
						(3) 除去手術の際、出来るだけ多くの刺青部分を除去することを目的としますので、傷は曲がってしまったり凹凸が発生したり、複数の傷となる場合があり、当初カウンセリング時の予想と異なる傷になる場合がございます。<br><br>
						(4) 傷跡修正手術の傷跡は、体質に大きく影響されます。再度同様の傷か、より目立った傷になる可能性がございます。
					</p>
					<h3 class="mt" id="toc5-2">治療期間中の注意</h3>
					<p>
						(1) 禁酒・禁煙です。抜糸までは治療部位に負担をかけない様、運動もお控えください。<br><br>
						(2) <span class="att"><strong>圧迫固定は絶対に外さないで下さい。</strong></span>この圧迫固定は傷口が開かないようにしキレイに治すことができます。内出血・皮膚がよった状態・水がたまった状態・皮膚壊死などのトラブルを予防する重要な作業です。<br>
						固定がゆるんだ場合は上から追加で巻いて補強してください。<br><br>
						(3) 翌日よりシャワー可能です。治療部位は濡らさないよう、ビニール等でカバーしてお入りください。<br>
						（患部が濡れたらすぐに来院してください）<br><br>
						(4) 妊娠・授乳中の手術を行うことができません。医師へご申告をお願いいたします。
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="aftercare yellow">
		<div class="container">
			<h2 id="toc6">手術後の傷跡ケアと再発防止</h2>
			<p class="main-content">
				手術である限り、必ず傷跡は残ります。<br class="sp">傷跡は部位・切除範囲・皮膚の体質により<br class="sp">大きく異なってきます。<br><br class="sp">
				傷跡が気になる方は、<br class="sp">以下のような治療を別途ご用意しております。<br class="sp">※別料金・別治療となります。
			</p>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-1.webp" alt="ケロイド予防のお薬" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-1">ケロイド予防の薬</h3>
							<p>ケロイドという、<br class="sp">傷が盛り上がる状態を未然に防ぐには、<br class="sp">飲み薬が有効です。<br><br class="sp">
								傷そのものをきれいにしてくれて、<br class="sp">美肌効果も期待できます。
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-2.webp" alt="テーピングによる保護" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-2">テーピングによる保護</h3>
							<p>
								日頃のケアとして最も重要なのが、<br>
								傷跡拡大を予防する<br class="sp">テーピング治療になります。<br><br class="sp">
								傷に対して直角にテープを<br class="sp">重ねて貼っておくことで、<br class="sp">細い傷を維持します。<br><br class="sp">
								手術後、約6か月間はテープを<br class="sp">貼ることをお勧めしております。<br>
								皮膚が荒れた場合は、<br class="sp">お薬を処方しますのでご相談ください。
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-3.webp" alt="プラセンタローションとクリーム" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-3">保湿ケア</h3>
							<p>術後、傷の周りは<br class="sp">非常に乾燥しやすくなります。<br>
							乾燥は傷を汚くしますので、<br class="sp">しっかりと保湿をして下さい。<br><br class="sp">
							当院では、プラセンタ配合の保湿剤を<br class="sp">ご用意しております。<br>
							通常の保湿ケアでは物足りない方は、<br class="sp">ご相談ください。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-4.webp" alt="ステロイド注射" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-4">傷跡を目立たなくする方法①：<br class="sp">ステロイド注射</h3>
							<p>
								関節部位や胸はケロイドの傷が<br class="sp">形成されやすい場所になります。<br><br class="sp">
								盛り上がった傷に対してお注射をすると<br class="sp">2週間程度で盛り上がりを<br class="sp">へこませることができます。
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-5.webp" alt="スターラックス" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-5">傷跡を目立たなくする方法②：<br class="sp">スターラックス</h3>
							<p>
								スターラックスレーザーによる<br class="sp">照射を行うことで<br>
								傷跡の軽減を期待することができます。<br>
								※照射範囲によって再お見積りとなります。
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-6.webp" alt="トレチノインとハイドロキノン" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-6">傷跡を目立たなくする方法③：<br class="sp">色素沈着を抑える塗り薬</h3>
							<p>治療部位に色素沈着が生じた場合、<br class="sp">色素を薄くする塗り薬を<br class="sp">処方することも可能です。<br>
						このお薬は、シミの治療にも有効です。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<div class="flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/aftercare1-7.webp" alt="傷跡の修正手術" loading="lazy">
						<div class="text-box">
							<h3 id="toc6-7">傷跡を目立たなくする方法④：<br class="sp">傷跡の修正手術</h3>
						<p>
							刺青及び皮膚を取ることを<br class="sp">最優先に手術をするため、<br class="sp">手術後、縫合部に<br class="sp">凹み・膨らみ・固い所などが生じたり、<br class="sp"><br class="sp">部分的に傷口が太く伸びるところが<br class="sp">でてくることもございます。<br class="sp"><br class="sp">その場合、ご希望があれば部分的な<br class="sp">修正手術を行うことも可能です。　<br class="sp">※別途症状により再お見積りとなります。
						</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="flow">
		<div class="container">
			<h2 id="toc7"><span class="sub">池袋サンシャイン美容外科の</span>
			<span class="main blue">タトゥー除去・刺青除去の流れ</span></h2>
			<ul class="white-box">
				<li class="box-item block">
					<div class="flex">
						<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow01.webp" alt="カウンセリングと治療プランの決定">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow01_sp.webp" alt="カウンセリングと治療プランの決定">
						<div>
						<h3 id="toc7-1" class="one"><span>1.</span>カウンセリング</h3>
						<p>当院では、必ず最初に、カウンセリングをします。女性カウンセラーが担当しますので、男性の医師には聞きづらいことなどなんでもお尋ね下さい。 手術の流れ、術後の経過や日常生活の過ごし方など詳しくご説明します。</p>
						</div>
					</div>
					<div class="blue-box">
						<p class="point">予約のお申込み</p>
						<p>
						まずは、お電話または<br class="sp">WEB予約フォームより、<br class="sp">ご希望の来院日時をご連絡ください。<br class="sp"><br class="sp">
						当日予約も可能ですので、<br class="sp">当日のご予約は<br class="sp">お電話にてご予約下さい。
						</p>
						<p class="tel" >お電話<a href="tel:0120331244">0120-331-244</a></p>
						<a class="rese" href="/reservation/">ご予約フォームへの入力はこちら</a>
					</div>
				</li>
				<li class="box-item">
					<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow02.webp" alt="お見積もり">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow02_sp.webp" alt="お見積もり">
					<div>
						<h3 id="toc7-2"><span>2.</span>診察</h3>
						<p>医師がタトゥーの入っている場所の確認をし、どの程度皮膚が伸びるか診断を行います。そして、手術が可能かどうか、また手術回数を決めていき治療計画を立てていきます。患者様へは診察後すぐに治療計画・料金・手術回数を明確にお伝えしております。</p>
					</div>
				</li>
				<li class="box-item block">
					<div class="flex">
						<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow03.webp" alt="手術">
						<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow03_sp.webp" alt="手術">
						<div>
							<h3 id="toc7-3"><span>3.</span>手術（初回手術の流れ）</h3>
							<p>手術をご希望の場合は、手術日のお申し込み・同意書のご記入・支払い方法の決定を行います。予約状況によってはカウンセリング当日にそのまま治療も承れる場合もございます。</p>
						</div>
					</div>
					<div class="blue-box">
						<h4>詳しい除去手術の流れ</h4>
						<div class="step-card">
							<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-1.webp" alt="手順1の画像" class="step-image">
							<div class="step-content">
								<p class="step-description">
									左腕の刺青除去（分割切除の場合）
								</p>
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-1_sp.webp" alt="手順1の画像" class="step-image">
							</div>
						</div>
						<div class="step-card">
							<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-2.webp" alt="手順2の画像" class="step-image">
							<div class="step-content">
								<h5 class="step-title"><strong>STEP01：切除範囲のデザイン</strong></h5>
								<p class="step-description">
									1回目でできる限り取れるように<br class="sp">デザインします
								</p>
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-2_sp.webp" alt="手順2の画像" class="step-image">
							</div>
						</div>
						<div class="step-card">
							<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-3.webp" alt="手順3の画像" class="step-image">
							<div class="step-content">
								<h5 class="step-title"><strong>STEP02：皮膚切除</strong></h5>
								<p class="step-description">
									切り取った皮膚です
								</p>
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-3_sp.webp" alt="手順3の画像" class="step-image">
							</div>
						</div>
						<div class="step-card">
							<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-4.webp" alt="手順4の画像" class="step-image">
							<div class="step-content">
								<h5 class="step-title"><strong>STEP03：縫合処置</strong></h5>
								<p class="step-description">
									止血した後、縫合します
								</p>
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-4_sp.webp" alt="手順4の画像" class="step-image">
							</div>
						</div>
						<div class="step-card">
							<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-5.webp" alt="手順5の画像" class="step-image">
							<div class="step-content">
								<h5 class="step-title"><strong>STEP04：術後のテーピング</strong></h5>
								<p class="step-description">
									ぶつけても大丈夫なように<br class="sp">縫合直後にクッションをあてて<br>
									テーピングします
								</p>
								<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow3-5_sp.webp" alt="手順5の画像" class="step-image">
							</div>
						</div>
					</div>
				</li>
				<li class="box-item">
					<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow04.webp" alt="包帯外し・抜糸">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow04_sp.webp" alt="包帯外し・抜糸">
					<div>
					<h3 id="toc7-4"><span>4.</span>包帯外し・抜糸</h3>
					<p>手術から3日後クッションを外し、 抜糸までテーピングですごします。その後手術から7－10日目に抜糸を行います。抜糸は、強い痛みはありませんのでご安心下さい。お仕事などがある方は、包帯外しはご来院いただかなくても大丈夫です。</p>
					</div>
				</li>
				<li class="box-item last">
					<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow05.webp" alt="病理検査と1ヶ月語の経過観察">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow05_sp.webp" alt="病理検査と1ヶ月語の経過観察">
					<div>
					<h3 id="toc7-5"><span>5.</span>経過観察</h3>
					<p>縫合部の皮膚が落ち着くまで、約3ヶ月ほどかけて経過を観察します。<br>
					傷跡が太くなったり盛り上がったりしないよう、必要に応じて適切な処置を行います。<br>
					また、刺青が残っている場合は、状態を見ながら2回目の手術を検討します。<br>
					分割切除を予定されている方には、皮膚の伸び具合を確認し、次回手術の時期を判断します。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="view yellow">
		<div class="container">
			<h2 id="#toc8">刺青・タトゥー除去の<br class="sp">症例写真</h2>
			<div>
				<h3 id="toc8-1">左上腕・右上腕の症例</h3>
				<dl class="feature">
					<dt class="bold">特徴</dt>
					<dd>
						比較的きれいになりやすい部位です。<br>
						細いラインの場合、一度での除去が可能です。<br><br class="sp">
						日常生活に支障が少ない部位です。<br>
						大きなデザインの場合、皮膚に余裕がないため<br class="sp">除去が難しく分割切除になりやすい。<br>
						<br>
						矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="white-box">

				</div>
				<div class="flexslider flexslider1">
					<ul class="slides ">
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除</h4>
								<ul class="mphList">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm1.webp" alt="2回の分割切除" loading="lazy" width="485" height="176">
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">1回の単純切除</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm2.webp" alt="1回の切除" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0101_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm3.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0102_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm4.webp" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0103_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm5.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0104_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm6.webp" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0105_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm7.webp" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0106_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm8.webp" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0107_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm9.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0108_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm10.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0109_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm11.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0110_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm12.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0111_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm13.webp" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0112_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm14.webp" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0113_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm15.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0114_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm16.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の単純切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm17.webp" alt="1回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0116_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/upperarm18.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
					</ul>
				</div>
			</div>
	
			<div>
				<h3 id="toc8-2">左前腕・右前腕の症例</h3>
				<dl class="feature ">
					<dt class="bold">特徴</dt>
					<dd>
					手首の手術は、胸や背中に比べると<br class="sp">ケロイドになりにくく、<br class="sp">傷跡がきれいになりやすい部位です。<br><br class="sp">
					しかし、術後3日程度が<br class="sp">手がむくみやすくなります。<br class="sp">指輪などはお控えください。<br><br class="sp">
					手首付近は皮膚に余裕がないため<br class="sp">比較的小さくしか皮膚を切除できません。<br>
					そのため、分割切除になりやすい部位です。<br>
					<br>
					矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="flexslider flexslider2">
					<ul class="slides ">
						<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm1.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">1回の切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm2.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm3.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0402_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm4.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0403_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm5.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0404_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm6.webp" alt="3回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0405_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm7.webp" alt="3回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0406_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm8.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0407_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm9.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0408_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm10.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0409_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/forearm11.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
	
	
			<div>
				<h3 id="toc8-3">手の甲・指の症例</h3>
				<dl class="feature ">
					<dt class="bold">特徴</dt>
					<dd>
						手や指は血行が良いため、<br class="sp">傷がきれいになりやすい部位です。<br><br class="sp">
						しかし、抜糸までの10日間は、<br class="sp">手をぎゅっと握ることができません。<br>
						ペンを握ったりすることも難しくなります。<br>
						長期的なお休みを取れる方が、お勧めです。<br>
						<br>
						矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="flexslider flexslider3">
					<ul class="slides ">
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg" loading="lazy" width="485" height="176">
							<div class="">
								<h4 class="labelTitle">1回の切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/hand1.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">1回の切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/hand2.webp" alt="1回の切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0501_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/hand3.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0502_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除予定</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/hand4.webp" alt="2回の分割切除予定" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0503_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/hand5.webp" alt="1回の切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
					</ul>
				</div>
			</div>
	
	
			<div>
				<h3 id="toc8-4">胸部の症例</h3>
				<dl class="feature ">
					<dt class="bold">特徴</dt>
					<dd>
						女性の場合、胸には皮膚のゆとりがあるため<br class="sp">比較的大きなデザインも除去可能となります。<br><br class="sp">
						日常生活に支障も少なく、<br class="sp">治療中の生活がしやすいのが良い点です。<br><br class="sp">
						また服を着ると治療中なのが<br class="sp">分からないのも良い点ですが、<br class="sp">胸は非常にケロイドになりやすい部位です。<br>
						術後の傷跡ケアが非常に大切になります。<br>
						<br>
						矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="flexslider flexslider4">
					<ul class="slides ">
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest1.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest2.webp" alt="2回の切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0702_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割予定　1回目の手術後</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest3.webp" alt="2回の分割予定　1回目の手術後" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0602_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest4.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0603_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest5.webp" alt="3回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0604_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割予定</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest6.webp" alt="2回の分割予定" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest7.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0606_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest8.webp" alt="1回の切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0607_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest9.webp" alt="1回の切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0608_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest10.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0609_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest11.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0610_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest12.webp" alt="1回の切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0611_thumb.jpg" >
							<div class="">
								<p class="labelTitle">1回の切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/chest13.webp" alt="1回の切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
					</ul>
				</div>
			</div>
	
			<div>
				<h3 id="toc8-5">腹部・腰の症例</h3>
				<dl class="feature ">
					<dt class="bold">特徴</dt>
					<dd>
						腰は、皮膚にゆとりがあるため、<br class="sp">比較的大きなデザインを除去することが<br class="sp">可能です。<br><br class="sp">
						日常生活においても、<br class="sp">支障が少ない部位ですから、<br class="sp">仕事をしていても大丈夫。<br><br class="sp">
						ただし、抜糸が終わるまでのあいだ、<br class="sp">患部が濡らせないため、<br class="sp">入浴することができなくなります。<br>
						<br>
						矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="flexslider flexslider5">
					<ul class="slides ">
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen1.webp" alt="2回の分割切除" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen2.webp" alt="2回の分割切除" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0301_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen3.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0302_thumb.jpg">
							<div class="">
								<p class="labelTitle">3回の分割予定</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen4.webp" alt="3回の分割予定" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0303_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen5.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0304_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen6.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0305_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除予定</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen7.webp" alt="2回の分割切除予定" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0306_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除予定</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen8.webp" alt="2回の分割切除予定" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0307_thumb.jpg">
							<div class="">
								<p class="labelTitle">1回の切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/abdomen9.webp" alt="1回の切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
					</ul>
				</div>
			</div>
	
			<div>
				<h3 id="toc8-6">背中の症例</h3>
				<dl class="feature ">
					<dt class="bold">特徴</dt>
					<dd>
						腰回りの場合、<br class="sp">比較的大きなデザインも除去可能です。<br><br class="sp">
						背中上部の場合、<br class="sp">伸縮しやすい部位のため<br class="sp">傷が目立ちやすい部位です。<br><br class="sp">
						治療期間中、<br class="sp">極端に背中を丸めたりはしないでください。<br>
						<br>
						矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="flexslider flexslider6">
					<ul class="slides ">
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">4回の分割切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto1.webp" alt="4回の分割切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">4回の分割切除で完了</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto2.webp" alt="4回の分割切除で完了" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto3.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0202_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto4.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0203_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto5.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0204_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto6.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0205_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto7.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0206_thumb.jpg">
							<div class="">
								<p class="labelTitle">4回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto8.webp" alt="4回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0207_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto9.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0208_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto10.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0209_thumb.jpg">
							<div class="">
								<p class="labelTitle">4回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto11.webp" alt="4回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0210_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto12.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0211_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto13.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0212_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto14.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0213_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除で完了</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/backtatto15.webp" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
					</ul>
				</div>
			</div>
	
			<div>
				<h3 id="toc8-7">太もも・足の症例</h3>
				<dl class="feature ">
					<dt class="bold">特徴</dt>
					<dd>
						太ももは大きなサイズの除去が可能で、<br class="sp">しかも治療中であることがばれにくく<br class="sp">日常生活にも支障が出ずらい部位です。<br><br class="sp">
						そのため、<br class="sp">比較的術後の通院が楽なのが特徴です。<br>
						また、傷も比較的<br class="sp">きれいになりやすい部位です。<br><br class="sp">
						※ただし、太もも全体に入った刺青を<br class="sp">除去することはできません。<br>
						<br>
						足くびは、皮膚にゆとりがないため<br class="sp">小さなデザインのものしか除去できません。<br>
						また、足くびはむくみやすく、<br class="sp">治療中歩きづらくなります。<br><br class="sp">
						※走るのは厳禁です。<br>
						そのため、1週間ほどお休みを取れるときの<br class="sp">治療をお勧めいたします。<br>
						<br>
						矢印ボタンを押すと、他のビフォーアフターが表示されます。
					</dd>
				</dl>
				<div class="flexslider flexslider7">
					<ul class="slides ">
						<li data-thumb="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg">
							<div class="">
								<h4 class="labelTitle">2回の分割切除</h4>
								<ul class="mphList">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/legs1.webp" alt="2回の分割切除" loading="lazy" width="485" height="176">
	
									</li>
								</ul>
							</div>
						</li>
						<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701_thumb.jpg">
							<div class="">
								<p class="labelTitle">※足の部分のみの除去をご希望</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/legs2.webp" alt="足の部分のみの除去をご希望" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0702_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割予定　1回目の手術後</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/legs3.webp" alt="2回の分割予定　1回目の手術後" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0703_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割予定　1回目の手術後</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/legs4.webp" alt="2回の分割予定　1回目の手術後" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
						<li data-thumb="/wp-content/uploads/2021/03/im_case0704_thumb.jpg">
							<div class="">
								<p class="labelTitle">2回の分割切除</p>
								<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/legs5.webp" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>
	
							</div>
						</li>
					</ul>
				</div>
			</div>
			<a href="/reservation/">
				<picture>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
				</picture>
			</a>
		</div>
	</section>
	<section id="operations-faq" class="faq">
		<div class="container">
			<h2 id="toc9">タトゥー除去・刺青除去手術の<br class="sp">よくあるご質問</h2>
			<div class="sub-container">
				<div class="faq-item open"> <!-- 初期表示はここだけ open -->
					<button class="faq-question"><h3 id="toc9-1">未成年でも治療はできますか？</h3></button>
					<div class="faq-answer">
					<p>保護者の同意があれば治療可能です。<br>
						カウンセリング時、必ず保護者の方と同伴ください。<br>
						カウンセリングの内容に同意いただければそのまま治療のお申込みが可能でございます。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-2">保険適用治療はできますか？</h3></button>
					<div class="faq-answer">
						<p>自由診療になりますので、保険は適用できかねます。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-3">なぜレーザー除去を<br class="sp">行っていないのですか？</h3></button>
					<div class="faq-answer">
					<p>当院ではお金をお支払いいただくからには必ず取りきるという治療方針でございます。<br>
					しかし、レーザーの場合は薄くなっても消えなかったり、ケロイド状に形が盛り上がりそのまま残ってしまったりするため、これでは取り切れたとは言えません。刺青除去をご希望される方は、「そもそも刺青とわかる跡が残ってしまうのでは全く意味がない」 というご事情の方ばかりのため当院では、傷が残っても取り切れる手術のみのご案内をさせていただいております。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question li01"><h3 id="toc9-4">手術が難しい部位はありますか？</h3></button>
					<div class="faq-answer">
					<p>手術をするには切除して皮膚を寄せて縫い合わせる必要がございます。そのため皮膚を寄せられない（寄せずらい）場所は手術が難しくなります。たとえば、手の指・足の指・足首などは皮膚の余裕がなく手術が難しい部位となります。また、背中全体を覆うような刺青の場合は、切除しても皮膚を寄せることができないため、手術することができません。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-5">手術は痛いですか？</h3></button>
					<div class="faq-answer">
					<p>手術自体は、局所麻酔となりますので手術中は触られている感覚は伝わりますが、痛みは感じません。<br>
					手術後、３～４時間ほどで麻酔が切れてきますが、痛みというよりは皮膚を寄せているツッパリ感が気になるかもしれません。念のため痛み止め３日分をお渡しいたしております。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-6">手術後気を付けることは<br class="sp">ありますか？</h3></button>
					<div class="faq-answer">
					<p>手術してから抜糸までの間、手術したところは濡らすことができません。お風呂には手術翌日から入れますが、手術部位を濡らさないように気を付けて入ってください。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-7">足の手術を受けた場合に<br class="sp">気を付けることはありますか？</h3></button>
					<div class="faq-answer">
					<p>歩くことはできますが、走ったりはしないようにしてください。また、足はむくみやすい部位なので、寝るときは少し足を上げて高くして寝ていただくと楽になるかと思われます。階段も極力使用せず、エレベータをご利用ください。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-8">手の手術を受けた場合に<br class="sp">気を付けることはありますか？</h3></button>
					<div class="faq-answer">
					<p>手を濡らすことができなくなります。そのためお風呂に入るときはビニール袋に手を入れて濡らさないように入ってください。また、手を包帯で巻くことになりますので、バイクや車などの運転ができなくなります。特に利き腕の手の手術をされるとペンも持ち辛くなるためお仕事にも支障がきたします。<br>
					１～２週間お休みを取れるときに治療をされることをお勧めいたします。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question"><h3 id="toc9-9">同時に複数の箇所のタトゥー・<br class="sp">刺青除去手術はできますか？</h3></button>
					<div class="faq-answer">
					<p>体の部位が異なれば２か所程度まで同時に手術が可能です。ただし、体内に注射する局所麻酔量に限界がありますため、1か所の刺青が大きい場合に２か所目を手術できない可能性もございます。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="other-treatment yellow">
		<div class="container">
			<h2 id="toc10"><span class="sub">その他の</span><span class="main blue">タトゥー・<br class="sp">刺青除去手術について</span></h2>
			<div class="content-wrapper">
				<!-- レーザー治療セクション -->
				<div class="treatment-section">
					<!-- レーザー治療 -->
					<div class="treatment-card">
						<h3 id="toc10-1" class="section-title">レーザー治療</h3>
						<div class="card-content">
							<!-- 傷跡が残りにくいが、効果が出ないことも -->
							<div class="subsection">
								<h4 class="subsection-title">傷跡が残りにくいが、<br class="sp">効果が出ないことも</h4>
								<div class="content-with-image">
									<img class="content-image pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/ot1-1.webp" alt="レーザー治療">
									<img class="content-image sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/ot1-1_sp.webp" alt="レーザー治療">
									<div class="content-text">
										<p class="text-normal">レーザーを照射し<br class="pc">タトゥーで<br class="sp">色が入っている細胞を壊死させることで、<br>タトゥーの色味を薄くする治療法です。<br><br>治療には輪ゴムでパチンと<br>はじいた時のような<br class="sp">小さい痛みがあります。</p>
										<p class="text-highlight">皮膚を切除する必要がなく、<br class="sp">傷跡ができることはありません。</p>
										<p class="text-normal"><br>ただし、<br class="sp">黒や茶色など濃い色のタトゥーには<br class="sp">効果がありますが、<br>赤や黄色などの明るい色などには<br class="sp">ほとんど効果がありません。<br><br>また、手掘りのタトゥーや<br class="sp">複数回タトゥーを行っている場合などは<br class="sp">効果が出にくいことがあります。<br><br class="sp">個人差がありますが、<br>効果が現れるまで何度かレーザーを<br class="sp">照射する必要があります。</p>
									</div>
								</div>
							</div>

							<!-- エステサロンでのレーザー施術は危険 -->
							<div class="subsection">
								<h4 class="subsection-title">エステサロンでの<br class="sp">レーザー施術は危険</h4>
								<div class="content-with-image">
									<img class="content-image pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/ot1-2.webp" alt="エステサロンの危険性">
									<img class="content-image sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/ot1-2_sp.webp" alt="エステサロンの危険性">
									<div class="content-text">
										<p class="text-normal">タトゥー除去のためのレーザー治療は、<br class="sp">医療機関で行う施術です。<br><br>しかし、エステサロンで<br class="sp">レーザー治療を受け、<br>ひどい火傷やケロイドになってしまい<br>当院を受診された方もいらっしゃいます。<br><br>適切な処置ができない<br class="sp">エステサロンでのタトゥー除去は、<br>おすすめできません。</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 皮膚移植術 -->
					<div class="treatment-card">
						<h3 id="toc10-2" class="section-title">皮膚移植術<br class="sp">（ティッシュエキスパンダー法）</h3>
						<div class="section-description">
							<p>皮膚切除法は、<br class="sp">レーザー治療ができない場合や、<br>
								皮膚を寄せて縫合することが難しいケースで<br class="sp">適用される治療法です。<br>
								「ティッシュエキスパンダー法」とも呼ばれ、<br class="sp">体の他の部位から皮膚を移植して行います。</p>
						</div>
						<div class="card-content">
							<!-- どのようなケースで実施するのか -->
							<div class="subsection">
								<h4 class="subsection-title">どのようなケースで実施するのか</h4>
								<div class="content-text-only">
									<p class="text-normal">手首や耳の裏など、<br class="sp">皮膚に余裕のない部位に刺青がある場合や<br class="sp">レーザー治療が難しい部位や、<br>切除後に縫い寄せられない範囲の<br class="sp">広い刺青の場合に行います。</p>
								</div>
							</div>

							<!-- 皮膚の接種部位について -->
							<div class="subsection">
								<h4 class="subsection-title">皮膚の接種部位について</h4>
								<div class="content-text-only">
									<p class="text-normal">貼り合わせる皮膚は、<br class="sp">なるべく元の部位に近い箇所から<br class="sp">採取することで、定着しやすくなります。<br><br class="sp">ただし、広範囲の皮膚が必要な場合には、<br class="sp">お尻や内ももなど<br class="sp">皮膚に余裕のある部位から採取します。</p>
									
									<!-- メリット -->
									<div class="info-box benefits">
										<div class="info-label benefits-label">メリット</div>
										<p class="text-normal">レーザーや通常の皮膚切除が<br class="sp">困難な部位にも対応可能です。<br>また、広範囲の刺青にも対応できる<br class="sp">柔軟性の高い治療法でもあります。</p>
									</div>

									<!-- 注意点 -->
									<div class="info-box cautions">
										<div class="info-label cautions-label">メリット・注意点</div>
										<ul class="bullet-points">
											<li class="text-normal">新たに2か所の傷跡（移植元と移植先）が<br class="sp">残ります</li>
											<li class="text-normal">術後1ヶ月は絶対安静が必要で、<br class="sp">日常生活への影響が大きい</li>
											<li class="text-normal">移植部が大きい場合は入院が<br class="sp">必要になることがあります</li>
										</ul>
									</div>

									<p class="text-normal footer-text">皮膚移植による除去をご検討の場合は、傷跡やダウンタイム、仕上がりの見た目も含めて、<br class="pc">医師にご相談ください。</p>
								</div>
							</div>
						</div>
					</div>

					<!-- アプレーション手術 -->
					<div class="treatment-card">
						<h3 id="toc10-3" class="section-title">アプレーション(削皮)手術</h3>
						<div class="card-content">
							<div class="subsection">
								<h4 class="subsection-title">切除・レーザーが難しい場合の<br class="sp">最終手段</h4>
								<div class="content-text-only">
									<p class="text-normal">削皮（さくひ）と呼ばれる<br class="sp">指の甲や耳タブなど<br class="sp">皮膚を縫い合わせることが出来ない場所に<br>タトゥーがある場合、<br class="sp">皮膚を削ることで<br class="sp">タトゥーを除去する方法です。<br><br>
									グラインダーにて<br class="sp">皮膚を物理的に削っていく方法と<br>炭酸ガスレーザー(ＣＯ２レーザー)により<br class="sp">蒸散させて皮膚を削る方法の<br class="sp">2種類あります。<br><br>
									この方法は、<br class="sp">広範囲のタトゥーに対して行うと<br class="sp">火傷のような大きなケロイドが<br class="sp">面上に広がり<br><br class="sp">フランスパンのように<br class="sp">皮膚が固くなってしまいます。<br><br>
									治療後の皮膚の状態がとても悪いため、<br>どうしても皮膚切除も<br class="sp">レーザー除去もできない場合の<br class="sp">最終手段となります。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="large-container">
			<div class="consultation-section">
				<div class="container">
					<h2 id="toc10-4"><span class="sub">当院は</span>
						<span class="main blue">皮膚切除術を<br class="sp">おすすめしています</span></h2>
					<!-- 説明文 -->
					<div class="consultation-description">
						<p>当院では、確実にタトゥーを除去できる<br class="sp">皮膚切除術を推奨しています。<br>
						手術後の傷跡に関しては<br class="sp">レーザーや内服薬によるアフターケアまで<br>
						しっかり対応させていただきます。<br>
						<br>
						タトゥーを除去したいと<br class="sp">少しでもお考えの方は、<br>
						カウンセリングは無料で行っていますので、<br class="sp">お気軽にお問合せください。</p>
					</div>
					<a href="/reservation/">
						<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
						</picture>
					</a>
				</div>
			</div>
		</div>
	</section>
      <section id="greeting">
          <div class="container" id="toc11"> 
            <div class="flex">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/doctor.webp" alt="院長 鈴木栄樹">
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/doctor_sp.webp" alt="院長 鈴木栄樹">
              <div>
                <p class="title">監修医師紹介</p>
                <p>池袋サンシャイン美容外科</p>
                <p>院長<span>鈴木栄樹</span></p>
                <ul>
                  <li>日本美容外科学会正会員・認定医</li>
                  <li>日本美容外科医師会正会員</li>
                  <li>日本抗加齢医学正会員</li>
                </ul>
              </div>
            </div>
            <h3 id="toc11-1">
            若い頃に入れたタトゥーを切り取り、<br class="sp">新たな人生のスタートを
            </h3>
            <p class="text">若い時に勢いで入れてしまった<br class="sp">刺青やタトゥー・・・<br><br class="sp">
			プールや温泉に入れない時やお子さんができて<br class="sp">周りの親御さんの目が気になる時など<br><br class="sp">
			年齢を重ねるにつれて<br class="sp">タトゥー・刺青を取りたいという方が<br class="sp">増えてきます。<br><br>

			刺青を入れるときは、<br class="sp">アッという間に入れられて<br class="sp"><br class="sp">数万円という手軽さに<br>
			その場の勢いで入れてしまう方も<br class="sp">いらっしゃるようです。<br><br>

			しかし本当は刺青は<br class="sp">民間施設での施術の為滅菌処理が十分に行えず<br>
			感染症にかかってしまう恐れがあり、<br class="sp">非常に注意と覚悟が必要な施術となります。<br><br>

			近年、就職難などものあり<br class="sp">非常に多くの方が刺青を消したいと<br>
			当院にご相談にいらっしゃいます。<br><br class="sp">
			医師とよくご相談の上、<br class="sp">治療方針や計画をしっかりたてて<br class="sp">治療していくことをお勧めいたします。</p>
            <img class="profile pc" src="<?php echo get_template_directory_uri(); ?>/common/img/profile.webp" alt="院長の経歴">
            <img class="profile sp" src="<?php echo get_template_directory_uri(); ?>/common/img/profile_sp.webp" alt="院長の経歴">
          </div>
      </section>

      <section class="yellow" id="snsreport">
        <div class="container">
          <h2 id="toc12">
              <span class="sub">タトゥー除去・刺青徐去治療の</span><br>
              <span class="main">ブログや体験レポート</span>
          </h2>
        </div>
        <div class="box">
          <div class="container item">
            <div class="flex">
              <img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/bodyline_insta.webp" alt="">
              <div>
                <h3 id="toc12-1">Instagram</h3>
                <p>
                  タトゥー除去・刺青徐去治療の実際の様子や<br>
					ビフォーアフターをご紹介しています。
                </p>
                <a href="https://www.instagram.com/ikesunshine331244?utm_source=ig_web_button_share_sheet&igsh=czhpOTc0cmxpaWYz">公式インスタグラムへ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box left">
          <div class="container item">
              <h3 id="toc12-2">
                傷跡治療のブログランキング
              </h3>
              <ul>
                <li class="rank01"><a href="/blogs/mole_wart/hokuro-cream-2/">タトゥー刺青(入れ墨)のデメリット｜日本で受け入れられない理由と病院の除去</a></li>
                <li class="rank02"><a href="blogs/mole_wart/self-removement/">【お悩み解決】タトゥーを入れて後悔したときに行う対策法｜刺青・入れ墨</a></li>
                <li class="rank03 last"><a href="/mole_wart/hokuro_hueru/">タトゥー除去には痛みがともうなう？ダウンタイムや治療にかかる時間をご紹介</a></li>
              </ul>
          </div>
        </div>
      </section>

      <section id="access">
        <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8118773271394!2d139.71221927652596!3d35.73084487257129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751103762661!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div>
            <h2 id="toc13">アクセス</h2>
            <p class="name"><strong>池袋サンシャイン美容外科　池袋院</strong></p>
            <p>
              〒170-0013<br>
              東京都豊島区東池袋1-15-3 近代ビル9F
            </p>
            <p class="up">
              池袋」駅東口より徒歩5分<br>
              ＜JR＞山手線　埼京線<br>
              ＜東武東上線＞<br>
              ＜西武池袋線＞<br>
              ＜東京メトロ＞丸の内線　有楽町線
            </p>
            <div class="box">
              <ul>
                <li><span>TEL</span>0120-331-244</li>
                <li><span>FAX</span>03-3987-5080</li>
                <li><span>Email</span>info@ike-sunshine.co.jp</li>
                <li class="up"><span>診療時間</span>9:00～17:30 (完全予約制)</li>
                <li><span>定休日</span>火曜・木曜</li>
              </ul>
            </div>
          </div>
        </div>
      </section>



<!--/#mainContents-->
<!--/ここまでコンテンツ-->

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
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.faq-item');

    items.forEach(item => {
      const btn = item.querySelector('.faq-question');
      btn.addEventListener('click', () => {
        item.classList.toggle('open');
      });
    });
  });
</script>

<?php get_footer(); ?>