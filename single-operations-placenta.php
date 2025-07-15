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
<main id="placenta">
<!--/ここからコンテンツ-->

<div class="container">

<div id="pageTitle" class="placenta">
<h1>シミ・肝班・くすみ治療</h1>
<p>医療用レブライトレーザー<br><span class="price-setting">両頬/初回<br clear="sp"><span class="fee">30,800円～</span></span></p>
</div>

</div>

<section class="placenta">
	<section class="top-menu">
		<div class="container">
			<div class="topNav">
				<ul>
					<li class="heightAjst"><a href="#toc2">シミ・肝斑・くすみの原因とは？</a></li>
					<li class="heightAjst"><a href="#toc3">シミ・肝斑・くすみの改善方法</a></li>
					<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br class="pc">申し込み</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="table-of-contents">
		<div class="container">
			<div id="toc_box">
				<p class="toc_title">目次</p>
				<div class="toc_list">
				  <ul>
					<li>
					  <a href="#toc1">
						<span class="toc_num">1.</span> シミ・肝斑・くすみを治したい方へ
					  </a>
					  <ul>
						<li>
						  <a href="#toc1-1" class="toc_num" data-number="1-1.">
							こんな悩み、ありませんか？
						  </a>
						</li>
						<li>
							<a href="#toc1-2" class="toc_num" data-number="1-2.">
							シミ・肝斑・くすみの症例写真
							</a>
						  </li>
					  </ul>
					</li>
					<li>
					  <a href="#toc2">
						<span class="toc_num">2.</span> シミ・肝斑・くすみの原因を知って正しくケアする
					  </a>
					  <ul>
						<li><a href="#toc2-1" class="toc_num" data-number="2-1.">原因その1 加齢による肌の変化・色素沈着</a></li>
						<li><a href="#toc2-2" class="toc_num" data-number="2-2.">原因その2 紫外線による<br class="sp">シミ・くすみの悪化</a></li>
						<li><a href="#toc2-3" class="toc_num" data-number="2-3.">原因その3 肌のお手入れ不足</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc3">
					  <span class="toc_num">3.</span> 池袋サンシャイン美容外科で行うシミ・肝斑・くすみ治療一覧
					  </a>
					  <ul>
						<li><a href="#toc3-1" class="toc_num" data-number="3-1.">シミ取り・肝斑・くすみに<br class="sp">効果的な治療法一覧</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc4">
						<span class="toc_num">4.</span> レブライトレーザーでの<br class="sp">シミ除去治療
					  </a>
					  <ul>
						<li><a href="#toc4-1" class="toc_num" data-number="4-1.">レブライトレーザーとは</a></li>
						<li><a href="#toc4-2" class="toc_num" data-number="4-2.">レブライトレーザーの特徴</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc5">
						<span class="toc_num">5.</span> トレチノイン・ハイドロキノン<br class="sp">によるシミ改善
					  </a>
					  <ul>
						<li><a href="#toc5-1" class="toc_num" data-number="5-1.">トレチノインとは</a></li>
						<li><a href="#toc5-2" class="toc_num" data-number="5-2.">ハイドロキノンとは</a></li>
						<li><a href="#toc5-3" class="toc_num" data-number="5-3.">トレチノイン・ハイドロキノンの<br class="sp">効果と特徴</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc6">
						<span class="toc_num">6.</span> トラネキサム酸で肝斑・くすみ治療
					  </a>
					  <ul>
						<li><a href="#toc6-1" class="toc_num" data-number="6-1.">肝斑とは</a></li>
						<li><a href="#toc6-2" class="toc_num" data-number="6-2.">トラネキサム酸の効果と服用法</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc7">
						<span class="toc_num">7.</span> プラセンタ療法で透明感アップ
					  </a>
					  <ul>
						<li><a href="#toc7-1" class="toc_num" data-number="7-1.">プラセンタ療法とは</a></li>
						<li><a href="#toc7-2" class="toc_num" data-number="7-2.">プラセンタ療法の治療概要</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc8">
						<span class="toc_num">8.</span> ニンニク注射で肌疲労を改善
					  </a>
					  <ul>
						<li><a href="#toc8-1" class="toc_num" data-number="8-1.">ニンニク注射とは</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc9">
						<span class="toc_num">9.</span> ビタミン注射で内側からシミ予防
					  </a>
					  <ul>
						<li><a href="#toc9-1" class="toc_num" data-number="9-1.">ビタミン注射の美容効果とは</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc10">
						<span class="toc_num">10.</span> 超音波導入（スキンスクライバー）<br class="sp">でくすみ除去
					  </a>
					  <ul>
						<li><a href="#toc10-1" class="toc_num" data-number="10-1.">超音波導入とは</a></li>
					  </ul>
					</li>
					<li>
					  <a href="#toc11">
						<span class="toc_num">11.</span> シミ・肝班・くすみ治療の<br class="sp">体験レポート
					  </a>
					  <ul>
						<li><a href="#toc11-1" class="toc_num" data-number="11-1.">Instagram</a></li>
					  </ul>
					</li>
					<li>
						<a href="#toc12">
						  <span class="toc_num">12.</span> アクセス
						</a>
					  </li>
				  </ul>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-blue">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc1" class="blue">シミ・肝斑・くすみ<br class="sp">を治したい方へ</h2>
			</div>
			<p style="text-align: center;">お肌の悩みはひとりで抱えず、<br class="sp">まずはご相談ください。<br>
				医師が状態に合わせて、最適な“シミ取り・肝斑除去・くすみ取り”の選択肢をご案内します。
			</p>
			<div class="box-white shadow">
				<div class="title-underline">
					<h3 id="toc1-1">こんな悩み、ありませんか？</h3>
				</div>
				<ul class="dot-list">
					<li>最近、頬や目の下に<br class="sp"><strong>薄いシミが増えてきた</strong>気がする</li>
					<li>肝斑と診断されたけど、<br class="sp"><strong>何から治療すればいいのかわからない</strong></li>
					<li>他院で<strong>「対象外のシミ」</strong>と<br class="sp">断られてしまった</li>
					<li>肌が全体的にくすんで、<br class="sp"><strong>化粧ノリが悪い</strong></li>
					<li>医療用の<strong>「シミ取り」</strong>治療に<br class="sp">本気で向き合いたい</li>
				</ul>

				<p>上記のようなお悩みはすべて当院でご相談いただけます。<br class="pc">お一人で悩まず、まずは症状に合わせた最適な治療法をご一緒に見つけましょう。
				</p>
			</div>

			<a href="/reservation/">
				<picture>
					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
				</picture>
			</a>
		
			<div class="box-white shadow  box-white-last box-case">
				<div class="title-underline">
					<h3 id="toc1-2">シミ・肝斑・くすみの症例写真</h3>
				</div>
				<div class="pc-flex">
					<div class="case-photo">
						<div class="title">
							<p>頬のシミ</p>
						</div>
						<div class="flex">
							<div>
								<div class="before">
									<p>Before</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cheeks-before.png" alt="頬のシミ">
							</div>
							<div>
								<div class="after">
									<p>After</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cheeks-after.png" alt="頬のシミ治療後">
							</div>
						</div>
					</div>
					<div class="case-photo case-photo2">
						<div class="title">
							<p>まゆげのシミ</p>
						</div>
						<div class="flex">
							<div>
								<div class="before">
									<p>Before</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/eyebrows-before.png" alt="まゆげのシミ">
							</div>
							<div>
								<div class="after">
									<p>After</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/eyebrows-after.png" alt="まゆげのシミ治療後">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc2">
					<span class="sub">シミ・肝斑・くすみの</span>
					<span class="main blue">原因を知って正しくケアする</span>
				</h2>
			</div>
			<div class="care">
				<div class="title">
					<div class="cause">
						<p>原因<br>
							その1
						</p>
					</div>
					<h3 id="toc2-1">加齢による肌の変化・色素沈着</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cause1.png" alt="加齢による肌の変化・色素沈着">
					<p>シワやタルミと同様、シミやくすみも<strong>皮膚代謝や組織の機能低下</strong>が原因です。<br>
						加齢によって皮フ基底層の機能が低下することによって皮膚がはがれ生まれ変わる周期の速度（ターンオーバー）が徐々に遅くなっていきます。<br>
						<br>
						<strong>不要な（古い）角質も肌表面からはがれにくくなり、色素沈着やくすみ、毛穴のつまりなどが定着。</strong><br>
						<br>
						老化が進むと<strong>代謝そのものが悪くなる</strong>ので、トラブルがあっても回復しにくい肌質になるのです。
					</p>
				</div>
			</div>
			<div class="care">
				<div class="title">
					<div class="cause">
						<p>原因<br>
							その2
						</p>
					</div>
					<h3 id="toc2-2">紫外線による<br class="sp">シミ・くすみの悪化</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cause2.png" alt="紫外線によるシミ・くすみの悪化">
					<p>シミは、<strong>メラニンが表皮の一部に過剰に溜まった状態</strong>です。<br>
						このメラニンがじ増殖するきっかけや誘因となるのが紫外線です。<br>
						紫外線を浴びると、その影響から肌を守ろうとしてメラニン産生細胞であるメラノサイトが活性化し、メラニンを大量に放出してしまうのです。<br>
						<br>
						このメラニンの大量生成によって日焼けとなり、<strong>増加したメラニンが正常に代謝されず、表皮内に留まりシミやそばかす、くすみとなってしまう</strong>わけです。また日焼けを行うと<strong>皮膚が一種のヤケド状態</strong>となります。<br>
						<br>
						ヤケド状態が始まった後の皮膚は硬くなり角質が毛穴をふさぎ、毛穴のなかで炎症を起こしニキビが発生してしまいます。
					</p>
				</div>
			</div>
			<div class="care">
				<div class="title">
					<div class="cause">
						<p>原因<br>
							その3
						</p>
					</div>
					<h3 id="toc2-3">肌のお手入れ不足</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cause3.png" alt="肌のお手入れ不足">
					<p>加齢のほかに洗顔や水分補給等、毎日のスキンケアも皮膚細胞の代謝やターンオーバーのサイクルも左右します。<br>
						<br>
						<strong>メイクをしたままベッドに入るのは勿論問題外。</strong><br>
						半身浴などで、なるべくその日の疲れはその日のうちにとるよう心がけ、毛穴の汚れをさっぱりと流すのがポイントです。
					</p>
				</div>
			</div>
			<p style="font-family: serif; font-weight: bold; text-align: center;">これらの原因を踏まえた上で、<br class="sp">具体的な治療方法をご紹介します。</p>
		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<h2 id="toc3">
				<span class="sub">池袋サンシャイン美容外科で行う</span>
				<span class="main">シミ・肝斑・くすみ治療一覧</span>
          	</h2>
			<p style="text-align: center;">あなたの症状やお悩み別に<br class="sp">最適な改善方法をご紹介します。</p>
			<div class="list-of-treatments">
				<div class="title-underline">
					<h3 id="toc3-1">シミ取り・肝斑・くすみに<br class="sp">効果的な治療法一覧</h3>
				</div>

				<div class="flex">
					<div class="treatments">
						<div class="title-underline">
							<h4>レブライトレーザー治療</h4>
						</div>
						<ul>
							<li>年齢に伴い、シミが増えてきた</li>
							<li>薄いシミばかりで、治療を断られたことがある</li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/treatment-method1.png" alt="レブライトレーザー治療">
						<a href="#toc4" class="styled-button">
							<span class="button-text">詳細はこちら</span>
							<span class="arrow-icon"></span>
						</a>
					</div>
					<div class="treatments">
						<div class="title-underline">
							<h4>トレチノイン・ハイドロキノン</h4>
						</div>
						<ul>
							<li>日光を良く浴びてしまう</li>
							<li>日焼けをよくする</li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/treatment-method2.png" alt="トレチノイン・ハイドロキノン">
						<a href="#toc5" class="styled-button">
							<span class="button-text">詳細はこちら</span>
							<span class="arrow-icon"></span>
						</a>
					</div>
				</div>
				<div class="flex center">
					<div class="treatments">
						<div class="title-underline">
							<h4>プラセンタ療法</h4>
						</div>
						<ul>
							<li>加齢によるシミやくすみ</li>
							<li>集中的に治療したい</li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/treatment-method3.png" alt="プラセンタ療法">
						<a href="#toc7" class="styled-button">
							<span class="button-text">詳細はこちら</span>
							<span class="arrow-icon"></span>
						</a>
					</div>
					<div class="treatments">
						<div class="title-underline">
							<h4>ニンニク注射</h4>
						</div>
						<ul>
							<li>疲れが顔に出やすい</li>
							<li>二日酔いになりやすい</li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/treatment-method4.png" alt="ニンニク注射">
						<a href="#toc8" class="styled-button">
							<span class="button-text">詳細はこちら</span>
							<span class="arrow-icon"></span>
						</a>
					</div>
				</div>
				<div class="flex">
					<div class="treatments">
						<div class="title-underline">
							<h4>ビタミン注射</h4>
						</div>
						<ul>
							<li>お手入れをあまりしていない</li>
							<li>シミやくすみが少し気になる</li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/treatment-method5.png" alt="ビタミン注射">
						<a href="#toc9" class="styled-button">
							<span class="button-text">詳細はこちら</span>
							<span class="arrow-icon"></span>
						</a>
					</div>
					<div class="treatments treatments-last">
						<div class="title-underline">
							<h4>超音波導入</h4>
						</div>
						<ul>
							<li>顔がむくみやすい</li>
							<li>敏感肌でケミカルピーリングができない</li>
						</ul>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/treatment-method6.png" alt="超音波導入">
						<a href="#toc10" class="styled-button">
							<span class="button-text">詳細はこちら</span>
							<span class="arrow-icon"></span>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc4" class="blue">レブライトレーザーでの<br class="sp">シミ除去治療</h2>
			</div>
			<div class="title-underline">
				<h3 id="toc4-1">レブライトレーザーとは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/rev-light-laser.png" alt="レブライトレーザーとは" class="rev-light-laser">
				<p>米国サイノシュアー社製のQスイッチYagレーザーを照射することができる6代目の機種です。<br>
					照射できる波長は大きく<strong>2つ。</strong><br>
					<br>
					<strong>シミやそばかす、肝斑に有効な1064nmと、皮膚のより深い層にあるタトゥーやADMといったお悩みに効果的な532nm</strong>とがございます。<br>
					<br>
					また、従来のQスイッチYagレーザーと比べ、お肌表面に均等に照射されるため、痛みがき軽減されております。
				</p>
			</div>
			<div class="title-underline title-top">
				<h3 id="toc4-2">レブライトレーザーの特徴</h3>
			</div>
			<ul class="dot-list dot-list-small">
				<li>普段から日焼け止めをしていない</li>
				<li>年齢に伴い、シミが増えてきた</li>
				<li>両頬に左右対称でシミがある</li>
				<li>薄いシミばかりで、治療を断られたことがある</li>
				<li>タトゥーをレーザーで除去したい</li>
			</ul>
			<p>その他、お肌のあらゆるお悩みに対応することが可能です。</p>

			<div class="features features1 shadow">
				<div class="title-underline">
					<h4 class="blue"><span>レブライトレーザーの特徴&nbsp;①</span><br>
					面で照射することで<br class="sp">痛みが少ない施術が可能</h4>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/rev-eatures1.png" alt="レブライトレーザーの特徴①">
					<p>従来のQスイッチYagレーザーの場合、シミに対して出力の高い「点」で照射していくため、パワーが強すぎて炎症を起こしてしまったり、逆に充分に照射されないことで本来の効果が得られなかったりする場合がありました。<br>
						<br>
						レブライトレーザーでは、そういったQスイッチYagレーザーでのデメリットをカバーするため、<strong>「点」ではなくお肌の表「面」に対して照射。</strong>そうすることで、シミごとの照射ムラを無くし充分な出力のレーザー照射が可能になります。<br>
						<br>
						また、「面」で照射することで<strong>痛みの軽減に繋がっております。</strong>
					</p>
				</div>
			</div>
			<div class="features features2 shadow">
				<div class="title-underline">
					<h4 class="blue"><span>レブライトレーザーの特徴&nbsp;②</span><br>
					2つの波長のレーザーで<br class="sp">照射深度の調整が可能</h4>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/rev-eatures2.png" alt="レブライトレーザーの特徴②">
					<p>レブライトレーザーは、主に<strong>1064nmと532nm、2つの波長のレーザー照射が可能</strong>です。これによって、<br>
						<br>
						皮膚表面の<strong>浅い層にある老班（一般的なシミ）やそばかす・肝斑皮膚の深い層にあるタトゥーやADM</strong>への効果が発揮されます。<br>
						<br>
						また、深い層にアプローチすることで真皮層の組織に届き、お肌のハリアップ・ターンオーバー改善に伴う肌質の改善にもつながります。
					</p>
				</div>
			</div>

			<div class="table rev box-white-last">
				<div class="table-flex">
					<div class="table-item">
						<p>レブライトレーザー<br class="sp">（顔全体）</p>
					</div>
					<div class="table-label">
						<p>初回</p>
					</div>
					<div class="table-info">
						<p>45,600円</p>
					</div>
				</div>
				<div class="table-flex">
					<div class="table-item">
						<p>レブライトレーザー<br class="sp">（両頬）</p>
					</div>
					<div class="table-label">
						<p>初回</p>
					</div>
					<div class="table-info">
						<p>30,800円</p>
					</div>
				</div>
			</div>

			<div class="consultation-card-top">
				<a href="/reservation/">
					<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
					</picture>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-ivory" id="toc5">
		<div class="container">
			<div class="title-bar">
				<h2 class="blue">トレチノイン・ハイドロキノン<br class="sp">による<br class="pc">シミ改善</h2>
			</div>
			<div class="title-underline">
				<h3 id="toc5-1">トレチノインとは</h3>
			</div>
			<p>ビタミンA誘導体で、生理活性はビタミンAの約300倍あります。2～4週間で効果が出ます。</p>

			<div class="title-underline title-top">
				<h4>トレチノインの効果・特徴</h4>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/tretinoin.png" alt="トレチノイン" class="tre">
				<p><strong>角質をはがす。<br>
					表皮の細胞分裂を促し、皮膚を再生します（皮膚のターンオーバーの活性化）。</strong><br>
					<br>
					皮脂腺の働きを抑え、皮脂の分泌を抑える。<br>
					<strong>真皮でもコラーゲンの分泌を高め、長期的には皮膚のハリ、小ジワ（特に目の下のちりめんジワ等）の改善</strong>をもたらす。<br>
					表皮内でのヒアルロン酸などの粘液性物質の分泌を高め、皮膚をみずみずしくする。
				</p>
			</div>

			<div class="title-underline title-top">
				<h3 id="toc5-2">ハイドロキノンとは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/hydroquinone.png" alt="ハイドロキノン" class="hydro">
				<p>シミの原因であるメラニン色素の発生を抑制する効果があり、乳酸は角質をはがす作用があります。<br><br class="sp">
					このクリームは一般の美容液に含まれる肌を白くする成分（アルブチン、コウジ酸、米ぬかエキスなど）の約100倍近い薬理活性があります。当院では医師の管理のもと、強力な医療用美白剤として処方され約2～4週間で効果があらわれます。
				</p>
			</div>

			<div class="title-underline title-top">
				<h3 id="toc5-3">トレチノイン・ハイドロキノンの<br class="sp">効果と特徴</h3>
			</div>
			<p>お肌の若返り効果と美白効果で、<strong>あざ、シミ、そばかす、目のまわりの小ジワ、疣贅（ゆうぜい）、ニキビ、ニキビ痕などのあらゆる色素沈着症、老化した皮膚に効果</strong>があります。<br>
				<br>
				<strong>治療期間：約2～4週間で効果</strong>があらわれます。
			</p>

			<div class="box-white box-case">
				<div class="title-underline">
					<h4>トレチノインとハイドロキノンによる<br class="sp">改善</h4>
				</div>
				<div class="pc-flex">
					<div class="case-photo">
						<div class="title">
							<p>頬のシミ</p>
						</div>
						<div class="flex">
							<div>
								<div class="before">
									<p>Before</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cheeks-before.png" alt="頬のシミ">
							</div>
							<div>
								<div class="after">
									<p>After</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cheeks-after.png" alt="頬のシミ治療後">
							</div>
						</div>
					</div>
					<div class="case-photo case-photo2">
						<div class="title">
							<p>まゆげのシミ</p>
						</div>
						<div class="flex">
							<div>
								<div class="before">
									<p>Before</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/eyebrows-before.png" alt="まゆげのシミ">
							</div>
							<div>
								<div class="after">
									<p>After</p>
								</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/eyebrows-after.png" alt="まゆげのシミ治療後">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-white">
				<div class="title-underline">
					<h4>トレチノインとハイドロキノンの<br class="sp">治療概要</h4>
				</div>
				<div class="table tre-treatment">
					<div class="table-flex">
						<div class="table-label">
							<p>時間</p>
						</div>
						<div class="table-info">
							<p>施術自体は約30分。<br>
								施術前と後に入念な皮膚の持ち上げ具合について、患者様と打ち合わせを行います。
							</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
							<p>麻酔</p>
						</div>
						<div class="table-info">
							<p>なし</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
							<p>通院</p>
						</div>
						<div class="table-info">
							<p>必要なし</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
							<p>入浴・メイク</p>
						</div>
						<div class="table-info">
							<p>当日から可能</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
							<p>リスク・副作用</p>
						</div>
						<div class="table-info">
							<p>数日間の赤み・乾燥</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box-white box-white-last">
				<div class="title-underline sp-mini-subtitle">
					<h4>トレチノインとハイドロキノン<br class="sp">の料金</h4>
				</div>
				<div class="table tre-fee">
					<div class="table-item sp">
						<p>医療用シミ取りクリーム5点セット</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>医療用シミ取りクリーム5点セット</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>27,500円</p>
						</div>
					</div>
					<div class="table-item sp">
						<p>医療用トレチノインクリーム<br>
							（肌のターンオーバー促進剤）
						</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>医療用トレチノインクリーム<br>
								（肌のターンオーバー促進剤）
							</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>
					<div class="table-item sp">
						<p>医療用ハイドロキノンクリーム<br>
							（医療用強力美白剤）
						</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>医療用ハイドロキノンクリーム<br>
								（医療用強力美白剤）
							</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>
					<div class="table-item sp">
						<p>高濃度ビタミンCローション</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>高濃度ビタミンCローション</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>
					<div class="table-item sp">
						<p>医療用プラセンタローション(PHL)</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>医療用プラセンタローション(PHL)</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>
					<div class="table-item sp">
						<p>高濃度プラセンタクリーム(PHC)</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>高濃度プラセンタクリーム(PHC)</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc6" class="blue">トラネキサム酸で<br class="sp">肝斑・くすみ治療</h2>
			</div>

			<div class="title-underline title-top">
				<h3 id="toc6-1">肝斑とは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/woman.png" alt="30歳代と40歳代の女性" class="woman">
				<p><strong>30歳代と40歳代の女性に多くみられ、女性特有のシミの一種です。</strong><br>
					主な症状は目の下と頬に茶褐色の色素斑で、<strong>左右対称に地図のように現れ目の周囲が抜けることが特徴</strong>です。<br>
					<br>
					初期の症状は頻周辺にくすんだ感じが認められる程 度ですが、放っておくと次第に広がり、色も強くなり治りにくくなりますので早めの治療が必要です。<br>
					<br>
					紫外線の誘因により肝斑の患者さんは増強すると 言われていますので、<strong>日焼け止めは必要</strong>です。女性ホ ルモンのバランス・紫外線やストレスが影響すると 言われ、<strong>妊娠時や更年期、閉経前後、ピルの服用</strong>などに関係があると言われています。
				</p>
			</div>

			<div class="title-underline title-top">
				<h3 id="toc6-2">トラネキサム酸の効果と服用法</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/tranexamic-acid.png" alt="トラネキサム酸" class="tranexamic-acid">
				<p>シミ治療に用いられる内服薬で、特に<strong>肝斑に有効な治療薬</strong>です。<br>
					トランサミンは商品名で、正式には<strong>トラネキサム酸</strong>といいます。<br>
					<br>
					トラネキサム酸は抗プラスミン作用によりメラノサイト(色素細胞)の活性化を阻害しメラニン生成を防ぐと言われています。<br>
					<strong>特にイオン導入との併用治療が効果的です。1日3回1ヶ月分の処方が基準となります。</strong>
				</p>
			</div>

			<div class="box-white shadow box-white-last">
				<div class="title-underline sp-mini-subtitle">
					<h3>トランサミン(肝斑治療)の料金</h3>
				</div>
				<div class="table tre-fee">
					<div class="table-item sp">
						<p>トランサミン内服肝斑(かんぱん)治療</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>トランサミン内服<br>
								肝斑(かんぱん)治療
							</p>
						</div>
						<div class="table-label">
							<p>30日分</p>
						</div>
						<div class="table-info">
							<p>6,000円</p>
						</div>
					</div>
				</div>
			</div>
			<div class="consultation-card-top">
				<a href="/reservation/">
					<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
					</picture>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc7" class="blue">プラセンタ療法で<br class="sp">透明感アップ</h2>
			</div>
			<div class="title-underline">
				<h3 id="toc7-1">プラセンタ療法とは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/placenta-therapy1.png" alt="プラセンタ療法の画像" class="placenta-therapy">
				<p>プラセンタ療法とは、<strong>胎盤より抽出された有効成分(プラセンタ)による治療法</strong>です。患者様の症状によって、適切な投与を行います。また、他の療法と組み合わせて効果的な治療を行います。<br>
					<br>
					プラセンタは高純度な栄養素が集中し、胎児の発育成長に必要不可欠な胎盤抽出液の ことをいいます。たんぱく質や脂質、糖質の三大要素はもちろん、ビタミン、ミネラル、各種 酵素によって構成されています。<br>
					<br>
					クリーム(PHC)やローション(PHL)による方法と注射 による方法など目的にあわせて使用し、さまざまな効果が認められています。ホルモン治 療やステロイドと違うため、<strong>副作用はほとんどありませんし、急にやめたらどっとリバウンドがおこる心配もありません。20代～70代の方まで幅広く効果があります。</strong>
				</p>
			</div>
			<div class="pc-flex" style="margin-top: 40px;">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/placenta-therapy2.png" alt="プラセンタ療法の画像" class="placenta-therapy">
				<p>当院で使用するプラセンタは、人間の胎盤から抽出した厚生労働省認可の安全性の高い医薬品用です。化粧品に含まれているものとは違い、加熱処理をしているため、副作用や感染症の心配なく安心して治療をお受けいただきます。(※一般の化粧品に含まれているプラセンタの多くは、ウシ、ブタ、ヒツジから抽出しています。)<br>
					<br>
					注射の方法は、<strong>筋肉注射、一回静脈注射、点滴注射</strong>などの方法があります。プラセンタ療 法の目的などを考慮しながら最適な注射方法で行います。
				</p>
			</div>
			<div class="features features1">
				<div class="title-underline sp-mini-subtitle">
					<h4>プラセンタ療法により体の内側から<br class="sp">改善したい方</h4>
				</div>
				<p>体質改善には、プラセンタ注射がお勧めです。当院では特に、プラセンタ・ビタミン・にんにくやその他様々な栄養素をブレンドしたブレンド注射をご用意しております。ドクターとカウンセリングを受け、お体のお悩み別に、ご自身に最適なブレンド法をアドバイスいたします。</p>
				<div class="table pla">
					<div class="table-flex">
						<div class="table-label">
							<p>美白・美肌注射</p>
						</div>
						<div class="table-info">
							<p>衰えた肌を回復させ、美白・美肌へ導きます。<br class="pc">ビタミン+プラセンタ+タチオン配合</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
							<p>体力増強・<br class="sp">健康注射</p>
						</div>
						<div class="table-info">
							<p>夏バテ・季節の変わり目のダルさやインフルエンザ・風邪予防に最適。<br class="pc">にんにく+ビタミン+プラセンタ+強カミノファーゲンシー配合</p>
						</div>
					</div>
					<div class="table-flex">
						<div class="table-label">
							<p>欲張りパック</p>
						</div>
						<div class="table-info">
							<p>体力も増強させて、美容にも興味のある欲張りさんにお勧め。<br class="pc">にんにく+ビタミン+プラセンタ+強カミノファーゲンシー+タチオン配合</p>
						</div>
					</div>
				</div>
			</div>
			<div class="title-underline title-top">
				<h3 id="toc7-2">プラセンタ療法の治療概要</h3>
			</div>
			<div class="box-white">
				<div class="title-underline sp-mini-subtitle">
					<h4>プラセンタ療法の料金</h4>
				</div>
				<div class="table tre-fee">
					<div class="table-item sp">
						<p>プラセンタ（2アンプル）</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>プラセンタ（2アンプル）</p>
						</div>
						<div class="table-label">
							<p>５分</p>
						</div>
						<div class="table-info">
							<p>5,000円</p>
						</div>
					</div>
				</div>
			</div>
	
			<div class="box-white box-white-last">
				<div class="title-underline sp-mini-subtitle">
					<h4>プラセンタ療法を用いた<br class="sp">スキンケア改善をしたい方</h4>
				</div>
				<p>ヒト・プラセンタ(胎盤エキス)※を高濃度配合した化粧品です。保湿成分による優れたトリートメント効果で、しなやかでハリのある素肌を取り戻します。また新陳代謝が活発になるので、若々しいお肌を保持します。※現在、ヒトプラセンタを用いた治療が行えるのは、医療機関のみで、一般の化粧品サプリ等に含まれるほとんどのものは、ウシ・ブタ・ヒツジ等の動物のプラセンタです。</p>
				<h5 class="circle-heading">PHL高濃度プラセンタローション</h5>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/lotion.png" alt="PHL高濃度プラセンタローション" class="lotion">
					<p>高純度の栄養素が集中した<strong>胎盤抽出液「ヒトプラセンタ」を高濃度で配合。</strong>お肌にたっぷりと潤いを与え、<strong>肌本来のツヤ・ハリを取り戻し、透明感を引き出します。</strong><br>
						<br>
						このプラセンタを用いたイオン導入は、お肌の奥深くまで保湿効果をいきわたらせることが可能です。※医療用のため、冷蔵庫保管となります。
					</p>
				</div>
				<div class="table pla-merchandise">
					<div class="table-item sp">
						<p>高濃度プラセンタローション</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>高濃度プラセンタローション</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>
				</div>
				<p class="annotation">※初回トライアル価格(会計時にお申し付け下さい)</p>

				<h5 class="circle-heading">PHC高濃度プラセンタ保湿クリーム</h5>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/cream.png" alt="PHC高濃度プラセンタ保湿クリーム" class="cream">
					<p><strong>「ヒトプラセンタ」を高濃度配合。</strong><br>
						保湿成分による優れたトリートメント効果で、<strong>しなやかでハリのある素肌を取り戻してくれます。</strong>ケミカルピーリングやレーザー照射をされて極度の乾燥状態になっている方には特にお勧めです。<br>
						<br>
						<strong>新陳代謝が活発</strong>になるので、<strong>若々しいお肌を保持</strong>します。
					</p>
				</div>
				<div class="table pla-merchandise">
					<div class="table-item sp">
						<p>高濃度プラセンタクリーム</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>高濃度プラセンタクリーム</p>
						</div>
						<div class="table-label">
							<p>１か月分</p>
						</div>
						<div class="table-info">
							<p>5,500円</p>
						</div>
					</div>
				</div>
				<p class="annotation">※初回トライアル価格(会計時にお申し付け下さい)</p>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc8" class="blue">ニンニク注射で肌疲労を改善</h2>
			</div>
			<div class="title-underline title-top">
				<h3 id="toc8-1">ニンニク注射とは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/garlic-injection.png" alt="ニンニク注射" class="garlic-injection">
				<p>スポーツ選手やハードワーカーに利用者が多いニンニク注射は、<strong>疲労回復、疲れやだるさ、倦怠感の回復に即効性を求める方に大変有効</strong>です。<br>
					<br>
					ニンニク注射といっても、本当にニンニクが入っているわけではありません。主成分はビタミンB群(B1やB2やCなど)とグリコーゲンで、注射するとニンニクのような香りがすることから名付けられました。<strong>血流、新陳代謝が促進されるため肉体疲労や栄養補給をはじめ、肩凝り、腰痛、肌の回復</strong>につながります。<br>
					<br>
					ビタミンB1は食事やサプリメントでもある程度補うことはできますが、症状が強い場合や即効性を期待する場合は注射による補充が効果的です。
				</p>
			</div>
			<div class="box-white shadow box-white-last">
				<div class="title-underline sp-mini-subtitle">
					<h4>ニンニク注射の料金</h4>
				</div>
				<div class="table tre-fee">
					<div class="table-item sp">
						<p>ニンニク注射（2アンプル）</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>ニンニク注射（2アンプル）</p>
						</div>
						<div class="table-label">
							<p>５分</p>
						</div>
						<div class="table-info">
							<p>5,000円</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc9" class="blue">ビタミン注射で<br class="sp">内側からシミ予防</h2>
			</div>
			<div class="title-underline title-top">
				<h3 id="toc9-1">ビタミン注射の美容効果とは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/vitamin-injection.png" alt="ビタミン注射" class="vitamin-injection">
				<p>一度に多くのビタミン剤等のサプリメントを飲んでも、なかなか腸からの吸収が悪く、血液の中にビタミン成分を効率的に含めることが難しいものです。しかし、注射や点滴で直接体に循環させれば、<strong>有効成分の吸収を高めることができ、体の中から元気も美肌も手に入れることができます。</strong><br>
					美容ビタミンと言われる<strong>ビタミンC・ビタミンB群</strong>を中心に、その他お肌の調子を整えるビタミン類を独自の配合で加えました。<strong>お肌の調子を整えたい方、ニキビ・シミ・シワが気になる方におすすめ</strong>です。<br>
					<br>
					<strong>美白、ニキビ、シミ、シワ、肌荒れ、そばかす、皮膚の老化防止に定期的に続けると効果的</strong>です。
				</p>
			</div>
			<div class="box-white shadow box-white-last">
				<div class="title-underline sp-mini-subtitle">
					<h4>ビタミン注射の料金</h4>
				</div>
				<div class="table tre-fee">
					<div class="table-item sp">
						<p>ビタミン注射（1アンプル）</p>
					</div>
					<div class="table-flex">
						<div class="table-item pc">
							<p>ビタミン注射（1アンプル）</p>
						</div>
						<div class="table-label">
							<p>５分</p>
						</div>
						<div class="table-info">
							<p>3,000円</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc10" class="blue">超音波導入<br class="sp">（スキンスクライバー）<br class="sp">で<br class="pc">くすみ除去</h2>
			</div>
			<div class="title-underline title-top">
				<h3 id="toc10-1">超音波導入とは</h3>
			</div>
			<div class="pc-flex">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/ultrasound.png" alt="超音波導入" class="ultrasound">
				<p>超音波導入法とは、通常人間が聞き取ることのできない周波数の音ですが、気体・液体・固体の中を伝わり、指向性も高いため<strong>多種多様なトラブルに対し効果的に改善を促進させます。</strong>超音波の物理的な振動を与えることで、<strong>深部温熱効果とキャビテーション効果 (空洞化現象一皮膚にトンネルができる)</strong>を起こし、皮膚細胞を活性化させると共に有効成分の浸透を促進します。<br>
					<br>
					イオン導入のみでは、導入しきれなかった大きな分子のものやイオン化されない<strong>分子の導入にも効果的</strong>です。超波導入にて<strong>4種類の効果を一度に手にすることができます。</strong>
				</p>
			</div>
			<div class="box-white shadow box-white-last">
				<div class="title-underline">
					<h4>超音波導入(スキンスクライバー)の4種類の効果</h4>
				</div>
			
				<div class="effect">
					<p class="effect-number">01</p>
					<h5 class="effect-title">お肌の洗浄と<br class="sp">ウォータピーリング</h5>
				</div>
				<p>一般家庭で行うクレンジングとは異なり、毛穴や皮膚の汚れまで洗浄することができます。肌が弱くケミカルピーリングが向かない方には、精製水によるウォーターピーリングが可能です。肌に負担をかけずに行えますので赤みも出にくくお肌に優しい洗浄ができます。肌本来の再生力を高めることで、お肌に潤いとハリを与えます。</p>
				<div class="effect">
					<p class="effect-number">02</p>
					<h5 class="effect-title">角質除去</h5>
				</div>
				<p>ケミカルピーリングにて肌を柔らかくした方は毛穴の角質が浮き出て取れやすい状態になっています。そこですかさずスキンスクライバーの角質除去を行うことで、毛穴に負担をかけず肌のくすみの原因の角質汚れと黒ずみを除去することができます。角質汚れが取れたあなたの肌は”くすみ”がなくなり透明感のある肌をご実感頂けます。</p>
				<div class="effect">
					<p class="effect-number">03</p>
					<h5 class="effect-title">超音波導入によるお肌の<br class="sp">ふっくら効果</h5>
				</div>
				<p>超音波の物理的な振動を与えることで、深部温熱効果とキャビテーション効果(空洞化現象一皮膚にトンネルができる)を起こし、皮膚細胞を活性化させると共に超音波でミスト化したビタミンC成分の浸透を促進します。イオン導入のみでは、導入しきれなかった大きな分子のものやイオン化されない分子の導入にも効果的です。</p>
				<div class="effect">
					<p class="effect-number">04</p>
					<h5 class="effect-title">パッティングによるお肌の<br class="sp">引締め効果</h5>
				</div>
				<p>角質除去したお肌の毛穴をパッティングにより引締め、キメを整えます。お顔全体をパッティングすることで、たるんだお肌を引き締めるリフティング効果を得られます。</p>
			</div>

			<div class="consultation-card-top2">
				<a href="/reservation/">
					<picture>
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
					</picture>
				</a>
			</div>
		</div>
	</section>

	<section class="bg-ivory" id="snsreport">
        <div class="container">
          <h2 id="toc11">
            <span class="sub">シミ・肝班・くすみ治療の</span>
            <span class="main">体験レポート</span>
          </h2>
        </div>
        <div class="box">
          <div class="container item">
            <div class="flex">
			<img src="<?php echo get_template_directory_uri(); ?>/img/operations/placenta/instagram.png" alt="instagram" class="instagram-img">
              <div>
                <h3 id="toc11-1">Instagram</h3>
                <p>
					シミ・肝班・くすみ治療の実際の様子や<br>
					ビフォーアフターをご紹介しています。
                </p>
                <a href="https://www.instagram.com/ikesunshine331244?utm_source=ig_web_button_share_sheet&igsh=czhpOTc0cmxpaWYz">公式インスタグラムへ</a>
              </div>
            </div>
          </div>
        </div>
	</section>

	<section class="bg-white"  id="access">
		<div class="container">
			<div class="pc-flex" style="align-items: stretch;">
				<div class="map-wrapper pc">
				    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.811877327141!2d139.71221927578983!3d35.73084487257124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751616356535!5m2!1sja!2sjp"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="access">
					<h2 id="toc12">アクセス</h2>
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
<!--/#mainContents-->
<!--/ここまでコンテンツ-->
</section>

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
	function handleConsultationClick() {
		// Add your consultation booking logic here
		alert('無料カウンセリングのお申し込みありがとうございます。\n詳細についてはお電話でご連絡いたします。');
		
		// Example: redirect to booking page
		// window.location.href = '/booking';
		
		// Example: open phone dialer
		// window.location.href = 'tel:0120-xxx-xxx';
	}

	// Add smooth hover effects
	document.addEventListener('DOMContentLoaded', function() {
		const button = document.querySelector('.cta-button');
		
		button.addEventListener('mouseenter', function() {
			this.style.transform = 'translateY(-2px)';
		});
		
		button.addEventListener('mouseleave', function() {
			this.style.transform = 'translateY(0)';
		});
	});
</script>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>

<?php get_footer(); ?>