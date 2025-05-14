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

<div id="pageTitle" class="placenta">
<h1>シミ・肝班・くすみ治療</h1>
<p>医療用レブライトレーザー<br><span class="price-setting">両頬/初回<br clear="sp"><span class="fee">30,800円～</span></span></p>
</div>

<section class="secBox placenta">
	<section class="secBox top-menu">
		<div class="topNav">
			<ul>
				<li class="heightAjst"><a href="#toc2">シミ・肝斑・くすみの原因とは？</a></li>
				<li class="heightAjst"><a href="#toc3">シミ・肝斑・くすみの改善方法</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br class="pc">申し込み</a></li>
			</ul>
		</div>
	</section>

	<section class="case-photo">
		<h2 class="lineTitle ">シミ・肝斑・くすみ症例写真</h2>
		<div class="case-photo-list">
			<div class="c-photo">
				<img src="/wp-content/uploads/ISC-_21simikusumi_03.png" alt="たるみのリフトアップ症例写真" loading="lazy" width="520" height="208">
			</div>
			<div class="c-photo">
				<img src="/wp-content/uploads/ISC-_21simikusumi_04.png" alt="男性のたるみのリフトアップ症例写真" loading="lazy" width="520" height="208">
			</div>
		</div>
		<!-- <div class="internal-link"><a href="#toc4">詳細はこちら</a></div> -->
	</section>

	<section id="toc2" class="clr bg-spot-wallpaper">
		<h2 class="lineTitle">シミ・肝斑・くすみの原因とは？</h2>
		<div class="cause-box">
			<div class="cause-box-left">
				<h3><span class="att">原因</span>その１：老化現象</h3>
				<p>シワやタルミと同様、シミやくすみも皮膚代謝や組織の機能低下が原因です。加齢によって皮フ基底層の機能が低下することによって皮膚がはがれ生まれ変わる周期の速度（ターンオーバー）が徐々に遅くなっていきます。</p>
				<p><span class="att">不要な（古い）角質も肌表面からはがれにくくなり、色素沈着やくすみ、毛穴のつまりなどが定着。</span></p>
				<p>老化が進むと代謝そのものが悪くなるので、トラブルがあっても回復しにくい肌質になるのです。</p>
			</div>
			<div class="cause-box-right">
				<img src="/wp-content/uploads/ISC-_21simikusumi_05.jpg" alt="老化現象" loading="lazy" width="280" height="226">
			</div>
		</div>
		<div class="cause-box">
			<div class="cause-box-left">
				<h3><span class="att">原因</span>その２：紫外線による日焼け</h3>
				<p>シミは、メラニンが表皮の一部に過剰に溜まった状態です。<br>
					このメラニンがじ増殖するきっかけや誘因となるのが紫外線です。<br>
					紫外線を浴びると、その影響から肌を守ろうとしてメラニン産生細胞であるメラノサイトが活性化し、メラニンを大量に放出してしまうのです。<br>
					このメラニンの大量生成によって日焼けとなり、<span class="att">増加したメラニンが正常に代謝されず、表皮内に留まりシミやそばかす、くすみとなってしまう</span>わけです。また日焼けを行うと皮膚が一種のヤケド状態となります。</p>
					<p>ヤケド状態が始まった後の皮膚は硬くなり角質が毛穴をふさぎ、<span class="att">毛穴のなかで炎症を起こしニキビが発生</span>してしまいます。</p>
				</div>
				<div class="cause-box-right">
					<img src="/wp-content/uploads/ISC-_21simikusumi_29.jpg" alt="紫外線による日焼け" loading="lazy" width="280" height="226">
				</div>
			</div>
			<div class="cause-box">
				<div class="cause-box-left">
					<h3><span class="att">原因</span>その３：肌のお手入れ不足</h3>
					<p>加齢のほかに洗顔や水分補給等、毎日のスキンケアも皮膚細胞の代謝やターンオーバーのサイクルも左右します。<br>
						メイクをしたままベッドに入るのは勿論問題外。<br>
					半身浴などで、なるべくその日の疲れはその日のうちにとるよう心がけ、毛穴の汚れをさっぱりと流すのがポイントです。</p>
				</div>
				<div class="cause-box-right">
					<img src="/wp-content/uploads/ISC-_21simikusumi_07.jpg" alt="肌のお手入れ不足" loading="lazy" width="280" height="226">
				</div>
			</div>
		</section>

		<section id="toc3" class="clr bg-reddish-brown">
			<h2 class="lineTitle-white">シミ・肝斑・くすみの改善方法</h2>
			<p class="taC white-color">あなたの症状やお悩み別に最適な改善方法をご紹介します。</p>
			<div class="upper-row">
					<ul>
						<li>年齢に伴い、シミが増えてきた</li>
						<li>薄いシミばかりで、治療を断られたことがある</li>
					</ul>
				</div>
				<div class="lower-row taC"><a href="#Revlitelaser">レブライトレーザー治療</a></div>
			<div class="flex-box wrap">
				<div class="Improvement">
					<div class="upper-row">
						<ul>
							<li>日光を良く浴びてしまう</li>
							<li>日焼けをよくする</li>
						</ul>
					</div>
					<div class="lower-row"><a href="#Tretinoin-hydroquinone">トレチノイン・ハイドロキノン</a></div>
				</div>
				<div class="Improvement">
					<div class="upper-row">
						<ul>
							<li>加齢によるシミやくすみ</li>
							<li>集中的に治療したい</li>
						</ul>
					</div>
					<div class="lower-row"><a href="#Placenta">プラセンタ療法</a></div>
				</div>
				<div class="Improvement">
					<div class="upper-row">
						<ul>
							<li>疲れが顔に出やすい</li>
							<li>二日酔いになりやすい</li>
						</ul>
					</div>
					<div class="lower-row"><a href="#Garlic">ニンニク注射</a></div>
				</div>
				<div class="Improvement">
					<div class="upper-row">
						<ul>
							<li>お手入れをあまりしていない</li>
							<li>シミやくすみが少し気になる</li>
						</ul>
					</div>
					<div class="lower-row"><a href="#Vitamin">ビタミン注射</a></div>
				</div>
				<div class="Improvement">
					<div class="upper-row">
						<ul>
							<li>顔がむくみやすい</li>
							<li>敏感肌でケミカルピーリングができない</li>
						</ul>
					</div>
					<div class="lower-row"><a href="#Ultrasonic-introduction">超音波導入</a></div>
				</div>
			</div>
		</section>
		<section class="clr" style="margin-top: 4em;">
			<h3 id="Revlitelaser" class="reddish-brown-title">レブライトレーザー治療</h3>
			<div class="flex-box">
				<div class="flex-box-text w60">
					<h4 class="nolineTitle">レブライトレーザーとは</h4>
					<p>米国サイノシュアー社製のQスイッチYagレーザーを照射することができる6代目の機種です。<br>
						照射できる波長は大きく2つ。<br>
						<span class="att">シミやそばかす、肝斑に有効</span>な1064nmと、<span class="att">皮膚のより深い層にあるタトゥーやADMといったお悩みに効果的</span>な532nmとがございます。また、従来のQスイッチYagレーザーと比べ、お肌表面に均等に照射されるため、痛みがき軽減されております。</p>
				</div>
				<div class="flex-box-img">
					<img src="/wp-content/uploads/ISC-_21simikusumi_09.png" alt="レブライトレーザー">
				</div>
				<div class="flex-box-text w100">
					<h4 class="nolineTitle">治療に向いている方</h4>
					<ul class="square">
						<li>普段から<span class="att">日焼け止めをしていない</span></li>
						<li><span class="att">年齢に伴い</span>、シミが増えてきた</li>
						<li><span class="att">両頬に左右対称でシミ</span>がある</li>
						<li>薄いシミばかりで、<span class="att">治療を断られたことがある</span></li>
						<li><span class="att">タトゥー</span>をレーザーで除去したい</li>
					</ul>
					<p>その他、お肌のあらゆるお悩みに対応することが可能です。</p>
				</div>
			</div>
	</section>
	<section class="clr bg-beige">
			<div class="beige-box">
               <h3 class="white-title">レブライトレーザーの特徴 ①</h3>
               <div class="flex-box">
               	<div class="flex-text">
               		<h4 class="nolineTitle">点ではなく、面で照射することが可能</h4>
               		<p>従来のQスイッチYagレーザーの場合、シミに対して出力の高い「点」で照射していくため、パワーが強すぎて炎症を起こしてしまったり、逆に充分に照射されないことで本来の効果が得られなかったりする場合がありました。<br>
               		レブライトレーザーでは、そういったQスイッチYagレーザーでのデメリットをカバーするため、「点」ではなくお肌の表「面」に対して照射。そうすることで、シミごとの照射ムラを無くし充分な出力のレーザー照射が可能になります。また、「面」で照射することで痛みの軽減に繋がっております。</p>
               	</div>
               	<div class="flex-img">
               		<img src="/wp-content/uploads/ISC-_21simikusumi_10.png" alt="レブライトレーザーの特徴">
               	</div>
               </div>
               <h3 class="white-title">レブライトレーザーの特徴 ②</h3>
               <div class="flex-box">
               	<div class="flex-img pc">
               		<img src="/wp-content/uploads/ISC-_21simikusumi_11.png" alt="肌の断面図">
               	</div>
               	<div class="flex-text">
               		<h4 class="nolineTitle">2つの波長のレーザーで<br>照射深度の調整が可能</h4>
               		<p>レブライトレーザーは、主に1064nmと532nm、2つの波長のレーザー照射が可能です。これによって、</p>
               		<ul>
               			<li>皮膚表面の浅い層にある老班（一般的なシミ）やそばかす・肝斑</li>
               			<li>皮膚の深い層にあるタトゥーやADM</li>
               		</ul>
               		<p>への効果が発揮されます。<br>
               		また、深い層にアプローチすることで真皮層の組織に届き、お肌のハリアップ・ターンオーバー改善に伴う肌質の改善にもつながります。</p>
               	</div>
               	<div class="flex-img sp">
               		<img src="/wp-content/uploads/ISC-_21simikusumi_11.png" alt="肌の断面図">
               	</div>
               </div>
			</div>
		</section>
		<section class="clr">
			<table class="price-table pc-table">
				<tbody>
					<tr>
						<th style="width: 50%;">レブライトレーザー（顔全体）</th>
						<td style="width: 10%;"></td>
						<th style="width: 15%;">初回</th>
						<td style="width: 25%;">45,600円</td>
					</tr>
					<tr>
						<th>レブライトレーザー（両頬）</th>
						<td></td>
						<th>初回</th>
						<td>30,800円</td>
					</tr>
				</tbody>
			</table>
			<table class="price-table sp-table">
				<tbody>
					<tr>
						<th colspan="3">レブライトレーザー（顔全体）</th>
					</tr>
					<tr>
						<td></td>
						<th>初回</th>
						<td>45,600円</td>
					</tr>
					<tr>
						<th colspan="3">レブライトレーザー（両頬）</th>
					</tr>
					<tr>
						<td></td>
						<th>初回</th>
						<td>30,800円</td>
					</tr>
				</tbody>
			</table>
			<h3 id="Tretinoin-hydroquinone" class="reddish-brown-title">トレチノインクリーム</h3>
			<div class="flex-box">
				<div class="flex-box-text w60">
					<h4 class="nolineTitle">トレチノインとは</h4>
					<p>ビタミンA誘導体で、生理活性はビタミンAの約300倍あります。2～4週間で効果が出ます。</p>
				</div>
				<div class="flex-box-img">
					<img src="/wp-content/uploads/ISC-_21simikusumi_12.png" alt="トレチノインとは">
				</div>
				<div class="flex-box-text w100">
					<h4 class="nolineTitle">効果、特徴</h4>
					<p>角質をはがす。<br>
						表皮の細胞分裂を促し、皮膚を再生します（皮膚のターンオーバーの活性化）。<br>
					皮脂腺の働きを抑え、皮脂の分泌を抑える。<br>
				真皮でもコラーゲンの分泌を高め、長期的には皮膚のハリ、小ジワ（特に目の下のちりめんジワ等）の改善をもたらす。<br>
			    表皮内でのヒアルロン酸などの粘液性物質の分泌を高め、皮膚をみずみずしくする。</p>
				</div>
			</div>
			<h3 class="reddish-brown-title">ハイドロキノン乳酸クリーム</h3>
			<div class="flex-box">
				<div class="flex-box-text w60">
					<h4 class="nolineTitle">ハイドロキノンとは</h4>
					<p>シミの原因であるメラニン色素の発生を抑制する効果があり、乳酸は角質をはがす作用があります。<br>
					このクリームは一般の美容液に含まれる肌を白くする成分（アルブチン、コウジ酸、米ぬかエキスなど）の約100倍近い薬理活性があります。当院では医師の管理のもと、強力な医療用美白剤として処方され約2～4週間で効果があらわれます。</p>
				</div>
				<div class="flex-box-img">
					<img src="/wp-content/uploads/ISC-_21simikusumi_13.png" alt="ハイドロキノン乳酸クリーム">
				</div>
				<div class="flex-box-text w100">
					<h4 class="nolineTitle">トレンチド・ハイドロキノンの効果</h4>
					<p>お肌の若返り効果と美白効果で、あざ、シミ、そばかす、目のまわりの小ジワ、疣贅（ゆうぜい）、ニキビ、ニキビ痕などのあらゆる色素沈着症、老化した皮膚に効果があります。<br>
					治療期間：約2～4週間で効果があらわれます。</p>
				</div>
			</div>
		</section>
			<section class="clr bg-beige">
				<div class="case-photo-list">
					<div class="c-photo">
						<img src="/wp-content/uploads/ISC-_21simikusumi_14.png" alt="目じりのシミ" loading="lazy" width="520" height="208">
						<p>トレチノインとハイドロキノンによる改善</p>
					</div>
					<div class="c-photo">
						<img src="/wp-content/uploads/ISC-_21simikusumi_15.png" alt="まゆげのシミ" loading="lazy" width="520" height="208">
						<p>トレチノインとハイドロキノンによる改善</p>
					</div>
				</div>
		</section>
		<section class="clr">
			<h2 class="lineTitle">治療概要</h2>
			<table class="overview">
				<tbody>
					<tr>
						<th>時間</th>
						<td>施術自体は約３０分。<br>
							施術前と後に入念な皮膚の持ち上げ具合について、患者様と打ち合わせを行います。
						</td>
					</tr>
					<tr>
						<th>麻酔</th>
						<td>なし</td>
					</tr>
					<tr>
						<th>通院</th>
						<td>必要なし</td>
					</tr>
					<tr>
						<th>リスク・副作用</th>
						<td>数日間の赤み・乾燥</td>
					</tr>
					<tr>
						<th>入浴・メイク</th>
						<td>当日から可能です。</td>
					</tr>
				</tbody>
			</table>
			<h2 class="lineTitle">料金</h2>
			<table class="price-table pc-table">
				<tbody>
					<tr>
						<th>医療用シミ取りクリーム5点セット</th>
						<td></td>
						<th>１か月分</th>
						<td>27.500円</td>
					</tr>
					<tr>
						<th>医療用トレチノインクリーム</th>
						<td>肌のターンオーバー促進剤</td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th>医療用ハイドロキノンクリーム</th>
						<td>医療用強力美白剤</td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th>高濃度ビタミンCローション</th>
						<td></td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th>医療用プラセンタローション(PHL)</th>
						<td></td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th>高濃度プラセンタクリーム(PHC)</th>
						<td></td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
				</tbody>
			</table>
			<table class="price-table sp-table">
				<tbody>
					<tr>
						<th colspan="3">医療用シミ取りクリーム5点セット</th>
					</tr>
					<tr>
						<td></td>
						<th>１か月分</th>
						<td>27,500円</td>
					</tr>
					<tr>
						<th colspan="3">医療用トレチノインクリーム</th>
					</tr>
					<tr>
						<td>肌のターンオーバー促進剤</td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th colspan="3">医療用ハイドロキノンクリーム</th>
					</tr>
					<tr>
						<td>医療用強力美白剤</td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th colspan="3">高濃度ビタミンCローション</th>
					</tr>
					<tr>
						<td></td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th colspan="3">医療用プラセンタローション(PHL)</th>
					</tr>
					<tr>
						<td></td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
					<tr>
						<th colspan="3">高濃度プラセンタクリーム(PHC)</th>
					</tr>
					<tr>
						<td></td>
						<th>１か月分</th>
						<td>5,500円</td>
					</tr>
				</tbody>
			</table>
			<h3 class="reddish-brown-title">トランサミン(肝斑治療) </h3>
			<div class="flex-box">
				<div class="flex-box-text w60">
					<h4 class="nolineTitle">肝斑とは</h4>
					<p>30歳代と40歳代の女性に多くみられ、女性特有のシミの一種です。<br>
					   主な症状は目の下と頬に茶褐色の色素斑で、左右対称に地図のように現れ目の周囲が抜けることが特徴です。<br>
					   初期の症状は頻周辺にくすんだ感じが認められる程 度ですが、放っておくと次第に広がり、色も強くなり治りにくくなりますので早めの治療が必要です。<br>
					   紫外線の誘因により肝斑の患者さんは増強すると 言われていますので、日焼け止めは必要です。女性ホ ルモンのバランス・紫外線やストレスが影響すると 言われ、妊娠時や更年期、閉経前後、ピルの服用な どに関係があると言われています。</p>
				</div>
				<div class="flex-box-img">
					<img src="/wp-content/uploads/ISC-_21simikusumi_SP15.png" alt="肝斑治療">
				</div>
				<div class="flex-box-text w100">
					<h4 class="nolineTitle">トランサミンとは</h4>
					<p>トランサミンはしみ治療に用いられる内服薬で、特に肝斑に有効な治療薬です。<br>
						トランサミンは商品名で、正式にはトラネキサム酸といいます。<br>
						トラネキサム酸は抗プラスミン作用によりメラノサイ ト(色素細胞)の活性化を阻害しメラニン生成を防ぐと言われています。<br>
						特にイオン導入との併用治療が効果的です。 1日3回1ヶ月分の処方が基準となります。 </p>
				</div>
			</div>
			<table class="price-table pc-table">
				<tbody>
					<tr>
						<th>トランサミン内服(肝斑治療) </th>
						<td>肝斑(かんぱん)治療</td>
						<th>30日分</th>
						<td>6,000円</td>
					</tr>
				</tbody>
			</table>
			<table class="price-table sp-table">
				<tbody>
					<tr>
						<th colspan="3">トランサミン内服(肝斑治療) </th>
					</tr>
					<tr>
						<td>肝斑(かんぱん)治療</td>
						<th>30日分</th>
						<td>6,000円</td>
					</tr>
				</tbody>
			</table>
			<h3 id="Placenta" class="reddish-brown-title">プラセンタ療法</h3>
			<div class="flex-box">
				<div class="flex-img">
					<img src="/wp-content/uploads/ISC-_21simikusumi_18.png" alt="女性" class="pc">
					<img src="/wp-content/uploads/ISC-_21simikusumi_SP16.png" alt="プラセンタ" class="sp">
				</div>
				<div class="flex-text">
					<h4 class="nolineTitle">プラセンタ療法とは</h4>
					<p><span class="att">プラセンタ療法</span>とは、胎盤より抽出された有効成分(プラセンタ)による治療法です。<br>
					患者様の症状によって、適切な投与を行います。また、他の療法と組み合わせて効果的な治療を行います。</p>
					<p>プラセンタは高純度な栄養素が集中し、胎児の発育成長に必要不可欠な胎盤抽出液の ことをいいます。たんぱく質や脂質、糖質の三大要素はもちろん、ビタミン、ミネラル、各種 酵素によって構成されています。クリーム(PHC)やローション(PHL)による方法と注射 による方法など目的にあわせて使用し、さまざまな効果が認められています。ホルモン治 療やステロイドと違うため、<span class="att">副作用はほとんどありませんし、急にやめたらどっとリバウンドがおこる心配もありません。</span>20代～70代の方まで幅広く効果があります。</p>
					<p>当院で使用するプラセンタは、<span class="att">人間の胎盤</span>から抽出した厚生労働省認可の安全性の高い医薬品用です。化粧品に含まれているものとは違い、加熱処理をしているため、副作用や感染症の心配なく安心して治療をお受けいただきます。(※一般の化粧品に含まれているプラセンタの多くは、ウシ、ブタ、ヒツジから抽出しています。)<br>
					注射の方法は、筋肉注射、一回静脈注射、点滴注射などの方法があります。プラセンタ療 法の目的などを考慮しながら最適な注射方法で行います。</p>
				</div>
			</div>
                <h5 class="black-title">プラセンタ療法により体の内側から改善したい方</h5>
				<div class="flex-box">
					<div class="flex-seven">
						<p>体質改善には、プラセンタ注射がお勧めです。当院では特に、プラセンタ・ビタミン・にんにくやその他様々な栄養素をブレンドしたブレンド注射をご用意しております。<br>ドクターとカウンセリングを受け、お体のお悩み別に、ご自身に最適なブレンド法をアドバイスいたします。</p>
						<table class="effect">
							<tbody>
								<tr>
									<th>美白・美肌注射</th>
									<td>衰えた肌を回復させ、美白・美肌へ導きます。 ビタミン+プラセンタ+タチオン配合</td>
								</tr>
								<tr>
									<th>体力増強・<br class="sp">健康注射</th>
									<td>夏バテ・季節の変わり目のダルさやインフルエンザ・風邪予防に最適。にんにく+ビタミン+プラセンタ+強カミノファーゲンシー配合</td>
								</tr>
								<tr>
									<th>欲張りパック</th>
									<td>体力も増強させて、美容にも興味のある欲張りさんにお勧め。にんにく+ビタミン+プラセンタ+強カミノファーゲンシー+タチオン配合</td>
								</tr>
							</tbody>
						</table>
					</div>
                    <div class="flex-three">
                    	<img src="/wp-content/uploads/ISC-_21simikusumi_20.png" alt="女性">
                    </div>
				</div>
				<table class="price-table pc-table">
					<tbody>
						<tr>
							<th>プラセンタ</th>
							<td>2アンプル</td>
							<th>５分</th>
							<td>5,000円</td>
						</tr>
					</tbody>
				</table>
				<table class="price-table sp-table">
					<tbody>
						<tr>
							<th colspan="3">プラセンタ</th>
						</tr>
						<tr>
							<td>2アンプル</td>
							<th>５分</th>
							<td>5,000円</td>
						</tr>
					</tbody>
				</table>
                <h5 class="black-title">プラセンタ療法を用いたスキンケア改善をしたい方</h5>
                <div class="flex-box">
                	<div class="flex-seven">
                		<p>ヒト・プラセンタ(胎盤エキス)※を高濃度配合した化粧品です。保湿成分による優れたトリートメント効果で、しなやかでハリのある素肌を取り戻します。また新陳代謝が活発になるので、若々しいお肌を保持します。<br>
                		※現在、ヒトプラセンタを用いた治療が行えるのは、医療機関のみで、一般の化粧品サプリ等に含まれるほとんどのものは、ウシ・ブタ・ヒツジ等の動物のプラセンタです。</p>
                	</div>
                	<div class="flex-three">
                		<img src="/wp-content/uploads/ISC-_21simikusumi_21.png" alt="女性">
                	</div>
                </div>
                <hr class="brown-line">
                <div class="flex-box">
                	<div class="flex-box-title w100">
                		<p class="brown-title">PHL高濃度プラセンタローション</p>
                	</div>
                	<div class="flex-box-img">
                		<img src="/wp-content/uploads/ISC-_21simikusumi_22.png" alt="PHL高濃度プラセンタローション" style="height: 160px;">
                	</div>
                	<div class="flex-box-text w60">
                		<p>高純度の栄養素が集中した胎盤抽出液「ヒトプラセンタ」を高濃 度で配合。お肌にたっぷりと潤いを与え、肌本来のツヤ・ハリを取り戻し、透明感を引き出します。<br>
                		このプラセンタを用いたイオン導入は、お肌の奥深くまで保湿効果をいきわたらせることが可能です。<br>
                	    ※医療用のため、冷蔵庫保管となります。</p>
                	</div>
                </div>
                <table class="price-table pc-table">
                	<tbody>
                		<tr>
                			<th style="width: 50%;">高濃度プラセンタローション</th>
                			<td style="width: 10%;"></td>
                			<th style="width: 15%;">１か月分</th>
                			<td style="width: 25%;">5,500円</td>
                		</tr>
                	</tbody>
                </table>
                <table class="price-table sp-table">
                	<tbody>
                		<tr>
                			<th colspan="3">高濃度プラセンタローション</th>
                		</tr>
                		<tr>
                			<td></td>
                			<th>１か月分</th>
                			<td>5,500円</td>
                		</tr>
                	</tbody>
                </table>
                <p class="taR">※初回トライアル価格(会計時にお申し付け下さい) </p>
                <hr class="dashed">
                <div class="flex-box">
                	<div class="flex-box-title w100">
                		<p class="brown-title">PHC高濃度プラセンタ保湿クリーム</p>
                	</div>
                	<div class="flex-box-img">
                		<img src="/wp-content/uploads/ISC-_21simikusumi_23.png" alt="PHC高濃度プラセンタ保湿クリーム" style="height: 160px;">
                	</div>
                	<div class="flex-box-text w60">
                		<p>「ヒトプラセンタ」を高濃度配合。<br>
                		保湿成分による優れたトリートメント効果で、しなやかでハリのある素肌を取り戻してくれます。<br>
                	    ケミカルピーリングやレーザー照射をされて極度の乾燥状態になっている方には特にお勧めです。<br>
                	    新陳代謝が活発になるので、若々しいお肌を保持します。</p>
                	</div>
                </div>
                <table class="price-table pc-table">
                	<tbody>
                		<tr>
                			<th style="width: 50%;">高濃度プラセンタクリーム</th>
                			<td style="width: 10%;"></td>
                			<th style="width: 15%;">１か月分</th>
                			<td style="width: 25%;">5,500円</td>
                		</tr>
                	</tbody>
                </table>
                <table class="price-table sp-table">
                	<tbody>
                		<tr>
                			<th colspan="3">高濃度プラセンタクリーム</th>
                		</tr>
                		<tr>
                			<td></td>
                			<th>１か月分</th>
                			<td>5,500円</td>
                		</tr>
                	</tbody>
                </table>
                <p class="taR">※初回トライアル価格(会計時にお申し付け下さい) </p>
                <h3 id="Garlic" class="reddish-brown-title">ニンニク注射</h3>
                <div class="flex-box">
                	<div class="flex-text">
                		<h4 class="nolineTitle">ニンニク注射とは</h4>
                		<div class="sp"><img src="/wp-content/uploads/ISC-_21simikusumi_24.png" alt="ニンニク注射"></div>
                		<p>スポーツ選手やハードワーカーに利用者が多いニンニク注射は、疲労回復、疲れやだるさ、倦怠感の回復に即効性を求める方に大変有効です。</p>
                        <p>ニンニク注射といっても、本当にニンニクが入っているわけではありません。主成分はビタミンB群(B1やB2やCなど)とグリコーゲンで、注射するとニンニクのような香りがすることから名付けられました。血流、新陳代謝が促進されるため肉体疲労や栄養補給をはじめ、肩凝り、腰痛、肌の回復につながります。</p>
                        <p>ビタミンB1は食事やサプリメントでもある程度補うことはできますが、症状が強い場合や即効性を期待する場合は注射による補充が効果的です。</p>
                	</div>
                	<div class="flex-img pc">
                		<img src="/wp-content/uploads/ISC-_21simikusumi_24.png" alt="ニンニク注射">
                	</div>
                </div>
                <table class="price-table pc-table">
                	<tbody>
                		<tr>
                			<th>ニンニク注射</th>
                			<td>2アンプル</td>
                			<th>５分</th>
                			<td>5,000円</td>
                		</tr>
                	</tbody>
                </table>
                <table class="price-table sp-table">
                	<tbody>
                		<tr>
                			<th colspan="3">ニンニク注射</th>
                		</tr>
                		<tr>
                			<td>2アンプル</td>
                			<th>５分</th>
                			<td>5,000円</td>
                		</tr>
                	</tbody>
                </table>
                <h3 id="Vitamin" class="reddish-brown-title">ビタミン注射</h3>
                <div class="flex-box">
                	<div class="flex-text">
                		<h4 class="nolineTitle">お肌の調子を整えたい方、ニキビ・シミ・シワが気になる方に</h4>
                		<div class="sp"><img src="/wp-content/uploads/ISC-_21simikusumi_25.png" alt="ビタミン注射"></div>
                		<p>一度に多くのビタミン剤等のサプリメントを飲んでも、なかなか腸からの吸収が悪く、血液の中にビタミン成分を効率的に含めることが難しいものです。しかし、注射や点滴で直接体に循環させれば、有効成分の吸収を高めることができ、体の中から元気も美肌も手に入れることができます。<br>
                	    美容ビタミンと言われるビタミンC・ビタミンB群を中心に、その他お肌の調子を整えるビタミン類を独自の配合で加えました。</p>
                		<p>美白、ニキビ、シミ、シワ、肌荒れ、そばかす、皮膚の老化防止に定期的に続けると効果的です。 </p>
                	</div>
                	<div class="flex-img pc">
                		<img src="/wp-content/uploads/ISC-_21simikusumi_25.png" alt="ビタミン注射">
                	</div>
                </div>
                <table class="price-table pc-table">
                	<tbody>
                		<tr>
                			<th>ビタミン注射</th>
                			<td>1アンプル</td>
                			<th>５分</th>
                			<td>3,000円</td>
                		</tr>
                	</tbody>
                </table>
                <table class="price-table sp-table">
                	<tbody>
                		<tr>
                			<th colspan="3">ビタミン注射</th>
                		</tr>
                		<tr>
                			<td>1アンプル</td>
                			<th>５分</th>
                			<td>3,000円</td>
                		</tr>
                	</tbody>
                </table>
                <h3 id="Ultrasonic-introduction" class="reddish-brown-title">超音波導入(スキンスクライバー)</h3>
                <div class="flex-box">
                	<div class="flex-text">
                		<h4 class="nolineTitle">超音波導入とは</h4>
                		<div class="sp"><img src="/wp-content/uploads/ISC-_21simikusumi_26.png" alt="女性"></div>
                        <p>超音波導入法とは、通常人間が聞き取ることのできない周波数の音ですが、気体・液体・固体の中を伝わり、指向性も高いため多種多様なトラブルに対し効果的に改善を促進させます。超音波の物理的な振動を与えることで、深部温熱効果とキャビテーション効果 (空洞化現象一皮膚にトンネルができる)を起こし、皮膚細胞を活性化させると共に有効成分の浸透を促進します。イオン導入のみでは、導入しきれなかった大きな分子のものやイオン化されない分子の導入にも効果的です。超波導入にて4種類の効果を一度に手にすることができます。</p>
                	</div>
                	<div class="flex-img pc">
                		<img src="/wp-content/uploads/ISC-_21simikusumi_26.png" alt="女性">
                	</div>
                </div>
                <div class="flex-box wrap">
                	<div class="Improvement">
                		<p class="reddish-beige-title">1.お肌の洗浄とウォータピーリング</p>
                        <p>一般家庭で行うクレンジングとは異なり、毛穴や皮膚の汚れまで洗浄することができます。肌が弱くケミカルピーリングが向かない方には、精製水によるウォーターピーリングが可能です。肌に負担をかけずに行えますので赤みも出にくくお肌に優しい洗浄ができます。肌本来の再生力を高めることで、お肌に潤いとハリを与えます。</p>
                	</div>
                	<div class="Improvement">
                		<p class="reddish-beige-title">2.角質除去</p>
                		<p>ケミカルピーリングにて肌を柔らかくした方は毛穴の角質が浮き出て取れやすい状態になっています。そこですかさずスキンスクライバーの角質除去を行うことで、毛穴に負担をかけず肌のくすみの原因の角質汚れと黒ずみを除去することができます。角質汚れが取れたあなたの肌は”くすみ”がなくなり透明感のある肌をご実感頂けます。</p>
                	</div>
                	<div class="Improvement">
                		<p class="reddish-beige-title">3.超音波導入によるお肌のふっくら効果</p>
                		<p>超音波の物理的な振動を与えることで、深部温熱効果とキャビテーション効果(空洞化現象一皮膚にトンネルができる)を起こし、皮膚細胞を活性化させると共に超音波でミスト化したビタミンC成分の浸透を促進します。イオン導入のみでは、導入しきれなかった大きな分子のものやイオン化されない分子の導入にも効果的です。</p>
                	</div>
                	<div class="Improvement">
                		<p class="reddish-beige-title">4.パッティングによるお肌の引締め効果</p>
                		<p>角質除去したお肌の毛穴をパッティングいより引締め、キメを整えます。お顔全体をパッティングすることで、たるんだお肌を引き締めるリフティング効果を得られます。</p>
                	</div>
                </div>
                <div class="flex-box">
                	<a href="tel:0120331244"><img src="https://stg.ike-sunshine.co.jp/wp-content/uploads/2021/10/consultation-by-phone.png" alt="お電話での相談はコチラ"></a>
                	<a href="/reservation/"><img src="https://stg.ike-sunshine.co.jp/wp-content/uploads/2021/10/free-counseling-reservation.png" alt="カウンセリングの相談はコチラ"></a>
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