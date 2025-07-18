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
<main id="wakiga">
<!--/ここからコンテンツ-->

<div class="container">

<div id="pageTitle" class="wakiga">
<h1>ワキガ治療（保険適用手術）</h1>
<p>保険を使って再発しない、ワキガ手術</p>
</div>

</div>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "FAQPage",
	"description": "池袋サンシャイン美容外科のワキガ保険適用治療に関するよくある質問",
	"mainEntity":
	[

	{
		"@type": "Question",
		"name": "ワキガ治療ができない場合はある？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "ニオイがない方は、きちんとその旨をお伝えしております。ニオイがない方は、治療の必要性がございませんので治療できません。また、糖尿病の既往歴をお持ちの方は術後の傷の経過が悪く、全身管理が必要となりますため、紹介状を書き、大学病院等入院施設のある医療機関へのご紹介をさせて頂いております。 "
		}
	},

	{
		"@type": "Question",
		"name": "当日の施術は可能？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "診察当日に手術をすることも可能です。手術時間は1時間程度となります。そのため、当日に手術をお受けいただき、術後すぐにお帰りいただけます。もちろん、その日から通常の生活をしていただいてかまいません。 "
		}
	},

	{
		"@type": "Question",
		"name": "保険は適用される？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "当院では、保険を適用しているので、負担金額が抑えられます。一般的な保険証は自己負担3割の保険証となり、自己負担金額は両脇で約43,000円となります。自己負担が無料の保険証をお持ちの方は自己負担なしで治療をお受けいただけます。ただし、生活保護受給証での治療は行うことができません。 。"
		}
	},

	{
		"@type": "Question",
		"name": "ワキガを診断してもらうだけでも可能？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "もちろん大丈夫です。診断結果をお伝えし、治療はされない方もいらっしゃいます。ワキガ（腋臭症）の臭いについては、目に見えるものではなく定量的に数値で表現することが難しいため、臭いが気になるお悩みの深刻さは、ご本人の主観によるものとなります。当院にワキガ治療についてご相談にいらっしゃる方の中には、ご自覚は全くなく、奥様に連れられてご来院される方や、会社の同僚の方や上司の方にご指摘されてご相談にいらっしゃるかたもおられます。逆に、誰からも指摘されていないけれど、ご自身で気になってご来院される方もいらっしゃいます。当院では、ワキガのお悩みでご来院頂きました方、皆さまには、失礼ながらワキにガーゼを挟んでいただき一定時間過ぎた後、そのガーゼの臭いを医師が直接確認させていただきます。その際、臭いが確認できない方には、はっきりその旨をお伝えさせて頂いております。また、ワキガ臭ではなく汗臭さが認められる場合は多汗症治療をお奨めする場合もございます。ワキガ臭が認められる場合は、はっきりその旨をお伝えしております。言い方にご不快なお気持ちを持たれる方もいらっしゃるかもしれませんが、医療機関としての医師の診断の為、ご了承ください。 "
		}
	},

	{
		"@type": "Question",
		"name": "未成年ですが治療できますか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "中学生以上であれば、治療を行うことが可能です。一般的に、アポクリン腺は思春期に大きく発達して増えてきます。早い方だと小学校の高学年から気になりだす方もいらっしゃいます。多感な時期、臭いについて悩むことは、深刻です。当院ではワキガ治療について中学生から治療を承っております。ただし、今現在生えているアポクリン腺の除去はできますが、今後成長とともに生えてくるアポクリン汗腺の 予防を行うことはできません。その為、中学の時点で汗腺の除去を行っても、成人してお体の成長が止まるまで、汗腺が増えてきますから、大人になった時にまた脇の臭いが気になる可能性はあります。その場合は、再度　大人になってから手術をしていただくことをお勧めしております。未成年の方は、必ず保護者の方のご同伴が必要となります。まずは悩まずにご家族の方とお話しを聞きにいらっしゃって下さい。 "
		}
	},

	{
		"@type": "Question",
		"name": "妊娠・授乳中でも、ワキガ治療はできますか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "申し訳ございません。妊娠・授乳中の方は治療をお控えいただいております。母体・胎児の保護が最優先となる大切な時期です。ワキガの手術には、局所麻酔とはいえ、麻酔を行いますし、その後痛み止めや抗生物質も処方となります。さらに、手術後の生活もストレスが全くかからないわけではございません。その為、当院ではご出産・卒乳後の治療をお願いしております。 "
		}
	},

	{
		"@type": "Question",
		"name": "すそワキガも治療できますか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "申し訳ございません。保険適用でのワキガ手術による治療対象箇所は脇のみとなります。しかし、人間の体臭の元となるアポクリン汗腺（ワキガの臭いの元）は脇だけに生えているわけではありません。アポクリン汗腺（ワキガの臭いの元）は、脇以外ですと乳房の周り・陰部（すそワキガの原因）・耳にも生えています。 当院にて脇の手術を行っていただいても、乳房や陰部や耳のアポクリン汗腺までの除去はできないため、あくまで体臭が無臭になるわけではございません。今よりも臭いをましにする。というイメージをお持ちください。 "
		}
	},

	{
		"@type": "Question",
		"name": "ワキガは遺伝なのでしょうか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "ワキガの原因は、主に遺伝だと言われています。
ワキガは、わきの下のアポクリン腺から分泌される汗や皮脂によって発症します。アポクリン腺を形成する細胞が遺伝するため、ワキガ体質は遺伝すると言われるのです。
ただ、ワキガになる原因は遺伝だけではありません。食生活やストレスなどもワキガを加速させる要因になります。

●日本人はワキガの遺伝子を持つ人が少ない？＞
日本人は、ワキガの遺伝子を持つ人が少ないといわれています。
アポクリン腺で作られた臭いは、毛穴から外界に漏れています。ですので、毛穴が少なければ少ないほど、匂いは漏れにくいのです。
わきの下にわき毛が生えている人が多いように、わきの下には無数の毛穴があります。その毛穴の開口部から臭いは漏れていきます。
ですので、毛量の多い欧米人はワキガの臭いが漏れやすく、毛量の少ない日本人は控えめな臭いになりやすいと言えるでしょう。

●汗はエクリン汗腺から、臭いはアポクリン汗腺から＞
アポクリン汗腺は、皮膚の深部にあります。そこから臭いが生成され、毛穴などの開口部を通り、外部へ放出されています。
それに対し、エクリン汗腺は、皮膚の浅い所にあり、しかも全身の皮膚に分布している汗腺です。
ワキガはアポクリン汗腺によるもので、多汗症はエクリン汗腺によるものと言えます。 "
		}
	},


	{
		"@type": "Question",
		"name": "手術をしないで脇のニオイを軽減させる方法はないですか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "●制汗剤で汗によるべたつきと雑菌の繁殖を防ぐ＞
ワキガの匂いと香料の匂いが混ざるとさらに強烈な匂いとなりますので、無香料の物を選ぶなど注意が必要です。
また、１日に何度も使用していると色素沈着の原因となる場合が多く、当院でも患者様からの脇の肌の黒ずみをご相談いただくことが多くあります。使い過ぎによる皮膚への負担を考慮してバランスよく使用をされてください。

●脱毛による匂いの軽減＞
患者様からよくご相談を頂くのは、レーザー脱毛による匂いの軽減です。
ワキガ手術において、匂いの元となる汗腺を切除する際に一緒に毛根も取れる為脱毛効果も期待できますが、レーザー脱毛による汗腺への影響はありません。
むしろ、レーザー脱毛による毛穴への刺激のために、前よりも汗を多くかくようになったとの悩みを伺うことも多くあります。
しかし、レーザー脱毛を行うことで、毛根周りの汗がたまりずらくはなるため、清潔な状態を保ちやすくなるメリットはあります。

●規則正しい睡眠と食生活を心掛ける＞
タバコ・飲酒・寝不足によるストレス・・・色々なことで体臭が強くなります。
肉類の過剰な摂取を避け野菜中心の規則正しい生活を心掛けましょう。 "
		}
	}

	]
}
</script>

<section class="secBox wakiga_operations">

	<section class="container">
		<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/top-1.jpg" alt="スターラックス傷跡治療">
	</section>

	<section class="container">
		<div class="topNav">
			<ul>
				<li class="heightAjst"><a href="#toc1">ワキガとは</a></li>
				<li class="heightAjst"><a href="#toc2-2">ご料金</a></li>
				<li class="heightAjst"><a href="#toc5">ワキガ手術詳細</a></li>
				<li class="heightAjst"><a href="/operations/hyperhidrosis/">多汗症治療</a></li>
				<li class="heightAjst"><a href="#toc7">よくある質問</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
			</ul>
		</div>
	</section>

	<section class="secBox container">
		<div id="toc_box" class="mb20">
			<p class="toc_title">目次</p>
			<div class="toc_list">
				<ul>
					<li>
						<a href="#toc1">
							<span class="toc_num">1.</span> ワキガ（腋臭症）とは？<br class="sp">セルフチェックと治療のすすめ
						</a>
						<ul>
							<li>
								<a href="#toc1-1">
									<span class="toc_num">1－1</span>ワキガ治療が必要な方の特徴
								</a>
							</li>
							<li>
								<a href="#toc1-2">
									<span class="toc_num">1－2</span>ワキガセルフチェックリスト
								</a>
							</li>
							<li>
								<a href="#toc1-3">
									<span class="toc_num">1－3</span>気になる方はまずカウンセリングへ
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#toc2">
							<span class="toc_num">2.</span>池袋サンシャイン美容外科の<br class="sp">ワキガ治療について
						</a>
						<ul>
							<li>
								<a href="#toc2-1">
									<span class="toc_num">2－1</span>保険適用で受けられる直視下反転剪除法
								</a>
							</li>
							<li>
								<a href="#toc2-2">
									<span class="toc_num">2－2</span>ワキガ手術の費用について
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc3">
							<span class="toc_num">3.</span>ワキガ治療（直視下反転剪除法）の<br class="sp">メリットと注意点
						</a>
						<ul>
							<li>
								<a href="#toc3-1">
									<span class="toc_num">3－1</span>長期的な効果と保険適用で、<br class="sp">費用を抑えたワキガ治療
								</a>
							</li>
							<li>
								<a href="#toc3-2">
									<span class="toc_num">3－2</span>保険に加え、手術給付金が受けられる<br class="sp">可能性も
								</a>
							</li>
							<li>
								<a href="#toc3-3">
									<span class="toc_num">3－3</span>剪除法後の生活で注意すべき点
								</a>
							</li>
							<li>
								<a href="#toc3-4">
									<span class="toc_num">3－4</span>直視下反転剪除法の概要
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc4">
							<span class="toc_num">4.</span>池袋サンシャイン美容外科が<br class="sp">選ばれる理由
						</a>
						<ul>
							<li>
								<a href="#toc4-1">
									<span class="toc_num">4－1</span>01.&nbsp;土日祝日も診療・手術できます
								</a>
							</li>
							<li>
								<a href="#toc4-2">
									<span class="toc_num">4－2</span>02.&nbsp;未成年の方の治療もできます
								</a>
							</li>
							<li>
								<a href="#toc4-3">
									<span class="toc_num">4－3</span>03.&nbsp;診察当日の治療も大丈夫
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc5">
							<span class="toc_num">5.</span>ワキガ保険手術の治療の流れ
						</a>
						<ul>
							<li>
								<a href="#toc5-1">
									<span class="toc_num">5－1</span>01.&nbsp;カウンセリング
								</a>
							</li>
							<li>
								<a href="#toc5-2">
									<span class="toc_num">5－2</span>02.&nbsp;診察
								</a>
							</li>
							<li>
								<a href="#toc5-3">
									<span class="toc_num">5－3</span>03.&nbsp;手術
								</a>
							</li>
							<li>
								<a href="#toc5-4">
									<span class="toc_num">5－3</span>04.&nbsp;包帯外し・抜糸
								</a>
							</li>
							<li>
								<a href="#toc5-5">
									<span class="toc_num">5－3</span>05.&nbsp;経過観察
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc6">
							<span class="toc_num">6.</span>ワキガ手術の術後ケアや<br class="sp">注意点について
						</a>
						<ul>
							<li>
								<a href="#toc6-1">
									<span class="toc_num">6－1</span>ワキガ手術の術後ケア
								</a>
							</li>
							<li>
								<a href="#toc6-2">
									<span class="toc_num">6－2</span>術後の包帯について
								</a>
							</li>
							<li>
								<a href="#toc6-3">
									<span class="toc_num">6－3</span>抜糸が終わった後のご注意
								</a>
							</li>
							<li>
								<a href="#toc6-4">
									<span class="toc_num">6－4</span>術後の傷跡ケアと経過について
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc7">
							<span class="toc_num">7.</span>ワキガ治療の保険適用に関する<br class="sp">よくある質問
						</a>
						<ul>
							<li>
								<a href="#toc7-1">
									<span class="toc_num">7－1</span>ワキガ治療ができない場合はある？
								</a>
							</li>
							<li>
								<a href="#toc7-2">
									<span class="toc_num">7－2</span>当日の施術は可能？
								</a>
							</li>
							<li>
								<a href="#toc7-3">
									<span class="toc_num">7－3</span>保険は適用される？
								</a>
							</li>
							<li>
								<a href="#toc7-4">
									<span class="toc_num">7－4</span>ワキガを診断してもらうだけでも可能？
								</a>
							</li>
							<li>
								<a href="#toc7-5">
									<span class="toc_num">7－5</span>未成年ですが治療できますか？
								</a>
							</li>
							<li>
								<a href="#toc7-6">
									<span class="toc_num">7－6</span>妊娠・授乳中でも、ワキガ治療はできますか？
								</a>
							</li>
							<li>
								<a href="#toc7-7">
									<span class="toc_num">7－7</span>すそワキガも治療できますか？
								</a>
							</li>
							<li>
								<a href="#toc7-8">
									<span class="toc_num">7－8</span>ワキガは遺伝なのでしょうか？
								</a>
							</li>
							<li>
								<a href="#toc7-9">
									<span class="toc_num">7－9</span>手術をしないで脇のニオイを軽減させる<br class="sp">方法はないですか？
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc8">
							<span class="toc_num">8.</span>ワキガ治療のさまざまな方法
						</a>
						<ul>
							<li>
								<a href="#toc8-1">
									<span class="toc_num">8－1</span>他院のワキガ治療と比較
								</a>
							</li>
							<li>
								<a href="#toc8-2">
									<span class="toc_num">8－2</span>筋肉の縮小に作用する<br class="sp">薬剤注射によるワキガ治療
								</a>
							</li>
							<li>
								<a href="#toc8-3">
									<span class="toc_num">8－3</span>ミラドライなどのレーザーによるワキガ治療
								</a>
							</li>
							<li>
								<a href="#toc8-4">
									<span class="toc_num">8－4</span>クアドラカット法によるワキガ手術
								</a>
							</li>
							<li>
								<a href="#toc8-5">
									<span class="toc_num">8－5</span>超音波吸引法によるワキガ手術
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc9">
							<span class="toc_num">9.</span>監修医師紹介
						</a>
						<ul>
							<li>
								<a href="#toc9-1">
									<span class="toc_num">9－1</span>あなたの人生からワキガという悩みが消え<br class="sp">去ったらどんなに楽でしょうか？
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc10">
							<span class="toc_num">10.</span>ワキガ治療のブログや体験レポート
						</a>
						<ul>
							<li>
								<a href="#toc10-1">
									<span class="toc_num">10－1</span>Instgram
								</a>
							</li>
							<li>
								<a href="#toc10-2">
									<span class="toc_num">10－2</span>ワキガ保険適用手術治療のブログランキング
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc11">
							<span class="toc_num">11.</span>アクセス
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc1"><span class="mini-title">ワキガ（腋臭症）とは？</span><br><span class="blue">セルフチェックと<br class="sp">治療のすすめ</span></h2>
			</div>

			<h3 id="toc1-1" class="mini-sub-title">ワキガ治療が<br class="sp">必要な方の特徴</h3>

			<div class="flex-circle">
				<div class="box-circle sp">
					<p>わきの匂いが<br>
						気になって<br>
						電車に乗れない
					</p>
				</div>
				<div class="flex">
					<div class="box-circle pc">
						<p>わきの匂いが気になって<br>
							電車に乗れない
						</p>
					</div>
					<div class="box-circle">
						<p>職場での<br>
							周りの目が<br class="sp">気になる
						</p>
					</div>
					<div class="box-circle">
						<p>家族・友人・<br class="sp">職場の人から<br>
							匂いを指摘された
						</p>
					</div>
				</div>
			</div>

			<h3 class="mini-sub-title" id="toc1-2">ワキガセルフチェックリスト</h3>
			<div class="box-white">
				<ul>
					<li>耳アカが湿っている（わきの下にアポクリン腺が多いことと同様に耳アカが湿っている人はアポクリン腺が多いため、きが体質である可能性が高く、ワキガ治療の必要がある人と言えます。）</li>
					<li>家族にワキガ（腋臭症）・多汗症体質の人がいる</li>
					<li>緊張したり、興奮するとよく汗ばむ</li>
					<li>自分の体臭が気になる</li>
					<li>他人にニオイを指摘されたことがある</li>
					<li>服のワキの下に黄色い汗染みができる</li>
					<li>毛深い方である</li>
					<li>季節に関係なくワキの下に汗をよくかく</li>
				</ul>
			</div>

			<h3 class="blue mini-sub-title" id="toc1-3">気になる方は<br class="sp">まずカウンセリングへ</h3>
			<div class="spacer"></div>
			<p>ワキガ手術は保険適用で治療が可能。<br><br class="sp">
				入院の必要もなく、<br class="sp"><strong>カウンセリング当日に両ワキの手術をして<br class="sp">お帰り頂ける負担の少ない手術です。</strong><br>
				<br>
				少しでも自分の体臭が気になっている方は<br class="sp">ぜひ気兼ねなく<br class="sp">ご相談にいらっしゃってください。<br><br class="sp">
				まずは患者様一人一人の<br class="sp">ご希望に沿った治療計画の立ち上げから、<br class="sp">お手伝いいたします。
			</p>

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

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc2"><span class="pc">池袋サンシャイン美容外科の</span><span class="sp mini-title">池袋サンシャイン美容外科の</span><br>
					ワキガ治療について
				</h2>
			</div>

			<h3 class="mini-sub-title" id="toc2-1">保険適用で受けられる<br class="sp">直視下反転剪除法</h3>

			<div class="blue-box">
				<p class="title">直視下反転剪除法とは？</p>
				<p>脇の皮膚を切開し、汗腺を<br class="sp">直接目で見ながら除去する手術です。<br>
					<br>
					臭いの元になるアポクリン腺と<br class="sp">発汗するエクリン腺を除去することで<br>
					<strong>ワキガの原因を完全に<br class="sp">除去することができます。</strong><br>
					<br>
					また、毛根も同時に除去するので<br class="sp">脱毛効果もありますが、<br>
					あくまでもワキガ治療として行いますので<br class="sp">脱毛目的での手術は行えません。
				</p>
			</div>

			<h3 class="mini-sub-title" id="toc2-2">ワキガ手術の費用について</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/cost.png" alt="ワキガ手術の費用" class="cost">
		</div>
	</section>

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc3"><span class="mini-sub-title">ワキガ治療（直視下反転剪除法）の</span><br><span class="blue">メリットと注意点</span></h2>
			</div>

			<div class="box-white">
				<div class="title-underline">
					<h3 id="toc3-1">長期的な効果と保険適用で、<br class="sp">費用を抑えたワキガ治療</h3>
				</div>
				<p>直視下反転剪除法を行って<br class="sp">ワキガ治療を行うメリットは、<br class="sp">２つあります。</p>

				<div class="circle-flex">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/merit1.png" alt="治療効果">
						<div class="circle-label">
							<div class="circle">メリット<br>①</div>
							<p>効果が永続的である</p>
						</div>
						<p>ワキガの原因であるアポクリン腺を完全に除去し、効果が永続的であることです。</p>
					</div>
					<div class="dotted-line"></div>
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/merit2.png" alt="保険">
						<div class="circle-label">
							<div class="circle">メリット<br>②</div>
							<p>手術費用が安い</p>
						</div>
						<p>保険が適用されるうえ、医療保険の加入状況によっては手術給付金が受け取れる場合もあります。</p>
					</div>
				</div>
			</div>

			<div class="box-white">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/benefits.png" alt="手術給付金" class="pc-flex-img sp">
				<div class="title-underline">
					<h3 id="toc3-2">保険に加え、手術給付金が<br class="sp">受けられる可能性も</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/benefits.png" alt="手術給付金" class="pc-flex-img pc">
					<p>任意加入されている生命保険や<br class="sp">共済組合の保険によっては<br class="sp">ワキガ手術に対し手術給付金を<br class="sp">受けられる保険があります。<br>
						<br>
						保険適用手術名は<br class="sp"><strong>”視下反転剪除法”（別名皮弁法）</strong><br class="sp">です。<br>
						<br>
						この名前にて給付金を受けられるか<br>
						保険会社へのご確認を<br class="sp">お願いいたします。<br>
						<br>
						給付をうけられるようでしたら<br class="sp">保険会社から<br>
						指定の診断書を受け取り<br class="sp">クリニックへご持参ください。 <br>
						<br>
						<strong>当院にて手術を受けられた方を<br class="sp">対象に<br class="pc">診断書の作成をいたします。</strong><br>
						<br>
						※ご相談のみで治療をされていない<br class="sp">方の診断書作成は行っておりません。
					</p>
				</div>
			</div>

			<div class="box-white">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/gauze.png" alt="ガーゼ" class="pc-flex-img sp">
				<div class="title-underline">
					<h3 id="toc3-3">剪除法後の生活で<br class="sp">注意すべき点</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/gauze.png" alt="ガーゼ" class="pc-flex-img pc">
					<p>注意点は手術で皮膚を切開し<br>
						術後のケアが必要であることです。<br>
						<br>
						<strong>3日間はガーゼで圧迫し、<br class="sp">1週間後に抜糸するまでは<br>
						脇を濡らすことができません。</strong><br>
						<br>
						念のため手術後1か月は<br class="sp">激しい運動などは<br class="pc">控えていただくと<br class="sp">傷口が開く危険性が下がります。<br>
						<br>
						しかし、手術に関する不安は<br>
						なるべくケアできるよう<br class="sp">体制が整っていますので、<br>
						医師にお気軽に相談してください。						
					</p>
				</div>
				<a href="#toc6" class="filling-out-button filling-out-button2">
					<span class="button-text">術後のケアや注意点が<br class="sp">気になる方はこちら</span>
					<span class="arrow-rounded"></span>
				</a>
			</div>

			<div class="box-white box-white-last">
				<div class="title-underline">
					<h3 id="toc3-4">直視下反転剪除法の概要</h3>
				</div>
				<p>当院のワキガ治療は<br class="sp">以下のようになっています。</p>

				<div class="table2 table">
					<div class="table-box2">
						<div class="table-contents2">
							<p>施術時間</p>
						</div>
						<div class="table-contents3">
							<p>両脇　1時間程度</p>
						</div>
					</div>
					<div class="table-box2">
						<div class="table-contents2">
							<p>施術後の<br class="sp">通院</p>
						</div>
						<div class="table-contents3">
							<p>ガーゼ固定　約３日間<br>
								手術後７日目に抜糸<br>
								１か月検診
							</p>
						</div>
					</div>
					<div class="table-box2">
						<div class="table-contents2">
							<p>入院の<br class="sp">必要性</p>
						</div>
						<div class="table-contents3">
							<p>不要</p>
						</div>
					</div>
					<div class="table-box2">
						<div class="table-contents2">
							<p>麻酔</p>
						</div>
						<div class="table-contents3">
							<div class="pc-flex" style="align-items: center;">
								<p>局所麻酔</p>
							</div>
						</div>
					</div>
					<div class="table-box2">
						<div class="table-contents2">
							<p>痛み・<br class="sp">腫れ</p>
						</div>
						<div class="table-contents3">
							<p>麻酔をしているため手術中の痛みはございません。<br class="sp"><span class="annotation">※手術中痛みを感じることがございましたら麻酔を追加いたしますので、遠慮なくおっしゃってください。</span></p>
						</div>
					</div>
					<div class="table-box2">
						<div class="table-contents2">
							<p>カウン<br class="sp">セリング<br>
								当日の<br class="sp">治療</p>
						</div>
						<div class="table-contents3">
							<p>カウンセリング当日に治療も可能です。<br class="sp"><span class="annotation">※ご予約状況によっては、別のお日にちでのご案内をさせていただく場合もございます。</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc4"><span class="mini-sub-title">東京でワキガ手術を受けるなら</span><br><span class="blue">池袋サンシャイン美容外科が選ばれる理由</span></h2>
			</div>

			<div class="clinic-features">
				<div class="circle-label">
					<div class="circle">理由①</div>
					<h3 id="toc4-1">土日祝日も<br class="sp">診療・手術できます</h3>
				</div>
				<p>当クリニックでは<br class="sp">土日祝日も診療しておりますので、<br>
					<strong>お仕事や学校をお休みする必要なく<br class="sp">治療にお通いいただけます。</strong><br><br class="sp">
					また休日診療扱いになりませんため、<br class="sp">保険の料金が増えることもございません。					
				</p>
			</div>
			<div class="clinic-features">
				<div class="circle-label">
					<div class="circle">理由②</div>
					<h3 id="toc4-2">未成年の方の<br class="sp">治療もできます</h3>
				</div>
				<p>当クリニックでは中学生以上の未成年の方も治療を承っており、今まで多くの未成年の方がご来院されています。<br>
					（小学生以下の方はご治療をお控えいただいておりますのでご了承ください。）<br><br class="sp">
					また、基本的に未成年の方は保護者の方とのご同伴が必要となりますが高校卒業された方は、<br>
					<strong>親権者同意書をご持参いただければ、<br class="sp">お一人でのご来院と治療が可能となります。</strong>
				</p>
				<div class="button-pdf">
					<a href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf">
						親権者同意書ダウンロード
						<span class="pdf-arrow">＞</span>
					</a>
				</div>
			</div>
			<div class="clinic-features">
				<div class="circle-label">
					<div class="circle">理由③</div>
					<h3 id="toc4-3">診察当日の治療も大丈夫</h3>
				</div>
				<p>診察当日に手術をすることが可能です。<br class="sp"><strong>手術時間は20分程度</strong>となります。<br><br class="sp">
					当日に手術をお受けいただき、<br class="sp">術後すぐにお帰りいただくことが可能です。<br><br class="sp">
					手術当日から<br class="sp">通常の生活をしていただいてかまいません。<br><br class="sp">
					<strong>７日～１０日目が抜糸の予定日</strong>となりますので、<br class="sp">事前の日程のご調整をお願いいたします。
				</p>
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

	<section class="bg-ivory">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc5">ワキガ保険手術の<br class="sp">治療の流れ</h2>
			</div>

			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/counseling.png" alt="カウンセリング" class="flow-img">
						<div>
							<div class="title-underline">
								<h3 id="toc5-1">1.&nbsp;カウンセリング</h3>
							</div>
							<p>まずはカウンセリングを行わせていただきます。女性カウンセラーが担当しますので、男性には聞きづらいこともお気軽にご相談ください。</p>
						</div>
					</div>
					<div class="application">
						<p class="circle-heading">予約のお申込み</p>
						<p>まずは、お電話または<br class="sp">WEB予約フォームより、<br class="sp">ご希望の来院日時をご連絡ください。<br><br class="sp">
							当日予約も可能ですので、<br class="sp">当日のご予約はお電話にて<br class="sp">ご予約下さい。
						</p>
						<div class="tel">
							<p>お電話</p>
							<a href="tel:0120331244" class="tel-number">0120-331-244</a>
						</div>
					
						<a href="/reservation/" class="filling-out-button">
							<span class="button-text">ご予約フォームへの<br class="sp">入力はこちら</span>
							<span class="arrow-rounded"></span>
						</a>	
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/consultation.png" alt="診察" class="flow-img">
						<div>
							<div class="title-underline">
								<h3 id="toc5-2">2.&nbsp;診察</h3>
							</div>
							<p>次に医師がワキガの程度を確認させていただきます。患者様の状態に応じて適切な手術内容の説明を行わせていただきます。ご希望されれば、カウンセリング当日に手術を行うことも可能です。</p>
						</div>
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/surgery.png" alt="手術" class="flow-img">
						<div>
							<div class="title-underline">
								<h3 id="toc5-3">3.&nbsp;手術</h3>
							</div>
							<p>ワキの毛の生えている箇所をマークし、ワキのシワに沿って皮膚を切開し、アポクリン腺除去します。術後は、止血し、圧迫固定します。</p>
						</div>
					</div>

						<div class="surgery">
							<h3>ワキガ手術当日の流れ</h3>
							<div class="surgery-flow">
								<div class="pc-flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_01.png" alt="デザイン決定"><!--画像-->
									<div>
										<p class="title"><span class="blue">STEP01：</span>デザイン決定</p>
										<p>脇の範囲をデザイン後、局所麻酔を注射で行います。その後、脇の折れジワに沿って、約数㎝切開をします。最小限の傷の幅に抑えて皮膚をひっくり返し、医師が直接はさみでアポクリン汗腺とエクリン汗腺を除去します。</p>
									</div>
								</div>
							</div>
							<div class="surgery-flow">
								<div class="pc-flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_02.png" alt="麻酔・マーキング"><!--画像-->
									<div>
										<p class="title"><span class="blue">STEP02：</span>麻酔・マーキング</p>
										<p>ワキガの元となる汗腺を除去するとつるつるの状態となります。皮膚を360度あらゆる方向にひっくり返し、しっかり汗腺がなくなっていることを確認してから縫合を行います。。</p>
									</div>
								</div>
							</div>
							<div class="surgery-flow">
								<div class="pc-flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_03.png" alt="アポクリン腺除去"><!--画像-->
									<div>
										<p class="title"><span class="blue">STEP03：</span>アポクリン腺除去</p>
										<p>除去した汗腺の一部です。この汗腺がワキガのにおいの原因元になります。</p>
									</div>
								</div>
							</div>
							<div class="surgery-flow">
								<div class="pc-flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_04.jpg" alt="縫合と固定"><!--画像-->
									<div>
										<p class="title"><span class="blue">STEP04：</span>縫合と固定</p>
										<p>止血処理を行った後、皮膚がよれたりずれてくっつかないように縫合を行います。傷跡は脇中央の１本のみで、他の部分は皮膚がよれてくっつかないように糸で留めているだけなので傷跡としては残りません。</p>
									</div>
								</div>
							</div>
							<div class="surgery-flow surgery-flow-last">
								<div class="pc-flex">
									<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_05.png" alt="包帯処置と帰宅"><!--画像-->
									<div>
										<p class="title"><span class="blue">STEP05：</span>包帯処置と帰宅</p>
										<p>縫合後は、クッションとテーピングを脇に挟んで巻いてお帰り頂きます。抗生物質と痛み止めを３日分お持ち帰りいただきます。</p>
									</div>
								</div>
							</div>
						</div>
					
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/side.png" alt="術後の脇" class="flow-img">
						<div>
							<div class="title-underline">
								<h3 id="toc5-4">4.&nbsp;包帯外し・抜糸</h3>
							</div>
							<p>手術から3日目に包帯外し、手術から7－10日目に抜糸を行います。抜糸は痛みはありませんのでご安心下さい。<br>
								お仕事などがある方は、包帯外しはご来院いただかなくても大丈夫です。</p>
						</div>
					</div>
				  <div class="speech-arrow"></div>
				</div>
			</div>
			<div class="flow flow-last">
				<div class="speech-box">
					<div class="pc-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/consultation2.png" alt="経過観察" class="flow-img">
						<div>
							<div class="title-underline">
								<h3 id="toc5-5">5.&nbsp;経過診察</h3>
							</div>
							<p>当院では、術後の経過・症状の改善を最後まで責任を持ってご対応いたしますのでご安心ください。<br>
								抜糸後の診察は、何回でもお受けします。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc6">ワキガ手術の術後ケアや<br class="sp">注意点について</h2>
			</div>

			<h3 class="blue mini-sub-title" id="toc6-1">ワキガ手術の術後ケア</h3>
			<div class="box-ivory box-ivory-top">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/housework.png" alt="基本的な家事やデスクワーク"  class="pc-flex-img sp">
				<div class="title-underline">
					<h3>運動はお控えいただくが、<br class="sp">家事やデスクワークなどは<br class="sp">問題ございません</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/housework.png" alt="基本的な家事やデスクワーク"  class="pc-flex-img pc">
					<p><strong>手術後も基本的な家事や<br class="sp">デスクワークなどは不自由ながらも<br>
						問題なく行っていただけます。</strong><br>
						<br>
						しかし、テニス・ゴルフといった脇に<br class="sp">負担がかかる運動は<br class="pc">お控えください。<br>
						<br>
						また、自転車やお車の運転なども<br class="sp">抜糸が終わるまで<br>
						お控えいただいております。
					</p>
				</div>
			</div>
			<div class="box-ivory box-ivory-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/bath.png" alt="お風呂" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>入浴は患部をぬらさないように<br class="sp">ご注意いただきます</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/bath.png" alt="お風呂" class="pc-flex-img pc">
					<p><strong>切開縫合手術となりますため<br class="sp">脇は抜糸（手術後約７日目）が<br>
						終わるまでの間濡らすことができません。</strong><br>
						<br>
						お風呂に入られるときには、<br class="sp">サランラップを巻くなど防水して<br>
						濡らさないようにお入りください。<br>
						<br>
						頭を洗う際も肩が濡れないように、<br class="sp">お気を付け下さい。<br><br class="sp">
						髪が長い方は、美容院などで<br class="sp">洗髪されるのも良いかもしれません。
					</p>
				</div>
			</div>

			<h3 class="blue mini-title" id="toc6-2">術後の包帯について</h3>
			<div class="box-ivory">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/bandage.png" alt="包帯" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>通常3日間は包帯を<br class="sp">巻きっぱなしにしていただきます</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/bandage.png" alt="包帯" class="pc-flex-img pc">
					<p>手術終了後、脇をクッションで圧迫し、<br>
						捻挫用テーピングで固定して、<br class="sp">お帰り頂きます。<br>
						（クッションを脇に直接縫い付けるタイオーバーは脇の傷を増やすことになりますので当院では行っておりません。）<br>
						<br>
						このテーピングによる圧迫固定は、<br>
						骨折のギプスのような役割と<br class="sp">お考え下さい。<br><br class="sp">
						その為、次回ご来院時までは<br class="sp">24時間巻きっぱなしとなります。<br>
						<br>
						<strong>通常は手術をしてからの最短３日後に<br class="sp">クリニックへ<br class="pc">お越しいただければ、<br class="sp">包帯を外すことが可能です。</strong><br>
						（くれぐれも自己判断での包帯外しはお控えください。不正出血の原因となります。）						
					</p>
				</div>
			</div>
			<div class="box-ivory box-ivory-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/bandage2.png" alt="ガーゼ" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>包帯を外した後はガーゼを<br class="sp">当てるだけになります</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/bandage2.png" alt="ガーゼ" class="pc-flex-img pc">
					<p>３日目にクリニックにてテーピングによる<br>
						圧迫固定を解除しましたら、<br class="sp">ワキには<br class="pc">ガーゼを当てているだけの<br class="sp">身軽な状態となります。<br>
						<br>
						身軽な状態になっても、<br class="sp">まだ脇は傷口を縫合した状態です。<br>
						<br>
						<strong>その為抜糸が終わるまでは、<br class="sp">今までと同様に濡らせませんし <br>
						脇に過度な負担がかかる行動は<br class="sp">お控えください。</strong><br>
						<br>
						テーピングによる圧迫固定時と同様に、<br>
						脇を濡らさないようにご注意ください。
					</p>
				</div>
			</div>

			<h3 class="blue mini-title" id="toc6-3">抜糸が終わった後のご注意</h3>
			<div class="box-ivory box-ivory-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/side2.png" alt="脇" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>抜糸後も１ヶ月以上は、<br class="sp">脇に負担のかかる<br class="sp">激しい運動はお控え下さい</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/side2.png" alt="脇" class="pc-flex-img pc">
					<p>ワキガの手術後、<strong>約7日目～10日目</strong>に抜糸を行います。<br><br class="sp">
						これで、基本的なワキガ治療は<br class="sp">終了となります。<br><br class="sp">
						<strong>翌日からは脇を濡らして<br class="sp">お風呂も入ることができます。</strong><br>
						<br>
						抜糸が終われば、ひとまず安心の状態ですが、<br>
						抜糸したての傷口は<br class="sp">大変柔らかく開きやすい状態です。<br>
						<br>
						<strong>術後１ヶ月以上は、<br class="pc">脇に負担のかかる<br class="sp">激しい運動はお控え下さい。</strong><br>
						<br>
						また温泉や海・プールなどは<br class="sp">衛生面の点からも<br class="pc">傷口が<br class="sp">しっかりくっつくまではお控えください。					
					</p>
				</div>
			</div>

			<h3 class="blue mini-title" id="toc6-4">術後の傷跡ケアと経過について</h3>
			<div class="box-ivory">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/consultation3.png" alt="診察" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>抜糸後でも<br class="sp">診察を受けることが可能</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/consultation3.png" alt="診察" class="pc-flex-img pc">
					<p>当院では、術後の経過・症状の改善を<br class="sp">最後まで<br class="pc">責任を持って<br class="sp">ご対応させて頂いております。<br>
						<br>
						抜糸後の適切なアドバイスと診察を<br>
						<strong>何度でもご診察いただけます。</strong><br>
						<br>
						手術において脇全体の皮膚を剥離し、<br>
						ワキガの原因となるアポクリン汗腺の<br class="sp">除去を行うため、<br class="pc">手術直後は硬さや<br class="sp"><strong>赤み・色素沈着</strong>などができます。										
					</p>
				</div>
			</div>
			<div class="box-ivory">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/side3.png" alt="手術の脇" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>手術の傷跡は6か月～1年ほどで<br class="sp">落ち着きます</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/side3.png" alt="手術の脇" class="pc-flex-img pc">
					<p>６か月も経過していくと<br>
						徐々にきれいに仕上がってまいります。<br><br class="sp">
						<strong>傷跡が完全に落ち着くには<br>
						１年ほどくらいかかるとお考え下さい。</strong><br>
						<br>
						元々アトピー性皮膚炎の体質の方などは、<br class="sp">皮膚が弱く<br class="pc">色素沈着が<br class="sp">強く生じる傾向の方もいらっしゃいます。<br>
						<br>
						ケロイド体質の方は、<br class="sp">手術後半年程度かけて傷口が<br class="pc">ケロイド状に<br class="sp">盛り上がってくる方もいらっしゃいます。<br>
						<br>
						色素沈着になりやすいご自覚がある方や<br>
						<strong>ケロイド体質の方には、<br class="pc">予防する内服薬を<br class="sp">ご用意させていただいております。</strong><br>
						<br>
						気になる方は、<br class="sp">どうぞお気軽にお尋ねください。				
					</p>
				</div>
			</div>
			<div class="box-ivory">
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/armpit_massage.png" alt="患部のマッサージとストレッチ" class="pc-flex-img sp">
				<div class="title-underline">
					<h3>術後1か月以内は<br class="sp">患部のマッサージと<br class="sp">ストレッチが重要になります</h3>
				</div>
				<div class="pc-flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/armpit_massage.png" alt="患部のマッサージとストレッチ" class="pc-flex-img pc">
					<p>また、脇はもともとしわが多く<br class="sp">たるみやすい部分の為、<br class="pc">人によっては<br class="sp">皮膚がずれてくっついてしまう方や<br>
						皮膚のツッパリが気になる方も<br class="sp">いらっしゃいます。<br>
						<br>
						そのような時は、<strong>術後１ヶ月以内の<br class="sp">皮膚を<br class="pc">伸ばすストレッチが<br class="sp">大変重要</strong>となってまいります。<br>
						<br>
						医師にて直接マッサージを<br class="sp">させて頂いておりますので、<br>
						気になる方は放置せずご相談ください。				
					</p>
				</div>
			</div>
			<div class="consultation-card-top3">
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
				<h2 id="toc7"><span class="mini-title">ワキガ治療の保険適用に関する<br><span class="pc">よくある質問</span></span><span class="sp">よくある質問</span></h2>
			</div>

			<div class="qa">
				<div class="faq-item active">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-1">ワキガ治療が<br class="sp">できない場合はある？</h3>
					  </span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>ニオイがない方は、きちんとその旨をお伝えしております。ニオイがない方は、治療の必要性がございませんので治療できません。<br>
						また、糖尿病の既往歴をお持ちの方は術後の傷の経過が悪く、全身管理が必要となりますため、紹介状を書き、大学病院等入院施設のある医療機関へのご紹介をさせて頂いております。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-2">当日の施術は可能？</h3>
						</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>診察当日に手術をすることも可能です。手術時間は1時間程度となります。<br>
						そのため、当日に手術をお受けいただき、術後すぐにお帰りいただけます。<br>
						もちろん、その日から通常の生活をしていただいてかまいません。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-3">保険は適用される？</h3>
					</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>当院では、保険を適用しているので、負担金額が抑えられます。一般的な保険証は自己負担３割の保険証となり、自己負担金額は両脇で約42,000円となります。<br>
						自己負担が無料の保険証をお持ちの方は自己負担なしで治療をお受けいただけます。<br>
						ただし、生活保護受給証での治療は行うことができません。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-4">ワキガを診断してもらう<br class="sp">だけでも可能？</h3>
						</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>もちろん大丈夫です。診断結果をお伝えし、治療はされない方もいらっしゃいます。<br>
						ワキガ（腋臭症）の臭いについては、目に見えるものではなく定量的に数値で表現することが難しいため、臭いが気になるお悩みの深刻さは、ご本人の主観によるものとなります。<br>
						当院にワキガ治療についてご相談にいらっしゃる方の中には、ご自覚は全くなく、奥様に連れられてご来院される方や、会社の同僚の方や上司の方にご指摘されてご相談にいらっしゃるかたもおられます。<br>
						逆に、誰からも指摘されていないけれど、ご自身で気になってご来院される方もいらっしゃいます。<br>
						当院では、ワキガのお悩みでご来院頂きました方、皆さまには、失礼ながらワキにガーゼを挟んでいただき一定時間過ぎた後、そのガーゼの臭いを医師が直接確認させていただきます。<br>
						その際、臭いが確認できない方には、はっきりその旨をお伝えさせて頂いております。<br>
						また、ワキガ臭ではなく汗臭さが認められる場合は多汗症治療をお奨めする場合もございます。<br>
						ワキガ臭が認められる場合は、はっきりその旨をお伝えしております。<br>
						言い方にご不快なお気持ちを持たれる方もいらっしゃるかもしれませんが、医療機関としての医師の診断の為、ご了承ください。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-5">未成年ですが<br class="sp">治療できますか？</h3>
						</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>中学生以上であれば、治療を行うことが可能です。<br>
						一般的に、アポクリン腺は思春期に大きく発達して増えてきます。<br>
						早い方だと小学校の高学年から気になりだす方もいらっしゃいます。<br>
						多感な時期、臭いについて悩むことは、深刻です。<br>
						当院ではワキガ治療について中学生から治療を承っております。<br>
						ただし、今現在生えているアポクリン腺の除去はできますが、今後成長とともに生えてくるアポクリン汗腺の 予防を行うことはできません。<br>
						その為、中学の時点で汗腺の除去を行っても、成人してお体の成長が止まるまで、汗腺が増えてきますから、大人になった時にまた脇の臭いが気になる可能性はあります。<br>
						その場合は、再度　大人になってから手術をしていただくことをお勧めしております。<br>
						未成年の方は、必ず保護者の方のご同伴が必要となります。<br>
						まずは悩まずにご家族の方とお話しを聞きにいらっしゃって下さい。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-6">妊娠・授乳中でも、<br class="sp">ワキガ治療はできますか？</h3></span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>申し訳ございません。妊娠・授乳中の方は治療をお控えいただいております。<br>
						母体・胎児の保護が最優先となる大切な時期です。<br>
						ワキガの手術には、局所麻酔とはいえ、麻酔を行いますし、その後痛み止めや抗生物質も処方となります。<br>
						さらに、手術後の生活もストレスが全くかからないわけではございません。<br>
						その為、当院ではご出産・卒乳後の治療をお願いしております。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-7">すそワキガも<br class="sp">治療できますか？</h3>
						</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>申し訳ございません。保険適用でのワキガ手術による治療対象箇所は脇のみとなります。<br>
						しかし、人間の体臭の元となるアポクリン汗腺（ワキガの臭いの元）は脇だけに生えているわけではありません。<br>
						アポクリン汗腺（ワキガの臭いの元）は、脇以外ですと乳房の周り・陰部（すそワキガの原因）・耳にも生えています。 当院にて脇の手術を行っていただいても、乳房や陰部や耳のアポクリン汗腺までの除去はできないため、あくまで体臭が無臭になるわけではございません。今よりも臭いをましにする。というイメージをお持ちください。</p>
					</div>
				</div>
				<div class="faq-item">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-8">ワキガは<br class="sp">遺伝なのでしょうか？</h3>
						</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p>ワキガの原因は、主に遺伝だと言われています。<br>
						ワキガは、わきの下のアポクリン腺から分泌される汗や皮脂によって発症します。アポクリン腺を形成する細胞が遺伝するため、ワキガ体質は遺伝すると言われるのです。<br>
						ただ、ワキガになる原因は遺伝だけではありません。食生活やストレスなどもワキガを加速させる要因になります。<br>
						<br>
						<strong>日本人はワキガの遺伝子を持つ人が少ない？</strong><br>
						日本人は、ワキガの遺伝子を持つ人が少ないといわれています。<br>
						アポクリン腺で作られた臭いは、毛穴から外界に漏れています。ですので、毛穴が少なければ少ないほど、匂いは漏れにくいのです。<br>
						わきの下にわき毛が生えている人が多いように、わきの下には無数の毛穴があります。その毛穴の開口部から臭いは漏れていきます。<br>
						ですので、毛量の多い欧米人はワキガの臭いが漏れやすく、毛量の少ない日本人は控えめな臭いになりやすいと言えるでしょう。<br>
						<br>
						<strong>汗はエクリン汗腺から、臭いはアポクリン汗腺から</strong><br>
						アポクリン汗腺は、皮膚の深部にあります。そこから臭いが生成され、毛穴などの開口部を通り、外部へ放出されています。<br>
						それに対し、エクリン汗腺は、皮膚の浅い所にあり、しかも全身の皮膚に分布している汗腺です。<br>
						ワキガはアポクリン汗腺によるもので、多汗症はエクリン汗腺によるものと言えます。</p>
					</div>
				</div>
				<div class="faq-item faq-item-last">
					<button class="faq-question">
					  <span class="q-icon">Q</span>
					  <span class="question-text">
						<h3 id="toc7-9">手術をしないで<br class="sp">脇のニオイを軽減させる<br class="sp">方法はないですか？</h3>
						</span>
					  <span class="toggle-icon">＋</span>
					</button>
					<div class="faq-answer">
					  <p><strong>制汗剤で汗によるべたつきと雑菌の繁殖を防ぐ</strong><br>
						ワキガの匂いと香料の匂いが混ざるとさらに強烈な匂いとなりますので、無香料の物を選ぶなど注意が必要です。<br>
						また、１日に何度も使用していると色素沈着の原因となる場合が多く、当院でも患者様からの脇の肌の黒ずみをご相談いただくことが多くあります。使い過ぎによる皮膚への負担を考慮してバランスよく使用をされてください。<br>
						<br>
						<strong>脱毛による匂いの軽減</strong><br>
						患者様からよくご相談を頂くのは、レーザー脱毛による匂いの軽減です。<br>
						ワキガ手術において、匂いの元となる汗腺を切除する際に一緒に毛根も取れる為脱毛効果も期待できますが、レーザー脱毛による汗腺への影響はありません。<br>
						むしろ、レーザー脱毛による毛穴への刺激のために、前よりも汗を多くかくようになったとの悩みを伺うことも多くあります。<br>
						しかし、レーザー脱毛を行うことで、毛根周りの汗がたまりずらくはなるため、清潔な状態を保ちやすくなるメリットはあります。<br>
						<br>
						<strong>規則正しい睡眠と食生活を心掛ける</strong><br>
						タバコ・飲酒・寝不足によるストレス・・・色々なことで体臭が強くなります。<br>
						肉類の過剰な摂取を避け野菜中心の規則正しい生活を心掛けましょう。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc8">ワキガ治療の<br class="sp">さまざまな方法</h2>
			</div>

			<h3 id="toc8-1" class="mini-sub-title">他院のワキガ治療と比較</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/cost-comparison.png" alt="他院のワキガ治療と比較" class="cost-comparison">

			<div class="box-ivory box-ivory2">
				<div class="pc-flex" style="align-items: stretch;">
					<div class="treatment-img treatment-img1"></div>
					<div>
						<div class="title-underline">
							<h3 id="toc8-2">筋肉の縮小に作用する<br>
								薬剤注射によるワキガ治療
							</h3>
						</div>
						<p>脇に筋肉を縮小させる薬剤を注射し、<br>
							<strong>臭いを出すアポクリン腺の周りの筋肉の働きを弱めます。</strong><br><br class="pc">
							注射なので治療時間が短く、日常生活への影響がほとんどありません。<br>
							費用は保険適用外で、両脇で99,000円となります。<br><br class="pc">
							効果は個人差がありますが3～6か月継続し、<br>
							注射した薬剤が体内に吸収されるにつれて効果が薄まります。
						</p>
					</div>
				</div>
			</div>
			<div class="box-ivory box-ivory2">
				<div class="pc-flex" style="align-items: stretch;">
					<div class="treatment-img treatment-img2"></div>
					<div>
						<div class="title-underline">
							<h3 id="toc8-3">ミラドライなどの<br>
								レーザーによるワキガ治療
							</h3>
						</div>
						<p>電子レンジに使用されるマイクロウェーブを皮膚に照射する治療法です。<br><br class="pc">
							水分量が多い汗腺にのみ反応し、<br>
							ワキガの元となるアポクリン腺にダメージを与えます。<br><br class="pc">
							<strong>皮膚を切開しないので傷跡が残らず、治療後のダウンタイムが短くて済みます。</strong><br><br class="pc">
							費用は保険適用外なため高額になり、<br>
							何度か効果が出るまで照射する必要があります。
						</p>
					</div>
				</div>
			</div>
			<div class="box-ivory box-ivory2">
				<div class="pc-flex" style="align-items: stretch;">
					<div class="treatment-img treatment-img3"></div>
					<div>
						<div class="title-underline">
							<h3 id="toc8-4">クアドラカット法による<br class="sp">ワキガ手術</h3>
						</div>
						<p>先端にシェーバーが付いた機械を入れるだけの皮膚を切開し、<br>
							アポクリン腺ごと皮膚を削り取る治療法です。<br><br class="pc">
							<strong>直視下反転剪除法より切開する皮膚の範囲が狭くて済みます。</strong><br>
							費用は保険適用外のため高額になります。<br><br class="pc">
							目視で汗腺の状態を確認できないため、<br class="pc">汗腺の取り残しや皮膚を削り取りすぎてしまう可能性があります。
						</p>
					</div>
				</div>
			</div>
			<div class="box-ivory box-ivory2">
				<div class="pc-flex" style="align-items: stretch;">
					<div class="treatment-img treatment-img4"></div>
					<div>
						<div class="title-underline">
							<h3 id="toc8-5">超音波吸引法による<br class="sp">ワキガ手術</h3>
						</div>
						<p>クアドラカット法と同様、超音波を当てる機械が入るだけの皮膚を切開します。<br><br class="pc">
							<strong>超音波によってアポクリン腺を除去し、<br class="pc">吸引することでワキガの臭いを軽減することができます。</strong><br><br class="pc">
							傷跡が小さいことがメリットですが、<br class="pc">汗腺の取り残しや皮膚の削り取りすぎの懸念点があります。
						</p>
					</div>
				</div>
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

	<section id="greeting" class="bg-ivory2">
		<div class="container"> 
			<div class="title-bar">
				<h2 id="toc9">監修医師紹介</h2>
			</div>
			<h3>負担の少ない保険治療で、<br class="sp">ワキガの悩みから解放されましょう</h3>

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
		  <h3 id="toc9-1">
			あなたの人生から<br class="sp"><span class="gold">ワキガという悩み</span>が消え去ったら<br>
			どんなに楽でしょうか？
		  </h3>
		  <p class="text">
			ワキガ治療の中で一番確実で<br class="sp">効果が期待出来る「直視下反転剪除法」は、<br>
			非常に医師の技術力と<br class="sp">根気が求められる治療だと言えます。<br>
			<br>
			直接目で見てニオイの元を<br class="sp">一つ一つを手で切除していくのですから、<br class="sp">それも容易に想像がつくと思います。<br><br class="sp">
			数あるクリニックの中でも<br class="sp">この施術を保険適用としない理由としては、<br>
			美容の要素が強いという理由もあげられますが、<br class="sp">恐らく採算が合わないからでしょう。<br>
			<br>
			一方で、ワキガに悩む患者様は<br class="sp">日々の生活も心から楽しむ事が出来ずに<br>
			苦労していらっしゃるのではないでしょうか?<br>
			<br>
			当院はそのような悩める患者様の声を聞き、<br class="sp">もっと施術への敷居を低くすることで<br>
			お悩み解決へのお手伝いができたら…という<br class="sp">一心で保険適用手術とさせて頂きました。
		  </p>
		  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/profile.webp" alt="院長の経歴">
		  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/profile_sp.webp" alt="院長の経歴">
		</div>
	</section>


	<section class="yellow bg-ivory" id="snsreport">
		<div class="container">
			<div class="title-bar">
				<h2 id="toc10"><span class="mini-title">ワキガ治療の</span><br>ブログや体験レポート</h2>
			</div>
		</div>
        <div class="box">
          <div class="container item">
            <div class="flex">
              <img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/instagram.png" alt="インスタグラム">
              <div>
                <h3 id="toc10-1">Instagram</h3>
                <p>
					ワキガ治療の実際の様子や<br>
					ビフォーアフターをご紹介しています。
                </p>
                <a href="https://www.instagram.com/ikesunshine331244?utm_source=ig_web_button_share_sheet&igsh=czhpOTc0cmxpaWYz">公式インスタグラムへ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box left">
          <div class="container item">
              <h3 id="toc10-2">
                ワキガ保険適用手術治療の<br class="sp">ブログランキング
              </h3>
              <ul>
                <li class="rank01"><a href="/blogs/smell-underarm-odor/">ワキガのにおいをセルフチェック<br class="sp">する方法とは？対策を紹介！</a></li>
                <li class="rank02"><a href="/blogs/wakiga/">ワキガは脱毛で治る？ワキガの<br class="sp">メカニズムと改善法について</a></li>
                <li class="rank03"><a href="/blogs/wakiga_type/">ワキガには種類がある？においの<br class="sp">強度についても解説！</a></li>
              </ul>
          </div>
        </div>
      </section>



	<section class="bg-white">
		<div class="container">
			<div class="pc-flex" style="align-items: stretch;">
				<div class="map-wrapper pc">
				    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.811877327141!2d139.71221927578983!3d35.73084487257124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751616356535!5m2!1sja!2sjp"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="access">
					<h2 id="toc11">アクセス</h2>
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
	document.querySelectorAll('#wakiga .faq-question').forEach(btn => {
	  const item = btn.closest('.faq-item');
	  const toggleIcon = btn.querySelector('.toggle-icon');

	  // 初期状態で active クラスがあれば「−」を表示
	  toggleIcon.textContent = item.classList.contains('active') ? 'ー' : '＋';

	  // クリック時の動作
	  btn.addEventListener('click', () => {
		item.classList.toggle('active');
		toggleIcon.textContent = item.classList.contains('active') ? 'ー' : '＋';
	  });
	});
</script>

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>

<?php get_footer(); ?>