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

<div id="pageTitle" class="iboaza">
<h1>大きなホクロ・あざ・いぼの保険適用手術</h1>
<p>ホクロ・アザ・いぼは保険適用で手術が可能です。</p>
</div>

<section class="secBox iboaza">

	<section class="secBox top-menu">
		<div class="topNav">
			<ul>
				<li><a href="#toc1">ホクロ・イボ・アザ<br>のお悩み</a></li>
				<li class="heightAjst"><a href="#hokuro07">皮膚切除術</a></li>
				<li class="heightAjst"><a href="/operations/skincare/">レーザー除去</a></li>
				<li class="heightAjst"><a href="#toc4">症例写真</a></li>
				<li class="heightAjst"><a href="#toc5">よくある質問</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
			</ul>
		</div>
	</section>

	<div id="toc_box" class="mb20">
		<p class="toc_title">目次［<span class="toc_status">表示</span>］</p>
		<div class="toc_list">
			<ul>
				<li>
					<a href="#toc1">
						<span class="toc_num">1.</span> おおきなホクロ・イボ・アザ・母斑　のお悩み
					</a>
					<ul>
						<li>
							<a href="#toc1-1">
								<span class="toc_num">1－1.</span> どうして　イボ・アザができるの？
							</a>
						</li>
						<li>
							<a href="#toc1-2">
								<span class="toc_num">1－2.</span> イボ・アザ・大きなホクロ　除去治療はこんな人におすすめ
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc2">
						<span class="toc_num">2.</span> おおきなホクロ・アザ・イボ　を保険にて取るメリット
					</a>
				</li>
				<li>
					<a href="#toc3">
						<span class="toc_num">3.</span> おおきなホクロ・アザ・イボ　の治療方法
					</a>
					<ul>
						<li>
							<a href="#toc3-1">
								<span class="toc_num">3－1.</span> 施術概要
							</a>
						</li>
						<li>
							<a href="#toc3-2">
								<span class="toc_num">3－2.</span> 費用保険と自費の金額
							</a>
						</li>
						<li>
							<a href="#toc3-3">
								<span class="toc_num">3－3.</span> 来院から手術による、ほくろ除去治療完了までの全体の流れ
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc4">
						<span class="toc_num">4.</span> おおきなホクロ・アザ・イボ　除去手術の症例写真
					</a>
					<ul>
						<li>
							<a href="#toc4-1">
								<span class="toc_num">4－1.</span> 面状に大きくなったほくろ
							</a>
						</li>
						<li>
							<a href="#toc4-2">
								<span class="toc_num">4－2.</span> 皮膚の下にある大きな腫瘍
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#toc5">
						<span class="toc_num">5.</span> おおきなホクロ・アザ・母斑　除去手術　のよくあるご質問
					</a>
					<ul>
						<li>
							<a href="#toc5-1">
								<span class="toc_num">5－1.</span> 手術の詳しい流れを教えてください
							</a>
						</li>
						<li>
							<a href="#toc5-2">
								<span class="toc_num">5－2.</span> ほくろ・あざ除去治療が終わった後の生活の注意点を教えてください
							</a>
						</li>
						<li>
							<a href="#toc5-3">
								<span class="toc_num">5－3.</span> ほくろ・あざ除去後のアフターフォローについて教えてください
							</a>
						</li>
						<li>
							<a href="#toc5-4">
								<span class="toc_num">5－4.</span> 傷が残ってしまわないか心配なのですが
							</a>
						</li>
						<li>
							<a href="#toc5-5">
								<span class="toc_num">5－5.</span> 治療される先生について教えてください
							</a>
						</li>
<li>
							<a href="#toc5-6">
								<span class="toc_num">5－6.</span> 大きなホクロ・イボ・アザ保険適用手術のブログランキング</a>
						</li>
						<li>
							<a href="#toc5-7">
								<span class="toc_num">5－7.</span> お支払い方法について教えてください
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<section class="secBox">
		<ul class="cheap_recommend">
			<li>
				<a href="/operations/skincare/">
					<img class="top_txt" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/choice01_on_text.png" alt="レーザー">
					<h3>レーザー治療</h3>
					<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/choice01_on.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/choice01_on.png" alt="レーザー" width="130" height="69"></picture></div>
					<span class="txt">保険1個8,000円～10,000円</span>
					<br>
				</a>
			</li>
			<li>
				<a href="#hokuro07">
					<img class="top_txt" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/choice02_on_text.png" alt="皮膚切除">
					<h3><span class="small">再発の心配不要！</span>皮膚切除術</h3>
					<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/choice02_on.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/choice02_on.png" alt="皮膚切除" width="130" height="69"></picture></div>
					<span class="txt">保険1個15,000円～20,000円</span>
					<br>
				</a>
			</li>
		</ul>
	</section>

	<h2 class="baseTitle" id="toc1">おおきなホクロ・イボ・アザ・母斑　のお悩み</h2>
	<section class="secBox">
		<h3 class="subTitle" id="toc1-1">どうして　イボ・アザができるの？</h3>
		<p class="mb30">
			あざとは先天性で生まれたときから存在するものが一般的です。黒い色の原因は、一般的なしみと同じでメラニン色素になります。<br>
			正式名称は母斑です。皮膚の色素以上から来るお顔全体に広がるようなアザを除去くすることはできませんが、面上のアザ（お顔であれば５×５㎝以内）のものであれば除去が可能です。<br>
			イボはヒトパピローマウイルスというウイルスの一種が皮膚に感染してできます。感染原因としては、ヒトからヒトへという直接的接触と、プールや足拭きマット、スリッパなどを介した間接的感染もあります。<br>
		</p>
		<h3 class="subTitle" id="toc1-2">イボ・アザ・大きなホクロ　除去治療はこんな人におすすめ</h3>
		<div class="this_rcmmnd">
			<ul>
				<li><span class="circle_txt">該当部分が<br>大きく、<br>面状に広がっている</span></li>
				<li><span class="circle_txt">しこり(腫瘍)を<br>除去したい方</span></li>
				<li><span class="circle_txt">何cmもある<br>大きな方</span></li>
				<li><span class="circle_txt">レーザー除去後<br>何度も再発する</span></li>
			</ul>
		</div>
		<div id="worry" class="exCfx">
			<div class="hokuro case">
				<p><picture><source srcset="/wp-content/uploads/2021/03/worry_pic01.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/worry_pic01.png" alt="ホクロの悩み" width="280" height="240"></picture></p>
				<dl>
					<dt><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/worry_type01.png" alt="ホクロ" width="295" height="35"></dt>
					<dd>
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="メイクで隠せないホクロがある" width="20" height="23">メイクで隠せないホクロがある</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="大きなホクロがあって目立っている" width="20" height="23">大きなホクロがあって目立っている</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="小さなホクロがたくさんある" width="20" height="23">小さなホクロがたくさんある</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="年々ホクロが増えてきた" width="20" height="23">年々ホクロが増えてきた</li>
						</ul>
					</dd>
				</dl><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/worry_btm.gif" alt="ほくろ不安" width="295" height="5">
			</div>

			<div class="ibo case">
				<p><picture><source srcset="/wp-content/uploads/2021/03/worry_pic02.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/worry_pic02.png" alt="イボの悩み" width="280" height="240"></picture></p>
				<dl>
					<dt><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/worry_type02.png" alt="イボ" width="295" height="35"></dt>
					<dd>
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">イボが少しずつ大きくなっている</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">メイクで隠せないイボがある</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">イボを病理検査してほしい</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">難治性イボの為、なかなか完治しない</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">皮膚腫瘍なのではないかと不安</li>
						</ul>
					</dd>
				</dl><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/worry_btm.gif" alt="イボ不安" width="295" height="5">
			</div>
			<div class="aza case">
				<p><picture><source srcset="/wp-content/uploads/2021/03/worry_pic03.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/worry_pic03.png" alt="アザの悩み" width="280" height="240"></p>
				<dl>
					<dt><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/worry_type03.png" alt="アザ" width="295" height="35"></dt>
					<dd>
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">生まれつき大きなアザがある</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">どんどんシミ・そばかすの色が濃くなってきている</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">アザの部分の皮膚が少し盛り上がっている</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">顔など目立つ所にアザがある</li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/check.gif" alt="" width="20" height="23">悪性のものもあるので不安</li>
						</ul>
					</dd>
				</dl><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/worry_btm.gif" alt="アザ不安" width="295" height="5">
			</div>
		</div>
	</section>

	<h2 class="baseTitle" id="toc2">おおきなホクロ・アザ・イボ　を保険にて取るメリット</h2>
	<section class="secBox">
		<p class="mb30">
			生まれたときからある大きなアザ。年々だんだん大きくなってくるホクロ。特にお顔に増えたほくろは気になりますよね。 <br><br>
			増えてくるだけではなく、大きくなるほくろやアザ・触ると痛いほくろ・ジュクジュクしたほくろ 色々なほくろのお悩みを抱えていらっしゃる方が多くご来院されます。<br><br>
			当院では<u><strong>保険適用のほくろ・あざ・母斑・皮下腫瘍（しこり）除去についてレーザーだけではなく、<font color="red">手術</font>による切除も行っております。</strong></u><br><br>

			保険適用にて切除手術を行っているため、自己負担３割の保険証をお持ちの場合、１か所約８,０００円～１５,０００円程度で除去することが可能となります。また保険治療にて除去した後は、そのほくろを<font color="red"><strong>病理検査</strong></font>に提出します。<br><br>
			ほくろ除去後、約１０日前後でほくろの<font color="red"><strong>病理診断結果</strong></font>がクリニックへ戻ってきます。 患者様へは１０日目検診もしくは１か月検診にて結果をお伝えしております。<br>
			ほとんどの方は、良性で問題ありませんが何百人にかに１人の割合で悪性の皮膚腫瘍だったという結果をおつたえする場合もあります。その場合でもしっかり除去しているので問題はありませんが、転移の可能性がありますため<font color="red"><strong>大学病院への紹介状</strong></font>をお書きしております。<br><br>
			また、任意保険（生命保険や共済保険）に加入されている場合、日帰り手術でも保険給付の対象となり、お金が給付されます。<br>
			ご希望の方には、

			<u><font color="red"><strong>保険会社発行の診断書をご持参ください。</strong></font></u>診断書の作成を行います。
		</p>
	</section>

	<!-- この手術の良い点 -->
	<section class="secBox iboaza_goodPoints">
		<div class="container">
			<h4>この手術の良い点</h4>
			<p>
				当院は美容外科の技術を保険適用にて費用負担が少なく治療を受けることが可能です。<br>
				お顔の手術の場合　約10,000円～17,000円<br>
				お体の手術の場合　約15,000円<br>
				※保険適用での手術は1か所のみが対象です。複数箇所ご相談されたい場合は、1つの切除手術を完了してからのお申し込みとなります。
			</p>
			<ul>
				<li>
					<h3>01. 手術給付金が受けられることがあります</h3>
					<p>
						任意で加入されている生命保険や共済組合の保険によっては　ホクロ・あざ・母斑の除去手術に対し手術の給付金を受けられる保険があります。<br>
						保険適用手術名は”<font color="red"><strong>皮膚腫瘍摘出術</strong></font>”です。この名前にて給付金を受けられるか保険会社へのご確認をお願いいたします。<br>
						給付を受けられるようでしたら保険会社から指定の診断書を受け取りクリニックへご持参ください。当院にて手術を受けられた方を対象に診断書の作成をいたします。<br><br>
						※ご相談のみで治療をされていない方への診断書の作成は行っておりません。
					</p>
				</li>
				<li>
					<h3>02. 土日祝日も診療・手術できます</h3>
					<p>
						当クリニックでは<font color="red"><strong>土日祝日も診療</strong></font>しておりますので、お仕事や学校をお休みする必要なく治療にお通いいただけます。<br>
						また休日診療扱いになりませんため、保険の料金が増えることもございません。<br>
					</p>
				</li>
				<li>
					<h3>03. 未成年の方の治療もできます</h3>
					<p>
						当クリニックでは中学生以上の未成年の方も治療を承っております。<br>
						（小学生以下の方はご治療をお控えいただいておりますのでご了承ください。）<br>
						<strong>また、基本的に未成年の方は保護者の方とのご同伴が必要となりますが高校卒業された方は、<font color="red">親権者同意書</font>をご持参いただければ、お一人でのご来院と治療が可能となります。</strong>
						<a class="agreementDLD" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer"><picture><source srcset="/wp-content/uploads/2021/03/pdfDLD.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/pdfDLD.png" alt="親権者同意書ダウンロード" width="320" height="79"></picture></a>
					</p>
				</li>
				<li>
					<h3>04. 診察当日の治療も大丈夫</h3>
					<p>
						診察当日に手術をすることが可能です。手術時間は20分程度となります。当日に手術をお受けいただき、術後すぐにお帰りいただくことが可能です。手術当日から通常の生活をしていただいてかまいません。<br>
						７日～１０日目が抜糸の予定日となりますので、事前の日程のご調整をお願いいたします。
					</p>
				</li>
			</ul>
		</div>
	</section>

	<h2 class="baseTitle" id="hokuro07">おおきなホクロ・アザ・イボ　の治療方法</h2>
	<section class="secBox">
		<p class="mb30">
			おおきなほくろやイボはレーザー除去した場合は面上に削っていくため、大きなものを除去すると色素沈着の原因となり ほくろはとれたけど、同じ面積でシミになる場合があります。そのため、大きなほくろは皮膚切除手術を行い１本の細い線にしした方が傷跡が目立ちません。傷跡はシワの１本になるようなイメージをお持ちください。<br><br>
			このほくろを保険にて切除手術することを<font color="red"><strong>皮膚皮下腫瘍摘出術</strong></font>といいます。 ほくろの切開縫合手術には、方錐形切開術と巾着状に縫う方法とあり、ほくろの形状によって使い分けてまいります。<br>
			治療の際には、除去するホクロの場所を確認後、局所麻酔を注射にて行います。その後、ほくろ除去を実施。 除去した後は、止血処理後　皮膚を寄せて縫い合わせます。<br><br>
			局所麻酔をしていますため、皮膚を触られている感覚は伝わってまいりますが、手術中に痛みを感じることはございません。 その後は、テーピングによる保護をして終了です。<br><br>
			全体で<font color="red"><strong>２０分程度の治療</strong></font>となります。 終わった後はすぐにそのままご帰宅いただけます。<br>
			ご帰宅の際には　抗生剤と痛み止めをお渡しいたしますので服用ください。<br>
			１０日目に抜糸を行います。 また<font color="red"><strong>病理検査</strong></font>の結果も１０日目前後でクリニックへ届きますので同じタイミングにて結果 をお伝えすることができます。
		</p>
		<h3 class="subTitle" id="toc3-1">施術概要</h3>
		<div id="price">
			<table>
				<tbody>
					<tr>
						<th>施術時間</th>
						<td class="price_0">1箇所　約15分程度</td>
					</tr>
					<tr>
						<th>治療直後</th>
						<td class="price_0">患部は濡らせないので入浴には気をつける</td>
					</tr>
					<tr>
						<th>スポーツ</th>
						<td class="price_0">切除の大きさにもよるが、基本的には問題ない</td>
					</tr>
					<tr>
						<th>アフターケア</th>
						<td class="price_0">7日目にて抜糸</td>
					</tr>
				</tbody>
			</table>
		</div>
		<h3 class="subTitle" id="toc3-2">費用保険と自費の金額</h3>
		<div id="price">
			<table>
				<tbody>
					<tr>
						<th>自費治療1個</th>
						<td class="time">20分</td>
						<td class="price_0">定価211,680円　モニター価格105,840円</td>
					</tr>
					<tr>
						<th>皮膚腫瘍</th>
						<td class="time">20分</td>
						<td class="price_0">約15,000円〜約20,000円　自費負担３割の保険証をお持ちの場合</td>
					</tr>
				</tbody>
			</table>
			<p class="attn">※目安金額となります。治療箇所/範囲によって変動致しますので、お気軽にお問い合わせください。</p>
		</div>
		<h3 class="subTitle" id="toc3-3">来院から手術による、ほくろ除去治療完了までの全体の流れ</h3>
		<div class="iboazaTreatment">
			<div class="container">
				<h3>施術の流れ</h3>
				<ul>
					<li>
						<div class="num"><span>01</span>カウンセリング</div>
						<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/treatment_01.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_01.png" alt="01 カウンセリング" width="187" height="120"></div>
						<p>カウンセリング時に気になるほくろ・あざ・母斑などすべてご提示ください。<br>
							その箇所によって、レーザー除去がお勧めか手術が必要か医師が判断いたします。<br>
							小さなものですとレーザーがお勧めですし、大きなものですと手術をお勧め致します。<br>
							また部位・大きさによっては分割切除をお勧めする場合もございます。
						</p>
					</li>
					<li>
						<div class="num"><span>02</span>お見積もり</div>
						<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/treatment_02.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_02.png" alt="02 お見積もり" width="187" height="120"></div>
						<p>
							カウンセリング時にご相談いただきました、ほくろ・あざ・母斑などを除去するのに必要な費用をご説明させていただきます。<br><br>
							ご予算に応じて、治療箇所の数をご調整いただく事も可能です。<br><br>
							お支払いは現金以外にカードもご利用いただけます。
						</p>
					</li>
					<li>
						<div class="num"><span>03</span>手術</div>
						<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/treatment_03.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_03.png" alt="03 手術" width="187" height="120"></div>
						<p>治療内容をご理解頂きましたら、同意書にサインの上、カウンセリング当日にそのまま治療することも可能です。（もちろん別のお日にちにて手術をお申込みいただいてもかまいません）<br><br>
							手術時間は約２０分<br>
							局所麻酔にて行います。<br>
							除去したものは病理検査に提出を行います。
						</p>
					</li>
					<li>
						<div class="num"><span>04</span>包帯外し<br>抜糸</div>
						<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/treatment_04.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_04.png" alt="04 包帯外し・抜糸" width="187" height="120"></div>
						<p>手術から約７日目に抜糸を行います。<br>
							抜糸は痛みはありませんのでご安心下さい。<br><br>
							抜糸後　翌日から患部を濡らしていただく事が可能です。
						</p>
					</li>
					<li>
						<div class="num"><span>05</span>経過診察</div>
						<div class="img"><picture><source srcset="/wp-content/uploads/2021/03/treatment_05.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_05.png" alt="05 経過診察" width="187" height="120"></div>
						<p>１ヶ月検診時に病理検査の結果をご報告いたします。<br>また傷口が化膿していないか・ケロイド化していないかの確認をさせて頂きます。</p>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<h2 class="baseTitle" id="toc4">おおきなホクロ・アザ・イボ　除去手術の症例写真</h2>
	<section class="secBox" id="price">
		<h3 class="subTitle" id="toc4-1">面状に大きくなったほくろ</h3>
		<img src="/wp-content/uploads/2019/09/04f86ea9c104d100d663feb8a9a65769.jpg" loading="lazy" alt="面状に大きくなったほくろ（ホクロ）">
		<div class="mb30">
			<table>
				<tbody>
					<tr>
						<th>金額（保険治療）</th>
						<td class="price_0">約　18,000円　自己負担３割の保険証をお持ちの場合</td>
					</tr>
					<tr>
						<th>リスク</th>
						<td class="price_0">縫合跡・赤み・化膿</td>
					</tr>
					<tr>
						<th>アフターケア</th>
						<td class="price_0">抗生剤の軟膏塗布後、保護用のテーピングを行います。<br>当日は抗生剤と痛み止めを３日分お持ち帰り頂きます。<br>
							約１０目に抜糸をして治療は終了です。<br>
							新しい皮膚ができるまで１０日～１ヶ月ほどﾃｰﾌﾟにて保護します。
						</td>
					</tr>
					<tr>
						<th>時間</th>
						<td class="price_0">約25分　局所麻酔後、切開して皮膚切除後　縫合します。</td>
					</tr>
				</tbody>
			</table>
		</div>

		<h3 class="subTitle" id="toc4-2">皮膚の下にある大きな腫瘍</h3>
		<img src="/wp-content/uploads/2019/09/5f63f49b6b7d98988e1002a4a4f2d6d5.jpg" loading="lazy" alt="皮膚の下にある腫瘍">
		<div class="mb30">
			<table>
				<tbody>
					<tr>
						<th>金額（保険治療）</th>
						<td class="price_0">約　18,000円　自己負担３割の保険証をお持ちの場合</td>
					</tr>
					<tr>
						<th>リスク</th>
						<td class="price_0">縫合跡・赤み・化膿</td>
					</tr>
					<tr>
						<th>アフターケア</th>
						<td class="price_0">抗生剤の軟膏塗布後、保護用のテーピングを行います。<br>当日は抗生剤と痛み止めを３日分お持ち帰り頂きます。<br>
							約１０目に抜糸をして治療は終了です。<br>
							新しい皮膚ができるまで１０日～１ヶ月ほどﾃｰﾌﾟにて保護します。
						</td>
					</tr>
					<tr>
						<th>時間</th>
						<td class="price_0">約25分　局所麻酔後、切開して皮膚切除後　縫合します。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>

	<h2 class="baseTitle" id="toc5">おおきなホクロ・アザ・母斑　除去手術　のよくあるご質問</h2>
	<section class="secBox ">
		<h3 class="subTitle" id="toc5-1">手術の詳しい流れを教えてください</h3>
		<div class="iboaza_steps">
			<div class="iboaza_steps_box">
				<h4><picture><source srcset="/wp-content/uploads/2021/03/stepLable_01.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_01.png" alt="局所麻酔" width="270" height="48"></picture></h4>
				<div class="centeringTest">
					<figure>
						<picture><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skinCare_step_01.png" alt="除去までの流れ" width="273" height="209" /></picture>
					</figure>
					<p class="flow-op">
						取りたいほくろを確認後、局所麻酔をします。<br />
						32Gという大変細い針を使用していますが、チクっとしたいたみがございます。麻酔が効けば、痛みは全くわかりません。<br>
						触られる感覚のみが伝わってきます。
					</p>
					<!-- / .centeringTest -->
				</div>
			</div>
			<div class="iboaza_steps_box">
				<h4><picture><source srcset="/wp-content/uploads/2021/03/stepLable_02.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_02.png" alt="ほくろの除去" width="270" height="48"></picture></h4>
				<div class="centeringTest">
					<figure>
						<picture><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skinCare_step_02.png" alt="除去までの流れ" width="273" height="209" /></picture>
					</figure>
					<p class="flow-op">
						デザインをして、皮膚切除する範囲を決めた後、メスにより切開し皮膚を切除します。<br>止血後縫合。小さなものですと約20分程度で終わります。
					</p>
					<!-- / .centeringTest -->
				</div>
			</div>
			<div class="iboaza_steps_box">
				<h4><picture><source srcset="/wp-content/uploads/2021/03/stepLable_03.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_03.png" alt="ご自身でご確認" width="270" height="48"></picture></h4>
				<div class="centeringTest">
					<figure>
						<picture><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skinCare_step_03.png" alt="除去までの流れ" width="273" height="209" /></picture>
					</figure>
					<p class="flow-op">
						縫合後は、医療用の絆創膏をお貼りいただいてお帰り頂きます。抗生剤と痛み止めを処方いたします。<br>
						7日目～10日目に抜糸を行いますが、それまでは患部を濡らさないようにご注意ください。止血後縫合。小さなものですと約20分程度で終わります。
					</p>
					<!-- / .centeringTest -->
				</div>
			</div>
			<div class="iboaza_steps_box">
				<h4><picture><source srcset="/wp-content/uploads/2021/03/stepLable_04.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_04.png" alt="病理検査に出します" width="270" height="48"></picture></h4>
				<div class="centeringTest">
					<figure>
						<picture><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skinCare_step_04.png" alt="除去までの流れ" width="273" height="209" /></picture>
					</figure>
					<p class="flow-op">
						縫合後のテーピングの写真です。この状態でお帰り頂きます。
					</p>
					<!-- / .centeringTest -->
				</div>
			</div>
		</div>
	</section>

	<h3 class="subTitle" id="toc5-2">ほくろ・あざ除去治療が終わった後の生活の注意点を教えてください</h3>
	<div class="mb30">
		<p>
			ホクロ除去後、約７日～１０日後に<strong>抜糸</strong>を行うまでの間は濡らすことができません。 除去した場所によっては入浴をお控え頂き、患部をさけたシャワー浴をお願いいたします。 抜糸が終われば、濡らしても大丈夫です。普通にお風呂へご入浴いただけます。<br><br>
			また、手術部位に負荷がかかる動作は傷口が開く可能性がありますので2週間ほどはお控え頂いております。 抜糸が終わった後は、傷に対して直角に<strong>テープ</strong>を張ってお帰り頂きます。<br><br>
			これは皮膚に負荷がかかった時に傷口が開かないように抑える働きと、傷が太く広がらないようにするための大切なテーピングです。 このテーピングをしっかり続けていただくと、傷口が細く薄い状態で落ち着いてまいります。 個人差はございますが１か月ほどは張り続けていただくことをお勧めしております。
		</p>
	</div>

	<h3 class="subTitle" id="toc5-3">ほくろ・あざ除去後のアフターフォローについて教えてください</h3>
	<div class="mb30">
		<p>
			ほくろ除去後１０日目前後に送付されてくる<strong>病理検査結果</strong>を確認し、悪性の腫瘍の場合は大学病院への紹介状を作成し、精密検査をお受けいただくようご案内させていただいております。<br><br>
			ほくろを取った傷跡が盛り上がりケロイド状になった場合はケロイド予防ののお薬の処方ならびにケナコルト注射によるケロイドの軽減を行うことも可能です。<br><br>
			ほくろ除去後の最大の注意点は日焼けですが、色素沈着が１年たっても軽減しない場合は、トレチノイン療法による色素沈着軽減クリームを処方することも可能です。もともとアトピー性皮膚炎をお持ちの方など色素沈着ができやすい体質の方は、肌の美白成分配合の内服薬を処方し、<strong>色素沈着の予防を計る</strong>ことも可能です。
		</p>
	</div>

	<h3 class="subTitle" id="toc5-4">傷が残ってしまわないか心配なのですが</h3>
	<div class="mb30">
		<figure class="mb30 iboaza_laserCase_imgBox">
			<picture><source srcset="/wp-content/uploads/2021/03/qna04_01.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/qna04_01.png" alt="スターラックスによるレーザー照射"></picture>
			<picture><source srcset="/wp-content/uploads/2021/03/qna04_02.png.webp" type="image/webp"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/qna04_02.png" alt="スターラックスによるレーザー照射"></picture>
		</figure>
		<p>
			ほくろ除去跡が気になる方にはスターラックスによるレーザー照射を行うことも可能です。<br>
			月に１度のペースの照射を５回行いますが、血が出たりカサブタになりませんし、月に1度以外のご来院の必要がないため比較的治療しやすいレーザーとなります。<br>
			<a href="/operations/laser/" target="_blank" rel="noopener noreferrer">
				<u>
					<font color="red">詳しくはこちらをご覧ください。</font>
				</u>
			</a>
		</p>
	</div>

	<h3 class="subTitle" id="toc5-5">治療される先生について教えてください</h3>
	<div class="iboazaCare_dr">
		<h2>ドクターのご紹介</h2>
		<div class="iboazaCare_dr_box">
			<figure>
				<picture><source srcset="/wp-content/uploads/2021/03/doctor_pic.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/doctor_pic.png" alt="池袋サンシャイン美容外科院長鈴木栄樹" data-eio="p" width="307" height="307"></picture>
			</figure>
			<div class="iboazaCare_dr_box_info">
				<h5>池袋サンシャイン美容外科<br>院長 <span>鈴木 栄樹</span></h5>
				<p>
					日本美容外科学会正会員・認定医<br>
					日本美容外科医師会正会員<br>
					日本抗加齢医学正会員<br>
					95年　　 聖マリアンナ医科大学卒業<br>
					03-06年　医療法人博済会鈴木病院 美容外科外来開設<br>
					06年　　 池袋サンシャイン美容外科開設<br>
					09年　　 医療法人社団 栄真会 開設
				</p>
			</div>
		</div>
		<figure class="mb30">
			<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/doctor_message_tl.png" loading="lazy" alt="ほくろ・イボ・あざについてお悩みでしたら是非一度相談ください">
		</figure>
		<p class="iboazaCare_dr_msg">
			私たち池袋サンシャイン美容外科は、豊富な経験を元に高い技術提供をしております。<br>
			医師の携わる医療機関として、ウソのない施術を行いたい。<br>
			もっと美しくありたいと願う方が「ここにしてよかった」とおっしゃる笑顔をたくさん見たい。<br>
			それが誇りであり、あなたへの誠意だと思うのです。<br>
			私たちは確かなノウハウを活かし、ムダのない施術・経営を実現することで、よい治療を、よりリーズナブルな料金で、<br>
			よりたくさんの方にご提供させていただきたいと考えています。
		</p>
	</div>


<section class="secBox" id="toc5-6">
		<div class="blogRanking">
			<h4>おおきなホクロ・イボ・アザ保険適用手術のブログランキング</h4>
			<ul>
				<li><span style="background-color: #FF93A6;">1</span><a href="/blogs/mole_wart/ibo_cause/" target="_blank" rel="noopener noreferrer">イボの原因とは？除去するための治療方法を紹介！</a></li>
				<li><span style="background-color: #F39800;">2</span><a href="/blogs/mole_wart/hokuro/" target="_blank" rel="noopener noreferrer">ホクロが大きくなることはある？気になるホクロは治療で改善できます！</a></li>
				<li><span style="background-color: #70cdde;">3</span><a href="/blogs/mole_wart/viral-warts/" target="_blank" rel="noopener noreferrer">イボがうつるって本当？ウイルス感染の原因や治療法をご紹介</a></li>
<li><span style="background-color: #fff; color:#222; border:1px solid #222;">4</span><a href="/blogs/mole_wart/neckwart" target="_blank" rel="noopener noreferrer">首イボができる原因と治療法</a></li>
			</ul>
		</div>
	</section>

	<h3 class="subTitle" id="toc5-7">お支払い方法について教えてください</h3>
	<div class="payment">
		<h4>お支払いについて</h4>
		<div class="payment_box">
			<div class="payment_box_title">現金</div>
			<p>
				　<br>
				現金でのお支払いが可能です。<br>
				　
			</p>
		</div>
		<div class="payment_box">
			<div class="payment_box_title">クレジットカード</div>
			<p>
				クレジットカードでのお支払いが可能です。<br>VISA/Mater/UCカードは分割払いも可能です。2回払いは手数料無料です。<br>
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_01.png" loading="lazy" alt="クレジットカードでのお支払いが可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_02.png" loading="lazy" alt="クレジットカードでのお支払いが可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_03.png" loading="lazy" alt="クレジットカードでのお支払いが可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_04.png" loading="lazy" alt="クレジットカードでのお支払いが可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_05.png" loading="lazy" alt="クレジットカードでのお支払いが可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_06.png" loading="lazy" alt="クレジットカードでのお支払いが可能" width="70" height="43">
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_01.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_02.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_03.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_04.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_05.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_06.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<br>
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_07.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_08.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_09.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_10.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_11.png" loading="lazy" alt="電子マネー利用可能" width="70" height="43">
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

<script type="text/javascript">
	jQuery(function() {
		jQuery('#tab_list li').click(function() {
			var index = jQuery('#tab_list li').index(this);
			jQuery('#tab_list li').removeClass('active');
			jQuery(this).addClass('active');
			jQuery('#tab_box > div').removeClass('show').eq(index).addClass('show');
		});
	});
</script>

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