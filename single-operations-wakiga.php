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

<div id="pageTitle" class="wakiga">
<h1>わきが治療（保険適用手術）</h1>
<p>保険を使って再発しない、わきが手術</p>
</div>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "FAQPage",
	"description": "池袋サンシャイン美容外科のわきが保険適用治療に関するよくある質問",
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
		"name": "わきがを診断してもらうだけでも可能？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "もちろん大丈夫です。診断結果をお伝えし、治療はされない方もいらっしゃいます。わきが（腋臭症）の臭いについては、目に見えるものではなく定量的に数値で表現することが難しいため、臭いが気になるお悩みの深刻さは、ご本人の主観によるものとなります。当院にわきが治療についてご相談にいらっしゃる方の中には、ご自覚は全くなく、奥様に連れられてご来院される方や、会社の同僚の方や上司の方にご指摘されてご相談にいらっしゃるかたもおられます。逆に、誰からも指摘されていないけれど、ご自身で気になってご来院される方もいらっしゃいます。当院では、わきがのお悩みでご来院頂きました方、皆さまには、失礼ながらワキにガーゼを挟んでいただき一定時間過ぎた後、そのガーゼの臭いを医師が直接確認させていただきます。その際、臭いが確認できない方には、はっきりその旨をお伝えさせて頂いております。また、わきが臭ではなく汗臭さが認められる場合は多汗症治療をお奨めする場合もございます。わきが臭が認められる場合は、はっきりその旨をお伝えしております。言い方にご不快なお気持ちを持たれる方もいらっしゃるかもしれませんが、医療機関としての医師の診断の為、ご了承ください。 "
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
		"name": "妊娠・授乳中でも、わきが治療はできますか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "申し訳ございません。妊娠・授乳中の方は治療をお控えいただいております。母体・胎児の保護が最優先となる大切な時期です。わきがの手術には、局所麻酔とはいえ、麻酔を行いますし、その後痛み止めや抗生物質も処方となります。さらに、手術後の生活もストレスが全くかからないわけではございません。その為、当院ではご出産・卒乳後の治療をお願いしております。 "
		}
	},

	{
		"@type": "Question",
		"name": "すそわきがも治療できますか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "申し訳ございません。保険適用でのわきが手術による治療対象箇所は脇のみとなります。しかし、人間の体臭の元となるアポクリン汗腺（わきがの臭いの元）は脇だけに生えているわけではありません。アポクリン汗腺（わきがの臭いの元）は、脇以外ですと乳房の周り・陰部（すそわきがの原因）・耳にも生えています。 当院にて脇の手術を行っていただいても、乳房や陰部や耳のアポクリン汗腺までの除去はできないため、あくまで体臭が無臭になるわけではございません。今よりも臭いをましにする。というイメージをお持ちください。 "
		}
	},

	{
		"@type": "Question",
		"name": "わきがは遺伝なのでしょうか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "わきがの原因は、主に遺伝だと言われています。
わきがは、わきの下のアポクリン腺から分泌される汗や皮脂によって発症します。アポクリン腺を形成する細胞が遺伝するため、わきが体質は遺伝すると言われるのです。
ただ、わきがになる原因は遺伝だけではありません。食生活やストレスなどもわきがを加速させる要因になります。

●日本人はわきがの遺伝子を持つ人が少ない？＞
日本人は、わきがの遺伝子を持つ人が少ないといわれています。
アポクリン腺で作られた臭いは、毛穴から外界に漏れています。ですので、毛穴が少なければ少ないほど、匂いは漏れにくいのです。
わきの下にわき毛が生えている人が多いように、わきの下には無数の毛穴があります。その毛穴の開口部から臭いは漏れていきます。
ですので、毛量の多い欧米人はわきがの臭いが漏れやすく、毛量の少ない日本人は控えめな臭いになりやすいと言えるでしょう。

●汗はエクリン汗腺から、臭いはアポクリン汗腺から＞
アポクリン汗腺は、皮膚の深部にあります。そこから臭いが生成され、毛穴などの開口部を通り、外部へ放出されています。
それに対し、エクリン汗腺は、皮膚の浅い所にあり、しかも全身の皮膚に分布している汗腺です。
わきがはアポクリン汗腺によるもので、多汗症はエクリン汗腺によるものと言えます。 "
		}
	},


	{
		"@type": "Question",
		"name": "手術をしないで脇のニオイを軽減させる方法はないですか？",
		"acceptedAnswer": {
		"@type": "Answer",
		"text": "●制汗剤で汗によるべたつきと雑菌の繁殖を防ぐ＞
わきがの匂いと香料の匂いが混ざるとさらに強烈な匂いとなりますので、無香料の物を選ぶなど注意が必要です。
また、１日に何度も使用していると色素沈着の原因となる場合が多く、当院でも患者様からの脇の肌の黒ずみをご相談いただくことが多くあります。使い過ぎによる皮膚への負担を考慮してバランスよく使用をされてください。

●脱毛による匂いの軽減＞
患者様からよくご相談を頂くのは、レーザー脱毛による匂いの軽減です。
わきが手術において、匂いの元となる汗腺を切除する際に一緒に毛根も取れる為脱毛効果も期待できますが、レーザー脱毛による汗腺への影響はありません。
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

	<section>
		<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/top-1.jpg" alt="スターラックス傷跡治療">
	</section>

	<section>
		<div class="topNav">
			<ul>
				<li class="heightAjst"><a href="#toc1">わきがとは</a></li>
				<li class="heightAjst"><a href="#toc2-2">ご料金</a></li>
				<li class="heightAjst"><a href="#toc4">わきが手術詳細</a></li>
				<li class="heightAjst"><a href="/operations/hyperhidrosis/">多汗症治療</a></li>
				<li class="heightAjst"><a href="#toc5">よくある質問</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
			</ul>
		</div>
	</section>

	<section class="secBox">
		<div id="toc_box" class="mb20">
			<p class="toc_title">目次［<span class="toc_status">表示</span>］</p>
			<div class="toc_list">
				<ul>
					<li>
						<a href="#toc1">
							<span class="toc_num">1.</span> わきが（腋臭症）とは
						</a>
						<ul>
							<li>
								<a href="#toc1-1">
									<span class="toc_num">1－1.</span> わきが治療はこんな人におすすめ
								</a>
							</li>
							<li>
								<a href="#toc1-2">
									<span class="toc_num">1－2.</span> わきがセルフチェックリスト
								</a>
							</li>
							<li>
								<a href="#toc1-3">
									<span class="toc_num">1－3.</span> わきがの原因とメカニズム
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#toc2">
							<span class="toc_num">2.</span> 保険適用のわきが治療
						</a>
						<ul>
							<li>
								<a href="#toc2-1">
									<span class="toc_num">2－1.</span> 保険適用で出来るわきが治療の直視下反転剪除法
								</a>
							</li>
							<li>
								<a href="#toc2-2">
									<span class="toc_num">2－2.</span> 保険適用のわきが手術のご料金
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc3">
							<span class="toc_num">3.</span> わきが保険手術の治療の流れ
						</a>
						<ul>
							<li>
								<a href="#toc3-1">
									<span class="toc_num">3－1.</span> ご来院からわきが治療終了までの全体の流れ
								</a>
							</li>
							<li>
								<a href="#toc3-2">
									<span class="toc_num">3－2.</span> わきが保険適用手術の概要
								</a>
							</li>
							<li>
								<a href="#toc3-3">
									<span class="toc_num">3－3.</span> このわきが手術を当院で受けるおすすめポイント
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc4">
							<span class="toc_num">4.</span> 池袋サンシャイン美容外科でのわきが保険適用手術の詳しいご説明
						</a>
						<ul>
							<li>
								<a href="#toc4-1">
									<span class="toc_num">4－1.</span> わきが手術の詳しい流れ
								</a>
							</li>
							<li>
								<a href="#toc4-2">
									<span class="toc_num">4－2.</span> わきが手術後から抜糸が終わるまでの生活について
								</a>
							</li>
							<li>
								<a href="#toc4-3">
									<span class="toc_num">4－3.</span> わきが手術後の包帯について
								</a>
							</li>
							<li>
								<a href="#toc4-4">
									<span class="toc_num">4－4.</span> わきが手術の抜糸が終わった後のご注意
								</a>
							</li>
							<li>
								<a href="#toc4-5">
									<span class="toc_num">4－5.</span> 抜糸後の傷跡のケアについて
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc5">
							<span class="toc_num">5.</span> わきが保険適用治療に関するよくある質問
						</a>
					</li>
					<li>
						<a href="#toc6">
							<span class="toc_num">6.</span> わきが治療の色々な方法
						</a>
						<ul>
							<li>
								<a href="#toc6-1">
									<span class="toc_num">6－1.</span> 他院のわきが治療と比較
								</a>
							</li>
							<li>
								<a href="#toc6-2">
									<span class="toc_num">6－2.</span> 筋肉の縮小に作用する薬剤注射によるワキガ治療
								</a>
							</li>
							<li>
								<a href="#toc6-3">
									<span class="toc_num">6－3.</span> ミラドライなどのレーザーによるワキガ治療
								</a>
							</li>
							<li>
								<a href="#toc6-4">
									<span class="toc_num">6－4.</span> クアドラカット法によるワキガ手術
								</a>
							</li>
							<li>
								<a href="#toc6-5">
									<span class="toc_num">6－5.</span> 超音波吸引法によるワキガ手術
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#toc7">
							<span class="toc_num">7.</span> 院長のご挨拶
						</a>
					</li>
					<li>
						<a href="#toc8">
							<span class="toc_num">8.</span> わきが保険適用手術治療のブログランキング
						</a>
					</li>
					
				</ul>
			</div>
		</div>
		<h2 class="baseTitle" id="toc1">治療を受けたほうがいい…？わきが（腋臭症）のチェックリスト
</h2>
		<section class="secBox">
			<h3 class="subTitle" id="toc1-1">わきが治療はこんな人におすすめ</h3>
			<div class="drc_right">
				<ul>
					<li>わきの匂いが気になって電車に乗れない</li>
					<li>職場での周りの目が気になる</li>
					<li>家族・友人・職場の人から匂いを指摘された</li>
				</ul>
			</div>

			<h3 class="subTitle" id="toc1-2">わきがセルフチェックリスト</h3>
			<div class="photoR spFull"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/img_02.gif" alt="わきが（ワキガ・腋臭症）とは"></div>
			<ul class="baseList border">
				<li>耳アカが湿っている<br />わきの下にアポクリン腺が多いことと同様に耳アカが湿っている人はアポクリン腺が多いため、わきが体質である可能性が高く、わきが治療の必要がある人と言えます。</li>
				<li>家族にわきが（ワキガ・腋臭症）・多汗症体質の人がいる</li>
				<li>緊張したり、興奮するとよく汗ばむ</li>
				<li>自分の体臭が気になる</li>
				<li>他人にニオイを指摘されたことがある</li>
				<li>服のワキの下に黄色い汗染みができる</li>
				<li>毛深い方である</li>
				<li>季節に関係なくワキの下に汗をよくかく</li>
			</ul>

			<h3 class="subTitle" id="toc1-3">少しでも気になったらまずはカウンセリングへ</h3>
		<p>わきが手術は<strong>保険適用で治療が可能</strong>入院の必要もなく、カウンセリング当日に両ワキの手術をしてお帰り頂ける負担の少ない手術です。</p>
<p>少しでも自分の体臭が気になっている方はぜひ気兼ねなくご相談にいらっしゃってください。</p>
<p>まずは患者様一人一人のご希望に沿った治療計画の立ち上げから、お手伝いいたします。</p>
		</section>




		<h2 class="baseTitle" id="toc2">当院のわきが治療について</h2>
		<section class="secBox">
			<h3 class="subTitle" id="toc2-1">保険適用で出来るわきが治療の直視下反転剪除法</h3>
			<div class="pruning_steps mb20">
				<h4>
					<div><span>ちょくしかはんてんせんじょほう</span>直視下反転剪除法</div>
				</h4>
				<div class="pruning_s_content">
					<div class="container">
<p>脇の皮膚を切開し、汗腺を直接目で見ながら除去する手術です。</p><p>臭いの元になるアポクリン腺と発汗するエクリン腺を除去することで<br>
<span>ワキガの原因を完全に除去することができます</span>。</p><p>また、毛根も同時に除去するので脱毛効果もありますが、<br>あくまでもワキガ治療として行いますので脱毛目的での手術は行えません。</p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/pruning_step.png" alt="わきがの手術方法・女性">
					</div>
				</div>
			</div>



			<h3 class="subTitle" id="toc2-2">保険適用のわきが手術のご料金</h3>
			<div class="price_plan">
				<div class="container">
					<div class="price_box">
						<div class="curved_txt">
							<div>保険適用</div>
						</div>
						<img class="prc_note" src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/price_note.png" alt="保険適用括弧">
						<div>
							<table>
								<tr>
									<th>片ワキ</th>
									<td>約<span>25,000</span>円</td>
								</tr>
								<tr>
									<th>両ワキ</th>
									<td>約<span>50,000</span>円</td>
								</tr>
							</table>
						</div>
					</div>
					<p class="bttm_txt">
						※３割負担の方の場合のお値段です<br>
						※母子医療や０～２割負担の方にも保険適用がされます
					</p>
				</div>
			</div>
<br>

			<h3 class="subTitle" id="toc3-2">直視下反転剪除法のメリット・デメリット</h3>
<br>

<h4 style="font-size: 18px;">●保険適用で永久的に効果が持続するため、コスパが良い</h4>
<br>
<p>直視下反転剪除法を行ってワキガ治療を行うメリットは、２つあります。</p><p>1つ目は、<strong>ワキガの原因であるアポクリン腺を完全に除去</strong>し、効果が永続的であることです。</p><p>2つ目は、手術費用が安いことです。保険が適用されるうえ、<strong>医療保険の加入状況によっては手術給付金が受け取れる場合もあります</strong>。</p>
<br>
<h4 style="font-size: 18px;">●保険に加え、手術給付金が受けられる可能性も</h4>
<br>
<p><strong>任意加入されている生命保険や共済組合の保険</strong>によってはわきが手術に対し手術給付金を受けられる保険があります。</p>
<p>保険適用手術名は”視下反転剪除法”（別名皮弁法）です。この名前にて給付金を受けられるか保険会社へのご確認をお願いいたします。</p>

<p>給付をうけられるようでしたら保険会社から指定の診断書を受け取りクリニックへご持参ください。
当院にて手術を受けられた方を対象に診断書の作成をいたします。
</p><p>
※ご相談のみで治療をされていない方の診断書作成は行っておりません。
</p>
<br>
<h4 style="font-size: 18px;">●術後のケアが必要</h4>
<br>
<p>デメリットは手術で皮膚を切開し術後のケアが必要であることです。<strong>3日間はガーゼで圧迫し、1週間後に抜糸するまでは脇を濡らすことができません</strong>。</p><p>念のため手術後1か月は激しい運動などは控えていただくと傷口が開く危険性が下がります。</p><p>しかし、手術に関する不安はなるべくケアできるよう体制が整っていますので、医師にお気軽に相談してください。</p>

<a href="toc4">術後のケアや注意点が気になる方はこちら→</a>
<br>
<br>
<h4 style="font-size: 18px;">●直視下反転剪除法の概要</h4>
<br>
			<div class="mb20">
				<p>当院のわきが治療は以下のようになっています。</p>
				<table class="blogs">
					<tbody>
						<tr style="height: 18px; border:solid 1px #5454547a;">
							<th style="height: 18px; border:solid 1px #5454547a;">施術時間</th>
							<td style="height: 18px; border:solid 1px #5454547a;">
								<center>両脇　１時間程度</center>
							</td>
						</tr>
						<tr style="height: 18px; border:solid 1px #5454547a;">
							<th style="height: 18px; border:solid 1px #5454547a;">施術後の通院</th>
							<td style="height: 18px; border:solid 1px #5454547a;">
								<center>ガーゼ固定　約３日間<br />
									手術後７日目に抜糸<br />
									１か月検診</center>
							</td>
						</tr>
<tr style="height: 18px; border:solid 1px #5454547a;">
							<th style="height: 18px; border:solid 1px #5454547a;">入院の必要性</th>
							<td style="height: 18px; border:solid 1px #5454547a;">
								<center>不要</center>
							</td>
						</tr>
						<tr style="height: 18px; border:solid 1px #5454547a;">
							<th style="height: 18px; border:solid 1px #5454547a;">麻酔</th>
							<td style="height: 18px; border:solid 1px #5454547a;">
								<center>局所麻酔</center>
							</td>
						</tr>
						<tr style="height: 18px; border:solid 1px #5454547a;">
							<th style="height: 18px; border:solid 1px #5454547a;">痛み・腫れ</th>
							<td style="height: 18px; border:solid 1px #5454547a;">
								<center>麻酔をしているため手術中の痛みはございません。</
center><center><p style="font-size: 8px;">※手術中痛みを感じることがございましたら麻酔を追加いたしますので、遠慮なくおっしゃってください。</p></center>
							</td>
						</tr>
						<tr style="height: 18px; border:solid 1px #5454547a;">
							<th style="height: 18px; border:solid 1px #5454547a;">カウンセリング当日の治療</th>
							<td style="height: 18px; border:solid 1px #5454547a;">
								<center>カウンセリング当日に治療も可能です。<br /><center><p style="font-size: 8px;">※ご予約状況によっては、別のお日にちでのご案内をさせていただく場合もございます。</p></center>
							</td>
						</tr>
											</tbody>
				</table>
			</div>



			<h3 class="subTitle" id="toc3-3">当院が多くの患者様に選ばれるポイントをご紹介</h3>
			<div class="secBox wakiga_goodPoints">
				<div class="container">
					<ul>
						<li>
							<h3>01. 土日祝日も診療・手術できます</h3>
							<p>
								当クリニックでは<font color="red"><strong>土日祝日も診療</strong></font>しておりますので、お仕事や学校をお休みする必要なく治療にお通いいただけます。<br>
								また休日診療扱いになりませんため、保険の料金が増えることもございません。<br>
							</p>
						</li>
						<li>
							<h3>02. 未成年の方の治療もできます</h3>
							<p>
								当クリニックでは中学生以上の未成年の方も治療を承っており、今まで多くの未成年の方がご来院されています。<br>
								（小学生以下の方はご治療をお控えいただいておりますのでご了承ください。）<br>
								<strong>また、基本的に未成年の方は保護者の方とのご同伴が必要となりますが高校卒業された方は、<font color="red">親権者同意書</font>をご持参いただければ、お一人でのご来院と治療が可能となります。</strong>
								<a class="agreementDLD" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/pdfDLD.png" alt="親権者同意書ダウンロード"></a>
							</p>
						</li>
						<li>
							<h3>03. 診察当日の治療も大丈夫</h3>
							<p>
								診察当日に手術をすることが可能です。手術時間は20分程度となります。当日に手術をお受けいただき、術後すぐにお帰りいただくことが可能です。手術当日から通常の生活をしていただいてかまいません。<br>
								７日～１０日目が抜糸の予定日となりますので、事前の日程のご調整をお願いいたします。
							</p>
						</li>
					</ul>
				</div>
			</div>
		</section>
<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>

		<h2 class="baseTitle" id="toc3">わきが保険手術の治療の流れ</h2>
		<section class="secBox">
			<h3 class="subTitle" id="toc3-1">ご来院からわきが治療終了までの全体の流れ</h3>
			<div class="wakigaTreatment mb20">
				<div class="container">
					<h3>施術の流れ</h3>
					<ul>
						<li>
							<div class="num"><span>01</span>カウンセリング</div>
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/treatment_01.jpg" alt="01 カウンセリング" loading="lazy" class=""><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_01.png" alt="01 カウンセリング"></noscript></div>
							<p>まずはカウンセリングを行わせていただきます。女性カウンセラーが担当しますので、男性には聞きづらいこともお気軽にご相談ください。</p>
						</li>
						<li>
							<div class="num"><span>02</span>診察</div>
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/treatment_02.jpg" alt="02 診察" loading="lazy" class=""><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_02.png" alt="02 お見積もり"></noscript></div>
							<p>次に医師がワキガの程度を確認させていただきます。患者様の状態に応じて適切な手術内容の説明を行わせていただきます。ご希望されれば、カウンセリング当日に手術を行うことも可能です。</p>
						</li>
						<li>
							<div class="num"><span>03</span>手術</div>
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/treatment_03.jpg" alt="03 手術" loading="lazy" class=""><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_03.png" alt="03 手術"></noscript></div>
							<p>ワキの毛の生えている箇所をマークし、ワキのシワに沿って皮膚を切開し、アポクリン腺除去します。術後は、止血し、圧迫固定します。</p>
						</li>
						<li>
							<div class="num"><span>04</span>包帯外し<br>抜糸</div>
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/treatment_04.jpg" alt="04 包帯外し・抜糸" loading="lazy" class=""><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_04.png" alt="04 包帯外し・抜糸"></noscript></div>
							<p>手術から3日目に包帯外し、手術から7－10日目に抜糸を行います。抜糸は痛みはありませんのでご安心下さい。<br>お仕事などがある方は、包帯外しはご来院いただかなくても大丈夫です。</p>
						</li>
						<li>
							<div class="num"><span>05</span>経過診察</div>
							<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/treatment_05.jpg" alt="05 経過診察" loading="lazy" class=""><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_05.png" alt="05 経過診察"></noscript></div>
							<p>当院では、術後の経過・症状の改善を最後まで責任を持ってご対応いたしますので、ご安心ください。<br>
								抜糸後の診察は、何回でもお受けします。
							</p>
						</li>
					</ul>
				</div>
			</div>
</section>
		<section class="secBox">
			<h3 class="subTitle" id="toc4-1">わきが手術の詳しい流れ</h3>
			<div class="wakiga_steps mb20">
				<div class="wakiga_steps_box">
					<h4><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_01.png" alt="局所麻酔"></h4>
					<div class="centeringTest">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_01.png" alt="除去までの流れ">
						</figure>
						<p class="flow-op">
							脇の範囲をデザイン後、局所麻酔を注射で行います。<br>
							その後、脇の折れジワに沿って、約数㎝切開をします。<br>
							最小限の傷の幅に抑えて皮膚をひっくり返し、医師が直接はさみでアポクリン汗腺とエクリン汗腺を除去します。
						</p>
						<!-- / .centeringTest -->
					</div>
				</div>
				<div class="wakiga_steps_box">
					<h4><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_02.png" alt="わきがの元となる汗腺"></h4>
					<div class="centeringTest">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_02.png" alt="手術の詳しい流れ">
						</figure>
						<p class="flow-op">
							わきがの元となる汗腺を除去するとつるつるの状態となります。<br>
							皮膚を３６０度あらゆる方向にひっくり返し、しっかり汗腺がなくなっていることを確認してから縫合を行います。
						</p>
						<!-- / .centeringTest -->
					</div>
				</div>
				<div class="wakiga_steps_box">
					<h4><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_03.png" alt="除去した汗腺の一部"></h4>
					<div class="centeringTest">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_03.png" alt="手術の詳しい流れ">
						</figure>
						<p class="flow-op">
							除去した汗腺の一部です。この汗腺がわきがのにおいの原因元になります。
						</p>
						<!-- / .centeringTest -->
					</div>
				</div>
				<div class="wakiga_steps_box">
					<h4><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/stepLable_04.png" alt="止血処理"></h4>
					<div class="centeringTest">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_04.jpg" alt="手術の詳しい流れ">
						</figure>
						<p class="flow-op">
							止血処理を行った後、皮膚がよれたりずれてくっつかないように縫合を行います。<br>
							傷跡は脇中央の１本のみで、他の部分は皮膚がよれてくっつかないように糸で留めているだけなので傷跡としては残りません。
						</p>
						<!-- / .centeringTest -->
					</div>
				</div>
				<div class="wakiga_steps_box">
					<h4><img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/stepLable_05.png" alt="縫合後"></h4>
					<div class="centeringTest">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/operations/wakiga/wakiga_step_05.png" alt="手術の詳しい流れ">
						</figure>
						<p class="flow-op">
							縫合後は、クッションとテーピングを脇に挟んで巻いてお帰り頂きます。<br>
							抗生物質と痛み止めを３日分お持ち帰りいただきます。
						</p>
						<!-- / .centeringTest -->
					</div>
				</div>
			</div>


		<h2 class="baseTitle" id="toc4">術後のケアや注意点について</h2>
<br>
			<h3 class="subTitle" id="toc4-2">抜糸が終わるまでの生活について</h3>
<br>
<h4 style="font-size: 18px;">●運動はお控えいただくが、家事やデスクワークなどは問題ございません</h4>
<br>
			<p>
				手術後も、基本的な家事やデスクワークなどは不自由ながらも<strong>問題なく行っていただけます</strong>。<br>
				しかし、テニス・ゴルフといった脇に負担がかかる運動はお控えください。<br><br>

				また、自転車やお車の運転なども抜糸が終わるまでお控えいただいております。</p>
<br>
<h4 style="font-size: 18px;">●入浴は患部をぬらさないようにご注意いただきます</h4>
<br>
				<p>切開縫合手術となりますため、脇は抜糸（手術後約７日目）が終わるまでの間<strong>濡らすことができません</strong>。<br>
				お風呂に入られるときには、ｻﾗﾝﾗｯﾌﾟを巻くなど防水して濡らさないようにお入りください。<br>
				頭を洗う際も肩が濡れないように、お気を付け下さい。<br>
				髪が長い方は、美容院などで洗髪されるのも良いかもしれません。
			</p>

			<h3 class="subTitle" id="toc4-3">術後の包帯について</h3>
<br><h4 style="font-size: 18px;">●通常3日間は包帯を巻きっぱなしにしていただきます</h4>
<br>
			<p>手術終了後、脇をクッションで圧迫し、捻挫用テーピングで固定して、お帰り頂きます。<br>
				（クッションを脇に直接縫い付けるタイオーバーは脇の傷を増やすことになりますので当院では行っておりません。）<br><br>

				このテーピングによる圧迫固定は、骨折のギプスのような役割とお考え下さい。<br>
				その為、次回ご来院時までは<strong>２４時間巻きっぱなし</strong>となります。<br><br>
				通常は手術をしてからの<strong>最短３日後</strong>にクリニックへお越しいただければ、包帯を外すことが可能です。（<font color="red"><strong>くれぐれも自己判断での包帯外しはお控えください。</strong></font>不正出血の原因となります）</p>
<br>
<h4 style="font-size: 18px;">●包帯を外した後はガーゼを当てるだけになります</h4>
<br>
				３日目にクリニックにてテーピングによる圧迫固定を解除しましたら、ワキにはガーゼを当てているだけの身軽な状態となります。<br>
				身軽な状態になっても、まだ脇は傷口を縫合した状態です。その為抜糸が終わるまでは、今までと同様に濡らせませんし 脇に過度な負担がかかる行動はお控えください。<br>
				テーピングによる圧迫固定時と同様に、脇を濡らさないようにご注意ください。
			</p>

			<h3 class="subTitle" id="toc4-4">抜糸が終わった後のご注意</h3>
<br>
<h4 style="font-size: 18px;">●抜糸後も１ヶ月以上は、脇に負担のかかる激しい運動はお控え下さい</h4>
<br>
			<p>
				わきがの手術後、約７日目～１０日目に<strong>抜糸</strong>を行います。<br>
				これで、基本的なわきが治療は終了となります。<br>
				翌日からは脇を濡らしてお風呂も入る頃ができます。<br><br>

				抜糸が終われば、ひとまず安心の状態ですが、抜糸したての傷口は大変柔らかく開きやすい状態です。<br>
				術後１ヶ月以上は、脇に負担のかかる<strong>激しい運動はお控え下さい。</strong><br>
				また温泉や海・プールなどは衛生面の点からも傷口がしっかりくっつくまではお控えください。
			</p>

			<h3 class="subTitle" id="toc4-5">術後の傷跡ケアと経過について</h3>
<br>
<h4 style="font-size: 18px;">●抜糸後でも診察を受けることが可能</h4>
<br>
			<p>
				当院では、術後の経過・症状の改善を最後まで責任を持ってご対応させて頂いております。 抜糸後の適切な<strong>アドバイス</strong>と診察を何度でもご診察いただけます。<br>
				手術において脇全体の皮膚を剥離し、わきがの原因となるアポクリン汗腺の除去を行うため、手術直後は硬さや赤み・色素沈着などができます。</p>

<br>
<h4 style="font-size: 18px;">●手術の傷跡は6か月～1年ほどで落ち着きます</h4><br>
				<p>６か月も経過していくと徐々にきれいに仕上がってまいります。傷跡が完全に落ち着くには１年ほどくらいかかるとお考え下さい。<br>
				元々アトピー性皮膚炎の体質の方などは、皮膚が弱く色素沈着が強く生じる傾向の方もいらっしゃいます。ケロイド体質の方は、手術後半年程度かけて傷口がケロイド状に盛り上がってくる方もいらっしゃいます。<br>
				色素沈着になりやすいご自覚がある方やケロイド体質の方には、予防する内服薬をご用意させていただいております。 気になる方は、どうぞお気軽にお尋ねください。</p>
<br>
<h4 style="font-size: 18px;">●術後1か月以内は患部のマッサージとストレッチが重要になります</h4>
<br>
				<p>また、脇はもともとしわが多くたるみやすい部分の為、人によって位は皮膚がずれてくっついてしまう方や皮膚のツッパリが気になる方もいらっしゃいます。<br>
				そのような時は、術後１ヶ月以内の皮膚を伸ばすストレッチが大変重要となってまいります。<br>
				医師にて直接<strong>マッサージ</strong>をさせて頂いておりますので、気になる方は放置せずご相談ください。<br>
				<img src="/wp-content/uploads/2019/08/30d8a2c24b798c0af1baec3d9254d9f3.png" width="222" height="173" class="alignnone size-full wp-image-2100" alt="手術後の脇" />
				<img src="https://stg.ike-sunshine.co.jp/wp-content/uploads/2019/09/c1d9c428389228a761558d2bf36b3e95.png" width="222" height="178" class="alignnone size-full wp-image-2269" alt="手術後の脇" />
			</p>
		</section>


<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>

		<h2 class="baseTitle" id="toc5">わきが保険適用治療に関するよくある質問</h2>
		<section class="secBox">
			<ul class="faq">
				<li>
					<div class="faq_q">ワキガ治療ができない場合はある？</div>
					<div class="faq_a" style="display: none;"><span>ニオイがない方は、きちんとその旨をお伝えしております。ニオイがない方は、治療の必要性がございませんので治療できません。<br>また、糖尿病の既往歴をお持ちの方は術後の傷の経過が悪く、全身管理が必要となりますため、紹介状を書き、大学病院等入院施設のある医療機関へのご紹介をさせて頂いております。
						</span></div>
				</li>
				<li>
					<div class="faq_q">当日の施術は可能？</div>
					<div class="faq_a" style="display: none;"><span>診察当日に手術をすることも可能です。手術時間は1時間程度となります。そのため、当日に手術をお受けいただき、術後すぐにお帰りいただけます。<br>もちろん、その日から通常の生活をしていただいてかまいません。</span></div>
				</li>
				<li>
					<div class="faq_q">保険は適用される？</div>
					<div class="faq_a" style="display: none;"><span>当院では、保険を適用しているので、負担金額が抑えられます。一般的な保険証は自己負担3割の保険証となり、自己負担金額は両脇で約43,000円となります。<br>
							自己負担が無料の保険証をお持ちの方は自己負担なしで治療をお受けいただけます。<br>
							ただし、生活保護受給証での治療は行うことができません。
						</span></div>
				</li>
				<li>
					<div class="faq_q">わきがを診断してもらうだけでも可能？</div>
					<div class="faq_a" style="display: none;"><span>もちろん大丈夫です。診断結果をお伝えし、治療はされない方もいらっしゃいます。<br>わきが（腋臭症）の臭いについては、目に見えるものではなく定量的に数値で表現することが難しいため、臭いが気になるお悩みの深刻さは、ご本人の主観によるものとなります。<br>
							当院にわきが治療についてご相談にいらっしゃる方の中には、ご自覚は全くなく、奥様に連れられてご来院される方や、会社の同僚の方や上司の方にご指摘されてご相談にいらっしゃるかたもおられます。<br>
							逆に、誰からも指摘されていないけれど、ご自身で気になってご来院される方もいらっしゃいます。<br>
							当院では、わきがのお悩みでご来院頂きました方、皆さまには、失礼ながらワキにガーゼを挟んでいただき一定時間過ぎた後、そのガーゼの臭いを医師が直接確認させていただきます。<br>
							その際、臭いが確認できない方には、はっきりその旨をお伝えさせて頂いております。<br>
							また、わきが臭ではなく汗臭さが認められる場合は多汗症治療をお奨めする場合もございます。<br>
							わきが臭が認められる場合は、はっきりその旨をお伝えしております。<br>
							言い方にご不快なお気持ちを持たれる方もいらっしゃるかもしれませんが、医療機関としての医師の診断の為、ご了承ください。
						</span></div>
				</li>
				<li>
					<div class="faq_q">未成年ですが治療できますか？</div>
					<div class="faq_a" style="display: none;"><span>中学生以上であれば、治療を行うことが可能です。<br>
							一般的に、アポクリン腺は思春期に大きく発達して増えてきます。<br>
							早い方だと小学校の高学年から気になりだす方もいらっしゃいます。<br>
							多感な時期、臭いについて悩むことは、深刻です。<br>
							当院ではワキガ治療について中学生から治療を承っております。<br>
							ただし、今現在生えているアポクリン腺の除去はできますが、今後成長とともに生えてくるアポクリン汗腺の
							予防を行うことはできません。<br>
							その為、中学の時点で汗腺の除去を行っても、成人してお体の成長が止まるまで、汗腺が増えてきますから、大人になった時にまた脇の臭いが気になる可能性はあります。<br>
							その場合は、再度　大人になってから手術をしていただくことをお勧めしております。<br>
							未成年の方は、必ず保護者の方のご同伴が必要となります。<br>
							まずは悩まずにご家族の方とお話しを聞きにいらっしゃって下さい。
						</span></div>
				</li>
				<li>
					<div class="faq_q">妊娠・授乳中でも、わきが治療はできますか？</div>
					<div class="faq_a" style="display: none;"><span>申し訳ございません。妊娠・授乳中の方は治療をお控えいただいております。<br>
							母体・胎児の保護が最優先となる大切な時期です。<br>
							わきがの手術には、局所麻酔とはいえ、麻酔を行いますし、その後痛み止めや抗生物質も処方となります。<br>
							さらに、手術後の生活もストレスが全くかからないわけではございません。<br>
							その為、当院ではご出産・卒乳後の治療をお願いしております。
						</span></div>
				</li>
				<li>
					<div class="faq_q">すそわきがも治療できますか？</div>
					<div class="faq_a" style="display: none;"><span>申し訳ございません。保険適用でのわきが手術による治療対象箇所は脇のみとなります。<br>
							しかし、人間の体臭の元となるアポクリン汗腺（わきがの臭いの元）は脇だけに生えているわけではありません。<br>
							アポクリン汗腺（わきがの臭いの元）は、脇以外ですと乳房の周り・陰部（すそわきがの原因）・耳にも生えています。
							当院にて脇の手術を行っていただいても、乳房や陰部や耳のアポクリン汗腺までの除去はできないため、あくまで体臭が無臭になるわけではございません。今よりも臭いをましにする。というイメージをお持ちください。

						</span></div>
				</li>
				<li>
					<div class="faq_q">わきがは遺伝なのでしょうか？</div>
					<div class="faq_a" style="display: none;">
						<span>
							わきがの原因は、主に<strong>遺伝</strong>だと言われています。<br />
							わきがは、わきの下のアポクリン腺から分泌される汗や皮脂によって発症します。アポクリン腺を形成する細胞が遺伝するため、わきが体質は遺伝すると言われるのです。<br />
							ただ、わきがになる原因は遺伝だけではありません。<strong>食生活やストレス</strong>などもわきがを加速させる要因になります。<br><br>
							<b>●日本人はわきがの遺伝子を持つ人が少ない？</b><br>
							日本人は、<strong>わきがの遺伝子</strong>を持つ人が少ないといわれています。<br />

							アポクリン腺で作られた臭いは、毛穴から外界に漏れています。ですので、毛穴が少なければ少ないほど、匂いは漏れにくいのです。<br />
							わきの下にわき毛が生えている人が多いように、わきの下には無数の毛穴があります。その毛穴の開口部から臭いは漏れていきます。<br />
							ですので、毛量の多い欧米人はわきがの臭いが漏れやすく、毛量の少ない日本人は控えめな臭いになりやすいと言えるでしょう。<br><br>

							<b>●汗はエクリン汗腺から、臭いはアポクリン汗腺から</b><br>
							アポクリン汗腺は、皮膚の深部にあります。そこから臭いが生成され、毛穴などの開口部を通り、外部へ放出されています。<br />それに対し、エクリン汗腺は、皮膚の浅い所にあり、しかも全身の皮膚に分布している汗腺です。<br />
							わきがは<strong>アポクリン汗腺</strong>によるもので、多汗症は<strong>エクリン汗腺</strong>によるものと言えます。
						</span>
					</div>
				</li>
				<li>
					<div class="faq_q">手術をしないで脇のニオイを軽減させる方法はないですか？</div>
					<div class="faq_a" style="display: none;">
						<span>
							<b>●制汗剤で汗によるべたつきと雑菌の繁殖を防ぐ</b><br>
							わきがの匂いと香料の匂いが混ざるとさらに強烈な匂いとなりますので、無香料の物を選ぶなど注意が必要です。<br />また、１日に何度も使用していると色素沈着の原因となる場合が多く、当院でも患者様からの脇の肌の黒ずみをご相談いただくことが多くあります。<strong>使い過ぎによる皮膚への負担</strong>を考慮してバランスよく使用をされてください。<br><br>
							<b>●脱毛による匂いの軽減</b><br>
							患者様からよくご相談を頂くのは、レーザー脱毛による匂いの軽減です。<br />
							わきが手術において、匂いの元となる汗腺を切除する際に一緒に毛根も取れる為脱毛効果も期待できますが、レーザー脱毛による汗腺への<strong>影響はありません</strong>。<br />
							むしろ、レーザー脱毛による毛穴への刺激のために、前よりも汗を多くかくようになったとの悩みを伺うことも多くあります。<br />
							しかし、レーザー脱毛を行うことで、毛根周りの汗がたまりずらくはなるため、清潔な状態を保ちやすくなるメリットはあります。<br><br>
							<b>●規則正しい睡眠と食生活を心掛ける</b><br>
							タバコ・飲酒・寝不足によるストレス・・・色々なことで体臭が強くなります。<br>
							肉類の過剰な摂取を避け野菜中心の規則正しい生活を心掛けましょう。
						</span>
					</div>
				</li>
			</ul>
		</section>

		<h2 class="baseTitle" id="toc6">わきが治療の色々な方法</h2>
		<section class="secBox">
			<h3 class="subTitle" id="toc6-1">他院のわきが治療と比較</h3>
			<div class="wakiga">
				<div class="container">
					<table>
						<tbody>
							<tr>
								<th rowspan="2"></th>
								<th colspan="3">治療内容</th>
							</tr>
							<tr>
								<th>レーザー治療<span>（ミラドライなど）</span></th>
								<th>手術<span>（保険適用）</span></th>
								<th>筋肉の縮小に作用する薬剤注射</th>
							</tr>
							<tr>
								<th>効果</th>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_circle.png" alt="まる"><span>永続的</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_circle.png" alt="まる"><span>永続的</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_triangle.png" alt="さんかく"><span>一時的</span></td>
							</tr>
							<tr>
								<th>治療時間</th>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_triangle.png" alt="さんかく"><span>約1時間</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_triangle.png" alt="さんかく"><span>約1時間</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_circle.png" alt="まる"><span>約５分前後</span></td>
							</tr>
							<tr>
								<th>保険適用</th>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_triangle.png" alt="さんかく"><span>不可</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_double_circle.png" alt="にじゅうまる"><span>可能</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_triangle.png" alt="さんかく"><span>不可</span></td>
							</tr>
							<tr>
								<th>料金</th>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_triangle.png" alt="さんかく"><span>約３０万円（両ワキ）</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_double_circle.png" alt="まる"><span>43,000円（両ワキ）</span></td>
								<td><img src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_double_circle.png" alt="まる"><span>約10万円（両ワキ）</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<img class="wkg_bottom" src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/wakiga_table_girl.png" alt="女性">
			</div>

			<h3 class="subTitle" id="toc6-2">筋肉の縮小に作用する薬剤注射によるワキガ治療</h3>
			<p>脇に筋肉を縮小させる薬剤を注射し、<strong>臭いを出すアポクリン腺の周りの筋肉の働きを弱めます。</strong></p><p>注射なので治療時間が短く、日常生活への影響がほとんどありません。</p><p>費用は保険適用外で、両脇で99,000円となります。</p><p>効果は個人差がありますが3～6か月継続し、注射した薬剤が体内に吸収されるにつれて効果が薄まります。</p><p>
			<h3 class="subTitle" id="toc6-3">ミラドライなどのレーザーによるワキガ治療</h3>
			<p>電子レンジに使用されるマイクロウェーブを皮膚に照射する治療法です。</p><p>水分量が多い汗腺にのみ反応し、ワキガの元となるアポクリン腺にダメージを与えます。</p><p><strong>皮膚を切開しないので傷跡が残らず、治療後のダウンタイムが短くて済みます。</strong></p><p>費用は保険適用外なため高額になり、何度か効果が出るまで照射する必要があります。</p>

			<h3 class="subTitle" id="toc6-4">クアドラカット法によるワキガ手術</h3>
			<p>先端にシェーバーが付いた機械を入れるだけの皮膚を切開し、アポクリン腺ごと皮膚を削り取る治療法です。</p><p><strong>直視下反転剪除法より切開する皮膚の範囲が狭くて済みます。</strong></p><p>費用は保険適用外のため高額になります。</p><p>目視で汗腺の状態を確認できないため、汗腺の取り残しや皮膚を削り取りすぎてしまう可能性があります。</p><p>

			<h3 class="subTitle" id="toc6-5">超音波吸引法によるワキガ手術</h3>
			<p>クアドラカット法と同様、超音波を当てる機械が入るだけの皮膚を切開します。</p><p><strong>超音波によってアポクリン腺を除去し、吸引することでワキガの臭いを軽減することができます。</strong></p><p>傷跡が小さいことがメリットですが、汗腺の取り残しや皮膚の削り取りすぎの懸念点があります。</p><p>

		</section>

		<h2 class="baseTitle" id="toc7">院長のご挨拶</h2>
		<section class="secBox">
			<div class="doctor_r">
				<img class="right sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/doctor_r.jpg" alt="院長　鈴木 栄樹">
				<div class="left">
					<img class="mb20" src="<?php echo get_template_directory_uri(); ?>/img/operations/test-wakiga/doctor_title.gif" alt="保険適用治療でお財布への負担も少なく、もう悩まないワキへ">
					<p class="txt">
						<b>あなたの人生からワキガという悩みが消え去ったらどんなに楽でしょうか？</b><br>
						ワキガ治療の中で一番確実で効果が期待出来る「直視下反転剪除法」は、非常に医師の技術力と根気が求められる治療だと言えます。直接目で見てニオイの元を一つ一つを手で切除していくのですから、それも容易に想像がつくと思います。数あるクリニックの中でもこの施術を保険適用としない理由としては、美容の要素が強いという理由もあげられますが、恐らく採算が合わないからでしょう。
						一方で、ワキガに悩む患者様は日々の生活も心から楽しむ事が出来ずに苦労していらっしゃるのではないでしょうか?当院はそのような悩める患者様の声を聞き、もっと施術への敷居を低くすることでお悩み解決へのお手伝いができたら…という一心で保険適用手術とさせて頂きました。
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
				<img class="right pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/doctor_r.jpg" alt="院長　鈴木 栄樹">
			</div>
		</section>

		<section class="secBox" id="toc8">
			<div class="blogRanking">
				<h4>わきが保険適用手術治療のブログランキング</h4>
				<ul>
					<li><span style="background-color: #FF93A6;">1</span><a href="/blogs/underarm_odor/smell-underarm-odor/" target="_blank" rel="noopener noreferrer">わきがのにおいをセルフチェックする方法とは？対策を紹介！</a></li>
					<li><span style="background-color: #F39800;">2</span><a href="/blogs/underarm_odor/wakiga/" target="_blank" rel="noopener noreferrer">ワキガは脱毛で治る？ワキガのメカニズムと改善法について </a></li>
					<li><span style="background-color: #70cdde;">3</span><a href="/blogs/underarm_odor/wakiga_type/" target="_blank" rel="noopener noreferrer">わきがには種類がある？においの強度についても解説！ </a></li>
					<!-- <li><span style="background-color: #FF93A6;">1</span><a href="/blogs/underarm_odor/smell-underarm-odor/" target="_blank" rel="noopener noreferrer">わきがのにおいをセルフチェックする方法とは？対策を紹介！</a></li>
					<li><span style="background-color: #F39800;">2</span><a href="/blogs/underarm_odor/wakiga/" target="_blank" rel="noopener noreferrer">ワキガは脱毛で治る？ワキガのメカニズムと改善法について </a></li>
					<li><span style="background-color: #70cdde;">3</span><a href="/blogs/underarm_odor/wakiga_type/" target="_blank" rel="noopener noreferrer">わきがには種類がある？においの強度についても解説！ </a></li> -->
				</ul>
			</div>
		</section>
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