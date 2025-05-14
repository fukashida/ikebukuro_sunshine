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

<div id="pageTitle" class="mwlift">
<h1>MWデュアルリフトによるリフトアップ</h1>
<p>たるんだ皮膚をしっかり引き上げ、<br>持続性に優れた糸によるリフトアップ<br><span class="price-setting">片方3本<span class="small">(合計6本)</span>　<span class="fee">220,000円</span></span></p>
</div>

<section class="secBox mwlift-new">
	<section class="secBox top-menu">
		<div class="topNav">
			<ul>
				<li class="heightAjst"><a href="#toc2">MWデュアル<br>リフトとは</a></li>
				<li class="heightAjst"><a href="#toc3">料金について</a></li>
				<li class="heightAjst"><a href="#toc4">症例写真</a></li>
				<li class="heightAjst"><a href="#toc8">施術の流れ</a></li>
				<li class="heightAjst"><a href="#toc6">よくある<br>ご質問</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
			</ul>
		</div>
	</section>

	<section class="case-photo">
		<h2 class="lineTitle ">MVデュアルリフト症例写真</h2>
		<div class="case-photo-list">
		<div class="c-photo">
			<h3>30代女性</h3>
			<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image01.png" alt="たるみのリフトアップ症例写真" loading="lazy" width="520" height="208">
		</div>
		<div class="c-photo">
			<h3>40代男性</h3>
			<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image02.png" alt="男性のたるみのリフトアップ症例写真" loading="lazy" width="520" height="208">
		</div>
		<div class="c-photo">
			<h3>70代女性</h3>
			<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image03.png" alt="女性のたるみのリフトアップ症例写真" loading="lazy" width="520" height="208">
		</div>
		</div>
		<div class="internal-link"><a href="#toc4">詳細はこちら</a></div>
	</section>

	<section id="toc2" class="clr bg-mwlift-wallpaper">
		<h2 class="lineTitle">ＭＷデュアルリフトとは</h2>
		<div class="flex-box">
		<div class="box-left">
			<h3 class="ttl">体内に吸収される特殊な糸で<br>気になる部分を引き上げる<br>切らないフェイスリフト</h3>
			<p class="pc">
			ＭＷデュアルリフトとは、生体分解ポリマーで作られた<span class="att">体内に吸収される特殊な糸</span>をたるみが気になる箇所・リフトアップしたい箇所に挿入し、糸についたコグ（トゲ）により、<span class="att">物理的に引き上げる、メスを使わない</span>（切らない・縫合・抜糸もなし）フェイスリフト治療です。<br>
			片側の頬に１度で３本の糸を使用しますが、約１８か月前後で完全に吸収されます。糸は吸収されますが、吸収された後でも糸を挿入した部分には<span class="att">コラーゲン生成が促進</span>されるため、<span class="att">リフトアップ効果</span>の維持・<span class="att">肌質改善</span>を継続的に行うことが可能です。<br>
			※たるみが無くなることで小顔効果もこざいます。<br>
			施術後の傷跡は、もみあげや髪の毛の生え際から糸を挿入する為、糸の入り口はとても目立ちにくいのもお勧めの点です。
			</p>

		<div class="grad-wrap sp">
		    <input id="trigger1" class="grad-trigger" type="checkbox">
		    <label class="grad-btn" for="trigger1"></label>
		    <div class="grad-item">ＭＷデュアルリフトとは、<span class="att">体内に吸収される特殊な糸</span>を頬に挿入し気になる部分を引き上げる、<span class="att">メスを使わない</span>（切らない・縫合・抜糸もなし）フェイスリフト治療です。<br>
			２本の引き上げる糸と、その引き上げた皮膚を固定する糸の合計３本を片ホホに挿入し<em>リフトアップ</em>を行います。<br>
			<em>リフトアップ</em>に使用する糸は生体分解ポリマーからできており、溶けてなくなってしまうため大きな合併症がありません。<br>
			１度に３本の糸を使用しますが、約１８か月間前後で完全に吸収されます。<br>
			ただし、糸が吸収された後でも周囲のコラーゲン生成促進がされるため、肌質改善や効果の持続を行うことが可能です。<br>
			糸は、もみあげや髪の毛の生え際から挿入する為、糸の入り口はとても目立ちにくいのもお勧めの点です。<br>
			<br>
			鏡で頬の皮膚の引きあがり具合を患者様ご自身でご確認いただきながら、理想的な引きあがりを行います。<br>
			その為、自然な<em>リフトアップ</em>をご希望の方にも、思いっきり引き上げたい方にも<span class="att">細かにご希望を伺うことが可能となります。</span><br>
			皮膚を切らない（切除しない)施術の為、顔に傷跡も残らなず、ダウンタイムもほとんどありません。<br>
			そして、物理的に引き上げるため<span class="att">即効性がある</span>ことが特徴です。<br>
			ハレや内出血も少ないため、術後お化粧をして普通におかえりいただく事が可能です。</div>
		</div>
	</div>
		<div class="box-right" style="text-align: center;">
			<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image04.png" alt="ＭＷデュアルリフトとは" width="300" height="308" loading="lazy">
		</div>
	</div>
		<h3 class="ttl">ＭＷデュアルリフトの特徴</h3>
		<div class="features">
			<div class="features-left">
				<p>特徴<span class="big">1</span></p>
			</div>
			<div class="features-center">
				<h3><span class="att">施術中</span>に頬の<span class="att">引きあがり具合</span>を<br><span class="att">確認</span>できます。</h3>
				<p class="pc">施術は、患者様が起きている状態で行います。<br>
					そのため患者様は糸を入れていく段階で頬の引き上がりがどれくらいか<span class="att">患者様ご自身</span>で確認いただくことができるため、より<span class="att">理想のリフトアップ・たるみ解消</span>が行えます。</p>
				<div class="grad-wrap sp">
				    <input id="trigger2" class="grad-trigger" type="checkbox">
				    <label class="grad-btn" for="trigger2"></label>
				    <div class="grad-item">そのため患者様は糸を入れていく段階で頬の引き上がりがどれくらいか<span class="att">患者様ご自身</span>で確認いただくことができるため、より<span class="att">理想のリフトアップ・たるみ解消</span>が行えます。</div>
				</div>
			</div>
			<div class="features-right">
				<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image05.png" alt="頬の引きあがり具合を確認できる" loading="lazy" width="280" height="226">
			</div>
		</div>
		<div class="features">
			<div class="features-left">
				<p>特徴<span class="big">2</span></p>
			</div>
			<div class="features-center">
				<h3>従来の素材に比べ、<span class="att">約3倍効果<br>が持続</span>します。</h3>
				<p class="pc">ＭＶデュアルリフトにて使用する糸（吸収糸）。<br>
					従来の糸の場合、皮膚をつかむコグ（トゲ）が小さく立体的では無いため、十分な引き上げが行えず、また約１年程度で吸収されるものでした。<br>
					それに比べて、ＭＶデュアルリフトは立体的なコグ（トゲ）が大きいため、<span class="att">皮膚をしっかりとつかむことができ、頬を物理的に持ち上げリフトアップすることが可能</span>です。また、ＰＣＬという医療用素材で約２年かけて吸収されるため<span class="att">効果が長持ち</span>します。<br>
					<span class="att">持続力（キープ力）を高めつつ、自然にリフトアップを実現</span>させるために、形状の異なる糸を複数入れることで、細かくリフトアップする糸とその皮膚を固定させる意図を使い分けることで今まで以上に<span class="att">自然なリフトアップ</span>が可能となりました。
				</p>
				<div class="grad-wrap sp">
				    <input id="trigger3" class="grad-trigger" type="checkbox">
				    <label class="grad-btn" for="trigger3"></label>
				    <div class="grad-item">ＭＶデュアルリフトにて使用する糸（吸収糸）。<br>
				    	それに比べて、ＭＶデュアルリフトは立体的なコグ（トゲ）が大きいため、<span class="att">皮膚をしっかりとつかむことができ、頬を物理的に持ち上げリフトアップすることが可能</span>です。また、ＰＣＬという医療用素材で約２年かけて吸収されるため<span class="att">効果が長持ち</span>します。<br>
					<span class="att">持続力（キープ力）を高めつつ、自然にリフトアップを実現</span>させるために、形状の異なる糸を複数入れることで、細かくリフトアップする糸とその皮膚を固定させる意図を使い分けることで今まで以上に<span class="att">自然なリフトアップ</span>が可能となりました。</div>
				</div>
			</div>
			<div class="features-right">
				<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image06.png" alt="約3倍効果が持続" loading="lazy" width="280" height="226">
				<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image07.png" alt="形状の異なる糸" loading="lazy" width="280" height="226">
			</div>
		</div>
		<div class="features">
			<div class="features-left">
				<p>特徴<span class="big">3</span></p>
			</div>
			<div class="features-center">
				<h3><span class="att">傷跡</span>も<span class="att">ダウンタイム</span>もほぼ無く、<br><span class="att">即効性</span>があります。</h3>
				<p class="pc">ＭＶデュアルリフトは<span class="att">メス</span>を<span class="att">一切使いません。</span><br>
					皮膚を切らないので、顔に<span class="att">傷跡</span>も<span class="att">残らず</span>、<span class="att">ダウンタイム</span>もほとんど<span class="att">ありません。</span>また、意図を挿入する際も皮下組織・血管や神経を傷つけにくいため、<span class="att">内出血</span>が起こる<span class="att">リスクも少ない</span>します。
				</p>
				<div class="grad-wrap sp">
				    <input id="trigger4" class="grad-trigger" type="checkbox">
				    <label class="grad-btn" for="trigger4"></label>
				    <div class="grad-item">ＭＶデュアルリフトは<span class="att">メス</span>を<span class="att">一切使いません。</span><br>皮膚を切らないので、顔に<span class="att">傷跡</span>も<span class="att">残らず</span>、<span class="att">ダウンタイム</span>もほとんど<span class="att">ありません。</span>また、意図を挿入する際も皮下組織・血管や神経を傷つけにくいため、<span class="att">内出血</span>が起こる<span class="att">リスクも少ない</span>します。</div>
				</div>
			</div>
			<div class="features-right">
				<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image08.png" alt="傷跡も残らない" loading="lazy" width="280" height="226">
			</div>
		</div>
		<div class="features">
			<div class="features-left">
				<p>特徴<span class="big">4</span></p>
			</div>
			<div class="features-center">
				<h3>傷跡もダウンタイムもほぼ無いため、<br><span class="att">術後すぐメイク</span>することが<span class="att">可能</span>です。</h3>
				<p class="pc">術後に傷跡や腫れ、内出血を起こしてしまうと術後のメイクを控えていただく必要があります。ですが<span class="att">ＭＶデュアルリフト</span>の場合、そういったリスクが非常に少ないため、<span class="att">術後すぐメイク</span>していただきそのままお出掛けしていただくことが可能です。
				</p>
				<div class="grad-wrap sp">
				    <input id="trigger5" class="grad-trigger" type="checkbox">
				    <label class="grad-btn" for="trigger5"></label>
				    <div class="grad-item">術後に傷跡や腫れ、内出血を起こしてしまうと術後のメイクを控えていただく必要があります。ですが<span class="att">ＭＶデュアルリフト</span>の場合、そういったリスクが非常に少ないため、<span class="att">術後すぐメイク</span>していただきそのままお出掛けしていただくことが可能です。</div>
				</div>
			</div>
			<div class="features-right">
				<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image09.png" alt="術後すぐメイクが可能" loading="lazy" width="280" height="226">
			</div>
		</div>
		<h3 class="ttl">ＭＷデュアルリフトの適応部位と効果</h3>
		<p class="pc"><img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image10.png" alt="適応部位" loading="lazy" width="917" height="345"></p>
		<p class="pc"><img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image11.png" alt="効果" loading="lazy" width="917" height="345"></p>
		<p class="sp"><img src="/wp-content/uploads/2021/02/SP_ISC_mwr_image10.png" alt="適応部位" loading="lazy" width="550" height="404"></p>
		<p class="sp"><img src="/wp-content/uploads/2021/02/SP_ISC_mwr_image11.png" alt="効果" loading="lazy" width="550" height="404"></p>
	</section>
	<section id="toc3" class="clr">
			<h2 class="lineTitle">料金</h2>
			<div class="flex-box">
				<div class="box-left">
					<img class="pc" src="/wp-content/themes/ikebukuro_sunshine//img/operations/mwlift/PC_ISC_mwr_image12.png" alt="料金について" loading="lazy">
					<img class="sp" src="/wp-content/uploads/2021/02/SP_ISC_mwr_image12.png" alt="料金について" loading="lazy">
				</div>
				<div class="box-right">
					<table class="price-table">
						<tbody>
							<tr>
								<th>片方3本（合計6本）</th>
								<td>￥220,000</td>
							</tr>
							<tr>
								<th>片方5本（合計10）</th>
								<td>￥275,000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>

	<section id="toc4" class="clr bg-beige">
			<h2 class="lineTitle">症例写真</h2>
			<div id="case">
				<h3 class="ttl">30代女性</h3>
				<div class="case-img" id="toc5-1">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image01.png" alt="たるみのリフトアップ症例写真" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<p class="label">＜術後の生活＞</p>
						<p>中に入れた糸が定着するまで、ゴシゴシこすらないようにご注意ください。洗顔の際は優しく泡越しに洗ってください。治療当日からお化粧をしてお帰り頂けます。</p>
						<hr class="white-line">
						<p class="label">＜リスク＞</p>
						<ul>
							<li>局所麻酔による口元の違和感。（３時間ほどで解消）</li>
							<li>引き上げによる左右感、引きつれ感、違和感。</li>
							<li>稀にむくみ、内出血など。</li>
						</ul>
					</div>
				</div>
				<h3 class="ttl">40代男性</h3>
				<div class="case-img" id="toc5-2">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image02.png" alt="男性のたるみのリフトアップ症例写真" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<p class="label">＜術後の生活＞</p>
						<p>中に入れた糸が定着するまで、ゴシゴシこすらないようにご注意ください。洗顔の際は優しく泡越しに洗ってください。治療当日からお化粧をしてお帰り頂けます。</p>
						<hr class="white-line">
						<p class="label">＜リスク＞</p>
						<ul>
							<li>局所麻酔による口元の違和感。（３時間ほどで解消）</li>
							<li>引き上げによる左右感、引きつれ感、違和感。</li>
							<li>稀にむくみ、内出血など。</li>
						</ul>
					</div>
				</div>
				<h3 class="ttl"><span>70</span>代女性</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/02/PC_ISC_mwr_image03.png" alt="女性のたるみのリフトアップ症例写真" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<p class="label">＜術後の生活＞</p>
						<p>中に入れた糸が定着するまで、ゴシゴシこすらないようにご注意ください。洗顔の際は優しく泡越しに洗ってください。治療当日からお化粧をしてお帰り頂けます。</p>
						<hr class="white-line">
						<p class="label">＜リスク＞</p>
						<ul>
							<li>局所麻酔による口元の違和感。（３時間ほどで解消）</li>
							<li>引き上げによる左右感、引きつれ感、違和感。</li>
							<li>稀にむくみ、内出血など。</li>
						</ul>
					</div>
				</div>
		</section>

	<section id="toc5" class="clr">
		<h2 class="lineTitle">ＭＷデュアルリフトの治療概要</h2>
				<table class="overview">
					<tbody>
						<tr>
							<th>時間</th>
							<td>
								施術自体は約３０分。<br>
								施術前と後に入念な皮膚の持ち上げ具合について、患者様と打ち合わせを行います。
							</td>
						</tr>
						<tr>
							<th>麻酔</th>
							<td>
								局所麻酔。<br>
								治療途中で何度か起き上がっていただいて、リフト具合を確認するため局所麻酔で行っておりますが、<br>
								痛みはほとんどございません。
							</td>
						</tr>
						<tr>
							<th>通院</th>
							<td>基本的に治療は１回きりで終了となりますが、検診の為１週間後と１ヶ月検診をお願いしております。</td>
						</tr>
						<tr>
							<th>リスク・副作用</th>
							<td>
								腫れや痛みは、少ないながらも生じることがあります。<br>
								特に<em>リフトアップ</em>の違和感は慣れるまでは感じることと思います。<br>
								治療当日は強い引きあがり感の為、頬の違和感・ヨレやひきつれがきになったり、<br>
								口が開けづらい感覚が出てまいります。<br>
								１か月程度かけて違和感は軽減されてきますが、頬のマッサージなどをされると固定している糸が<br>
								外れてしまう可能性がありますので、お控えください。<br>
								人により皮膚を触った時、糸の感触を感じる場合がございます。<br>
								手術後１週間程度は、頭皮の糸挿入口に赤い針跡がつきますが、１か月程度で目立たなくなってきます。<br>
								※以上の症状には個人差がありますので、目安としてお考え下さい。
							</td>
						</tr>
						<tr>
							<th>メイク</th>
							<td>
								当日から可能です。<br>
								メイクを落とすときに頬をゴシゴシ洗うと、糸が外れてしまう可能性があるので優しく洗ってください。
							</td>
						</tr>
						<tr>
							<th>入浴・洗髪</th>
							<td>
								洗顔・入浴・シャワーは当日より可能ですが、洗髪は翌日からにされてください。<br>
								髪の毛のカラーリングは１週間程度お控えください。
							</td>
						</tr>
					</tbody>
				</table>
	</section>

	<section id="toc6" class="clr bg-beige">
		<h2 class="lineTitle">よくあるご質問</h2>
		<div id="faq">
			<div class="acbox" id="toc7-1">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>MWデュアルリフトとは？</h3>
				<p>肌に吸収される特殊な糸を利用した、切らない（メスを使用しない）リフトアップ治療です。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-2">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>痛みはありますか？</h3>
				<p>先端が尖っていない針を用いて糸を挿入するため、痛みは少ないです。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-3">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>傷跡は残りますか？</h3>
				<p>挿入痕が目立ちにくい箇所から糸を挿入するため、傷跡は残りづらいです。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-4">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>効果はどのくらい持続しますか？</h3>
				<p>最終的に肌に吸収される糸を使用するため、永続的な効果はありません。<br>
					糸が分解されるまで1年から2年程度と言われています。分解される際にも溶けたコラーゲンが肌を引き締めます。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-5">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>他のリフトアップ治療との違いを教えて下さい。</h3>
				<p>デュアルリフト治療の特長は、従来の糸リフトよりも即効性が高く、持続力があることです。<br>
					またメスで肌を切らず、目立たない箇所に糸を挿入するので、傷跡が残りづらくバレにくいことがあげられます。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-6">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>施術後に気をつけることはありますか？</h3>
				<p>施術後1~2週間程度は、触れると痛みや違和感が生じることがあります。お化粧や洗顔の際は、施術部に優しく触れるようにしましょう。</p>
				</div>
			</div>
		</div>
	</section>



	<section class="secBox clr" id="toc1">
		<h2 class="lineTitle">院長　鈴木栄樹からのご挨拶</h2>
		<div class="doctor_greeting">
				<h3>たるみ・小顔でお悩みでしたら、<br>ぜひ当院へご相談ください。</h3>
				<p class="degree">池袋サンシャイン美容外科 院長 <span class="big">鈴木栄樹</span></p>
				<div class="txt">
					小顔を目指したい２０～３０代の方、お顔のたるみ軽減をしほうれい線や頬のたるみを改善されたい４０代～６０代の方に幅広くご好評をいただいております。<br>
					切ることなく、手軽に<em>リフトアップ</em>が３０分程度の施術で行うことができます。<br>
					一度の施術でほうれい線の軽減・マリオネットラインのたるみ軽減・小顔を一気に解消できる画期的な治療法となります。治療後お鏡にて劇的に改善したことをご確認いただいてからおかえりいただきます。<br>
					内出血や腫れなどもなく、お化粧をしてお帰り頂けることがこの治療の良い点です。<br>
					当院では当日のご予約の上、当日そのまま治療を受けてお帰り頂けます。
				</div>
		</div>
		<div class="doctor_career clrfix">
					<ul>
						<li>
							日本美容外科学会正会員・認定医<br>
							日本美容外科医師会正会員<br>
							日本抗加齢医学正会員
						</li>
						<li>
							95年　　  聖マリアンナ医科大学卒業<br>
							95-97年　同大学麻酔科勤務<br>
							97-02年　大手美容外科勤務のちに、分院院長歴任<br>
							03-06年　医療法人博済会鈴木病院 美容外科外来開設<br>
							06年　　  池袋サンシャイン美容外科開設<br>
							09年　　  医療法人社団 栄真会 開設
						</li>
					</ul>
				</div>


	</section>


	<section id="toc7" class="clr bg-reddish-brown">
		<h2 class="lineTitle" style="color: #fff; border-bottom-color: #fff;">ご来院について当院の特徴</h2>
		<div class="visit">
			<div class="visit-left">
				<p class="ttl">完全予約制</p>
				<p>当院ではご来店のお客様に、お待たせすることがないよう、完全予約制となっております。<br>
					ご来院いただく際はあらかじめお電話いただき日時をご予約の上、お越しくださいませ。</p>
			</div>
			<div class="visit-right">
				<picture><source srcset="/wp-content/uploads/2021/03/PC_ISC_mwr_image17.png.webp" type="image/webp"><img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image17.png" alt="完全予約制" loading="lazy"></picture>
			</div>
		</div>
		<div class="visit">
			<div class="visit-right">
				<p class="ttl">診察当日の手術OK</p>
				<p>診察当日に手術をすることが可能です。手術時間は1時間程度となります。当日に手術をお受けいただき術後すぐにお帰りいただくことが可能です。手術当日から通常の生活をしていただいてかまいません。</p>
			</div>
			<div class="visit-left">
				<picture><source srcset="/wp-content/uploads/2021/03/PC_ISC_mwr_image18.png.webp" type="image/webp"><img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image18.png" alt="手術" loading="lazy"></picture>
			</div>
		</div>
		<div class="visit">
			<div class="visit-left">
				<p class="ttl">休日診察</p>
				<p>土曜・日曜の手術を承っております。仕事でなかなか、平日通院が難しいかたでも、週末治療が可能です。</p>
			</div>
			<div class="visit-right">
				<picture><source srcset="/wp-content/uploads/2021/03/PC_ISC_mwr_image19.png.webp" type="image/webp"><img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image19.png" alt="手術" loading="lazy"></picture>
			</div>
		</div>
		<div class="visit">
			<div class="visit-right">
				<p class="ttl">未成年OK</p>
				<p>当院では、未成年の治療も行っております。頬のたるみを解消したい方はご家族とご相談の上、お越しください。</p>
				<a class="linkBtn02" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer">未成年向けの同意書(PDF)はこちら</a>
			</div>
			<div class="visit-left">
				<picture><source srcset="/wp-content/uploads/2021/03/PC_ISC_mwr_image20.png.webp" type="image/webp"><img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image20.png" alt="手術" loading="lazy"></picture>
			</div>
		</div>
	</section>

	<!-- ご予約から治療までの全体の流れ -->
	<section class="secBox" id="toc8">
		<h2 class="lineTitle">ご予約から治療までの全体のながれ</h2>
		<div class="flow">
			<div class="flow-box">
				<div class="img">
					<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image21.png" alt="予約のお申込み" loading="lazy" width="270" height="196" style="object-fit: fill;">
				</div>
				<div class="txt">
					<p class="ttl">1.予約のお申込み</p>
					<p>
						まずは、お電話かご予約フォームからご来院希望日時をお申し込みください。<br>
						当日のご予約も承っております。<br>
						当日のご予約はお電話にてご予約下さい。<br>
						<br>
						お電話　<a href="tel:0120331244" class="bold">0120-331-244</a><br>
						<a href="/reservation/" class="linkBtn02">　ご予約フォームへの入力はこちら　</a>
					</p>
				</div>
			</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image22.png" alt="カウンセリング" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">2.カウンセリング</p>
						<p>
							当院では、必ず最初に、カウンセリングをします。女性カウンセラーが担当しますので、男性の医師には聞きづらいことなど、何でもお尋ね下さい。 手術の流れ、術後の経過や日常生活の過ごし方など詳しくご説明します。
						</p>
					</div>
				</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image23.png" alt="診察" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">3.診察</p>
						<p>
						患者様お一人お一人のお悩みを丁寧に伺い、最善のアプローチ方法をご提案いたします。<br>
						MWデュアルリフトとヒアルロン酸や筋肉の縮小に作用する薬剤の併用を行うことで、劇的にお顔の若返りも可能です。
						</p>
					</div>
				</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image24.png" alt="リフトアップのデザイン" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">4.リフトアップのデザイン</p>
						<p>
							治療方針が固まればお会計・同意書の記入後、糸を挿入する角度と本数を入念にデザインしながら仕上げていきます。<br>
							患者様ご自身も鏡で一緒にご確認頂き、満足頂けるまで何度もデザイン致します。
						</p>
					</div>
				</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image25.png" alt="施術" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">5.施術</p>
						<p>
							デザイン決定後、施術を実施します。<br>
							お顔に糸を通す際は切開などは致しません。注射針に細い糸を通して皮膚の上面に挿入していきます。傷跡はすぐに塞がりますので、傷口は残りません。
						</p>
					</div>
				</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image26.png" alt="経過診察" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">6.経過診察</p>
						<p>
						約1週間後に仕上がりの確認を行います。<br>
						ご要望に応じて、後から挿入するMWデュアルリフトの糸を追加することも可能です。<br>
						その他、気になることがございましたら、何度でもご相談ください。
						</p>
					</div>
				</div>
		</div>
	</section>
<!--
	<section class="secBox bg-beige" id="toc9">
		<h2 class="lineTitle">こちらもCheck！おすすめの施術</h2>
		<div id="recommended">
			<div class="box">
				<div class="img">
					<img src="/img/operations/mwlift/PC_ISC_mwr_image27.png" alt="Ｐスレッドライト" loading="lazy">
				</div>
				<div class="txt">
					<p class="ttl">Ｐスレッドライト</p>
					<p>
					細いコラーゲンの糸を皮下に網の目状に挿入することで、肌を引締め、肌質を改善する施術です。挿入した糸の周りでは、新たなコラーゲンやエラスチンが生成されるので、肌そのものが若返って、時間とともにハリが出てきます。
					</p>
					<a href="/reservation/" class="linkBtn03">　詳しく見る　</a>
				</div>
			</div>
			<div class="box">
				<div class="img">
					<img src="/img/operations/mwlift/PC_ISC_mwr_image28.png" alt="Ｐスレッド" loading="lazy">
				</div>
				<div class="txt">
					<p class="ttl">Ｐスレッド</p>
					<p>
					糸を皮下に挿入することで、たるみやほうれい線を引き上げる施術です。V字形状の特殊な極細針を刺すだけで糸の挿入ができるので、メスはほとんど使用しません。手軽でダウンタイムがほとんどないのに、直後からリフトアップ効果を実感できます。
					</p>
					<a href="/reservation/" class="linkBtn03">　詳しく見る　</a>
				</div>
			</div>
		</div>
	</section>
 -->
<section id="toc10">
<h3 class="lineTitle">お支払い方法について</h3>
	<div class="payment">

		<div class="payment_box">
			<div class="payment_box_title">現金</div>
			<p>現金でのお支払いが可能です。</p>
		</div>
		<div class="payment_box">
			<div class="payment_box_title">クレジットカード</div>
			<p>
				クレジットカードでのお支払いが可能です。<br>VISA/Mater/UCカードは分割払いも可能です。2回払いは手数料無料です。<br>
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/cdc_ico_01.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/cdc_ico_02.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/cdc_ico_03.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/cdc_ico_04.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/cdc_ico_05.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/cdc_ico_06.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="auto" height="auto">
			</p>
		</div>
		<div class="payment_box">
			<div class="payment_box_title">銀行キャッシュカード</div>
			<p>
				銀行口座から手数料なしの一括引き落としが可能です。<br>
				デビット機能、ゆうちょ銀行や地銀、信用金庫のカードもご利用いただけます。<br>
				特別な事前申請などは必要ございません。<br>
				※ お口座に、残高がないと引き落としができません。
			</p>
		</div>
		<div class="payment_box">
			<div class="payment_box_title">電子マネー</div>
			<p>
				AirPay導入により、電子マネーのご利用も可能です。<br>
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_01.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_02.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_03.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_04.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_05.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_06.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<br>
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_07.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_08.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_09.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_10.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
				<img src="/wp-content/themes/ikebukuro_sunshine//img/operations/skincare/dm_ico_11.png" alt="電子マネー利用可能" loading="lazy" width="auto" height="auto">
			</p>
		</div>
		<div class="payment_box">
			<div class="payment_box_title">医療ローン</div>
			<p>
				6万円以上の場合、患者様ご指定口座からの分割引き落としを行うことが可能です。<br>
				身分証明書をご提示の上、必要書類にご記入いただきます。<br>
				分割回数・金額を自由にご選択いただけます。途中解約も可能です。
			</p>
		</div>
	</div>
	</section>
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

<?php get_footer(); ?>