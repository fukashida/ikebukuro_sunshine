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
<!--/ここからコンテンツ-->

<div class="secBox bodyline_wrap">

	<section class="secBox top-menu">
		<picture><source srcset="/wp-content/uploads/2021/03/bodyline-top-1.jpg.webp" type="image/webp"><img src="/wp-content/uploads/2021/03/bodyline-top-1.jpg" alt="タトゥー刺青除去" width="920" height="384"></picture>
		<div class="topNav">
			<ul>
				<li class="heightAjst"><a href="#toc3">治療方法</a></li>
				<li class="heightAjst"><a href="#toc3-4">ご料金</a></li>
				<li class="heightAjst"><a href="#toc6">症例写真</a></li>
				<li class="heightAjst"><a href="#toc5">アフターケア</a></li>
				<li class="heightAjst"><a href="#toc7">よくある質問</a></li>
				<li class="heightAjst"><a href="#toc8">刺青除去について</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">無料カウンセリング<br>申し込み</a></li>
			</ul>
		</div>
	</section>

	<div id="toc_box" class="mb20">
		<p class="toc_title">目次［<span class="toc_status">表示</span>］</p>
		<div class="toc_list" style="display: none;">
			<ul>
				<li>
					<a href="#toc1">
						<span class="toc_num">1.</span> 半額モニターでのタトゥー除去・刺青除去手術を池袋サンシャイン美容外科でしませんか
					</a>
				</li>
				<li>
					<a href="#toc2">
						<span class="toc_num">2.</span> タトゥー・刺青（入れ墨）とは
					</a>
				</li>
				<li>
					<a href="#toc3">
						<span class="toc_num">3.</span> 池袋サンシャイン美容外科での刺青（タトゥー）除去のご案内
					</a>
					<ul>
						<li>
							<a href="#toc3-1">
								<span class="toc_num">3－1.</span> 当医院がタトゥー・刺青除去に皮膚切除法を選択する理由
							</a>
						</li>
						<li>
							<a href="#toc3-5">
								<span class="toc_num">3－2.</span> 一度入れてしまったタトゥー・刺青・・・実は後悔していませんか？
							</a>
						</li>
						<li>
							<a href="#toc3-2">
								<span class="toc_num">3－3.</span> 当医院での治療おすすめポイント
							</a>
						</li>
						<li>
							<a href="#toc3-3">
								<span class="toc_num">3－4.</span> 刺青除去・タトゥー除去手術概要
							</a>
						</li>
						<li>
							<a href="#toc3-4">
								<span class="toc_num">3－5.</span> ご手術のご料金
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc4">
						<span class="toc_num">4.</span> タトゥー除去治療の流れ
					</a>
					<ul>
						<li>
							<a href="#toc4-1">
								<span class="toc_num">4－1.</span> 刺青除去 カウンセリング～お帰りになるまでの全体の流れ
							</a>
						</li>
						<li>
							<a href="#toc4-2">
								<span class="toc_num">4－2.</span> 刺青除去手術の詳しい流れ
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc5">
						<span class="toc_num">5.</span> 刺青除去治療前後のご注意とアフターケアについて
					</a>
					<ul>
						<li>
							<a href="#toc5-1">
								<span class="toc_num">5－1.</span> 手術前のご注意事項
							</a>
						</li>
						<li>
							<a href="#toc5-2">
								<span class="toc_num">5－2.</span> 手術後の傷跡治療とアフターケア
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc6">
						<span class="toc_num">6.</span> 刺青・タトゥー除去　症例写真
					</a>
					<ul>
						<li>
							<a href="#toc6-1">
								<span class="toc_num">6－1.</span> 左上腕・右上腕のタトゥー・刺青除去　症例写真
							</a>
						</li>
						<li>
							<a href="#toc6-2">
								<span class="toc_num">6－2.</span> 左前腕・右前腕のタトゥー・刺青除去　症例写真
							</a>
						</li>
						<li>
							<a href="#toc6-3">
								<span class="toc_num">6－3.</span> 手の甲や指のタトゥー・刺青除去　症例写真
							</a>
						</li>
						<li>
							<a href="#toc6-4">
								<span class="toc_num">6－4.</span> 胸部のタトゥー・刺青除去　症例写真
							</a>
						</li>
						<li>
							<a href="#toc6-5">
								<span class="toc_num">6－5.</span> 腹部・腰のタトゥー・刺青除去　症例写真
							</a>
						</li>
						<li>
							<a href="#toc6-6">
								<span class="toc_num">6－6.</span> 背中のタトゥー・刺青除去　症例写真
							</a>
						</li>
						<li>
							<a href="#toc6-7">
								<span class="toc_num">6－7.</span> 太もも・足のタトゥー・刺青除去　症例写真
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc7">
						<span class="toc_num">7.</span> 刺青・タトゥー除去手術のＱ＆Ａ
					</a>
					<ul>
						<li>
							<a href="#toc7-1">
								<span class="toc_num">7－1.</span> 未成年の場合でも治療できますか？
							</a>
						</li>
						<li>
							<a href="#toc7-2">
								<span class="toc_num">7－2.</span> 保険適用治療はできますか？
							</a>
						</li>
						<li>
							<a href="#toc7-3">
								<span class="toc_num">7－3.</span> なぜレーザー除去を行っていないのですか？
							</a>
						</li>
						<li>
							<a href="#toc7-4">
								<span class="toc_num">7－4.</span> 手術できない場所はありますか？
							</a>
						</li>
						<li>
							<a href="#toc7-5">
								<span class="toc_num">7－5.</span> 手術は痛いですか？
							</a>
						</li>
						<li>
							<a href="#toc7-6">
								<span class="toc_num">7－6.</span> 手術後気を付けることはありますか？
							</a>
						</li>
						<li>
							<a href="#toc7-7">
								<span class="toc_num">7－7.</span> 足の手術をした場合に気を付けることはありますか？
							</a>
						</li>
						<li>
							<a href="#toc7-8">
								<span class="toc_num">7－8.</span> 手の手術をした場合に気を付けることはありますか？
							</a>
						</li>
						<li>
							<a href="#toc7-9">
								<span class="toc_num">7－9.</span> 同時に複数の箇所の刺青除去手術はできますか？
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc8">
						<span class="toc_num">8.</span> タトゥー・刺青（入れ墨）を消すには
					</a>
					<ul>
						<li>
							<a href="#toc8-1">
								<span class="toc_num">8－1.</span> 自分でタトゥーを消す・ごまかす場合
							</a>
						</li>
						<li>
							<a href="#toc8-2">
								<span class="toc_num">8－2.</span> エステにて刺青除去レーザーを使用する場合
							</a>
						</li>
						<li>
							<a href="#toc8-3">
								<span class="toc_num">8－3.</span> 医療機関にてタトゥー除去をする場合
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc9">
						<span class="toc_num">9.</span>刺青除去の色々な方法とメリット・デメリット
					</a>
					<ul>
						<li>
							<a href="#toc9-1">
								<span class="toc_num">9－1.</span> レーザー治療
							</a>
						</li>
						<li>
							<a href="#toc9-2">
								<span class="toc_num">9－2.</span> 皮膚切除手術
							</a>
						</li>
						<li>
							<a href="#toc9-3">
								<span class="toc_num">9－3.</span> アブレーション手術による手術
							</a>
						</li>
						<li>
							<a href="#toc9-4">
								<span class="toc_num">9－4.</span> 皮膚移植手術による手術
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc10">
						<span class="toc_num">10.</span> 院長 鈴木栄樹からのご挨拶
					</a>
				</li>
				<li>
					<a href="#toc11">
						<span class="toc_num">11.</span> タトゥー除去・刺青除去治療のブログランキング
					</a>
				</li>
			</ul>
		</div>
	</div>

		<h3 class="subTitle" id="toc3-5">一度入れてしまったタトゥー・刺青・・・実は後悔していませんか？</h3>
		<div class="bodyline_ly_regret">
			<p class="pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/regret_ttl.gif" alt="一度入れてしまったタトゥー・刺青・・・実は後悔していませんか？" width="863" height="159"></p>
			<p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/sp-regret_ttl.gif" alt="一度入れてしまったタトゥー・刺青・・・実は後悔していませんか？" width="400" height="74"></p>

			<div class="bl_bodyline_regret_wrapper">
				<p>
					<span><strong>結婚したいんだけど…相手の親に嫌われたくない</strong></span>
            		刺青が入っていることが原因で婚約解消されるケースもあるようです。当院でも、男女関係無く、結婚が決まったという理由で、刺青を除去される方が多く見受けられます。
				</p>
			</div>
			<div class="bl_bodyline_regret_wrapper bl_bodyline_regret__rev">
				<p>
					<span><strong>子供への悪影響が心配…刺青を入れて欲しくない</strong></span>
					子供が生まれてから自分と同じように、綺麗な肌にタトゥーを入れてしまったら…親同士の視線が気になる…と気にする方は多くいらっしゃいます。また、プールや温泉など公共施設で子供と一緒に過ごせないなど、お子様がきっかけとなり、施術を決める方が多くご来院されます。
				</p>
			</div>
			<div class="bl_bodyline_regret_wrapper">
				<p>
					<span><strong>仕事上で問題になった/就職活動に支障がある</strong></span>
            		刺青が入っていることで、公務員や大企業への就職が困難になるケースは大いに考えられます。日本だけでなくアメリカやヨーロッパでも、刺青は社会的に認められていないのです。
				</p>
			</div>
			<div class="bl_bodyline_regret_wrapper bl_bodyline_regret__rev">
				<p>
					<span><strong>元彼/元彼女の名前を入れたけど別れてしまった</strong></span>
					元恋人の名前を彫ってしまったけど、結局関係が続かず別の恋人が出来た。<br>
					今の恋人に苦しい言い訳や説明をするのも大変…。良い関係を築きたいけど刺青が気になって親密になれない。そのような理由から施術をする方も多くいらっしゃいます。
				</p>
			</div>
			<div class="bl_bodyline_regret_wrapper">
				<p>
					<span><strong>生命保険に加入できない</strong></span>
					刺青のある方は、生命保険への加入を断られることがあります。<br>
					理由は、モラルリスク、医学的リスクの2つのリスク。保険会社には社会的に健全な方法で保険料を運用するという決まりがあります。刺青を入れている方に支払うことは、健全な支払いとは考えられていないので原則的に加入が出来ないのです。
				</p>
			</div>
		</div>



	<section class="secBox" id="toc1">
		<h2 class="baseTitle">半額モニターでのタトゥー除去・刺青除去手術を池袋サンシャイン美容外科でしませんか</h2>
		<div class="bl_aboutTattoo">
			<p>
				タトゥー除去・刺青除去について、<br>池袋サンシャイン美容外科では<span class="att"><u><strong>皮膚切除による手術</strong></u></span>を行っております。<br><br>
				当院は、刺青除去に関してご希望される方は<span class="att"><strong>全員モニターで半額のお値段</strong></span>で<br>治療を承っており、カウンセリングは無料です。<br><br>
				<span class="paddingAdjust">
					初回カウンセリング時に<span class="att"><strong>治療回数・お値段・治療期間の明確な提示</strong></span>を行っております。<br>
					お値段の中には、麻酔代もお薬代もすべて含んだ価格設定を行っており、後から追加でのご料金の発生などはございません。<br>
					また手術回数や期間に関しても具体的にしっかりご提示させていただいておりますため、今後の治療予定が立てやすいとご好評いただいております。
					<img src="/wp-content/uploads/2021/03/Dr_sign.png" alt="院長 鈴木栄樹" loading="lazy" width="250" height="61">
				</span>
			</p>
		</div>
		<div class="slider carousel">
			<ul class="slides">
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0101_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0101_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0102_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0102_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0103_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0103_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0104_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0104_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0105_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0105_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0106_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0106_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0107_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0107_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0108_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0108_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0109_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0109_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0110_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0110_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0111_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0111_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0112_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0112_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0113_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0113_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0114_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0114_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-1"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115_thumb.jpg" /></a>
				</li>
				<li>
					<a href="#toc6-1"><picture><source srcset="/wp-content/uploads/2021/03/im_case0116_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0116_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11_thumb.jpg" /></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401_thumb.jpg" /></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0402_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0402_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0403_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0403_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0404_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0404_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0405_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0405_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0406_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0406_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0407_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0407_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0408_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0408_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-2"><picture><source srcset="/wp-content/uploads/2021/03/im_case0409_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0409_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-3"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-3"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-3"><picture><source srcset="/wp-content/uploads/2021/03im_case0501_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0501_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-3"><picture><source srcset="/wp-content/uploads/2021/03/im_case0502_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0502_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-3"><picture><source srcset="/wp-content/uploads/2021/03/im_case0503_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0503_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0602_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0602_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0603_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0603_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0604_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0604_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605_thumb.jpg" /></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0606_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0606_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0607_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0607_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0608_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0608_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0609_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0609_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0610_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0610_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-4"><picture><source srcset="/wp-content/uploads/2021/03/im_case0611_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0611_thumb.jpg" /></picture></a>
				</li>


				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0301_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0301_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0302_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0302_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0303_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0303_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0304_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0304_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0305_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0305_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0306_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0306_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-5"><picture><source srcset="/wp-content/uploads/2021/03/im_case0307_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0307_thumb.jpg" /></picture></a>
				</li>


				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201_thumb.jpg" /></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0202_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0202_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0203_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0203_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0204_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0204_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0205_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0205_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0206_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0206_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0207_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0207_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0208_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0208_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0209_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0209_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0210_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0210_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0211_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0211_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0212_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0212_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-6"><picture><source srcset="/wp-content/uploads/2021/03/im_case0213_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0213_thumb.jpg" /></picture></a>
				</li>


				<li>
					<a href="#toc6-7"><picture><source srcset="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-7"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701_thumb.jpg" /></a>
				</li>
				<li>
					<a href="#toc6-7"><picture><source srcset="/wp-content/uploads/2021/03/im_case0702_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0702_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-7"><picture><source srcset="/wp-content/uploads/2021/03/im_case0703_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0703_thumb.jpg" /></picture></a>
				</li>
				<li>
					<a href="#toc6-7"><picture><source srcset="/wp-content/uploads/2021/03/im_case0704_thumb.jpg.webp" type="image/webp"><img alt="刺青・タトゥー除去　症例写真" width="212" height="176" loading="lazy" src="/wp-content/uploads/2021/03/im_case0704_thumb.jpg" /></picture></a>
				</li>
			</ul>
		</div>
	</section>



	<section class="secBox" id="toc3">
		<h2 class="baseTitle">当院で行っているタトゥー除去の手術について</h2>
		<h3 class="subTitle" id="toc3-1">当院では皮膚切除法を推奨しています</h3>
<h4 class="subTitle">●皮膚切除法はレーザー治療よりも確実にかつ負担が軽い</h4>

<p>当院では、レーザー除去を行っておらず皮膚切除による刺青除去手術を行っております。</p><p><span class="att"><strong>レーザー除去治療では、色のあるタトゥーの除去ができなかったり、何度も照射に時間がかかり自宅療養中の制限が多くあるため</strong></span>です。</p><p>
またレーザー治療は傷跡が残らない為、気軽なイメージをお持ちの方が多くいらっしゃいますが全体的に薄くなるだけでタトゥーが完全に消えることがなかったり、術後の腫れや痛みが大きい場合が多数あります。</p><p>
結局、手術で切り取ってしまうほうが　傷跡も美しく、痛みに関してもレーザーの様なずっと残る痛みがない分お体への負担も軽いという見解に至ったためです。</p>

<h4 class="subTitle">●皮膚切除術とは</h4>
<p>タトゥー部分の皮膚を切除し、周りの皮膚を引っ張って縫合する治療法です。</p><p>切除する皮膚が小さい場合は<span class="att"><strong>1回の手術で完全にタトゥーを除去することが可能です</strong></span>。</p><p>大きい場合は、タトゥーの内側の皮膚を一度手術し、タトゥーの範囲を小さくしながら何度か切除することで完全に除去することができます。</p><p>皮膚を切除するので、どのような色でも完全にタトゥーを消すことができます。</p><p><span class="att"><strong>タトゥーを完全に消したい、すぐにタトゥーを消したい方におすすめの治療法</strong></span>です。</p>



<h4 class="subTitle">●当医院での治療おすすめポイント</h4>
		<div class="point mb20">
			<ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point01.png" alt="土日も治療可 当日予約・当日治療ＯＫ" width="236" height="236" loading="lazy">
					<p>
						当院では当日予約し当日治療することも可能です。<br>
						土日の治療も行っておりますので、お仕事や学校を休まず治療することが可能です。
					</p>
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point02.png" alt="傷跡ケアに注力" width="236" height="236" loading="lazy">
					<p>
						傷跡治療専用レーザーを導入。手術後の傷跡が気になる方へはレーザー治療を行っております。<br>
						またその他にも多彩な傷跡治療をご用意しております。
					</p>
<a href="#toc5-2">詳しくはこちら→</a>
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point03.png" alt="半額モニター募集中" width="236" height="236" loading="lazy">
					<p>
						当院では多くの方にタトゥーを除去する流れや傷跡のイメージを具体的に持っていただくため<br>モニター募集をしています。					※お顔やお名前など個人が特定される情報は載せません。
					</p>
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/point04.png" alt="1回30分～1時間完全予約制" width="236" height="236" loading="lazy">
					<p>
						当院の皮膚切除法であれば該当箇所を切除するので小さいサイズであれば1回で除去することができます。
					</p>
				</li>
			</ul>
		</div>
		<h3 class="subTitle" id="toc3-3">刺青除去・タトゥー除去手術概要</h3>
		<div class="baseTbl01 spTbl01 nowrap mb20">
			<div class="wrap">
				<table>
					<tbody><tr>
						<th>手術時間</th>
						<td>1回　30分～1時間程度<br>
						※5cm以上の場合<br>2回以上の分割切除になる可能性があります。</td>
					</tr>
					<tr>
						<th>麻酔</th>
						<td>局所麻酔。3～4時間程度でなくなります。</td>
					</tr>
					<tr>
						<th>通院</th>
						<td>手術　⇒　3日目検診　⇒10日目抜糸</td>
					</tr>
					<tr>
						<th>入浴</th>
						<td>手術当日から可能<br>※手術部位は抜糸が終わるまで濡らせません</td>
					</tr>
				</tbody></table>
			</div>
		</div>
		<h3 class="subTitle" id="toc3-4">ご手術のご料金</h3>
		<div><img class="hp_imgCenter" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/moniter_price.png" alt="タトゥー・刺青除去手術の料金" width="690" height="456" loading="lazy"></div>
	</section>




	<section class="secBox" id="toc5">
		<h2 class="baseTitle">刺青除去治療前後のご注意とアフターケアについて</h2>
		<h3 class="subTitle" id="toc5-1">手術前、治療期間中のご注意事項</h3>
		<h4 class="subTitle">手術前のご注意事項</h4>
		<p>
			(1) 施術部位やタトゥーのデザインによっては数回に分けて切除を行うことがございます。<br>
			数回に分けて施術を行う場合、2回目の切除は通常1回目の施術の3か月後～6か月後となります。<br>
			1回目の治療経過によっては2度目の切除時期が多少前後いたしますので都度調整が必要となります。<br>
			(2) 縫合部分のケロイド化を予防するために、リザベンを術前1か月前から服用されることをお勧めいたします。<br>
			(3) 除去手術の際、出来るだけ多くの刺青部分を除去することを目的としますので、傷は曲がってしまったり凹凸が発生したり、複数の傷となる場合があり、当初カウンセリング時の予想と異なる傷になる場合がございます。<br>
			(4) 傷跡修正手術の傷跡は、体質に大きく影響されます。再度同様の傷か、より目立った傷になる可能性がございます。
		</p>
		<h4 class="subTitle">治療期間中の注意</h4>
		<p>
			(1) 禁酒・禁煙です。抜糸までは治療部位に負担をかけない様、運動もお控えください。<br>
			(2) <span class="att"><strong>圧迫固定は絶対に外さないで下さい。</strong></span>この圧迫固定は傷口が開かないようにしキレイに治すことができます。<br>
			内出血・皮膚がよった状態・水がたまった状態・皮膚壊死などのトラブルを予防する重要な作業です。<br>
			固定がゆるんだ場合は上から追加で巻いて補強してください。<br>
			(3) 翌日よりシャワー可能です。治療部位は濡らさないよう、ビニール等でカバーしてお入りください。<br>
			（患部が濡れたらすぐに来院してください）<br>
			(4) 妊娠・授乳中の手術を行うことができません。医師へご申告をお願いいたします。
		</p>
		<h3 class="subTitle" id="toc5-2">手術後の傷跡治療とアフターケア</h3>
		<h4 class="subTitle">治療後の傷跡に対する、その他のケアについて</h4>
		<p>
			手術である限り、必ず傷跡は残ります。傷跡は部位・切除範囲・皮膚の体質により大きく異なってきます。<br>
			傷跡が気になる方は、以下のような治療を別途ご用意しております。※別料金・別治療となります。
		</p>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→傷が残りづらくする予防法①：ケロイド予防のお薬の服用</h5>
			<div class="clrfix mb20">
				<div class="photoL spFull"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo24.jpg" alt="ケロイド予防のお薬" loading="lazy"></div>
				<p>ケロイドという、傷が盛り上がる状態を未然に防ぐには、飲み薬が有効です。<br>
					傷そのものをきれいにしてくれて、美肌効果も期待できます。
				</p>
			</div>
		</div>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→傷が残りづらくする予防法②：テーピング治療</h5>
			<div class="clrfix mb20">
				<div class="photoL spFull"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo23.jpg" alt="テーピング治療" loading="lazy"></div>
				<p>
					日頃のケアとして最も重要なのが、傷跡拡大を予防するテーピング治療になります。<br>
					傷に対して直角にテープを重ねて貼っておくことで、細い傷を維持します。<br>
					手術後、約6か月間はテープを貼ることをお勧めしております。<br>
					<br>
					皮膚が荒れた場合は、お薬を処方しますのでご相談ください。
				</p>
			</div>
		</div>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→傷が残りづらくする予防法③：保湿</h5>
			<dl class="cItem clrfix">
				<dt>
					<ul class="clrfix">
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/laser/img_33.jpg" alt="プラセンタローション" loading="lazy"><p class="fsS">プラセンタローション</p></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/laser/img_34.jpg" alt="プラセンタクリーム" loading="lazy"><p class="fsS">プラセンタクリーム</p></li>
					</ul>
				</dt>
				<dd>
					<p class="mb10">術後、傷の周りは非常に乾燥しやすくなります。<br>
					乾燥は傷を汚くしますので、しっかりと保湿をして下さい。<br>
					当院では、プラセンタ配合の保湿剤をご用意しております。<br>
					通常の保湿ケアでは物足りない方は、ご相談ください。</p>
				</dd>
			</dl>
		</div>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→すでにできてしまった傷跡を目立たなくする方法①：ステロイド注射</h5>
			<div class="clrfix mb20">
				<div class="photoL spFull"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo25.jpg" alt="ケナコルト注射" loading="lazy"></div>
				<p>
					関節部位や胸はケロイドの傷が形成されやすい場所になります。<br>
					盛り上がった傷に対してお注射をすると2週間程度で盛り上がりをへこませることができます。
				</p>
			</div>
		</div>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→すでにできてしまった傷跡を目立たなくする方法②：スターラックス照射</h5>
			<div class="clrfix mb20">
				<div class="photoL spFull"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo27.jpg" alt="スターラックス照射" width="350" height="104"></div>
				<p>
					スターラックスレーザーによる照射を行うことで<br>
					傷跡の軽減を期待することができます。<br>
					※照射範囲によって再お見積りとなります。
				</p>
			</div>
		</div>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→すでにできてしまった傷跡を目立たなくする方法③：色素沈着軽減の塗り薬</h5>
			<dl class="cItem clrfix">
				<dt>
					<ul class="clrfix">
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo28.jpg" alt="トレチノイン" loading="lazy"><p class="fsS">トレチノイン</p></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo29.jpg" alt="ハイドロキノン" loading="lazy"><p class="fsS">ハイドロキノン</p></li>
					</ul>
				</dt>
				<dd>
					<p class="mb10">治療部位に色素沈着が生じた場合、色素を薄くする塗り薬を処方することも可能です。<br>
				このお薬は、シミの治療にも有効です。</p>
				</dd>
			</dl>
		</div>
		<div class="mb20 clrfix">
			<h5 class="labelTitle">→すでにできてしまった傷跡を目立たなくする方法④：修正手術</h5>
			<p>
				刺青及び皮膚を取ることを最優先に手術をするため、手術後、縫合部に凹み・膨らみ・固い所などが生じたり、部分的に傷口が太く伸びるところがでてくることもございます。その場合、ご希望があれば部分的な修正手術を行うことも可能です。　※別途症状により再お見積りとなります。
			</p>
		</div>


	</section>



	<section class="secBox" id="toc4">
		<h2 class="baseTitle">タトゥー除去治療の流れ</h2>
		<h3 class="subTitle" id="toc4-1">刺青除去 カウンセリング～お帰りになるまでの全体の流れ</h3>
		<div class="treatment mb30">
			<div class="container">
				<h3 class="section_title">施術の流れ</h3>
				<ul>
					<li>
						<div class="num"><span>01</span>カウンセリング</div>
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/treatment_01.jpg" alt="01 カウンセリング" loading="lazy" width="187" height="120"></div>
						<p>当院では、必ず最初に、カウンセリングをします。女性カウンセラーが担当しますので、男性の医師には聞きづらいことなどなんでもお尋ね下さい。 手術の流れ、術後の経過や日常生活の過ごし方など詳しくご説明します。</p>
					</li>
					<li>
						<div class="num"><span>02</span>診察</div>
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/treatment_02.jpg" alt="02 診察" loading="lazy" width="187" height="120"></div>
						<p>医師がタトゥーの入っている場所の確認をし、どの程度皮膚が伸びるか診断を行います。そして、手術が可能かどうか、また手術回数を決めていき治療計画を立てていきます。<br>
							患者様へは診察後すぐに治療計画・料金・手術回数を明確にお伝えしております。</p>
					</li>
					<li>
						<div class="num"><span>03</span>手術</div>
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/treatment_03.jpg" alt="03 手術" loading="lazy" width="187" height="120"></div>
						<p>手術をご希望の場合は、手術日のお申し込み・同意書のご記入・支払い方法の決定を行います。<br>
							予約状況によってはカウンセリング当日にそのまま治療も承れる場合もございます。</p>
					</li>
					<li>
						<div class="num"><span>04</span>包帯外し<br>抜糸</div>
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/treatment_04.jpg" alt="04 包帯外し・抜糸" loading="lazy" width="187" height="120"></div>
						<p>手術から3日目に包帯外し、手術から7－10日目に抜糸を行います。抜糸は、強い痛みはありませんのでご安心下さい。<br>お仕事などがある方は、包帯外しはご来院いただかなくても大丈夫です。</p>
					</li>
					<li>
						<div class="num"><span>05</span>経過診察</div>
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/treatment_05.jpg" alt="05 経過診察" loading="lazy" width="187" height="120"></div>
						<p>傷の状態などを確認し傷が太くならないように処置を適切に行っていきます。<br>また分割切除の方には次の手術がいつ可能になるのか皮膚の伸びの確認を行います。</p>
					</li>
				</ul>
			</div>
		</div>
<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>


		<h3 class="subTitle" id="toc4-2">刺青除去手術の詳しい流れ</h3>
		<div class="treatment2 mb20">
			<ul class="mb20">
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/step1_ic.png" loading="lazy" alt="STEP1 診断・カウンセリング"></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/step2_ic.png" loading="lazy" alt="STEP2 デザイン"></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/step3_ic.png" loading="lazy" alt="STEP3 皮膚切除"></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/step4_ic.png" loading="lazy" alt="STEP4 縫合"></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/step5_ic.png" loading="lazy" alt="STEP5 術後のテーピング"></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/step6_ic.png" loading="lazy" alt="STEP6 10日後の抜糸"></li>
			</ul>
			<img class="hp_imgCenter" src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/flow_detail.png" alt="施術の詳しい流れ" width="690" height="788" loading="lazy">
		</div>
	</section>

	<section class="secBox" id="toc6">
		<h2 class="baseTitle">刺青・タトゥー除去　症例写真</h2>
		<div>
			<h3 class="subTitle" id="toc6-1">左上腕・右上腕のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
					比較的きれいになりやすい部位です。<br>
					細いラインの場合、一度での除去が可能です。<br>
					日常生活に支障が少ない部位です。<br>
					大きなデザインの場合、皮膚に余裕がないため除去が難しく分割切除になりやすい。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider1">
				<ul class="slides mb20">
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo05_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo05.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo06_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">1回の切除</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo06.jpg" alt="1回の切除" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0101_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0101.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0102_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0102.jpg" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0103_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0103.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0104_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0104.jpg" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0105_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0105.jpg" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0106_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0106.jpg" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0107_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0107.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0108_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0108.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0109_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0109.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0110_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0110.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0111_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0111.jpg" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0112_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0112.jpg" alt="3回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0113_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0113.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0114_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0114.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の単純切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0115.jpg" alt="1回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0116_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0116.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>

		<div>
			<h3 class="subTitle" id="toc6-2">左前腕・右前腕のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
				手首の手術は、胸や背中に比べるとケロイドになりにくく、傷跡がきれいになりやすい部位です。<br>
				しかし、術後3日程度が手がむくみやすくなります。指輪などはお控えください。<br>
				手首付近は皮膚に余裕がないため比較的小さくしか皮膚を切除できません。<br>
				そのため、分割切除になりやすい部位です。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider2">
				<ul class="slides mb20">
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除で完了</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo11.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo12_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">1回の切除で完了</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo12.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0401.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0402_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0402.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0403_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0403.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0404_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0404.jpg" alt="3回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0405_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0405.jpg" alt="3回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0406_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0406.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0407_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0407.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0408_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0408.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0409_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0409.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>


		<div>
			<h3 class="subTitle" id="toc6-3">手の甲や指のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
					手や指は血行が良いため、傷がきれいになりやすい部位です。<br>
					しかし、抜糸までの10日間は、手をぎゅっと握ることができません。<br>
					ペンを握ったりすることも難しくなります。<br>
					長期的なお休みを取れる方が、お勧めです。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider3">
				<ul class="slides mb20">
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo13_thumb.jpg" loading="lazy" width="485" height="176">
						<div class="mb20">
							<h4 class="labelTitle">1回の切除で完了</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo13.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo14_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">1回の切除で完了</h4>
							<ul class="mphList">
								<li><img src="/wp-content/uploads/2021/03/img_tattoo14.jpg" alt="1回の切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0501_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0501.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0502_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除予定</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0502.jpg" alt="2回の分割切除予定" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0503_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0503.jpg" alt="1回の切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>


		<div>
			<h3 class="subTitle" id="toc6-4">胸部のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
					女性の場合、胸には皮膚のゆとりがあるため比較的大きなデザインも除去可能となります。<br>
					日常生活に支障も少なく、治療中の生活がしやすいのが良い点です。<br>
					また服を着ると治療中なのが分からないのも良い点ですが、胸は非常にケロイドになりやすい部位です。<br>
					術後の傷跡ケアが非常に大切になります。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider4">
				<ul class="slides mb20">
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo15_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除で完了</h4>
							<ul class="mphList">
								<li><img src="/wp-content/uploads/2021/03/img_tattoo15.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo16_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除で完了</h4>
							<ul class="mphList">
								<li><img src="/wp-content/uploads/2021/03/img_tattoo16.jpg" alt="2回の切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0702_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割予定　1回目の手術後</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0601.jpg" alt="2回の分割予定　1回目の手術後" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0602_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0602.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0603_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0603.jpg" alt="3回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0604_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割予定</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0604.jpg" alt="2回の分割予定" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0605.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0606_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0606.jpg" alt="1回の切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0607_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0607.jpg" alt="1回の切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0608_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0608.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0609_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0609.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0610_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0610.jpg" alt="1回の切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0611_thumb.jpg" >
						<div class="mb20">
							<p class="labelTitle">1回の切除</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0611.jpg" alt="1回の切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>

		<div>
			<h3 class="subTitle" id="toc6-5">腹部・腰のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
					腰は、皮膚にゆとりがあるため、比較的大きなデザインを除去することが可能です。<br>
					日常生活においても、支障が少ない部位ですから、仕事をしていても大丈夫。<br>
					ただし、抜糸が終わるまでのあいだ、患部が濡らせないため、入浴することができなくなります。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider5">
				<ul class="slides mb20">
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo09_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo09.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo10_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除</h4>
							<ul class="mphList">
								<li><img src="/wp-content/uploads/2021/03/img_tattoo10.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0301_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0301.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0302_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">3回の分割予定</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0302.jpg" alt="3回の分割予定" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0303_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0303.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0304_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0304.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0305_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除予定</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0305.jpg" alt="2回の分割切除予定" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0306_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除予定</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0306.jpg" alt="2回の分割切除予定" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0307_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">1回の切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0307.jpg" alt="1回の切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>

		<div>
			<h3 class="subTitle" id="toc6-6">背中のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
					腰回りの場合、比較的大きなデザインも除去可能です。<br>
					背中上部の場合、伸縮しやすい部位のため傷が目立ちやすい部位です。<br>
					治療期間中、極端に背中を丸めたりはしないでください。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider6">
				<ul class="slides mb20">
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo07_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">4回の分割切除で完了</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo07.jpg" alt="4回の分割切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo08_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">4回の分割切除で完了</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo08.jpg" alt="4回の分割切除で完了" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0201.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0202_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0202.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0203_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0203.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0204_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0204.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0205_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0205.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0206_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">4回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0206.jpg" alt="4回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0207_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0207.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0208_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0208.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0209_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">4回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0209.jpg" alt="4回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0210_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0210.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0211_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0211.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0212_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0212.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0213_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除で完了</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0213.jpg" alt="2回の分割切除で完了" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>

		<div>
			<h3 class="subTitle" id="toc6-7">太もも・足のタトゥー・刺青除去　症例写真</h3>
			<dl class="feature mb20">
				<dt class="bold">●特徴</dt>
				<dd>
					太ももは大きなサイズの除去が可能で、しかも治療中であることがばれにくく日常生活にも支障が出ずらい部位です。<br>
					そのため、比較的術後の通院が楽なのが特徴です。<br>
					また、傷も比較的きれいになりやすい部位です。<br>
					※ただし、太もも全体に入った刺青を除去することはできません。<br>
					<br>
					足くびは、皮膚にゆとりがないため小さなデザインのものしか除去できません。<br>
					また、足くびはむくみやすく、治療中歩きづらくなります。<br>
					※走るのは厳禁です。<br>
					そのため、1週間ほどお休みを取れるときの治療をお勧めいたします。
				</dd>
			</dl>
			<p>以下の写真を押すと、詳細な解説・料金などが表示されます。</p>
			<div class="flexslider flexslider7">
				<ul class="slides mb20">
					<li data-thumb="/wp-content/uploads/2021/03/img_tattoo18_thumb.jpg">
						<div class="mb20">
							<h4 class="labelTitle">2回の分割切除</h4>
							<ul class="mphList">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/img_tattoo18.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176">

								</li>
							</ul>
						</div>
					</li>
					<li data-thumb="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">※足の部分のみの除去をご希望</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0701.jpg" alt="足の部分のみの除去をご希望" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0702_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割予定　1回目の手術後</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0702.jpg" alt="2回の分割予定　1回目の手術後" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0703_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割予定　1回目の手術後</p>
							<p class="textC"><img src="/wp-content/uploads/2021/03/im_case0703.jpg" alt="2回の分割予定　1回目の手術後" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
					<li data-thumb="/wp-content/uploads/2021/03/im_case0704_thumb.jpg">
						<div class="mb20">
							<p class="labelTitle">2回の分割切除</p>
							<p class="textC"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/im_case0704.jpg" alt="2回の分割切除" loading="lazy" width="485" height="176"></p>

						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="w960" id="toc7">
		<h2 class="baseTitle mb30">刺青・タトゥー除去手術のＱ＆Ａ</h2>
		<h3 class="section_title">よくあるご質問</h3>
		<dl id="qa">
			<dt id="toc7-1">未成年の場合でも治療できますか？</dt>
			<dd>保護者の同意があれば治療可能です。<br> カウンセリング時、必ず保護者の方と同伴ください。
				<br> カウンセリングの内容に同意いただければそのまま治療のお申込みが可能でございます。
			</dd>
			<dt id="toc7-2">保険適用治療はできますか？</dt>
			<dd>自由診療になりますので、保険は適用できかねます。</dd>
			<dt id="toc7-3">なぜレーザー除去を行っていないのですか？</dt>
			<dd>当院ではお金をお支払いいただくからには必ず取りきるという治療方針でございます。<br> しかし、レーザーの場合は薄くなっても消えなかったり、ケロイド状に形が盛り上がりそのまま残ってしまったりするため、これでは取り切れたとは言えません。刺青除去をご希望される方は、「そもそも刺青とわかる跡が残ってしまうのでは全く意味がない」 というご事情の方ばかりのため当院では、傷が残っても取り切れる手術のみのご案内をさせていただいております。
				<div class="clrfix"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/bodyline_qa01.png" alt="レーザー除去" width="33%" height="auto"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/bodyline_qa02.png" alt="レーザー除去" width="33%" height="auto"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/bodyline_qa03.png" alt="レーザー除去" width="33%" height="auto"></div>
			</dd>
			<dt id="toc7-4">手術できない場所はありますか？</dt>
			<dd>手術をするには切除して皮膚を寄せて縫い合わせる必要がございます。そのため皮膚を寄せられない（寄せずらい）場所は手術が難しくなります。たとえば、手の指・足の指・足首などは皮膚の余裕がなく手術が難しい部位となります。また、背中全体を覆うような刺青の場合は、切除しても皮膚を寄せることができないため、手術することができません。</dd>
			<dt id="toc7-5">手術は痛いですか？</dt>
			<dd>手術自体は、局所麻酔となりますので手術中は触られている感覚は伝わりますが、痛みは感じません。<br> 手術後、３～４時間ほどで麻酔が切れてきますが、痛みというよりは皮膚を寄せているツッパリ感が気になるかもしれません。念のため痛み止め３日分をお渡しいたしております。
			</dd>
			<dt id="toc7-6">手術後気を付けることはありますか？</dt>
			<dd>手術してから抜糸までの間、手術したところは濡らすことができません。お風呂には手術翌日から入れますが、手術部位を濡らさないように気を付けて入ってください。</dd>
			<dt id="toc7-7">足の手術をした場合に気を付けることはありますか？</dt>
			<dd>歩くことはできますが、走ったりはしないようにしてください。また、足はむくみやすい部位なので、寝るときは少し足を上げて高くして寝ていただくと楽になるかと思われます。階段も極力使用せず、エレベータをご利用ください。</dd>
			<dt id="toc7-8">手の手術をした場合に気を付けることはありますか？</dt>
			<dd>手を濡らすことができなくなります。そのためお風呂に入るときはビニール袋に手を入れて濡らさないように入ってください。また、手を包帯で巻くことになりますので、バイクや車などの運転ができなくなります。特に利き腕の手の手術をされるとペンも持ち辛くなるためお仕事にも支障がきたします。<br> １～２週間お休みを取れるときに治療をされることをお勧めいたします。
			</dd>
			<dt id="toc7-9">同時に複数の箇所の刺青除去手術はできますか？</dt>
			<dd>体の部位が異なれば２か所程度まで同時に手術が可能です。ただし、体内に注射する局所麻酔量に限界がありますため、1か所の刺青が大きい場合に２か所目を手術できない可能性もございます。</dd>
		</dl>
	</section>

<section class="secBox" id="toc8">
		<h2 class="baseTitle">その他のタトゥー・刺青除去術について</h2>

		<h3 class="subTitle" id="toc8-2">レーザー治療（医療機関）</h3>
<h4 class="subTitle">●傷跡が残らないが、効果がないことも</h4>

<p>レーザーを照射しタトゥーで色が入っている細胞を壊死させることで、タトゥーの色味を薄くする治療法です。</p><p>治療には輪ゴムでパチンとはじいた時のような小さい痛みがあります。</p><p><span class="att"><strong>皮膚を切除する必要がなく、傷跡ができることはありません。</strong></span></p><p>
ただし、黒や茶色など濃い色のタトゥーには効果がありますが、赤や黄色などの明るい色などにはほとんど効果がありません。</p><p>また、手掘りのタトゥーや複数回タトゥーを行っている場合などは効果が出にくいことがあります。</p><p>個人差がありますが、効果が現れるまで何度かレーザーを照射する必要があります。</p>

<h4 class="subTitle">●エステサロンでのレーザー治療は危険</h4>
<p>タトゥー除去のためのレーザー治療は、医療機関で行う施術です。</p><p>しかし、エステサロンでレーザー治療を受け、ひどい火傷やケロイドになってしまい当院を受診された方もいらっしゃいます。</p><p>適切な処置ができないエステサロンでのタトゥー除去は、おすすめできません。</p>


		<h3 class="subTitle" id="toc8-1">皮膚移植手術による手術</h3>
<h4 class="subTitle">●皮膚切除法、レーザー治療ができない場合に適用される</h4>

<p>皮膚切除で皮膚を寄せて縫うことが難しい場合に、体の他の場所から持ってきた皮膚を薄く引き伸ばし縫い付ける方法です。</p><p>ティッシュエキスパンダー法ともいわれています。</p><p>
手首部分や耳の後ろなど、<span class="att"><strong>皮膚のゆとりがない部分の刺青を切除する場合に行います</strong></span>。</p><p>貼り合わせる皮膚はなるべく体の近い場所が定着しやすいですが、広範囲の皮膚が必要な場合などはお尻や内太ももなどの皮膚にゆとりのある部分から取り出します。</p><p>レーザー治療もできず、皮膚を寄せて縫うことができない箇所でも可能な治療法です。</p><p>
しかし移植し新しく貼り付けた皮膚を壊死させないために、<span class="att"><strong>1か月は絶対安静など術後の生活への影響が大きいというデメリット</strong></span>があります。</p><p>また、貼り付けるために健康な皮膚を切除するため、体に2か所の傷を作ってしまいます。</p><p>また、貼り付ける皮膚が大きい場合は、<span class="att"><strong>入院する必要があります</strong></span>ので医師にご相談ください。</p>

		<h3 class="subTitle" id="toc8-3">アブレーション手術による手術</h3>
<h4 class="subTitle">●指の甲や耳タブなど皮膚のタトゥーで適用</h4>


<p>削皮（さくひ）と呼ばれる指の甲や耳タブなど皮膚を縫い合わせることが出来ない場所にタトゥーがある場合、皮膚を削ることでタトゥーを除去する方法です。</p><p>グラインダーにて皮膚を物理的に削っていく方法と炭酸ガスレーザー（ＣＯ２レーザー）により蒸散させて皮膚を削る方法の2種類あります。</p><p>
この方法は、広範囲のタトゥーに対して行うと火傷のような大きなケロイドが面上に広がりフランスパンのように皮膚が固くなってしまいます。</p><p>治療後の皮膚の状態がとても悪いため、<span class="att"><strong>
どうしても皮膚切除もレーザー除去もできない場合の最終手段</strong></span>となります。</p>


<h3 class="subTitle" id="toc8-4">タトゥー除去は皮膚切除術がおすすめ</h3>
<p>当院では、確実にタトゥーを除去できる皮膚切除術を推奨しています。</p><p>手術後の傷跡に関してはレーザーや内服薬によるアフターケアまでしっかり対応させていただきます。</p><p>タトゥーを除去したいと少しでもお考えの方は、カウンセリングは無料で行っていますので、お気軽にお問合せください。</p>

<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>


	<section class="secBox"  id="toc10">
		<h2 class="baseTitle">院長 鈴木栄樹からのご挨拶</h2>
		<div class="doctor_r">
			<picture><source srcset="/wp-content/uploads/2021/03/doctor_r.jpg.webp" type="image/webp"><img class="right sp" src="/wp-content/uploads/2021/03/doctor_r.jpg" alt="院長　鈴木 栄樹" loading="lazy" width="258" height="354"></picture>
			<div class="left">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/bodyline/main_copy.png" alt="若いときにいれてしまったタトゥー。すっきり切り取って人生のニューステージへ" class="mb10" width="490" height="auto">
				<p class="txt">
					若い時に勢いで入れてしまった刺青やタトゥー・・・<br>
					プールや温泉に入れない時やお子さんができて周りの親御さんの目が気になる時など年齢を重ねるにつれてタトゥー・刺青を取りたいという方が増えてきます。<br><br>
					刺青を入れるときは、アッという間に入れられて数万円という手軽さにその場の勢いで入れてしまう方もいらっしゃるようです。しかし本当は刺青は民間施設での施術の為滅菌処理が十分に行えず感染症にかかってしまう恐れがあり、非常に注意と覚悟が必要な施術となります。<br>
					近年、就職難などものあり非常に多くの方が刺青を消したいと当院にご相談にいらっしゃいます。医師とよくご相談の上、治療方針や計画をしっかりたてて治療していくことをお勧めいたします。
				</p>
				<div class="profile clrfix">
					<ul class="mb20">
						<li>
							日本美容外科学会正会員・認定医<br>
							日本美容外科医師会正会員<br>
							日本抗加齢医学正会員
						</li>
						<li>
							95年　　 聖マリアンナ医科大学卒業<br>
							95-97年　同大学麻酔科勤務<br>
							97-02年　大手美容外科勤務のちに、分院院長歴任<br>
							03-06年　医療法人博済会鈴木病院 美容外科外来開設<br>
							06年　　 池袋サンシャイン美容外科開設<br>
							09年　　 医療法人社団 栄真会 開設
						</li>
					</ul>
				</div>
			</div>
			<picture><source srcset="/wp-content/uploads/2021/03/doctor_r.jpg.webp" type="image/webp"><img class="right pc" src="/wp-content/uploads/2021/03/doctor_r.jpg" alt="院長　鈴木 栄樹" loading="lazy" width="258" height="354"></picture>
		</div>
	</section>

	<section class="secBox" id="toc11">
			<div class="blogRanking">
				<h4>タトゥー除去・刺青除去治療のブログランキング</h4>
				<ul>
					<li><span style="background-color: #FF93A6;">1</span><a href="/blogs/tatoo/demerit-tatoo/" target="_blank" rel="noopener noreferrer">タトゥーや刺青（入れ墨）のデメリット｜日本で受け入れられない理由と病院での除去</a></li>
					<li><span style="background-color: #F39800;">2</span><a href="/blogs/tatoo/tatoo-regret/" target="_blank" rel="noopener noreferrer">【お悩み解決】タトゥーを入れて後悔したときに行う対処法｜刺青・入れ墨も</a></li>
					<li><span style="background-color: #70cdde;">3</span><a href="/blogs/tatoo/itami/" target="_blank" rel="noopener noreferrer">タトゥー除去には痛みがともなう？ダウンタイムや治療にかかる期間をご紹介</a></li>
				</ul>
			</div>
	</section>

</div>


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

<?php get_footer(); ?>