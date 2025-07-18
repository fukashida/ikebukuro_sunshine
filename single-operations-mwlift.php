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
<main id="mwlift">
<!--/ここからコンテンツ-->


<section class="table-of-contents">
		<div class="container">
			<div id="pageTitle" class="mwlift">
			<h1>MWデュアルリフトによるリフトアップ</h1>
			<p>たるんだ皮膚をしっかり引き上げ、<br>持続性に優れた糸によるリフトアップ<br><span class="price-setting">片方3本<span class="small">(合計6本)</span>　<span class="fee">220,000円</span></span></p>
			</div>
			<div class="topNav">
				<ul>
					<li class="heightAjst"><a href="#toc1">MWデュアル<br>リフトとは</a></li>
					<li class="heightAjst"><a href="#toc3">料金について</a></li>
					<li class="heightAjst"><a href="#toc2">症例写真</a></li>
					<li class="heightAjst"><a href="#toc5">施術の流れ</a></li>
					<li class="heightAjst"><a href="#toc4">よくある<br>ご質問</a></li>
					<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
				</ul>
			</div>

			<div id="toc_box">
				<p class="toc_title">目次</p>
				<div class="toc_list">
				  <ul>
					<li>
					  <a href="#toc1">
						<span class="toc_num">1.</span> ＭＷデュアルリフトとは
					  </a>
					  <ul>
						<li>
						  <a href="#toc1-1" class="toc_num" data-number="1-1.">
							ＭＷデュアルリフトの特徴
						  </a>
						</li>
						<li>
							<a href="#toc1-2" class="toc_num" data-number="1-2.">
							ＭＷデュアルリフトの適応部位と効果
							</a>
						  </li>
					  </ul>
					</li>
					<li>
					  <a href="#toc2">
						<span class="toc_num">2.</span> ＭＷデュアルリフトの症例写真
					  </a>
					  <ul>
						<li><a href="#toc2-1" class="toc_num" data-number="2-1.">30代女性の症例</a></li>
						<li><a href="#toc2-2" class="toc_num" data-number="2-2.">40代男性の症例</a></li>
						<li><a href="#toc2-3" class="toc_num" data-number="2-3.">70代女性の症例</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc3">
					  <span class="toc_num">3.</span> 池袋サンシャイン美容外科で行うＭＷデュアルリフト治療の概要
					  </a>
					  <ul>
						<li><a href="#toc3-1" class="toc_num" data-number="3-1.">料金</a></li>
						<li><a href="#toc3-2" class="toc_num" data-number="3-2.">治療概要</a></li>
						<li><a href="#toc3-3" class="toc_num" data-number="3-3.">お支払い方法</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc4">
						<span class="toc_num">4.</span> よくあるご質問
					  </a>
					  <ul>
						<li><a href="#toc4-1" class="toc_num" data-number="4-1.">MWデュアルリフトとは？</a></li>
						<li><a href="#toc4-2" class="toc_num" data-number="4-2.">痛みはありますか？</a></li>
						<li><a href="#toc4-3" class="toc_num" data-number="4-3.">傷跡は残りますか？</a></li>
						<li><a href="#toc4-4" class="toc_num" data-number="4-4.">効果はどのくらい持続しますか？</a></li>
						<li><a href="#toc4-5" class="toc_num" data-number="4-5.">他のリフトアップ治療との違いを教えて下さい</a></li>
						<li><a href="#toc4-6" class="toc_num" data-number="4-6.">施術後に気をつけることはありますか？</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc5">
						<span class="toc_num">5.</span> ＭＷデュアルリフト治療の流れ
					  </a>
					  <ul>
						<li><a href="#toc5-1" class="toc_num" data-number="5-1.">1.カウンセリング</a></li>
						<li><a href="#toc5-2" class="toc_num" data-number="5-2.">2.診察</a></li>
						<li><a href="#toc5-3" class="toc_num" data-number="5-3.">3.リフトアップのデザイン</a></li>
						<li><a href="#toc5-4" class="toc_num" data-number="5-4.">4.施術</a></li>
						<li><a href="#toc5-5" class="toc_num" data-number="5-5.">5.経過診察</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc6">
						<span class="toc_num">6.</span> 池袋サンシャイン美容外科の特徴
					  </a>
					  <ul>
						<li><a href="#toc6-1" class="toc_num" data-number="6-1.">特徴①完全予約制</a></li>
						<li><a href="#toc6-2" class="toc_num" data-number="6-2.">特徴②診察当日の手術OK</a></li>
						<li><a href="#toc6-3" class="toc_num" data-number="6-3.">特徴③休日診察</a></li>
						<li><a href="#toc6-4" class="toc_num" data-number="6-4.">特徴④未成年OK</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc7">
						<span class="toc_num">7.</span> 監修医師紹介
					  </a>
					  <ul>
						<li><a href="#toc7-1" class="toc_num" data-number="7-1.">たるみ・小顔でお悩みでしたら、ぜひ当院へご相談ください。</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc8">
						<span class="toc_num">8.</span> ＭＷデュアルリフト治療の体験レポート
					  </a>
					  <ul>
						<li><a href="#toc8-1" class="toc_num" data-number="8-1.">Instagram</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc9">
						<span class="toc_num">9.</span> アクセス
					  </a>
					</li>
				  </ul>
				</div>
			</div>

		</div>
	</section>


<section class="secBox mwlift-new">

	<section class="bg-ivory">
		<div class="container">
			<div class="back-deco">
				<div class="circle deco1"></div>
				<div class="circle deco2"></div>
				<div class="circle deco3"></div>
				<h2 id="toc1" class="gold">ＭＷデュアルリフトとは</h2>
			</div>
			
			<p class="bold center pc">体内に吸収される特殊な糸で<br>
				気になる部分を引き上げる<br class="sp">切らないフェイスリフト
			</p>
			<p class="bold center sp" style="font-size: 16px;"><strong>体内に吸収される特殊な糸で<br>
				気になる部分を引き上げる<br class="sp">切らないフェイスリフト</strong>
			</p>

			<div class="ba-flex">
				<div class="ba-table shadow">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after1.png" alt="30代女性">
					<p>30代女性</p>
				</div>
				<div class="ba-table shadow">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after2.png" alt="40代男性">
					<p>40代男性</p>
				</div>
				<div class="ba-table shadow">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after3.png" alt="70代女性">
					<p>70代女性</p>
				</div>
			</div>

			<p>ＭＷデュアルリフトとは、生体分解ポリマーで作られた<strong>体内に吸収される特殊な糸</strong>をたるみが気になる箇所・リフトアップしたい箇所に挿入し、糸についたコグ（トゲ）により、<strong>物理的に引き上げる、メスを使わない（切らない・縫合・抜糸もなし）フェイスリフト治療</strong>です。<br>
				<br>
				片側の頬に１度で３本の糸を使用しますが、約18か月前後で完全に吸収されます。糸は吸収されますが、吸収された後でも糸を挿入した部分には<strong>コラーゲン生成が促進されるため、リフトアップ効果の維持・肌質改善を継続的に行うことが可能</strong>です。<br>
				※たるみが無くなることで小顔効果もこざいます。<br>
				<br>
				施術後の傷跡は、もみあげや髪の毛の生え際から糸を挿入する為、糸の入り口はとても目立ちにくいのもお勧めの点です。
			</p>

			<div class="consultation-card1">
				<a href="/reservation/">
					<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
					</picture>
				</a>
			</div>

			<div class="box-white">
				<div class="title-underline">
					<h3 id="toc1-1" class="mw-title"><span class="blue">ＭＷデュアルリフト</span>の特徴</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/features1.png" alt="頬の引きあがり" class="features-img">
					<div>
						<div class="circle-label">
							<div class="circle">特徴①</div>
							<h4>施術中に頬の引きあがりを<br>
								確認できます
							</h4>
						</div>
						<p>施術は、患者様が起きている状態で行います。そのため患者様は糸を入れていく段階で頬の引き上がりがどれくらいか<strong>患者様ご自身で確認いただくことができる</strong>ため、より<strong>理想のリフトアップ・たるみ解消</strong>が行えます。</p>
					</div>
				</div>
				<div class="dotted-line"></div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/features2.png" alt="約3倍効果が持続" class="features-img2">
					<div>
						<div class="circle-label">
							<div class="circle">特徴②</div>
							<h4>従来の素材に比べ、<br>
								約3倍効果が持続します
							</h4>
						</div>
						<p>ＭＶデュアルリフトにて使用する糸（吸収糸）。従来の糸の場合、皮膚をつかむコグ（トゲ）が小さく立体的では無いため、十分な引き上げが行えず、また約１年程度で吸収されるものでした。<br>
							<br>
							それに比べて、ＭＶデュアルリフトは立体的なコグ（トゲ）が大きいため、<strong>皮膚をしっかりとつかむことができ、頬を物理的に持ち上げリフトアップすることが可能</strong>です。また、ＰＣＬという医療用素材で約２年かけて吸収されるため<strong>効果が長持ち</strong>します。<br>
							<strong>持続力（キープ力）を高めつつ、自然にリフトアップを実現</strong>させるために、形状の異なる糸を複数入れることで、細かくリフトアップする糸とその皮膚を固定させる意図を使い分けることで今まで以上に<strong>自然なリフトアップ</strong>が可能となりました。</p>
					</div>
				</div>
				<div class="dotted-line"></div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/features3.png" alt="即効性" class="features-img3">
					<div>
						<div class="circle-label">
							<div class="circle">特徴③</div>
							<h4>傷跡もダウンタイムも<br>ほぼ無く、即効性があります</h4>
						</div>
						<p>レーザーを短時間に照射しながら表皮を冷却する機能が付いているため、痛みを軽減することができます。<br>
							<br>
							麻酔をせずにレーザー照射できますが、痛みに弱いなど希望される場合には表面麻酔を行うことも可能です。<br>
							<br>
							<strong>他の治療法と比べ、皮膚へのダメージが抑えられる</strong>ので照射後の生活への影響を<br>
							少なくしたい方におすすめです。<br>
							<br>
							(※照射後すぐのメイクやシャワーが可能です。)
						</p>
					</div>
				</div>
				<div class="dotted-line"></div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/features4.png" alt="術後すぐメイク可能" class="features-img4">
					<div>
						<div class="circle-label">
							<div class="circle">特徴④</div>
							<h4>術後すぐメイクする<br class="pc">ことが<br class="sp">可能です
							</h4>
						</div>
						<p>術後に傷跡や腫れ、内出血を起こしてしまうと術後のメイクを控えていただく必要があります。ですがＭＶデュアルリフトの場合、そういったリスクが非常に少ないため、術後すぐメイクしていただきそのままお出掛けしていただくことが可能です。</p>
					</div>
				</div>
			</div>
			<div class="box-white box-white-last">
				<div class="title-underline">
					<h3 id="toc1-2"><span class="blue">ＭＷデュアルリフト</span>の<br class="sp">適応部位と効果</h3>
				</div>
				<div class="pc">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/PC_ISC_mwr_image10.png" alt="ＭＷデュアルリフトの適応部位">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/PC_ISC_mwr_image11.png" alt="ＭＷデュアルリフトの効果" style="margin-top: 25px;">
				</div>
				<div class="sp">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/SP_ISC_mwr_image10.png" alt="ＭＷデュアルリフトの適応部位">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/SP_ISC_mwr_image11.png" alt="ＭＷデュアルリフトの効果" style="margin-top: 15px;">
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc2">
					<span class="sub"><span class="blue">ＭＷデュアルリフト</span>の</span>
					<span class="main blue"></span><span class="font-big">症例写真</span></span>
				</h2>
			</div>

			<p class="center pc">当院で実際に施術を受けられた方の症例をご紹介いたします。</p>
			<p class="center sp" style="font-size: 16px;">当院で実際に施術を受けられた方の症例を<br>ご紹介いたします。</p>


			<div class="beforeafter">
				<div class="box-item">
				<!-- Swiperスライダー -->
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<!-- スライド -->
						<div class="swiper-slide">
								<div class="case-box">
								<div class="title-underline">
									<h3 id="toc2-1">30代女性の症例</h3>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after1.png" alt="30代女性"  class="pc">
								<div class="sp">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after1.png" alt="30代女性">
									<p>30代女性</p>
								</div>
									<table>
										<tr>
										<th>術後の生活</th>
										<td>中に入れた糸が定着するまで、ゴシゴシこすらないようにご注意ください。洗顔の際は優しく泡越しに洗ってください。治療当日からお化粧をしてお帰り頂けます。</td>
										</tr>
										<tr>
										<th>リスク・<br class="sp">副作用</th>
										<td>
											<ul>
												<li>局所麻酔による口元の違和感。（３時間ほどで解消）</li>
												<li>引き上げによる左右感、引きつれ感、違和感。</li>
												<li>稀にむくみ、内出血など。</li>
											</ul>
										</td>
										</tr>
									</table>
								</div>
						</div>
						<div class="swiper-slide">
								<div class="case-box">
								<div class="title-underline">
									<h3 id="toc2-2">40代男性の症例</h3>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after2.png" alt="40代男性" class="pc">
								<div class="sp">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after2.png" alt="40代男性">
									<p>40代男性</p>
								</div>
									<table>
										<tr>
										<th>術後の生活</th>
										<td>中に入れた糸が定着するまで、ゴシゴシこすらないようにご注意ください。洗顔の際は優しく泡越しに洗ってください。治療当日からお化粧をしてお帰り頂けます。</td>
										</tr>
										<tr>
										<th>リスク・<br class="sp">副作用</th>
										<td>
										<ul>
											<li>局所麻酔による口元の違和感。（３時間ほどで解消）</li>
												<li>引き上げによる左右感、引きつれ感、違和感。</li>
												<li>稀にむくみ、内出血など。</li>
											</ul>
										</td>
										</tr>
									</table>
								</div>
						</div>
						<div class="swiper-slide">
								<div class="case-box">
								<div class="title-underline">
									<h3 id="toc2-3">70代女性の症例</h3>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after3.png" alt="70代女性" class="pc">
								<div class="sp">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/before-after3.png" alt="70代女性">
									<p>70代女性</p>
								</div>
									<table>
										<tr>
										<th>術後の生活</th>
										<td>中に入れた糸が定着するまで、ゴシゴシこすらないようにご注意ください。洗顔の際は優しく泡越しに洗ってください。治療当日からお化粧をしてお帰り頂けます。</td>
										</tr>
										<tr>
										<th>リスク・<br class="sp">副作用</th>
										<td>
										<ul>
											<li>局所麻酔による口元の違和感。（３時間ほどで解消）</li>
												<li>引き上げによる左右感、引きつれ感、違和感。</li>
												<li>稀にむくみ、内出血など。</li>
											</ul>
										</td>
										</tr>
									</table>
								</div>
						</div>
					</div>
						<!--ボタン　矢印部分 -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
				</div>
			</div>
		    </div>

		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc3">池袋サンシャイン美容外科で行う<br>
					ＭＷデュアルリフト治療の概要
				</h2>
			</div>

			<div class="pc-flex" style="align-items: center;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/PC_ISC_mwr_image12.png" alt="MWデュアルリフトを用いた効果的なリフトアップ治療" class="MW-treatment pc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/SP_ISC_mwr_image12.png" alt="MWデュアルリフトを用いた効果的なリフトアップ治療" class="MW-treatment sp">
				<p>当院では、たるみやシワのお悩みに対して、<br>
					MWデュアルリフトを用いた効果的なリフトアップ治療を<br>
					提供しています。
				</p>
			</div>

			<div class="box-white">
				<div class="title-underline">
					<h3 id="toc3-1">料金</h3>
				</div>
				<div class="table overview">
					<div class="table-flex">
						<div class="table-label">
						<p>片方3本<br class="sp">（合計6本）</p>
						</div>
						<div class="table-info">
						<p>￥220,000</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
						<p>片方5本<br class="sp">（合計10）</p>
						</div>
						<div class="table-info">
						<p>￥275,000</p>
						</div>
					</div>
				</div>
			</div>

			<div class="box-white">
				<div class="title-underline">
					<h3 id="toc3-2">治療概要</h3>
				</div>
				<div class="table overview">
					<div class="table-flex">
						<div class="table-label">
						<p>時間</p>
						</div>
						<div class="table-info">
						<p>施術自体は約３０分。施術前と後に入念な皮膚の持ち上げ具合について、患者様と打ち合わせを行います。</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
						<p>麻酔</p>
						</div>
						<div class="table-info">
						<p>局所麻酔。治療途中で何度か起き上がっていただいて、リフト具合を確認するため局所麻酔で行っておりますが、痛みはほとんどございません。</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
						<p>通院</p>
						</div>
						<div class="table-info">
						<p>基本的に治療は１回きりで終了となりますが、検診の為１週間後と１ヶ月検診をお願いしております。</p>
						</div>
					</div>
					<div class="table-flex wrap">
						<div class="table-label">
						<p>リスク・副作用</p>
						</div>
						<div class="table-info">
						<p>	腫れや痛みは、少ないながらも生じることがあります。<br>
							特にリフトアップの違和感は慣れるまでは感じることと思います。<br>
							治療当日は強い引きあがり感の為、頬の違和感・ヨレやひきつれがきになったり、口が開けづらい感覚が出てまいります。<br>
							１か月程度かけて違和感は軽減されてきますが、頬のマッサージなどをされると固定している糸が外れてしまう可能性がありますので、お控えください。人により皮膚を触った時、糸の感触を感じる場合がございます。手術後１週間程度は、頭皮の糸挿入口に赤い針跡がつきますが、１か月程度で目立たなくなってきます。<br>
							※以上の症状には個人差がありますので、目安としてお考え下さい。
						</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
						<p>メイク</p>
						</div>
						<div class="table-info">
						<p>当日から可能です。メイクを落とすときに頬をゴシゴシ洗うと、糸が外れてしまう可能性があるので優しく洗ってください。</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
						<p>入浴・洗髪</p>
						</div>
						<div class="table-info">
						<p>洗顔・入浴・シャワーは当日より可能ですが、洗髪は翌日からにされてください。髪の毛のカラーリングは１週間程度お控えください。</p>
						</div>
					</div>
				</div>
			</div>

			<div class="box-white box-white-last">
				<div class="title-underline">
					<h3 id="toc3-3">お支払い方法</h3>
				</div>
				<div class="table overview">
					<div class="table-label sp table-label-sp">
						<p>現金</p>
					</div>
					<div class="table-flex">
						<div class="table-label pc">
						<p>現金</p>
						</div>
						<div class="table-info table-info-sp">
						<p>現金でのお支払いが可能です。</p>
						</div>
					</div>
					<div class="table-label sp table-label-sp">
						<p>クレジットカード</p>
					</div>
					<div class="table-flex">
						<div class="table-label pc">
						<p>クレジットカード</p>
						</div>
						<div class="table-info table-info-sp">
							<div>
								<p>クレジットカードでのお支払いが可能です。<br>
									VISA/Master/UCカードは分割払いも可能です。<br>
									2回払いは手数料無料です。
								</p>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/credit-card.png" alt="クレジットカード" class="credit-card pc">
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/credit-card-sp.png" alt="クレジットカード" class="credit-card sp">
							</div>
						</div>
					</div>
					<div class="table-label sp table-label-sp">
						<p>銀行・キャッシュカード</p>
					</div>
					<div class="table-flex">
						<div class="table-label pc">
						<p>銀行<br>
							キャッシュカード</p>
						</div>
						<div class="table-info table-info-sp">
							<div>
								<p>銀行口座から手数料なしの一括引き落としが可能です。<br class="pc">デビット機能、ゆうちょ銀行や地銀、信用金庫のカードも<br>
									ご利用いただけます。
								</p>
								<p style="margin-top: 10px;">特別な事前申請などは<br class="sp">必要ございません。<br>
									※お口座に、残高がないと引き落としができません。
								</p>
							</div>
						</div>
					</div>
					<div class="table-label sp table-label-sp">
						<p>電子マネー</p>
					</div>
					<div class="table-flex">
						<div class="table-label pc">
						<p>電子マネー</p>
						</div>
						<div class="table-info table-info-sp">
							<div>
								<p>AirPay導入により、電子マネーのご利用も可能です。</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/electronic-money.png" alt="電子マネー" class="electronic-money pc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/electronic-money-sp.png" alt="電子マネー" class="electronic-money sp">
							</div>
						</div>
					</div>
					<div class="table-label sp table-label-sp">
						<p>医療ローン</p>
					</div>
					<div class="table-flex">
						<div class="table-label pc">
						<p>医療ローン</p>
						</div>
						<div class="table-info table-info-sp">
							<div>
								<p>6万円以上の場合、<br class="pc">患者様ご指定口座からの分割引き落としを行うことが可能です。
								</p>
								<p style="margin-top: 10px;">身分証をご提示の上、<br class="sp">必要書類にご記入いただきます。<br>
									分割回数・金額を自由にご選択いただけます。途中解約も可能です。
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="consultation-card2">
				<a href="/reservation/">
					<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
					</picture>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc4">よくあるご質問</h2>
			</div>

			<div class="qa">
				<div class="faq-item active">
					<button class="faq-question">
						<h3 id="toc4-1">
							<span class="q-icon">Q</span>
							<span class="question-text">MWデュアルリフトとは？</span>
						</h3>
						<span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>肌に吸収される特殊な糸を利用した、切らない（メスを使用しない）リフトアップ治療です。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
						<h3 id="toc4-2">
						<span class="q-icon">Q</span>
						<span class="question-text">痛みはありますか？</span>
						</h3>
					  	<span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>先端が尖っていない針を用いて糸を挿入するため、痛みは少ないです。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
						<h3 id="toc4-3">
						<span class="q-icon">Q</span>
						<span class="question-text">傷跡は残りますか？</span>
						</h3>
					  	<span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>挿入痕が目立ちにくい箇所から糸を挿入するため、傷跡は残りづらいです。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
						<h3 id="toc4-4">
						<span class="q-icon">Q</span>
						<span class="question-text">効果はどのくらい持続しますか？</span>
						</h3>
					  	<span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>最終的に肌に吸収される糸を使用するため、永続的な効果はありません。<br>
						糸が分解されるまで1年から2年程度と言われています。分解される際にも溶けたコラーゲンが肌を引き締めます。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
						<h3 id="toc4-5">
						<span class="q-icon">Q</span>
						<span class="question-text">他のリフトアップ治療との<br class="sp">違いを教えて下さい</span>
						</h3>
					  	<span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>デュアルリフト治療の特長は、従来の糸リフトよりも即効性が高く、持続力があることです。またメスで肌を切らず、目立たない箇所に糸を挿入するので、傷跡が残りづらくバレにくいことがあげられます。</p>
					</div>
				</div>
				<div class="faq-item faq-item-last">
					<button class="faq-question">
						<h3 id="toc4-6">
							<span class="q-icon">Q</span>
							<span class="question-text">施術後に気をつけることは<br class="sp">ありますか？</span>
						</h3>
					  	<span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>施術後1~2週間程度は、触れると痛みや違和感が生じることがあります。お化粧や洗顔の際は、施術部に優しく触れるようにしましょう。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc5">ＭＷデュアルリフト<br class="sp">治療の流れ</h2>
			</div>
		
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow1.png" alt="カウンセリング" class="flow-img pc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow-sp1.png" alt="カウンセリング" class="flow-img sp">
						<div>
							<div class="title-underline">
								<h3 id="toc5-1">1.&nbsp;カウンセリング</h3>
							</div>
							<p>女性カウンセラーが担当しますので、男性の医師には聞きづらいことなど、何でもお尋ね下さい。 手術の流れ、術後の経過や日常生活の過ごし方など詳しくご説明します。</p>
						</div>
					</div>
					<div class="application">
						<h4 class="circle-heading">予約のお申込み</h4>
						<p>まずは、お電話または<br class="sp">WEB予約フォームより、<br class="sp">ご希望の来院日時をご連絡ください。<br><br class="sp">
							当日予約も可能ですので、<br class="sp">当日のご予約は<br class="sp">お電話にてご予約下さい。
						</p>
						<div class="tel">
							<p>お電話</p>
							<a href="tel:0120331244" class="tel-number">0120-331-244</a>
						</div>
					
						<a href="/reservation/" class=" filling-out-button">
							<span class="button-text">ご予約フォームへの入力はこちら</span>
							<span class="arrow-rounded"></span>
						</a>	
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow2.png" alt="診察" class="flow-img pc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow-sp2.png" alt="診察" class="flow-img sp">
						<div>
							<div class="title-underline">
								<h3 id="toc5-2">2.&nbsp;診察</h3>
							</div>
							<p>患者様お一人お一人のお悩みを丁寧に伺い、最善のアプローチ方法をご提案いたします。MWデュアルリフトとヒアルロン酸や筋肉の縮小に作用する薬剤の併用を行うことで、劇的にお顔の若返りも可能です。</p>
						</div>
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow3.png" alt="リフトアップのデザイン" class="flow-img pc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow-sp3.png" alt="リフトアップのデザイン" class="flow-img sp">
						<div>
							<div class="title-underline">
								<h3 id="toc5-3">3.&nbsp;リフトアップのデザイン</h3>
							</div>
							<p>治療方針が固まればお会計・同意書の記入後、糸を挿入する角度と本数を入念にデザインしながら仕上げていきます。<br>
								患者様ご自身も鏡で一緒にご確認頂き、満足頂けるまで何度もデザイン致します。</p>
						</div>
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow4.png" alt="施術" class="flow-img pc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow-sp4.png" alt="施術" class="flow-img sp">
						<div>
							<div class="title-underline">
								<h3 id="toc5-4">4.&nbsp;施術</h3>
							</div>
							<p>デザイン決定後、施術を実施します。<br>
								お顔に糸を通す際は切開などは致しません。注射針に細い糸を通して皮膚の上面に挿入していきます。傷跡はすぐに塞がりますので、傷口は残りません。</p>
						</div>
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow flow-last">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow5.png" alt="経過診察" class="flow-img pc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/flow-sp5.png" alt="経過診察" class="flow-img sp">
						<div>
							<div class="title-underline">
								<h3 id="toc5-5">5.&nbsp;経過診察</h3>
							</div>
							<p>約1週間後に仕上がりの確認を行います。<br>
								ご要望に応じて、後から挿入するMWデュアルリフトの糸を追加することも可能です。その他、気になることがございましたら、何度でもご相談ください。</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<h2 id="toc6" class="gold">池袋サンシャイン美容外科の<br class="sp">特徴</h2>
			<div class="box-white shadow box-white-last">
				
				<div class="clinic-features">
					<div class="circle-label">
						<div class="circle">特徴①</div>
						<h3 id="toc6-1">完全予約制</h3>
					</div>
					<p>当院ではご来店のお客様に、お待たせすることがないよう、完全予約制となっております。<br>
						ご来院いただく際はあらかじめお電話いただき日時をご予約の上、お越しくださいませ。
					</p>
				</div>
				<div class="clinic-features">
					<div class="circle-label">
						<div class="circle">特徴②</div>
						<h3 id="toc6-2">診察当日の手術OK</h3>
					</div>
					<p>診察当日に手術をすることが可能です。手術時間は1時間程度となります。当日に手術をお受けいただき術後すぐにお帰りいただくことが可能です。手術当日から通常の生活をしていただいてかまいません。</p>
				</div>
				<div class="clinic-features">
					<div class="circle-label">
						<div class="circle">特徴③</div>
						<h3 id="toc6-3">休日診察</h3>
					</div>
					<p>土曜・日曜の手術を承っております。仕事でなかなか、平日通院が難しいかたでも、週末治療が可能です。</p>
				</div>
				<div class="clinic-features clinic-features-last">
					<div class="circle-label">
						<div class="circle">特徴④</div>
						<h3 id="toc6-4">未成年OK</h3>
					</div>
					<p>当院では、未成年の治療も行っております。頬のたるみを解消したい方はご家族とご相談の上、お越しください。</p>
					<div class="button-pdf">
						<a href="/pdf/douisyo.pdf">
						  未成年向けの同意書(PDF)はこちら
						  <span class="pdf-arrow">＞</span>
						</a>
					</div>
				</div>
			</div>

			<div class="consultation-card2">
				<a href="/reservation/">
					<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
					</picture>
				</a>
			</div>
		</div>
	</section>

	<section id="greeting" class="bg-ivory2">
		<div class="container"> 
			<div class="title-bar">
				<h2 id="toc7">監修医師紹介</h2>
			</div>

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
		  <h3 id="toc7-1">
			たるみ・小顔でお悩みでしたら、<br class="sp">ぜひ当院へご相談ください。
		  </h3>
		  <p class="text">
			小顔を目指したい２０～３０代の方、お顔のたるみ軽減をしほうれい線や頬のたるみを改善されたい４０代～６０代の方に幅広くご好評をいただいております。<br>
			切ることなく、手軽にリフトアップが３０分程度の施術で行うことができます。<br>
			一度の施術でほうれい線の軽減・マリオネットラインのたるみ軽減・小顔を一気に解消できる画期的な治療法となります。治療後お鏡にて劇的に改善したことをご確認いただいてからおかえりいただきます。<br>
			内出血や腫れなどもなく、お化粧をしてお帰り頂けることがこの治療の良い点です。<br>
			当院では当日のご予約の上、当日そのまま治療を受けてお帰り頂けます。
		  </p>
		  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/profile.webp" alt="院長の経歴">
		  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/profile_sp.webp" alt="院長の経歴">
		</div>
	</section>

	<section class="yellow" id="snsreport">
        <div class="container">
			<div class="title-bar">
			<h2 id="toc8">
				<span class="sub">ＭＷデュアルリフト治療の</span>
				<span class="main">体験レポート</span>
			</h2>
			</div>
        </div>
        <div class="box">
          <div class="container item">
            <div class="flex">
			  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/mwlift/instagram.png" alt="instagram" class="instagram-img">
              <div>
                <h3 id="toc8-1">Instagram</h3>
                <p>
					ＭＷデュアルリフト治療の実際の様子や<br>
					ビフォーアフターをご紹介しています。
                </p>
                <a href="https://www.instagram.com/ikesunshine331244?utm_source=ig_web_button_share_sheet&igsh=czhpOTc0cmxpaWYz">公式インスタグラムへ</a>
              </div>
            </div>
          </div>
        </div>
    </section>

	<section class="bg-white" id="access">
		<div class="container">
			<div class="pc-flex" style="align-items: stretch;">
				<div class="map-wrapper pc">
				    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.811877327141!2d139.71221927578983!3d35.73084487257124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751616356535!5m2!1sja!2sjp"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="access">
					<h2 id="toc9">アクセス</h2>
					<h3>池袋サンシャイン美容外科&nbsp;池袋院</h3>
					<p>〒170-0013<br>
						東京都豊島区東池袋1-15-3 近代ビル9F
					</p>
					<p style="margin-top: 15px;">「池袋」駅東口より徒歩5分<br>
						＜JR＞山手線&nbsp;埼京線<br>
						＜東武東上線＞<br>
						＜西武池袋線＞<br>
						＜東京メトロ＞丸の内線&nbsp;有楽町線
					</p>
					<div class="access-detail">
						<p>TEL<br>
							FAX<br>
							Email<br>
							<br>
							診療時間<br>
							定休日
						</p>
						<p>0120-331-244<br>
							03-3987-5080<br>
							info@ike-sunshine.co.jp<br>
							<br>
							9:00～17:30 (完全予約制)<br>
							火曜・木曜
						</p>
					</div>
				</div>
				<div class="map-wrapper sp">
				    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.811877327141!2d139.71221927578983!3d35.73084487257124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751616356535!5m2!1sja!2sjp"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
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

<script>
	const track = document.querySelector('.carousel-track');
	const slides = document.querySelectorAll('.slide');
	const nextBtn = document.querySelector('.arrow.right');
	const prevBtn = document.querySelector('.arrow.left');
	let currentIndex = 0;
  
	function updateSlide() {
	  const width = slides[0].offsetWidth;
	  track.style.transform = `translateX(-${currentIndex * width}px)`;
	}
  
	nextBtn.addEventListener('click', () => {
	  if (currentIndex < slides.length - 1) {
		currentIndex++;
		updateSlide();
	  }
	});
  
	prevBtn.addEventListener('click', () => {
	  if (currentIndex > 0) {
		currentIndex--;
		updateSlide();
	  }
	});
  
	window.addEventListener('resize', updateSlide);
</script>

<script>
	document.querySelectorAll('#mwlift .faq-question').forEach(btn => {
	  btn.addEventListener('click', () => {
		const item = btn.closest('.faq-item');
		item.classList.toggle('active');
  
		const toggleIcon = btn.querySelector('.toggle-icon');
		toggleIcon.textContent = item.classList.contains('active') ? 'ー' : '＋';
	  });
	});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const tocTitle = document.querySelector('.toc_title');
  const tocList = document.querySelector('.toc_title + .toc_list');

  // 初期状態：openクラスがついていたら表示
  if (tocTitle.classList.contains('open')) {
    tocList.style.display = 'block';
  }

  // クリックで開閉トグル
  tocTitle.addEventListener('click', function () {
    this.classList.toggle('open');
    tocList.style.display = this.classList.contains('open') ? 'block' : 'none';
  });
});
</script>



<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    centeredSlides: true,    // アクティブスライドを中央配置
    spaceBetween: 10,        // スライド間の余白（px）
    loop: true,
	navigation: {
	nextEl: ".swiper-button-next",
	prevEl: ".swiper-button-prev",
	},
  });
</script>  
<script>
document.addEventListener("DOMContentLoaded", function () {
  const tocTitle = document.querySelector('.toc_title');
  const tocList = document.querySelector('.toc_title + .toc_list');

  if (tocTitle.classList.contains('open')) {
    tocList.style.display = 'block';
  }

  tocTitle.addEventListener('click', function () {
    this.classList.toggle('open');
    tocList.style.display = this.classList.contains('open') ? 'block' : 'none';
  });
});

</script>  
  

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>

<?php get_footer(); ?>