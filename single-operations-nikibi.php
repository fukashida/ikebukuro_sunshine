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

<div id="pageTitle" class="nikibi">
<h1>ニキビ・<br>ニキビ跡治療</h1>
<p>ニキビ跡治療<br clear="sp"><span class="brown-color">１ショット体験</span><br>１箇所<span class="small">(1.5cm×1.5cm)</span><br><span class="fee">2,200円</span></p>
</div>

<section class="secBox nikibi">
	<section class="catch sp">
		<ul>
			<li>今まで<br>消えなかった<br>ニキビ跡も<br>しっかり治療！</li>
			<li>クレーターも<br>治療！</li>
			<li>ニキビだけ<br>じゃなく<br>肌質改善へ</li>
		</ul>
	</section>
	<section class="secBox top-menu">
		<div class="topNav">
			<ul>
				<li class="heightAjst"><a href="#toc2">治療について</a></li>
				<li class="heightAjst"><a href="#toc3">症例写真</a></li>
				<li class="heightAjst"><a href="#toc4">選ばれる<br>理由</a></li>
				<li class="heightAjst"><a href="#toc5">施術の流れ</a></li>
				<li class="heightAjst"><a href="#toc6">よくある<br>ご質問</a></li>
				<li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
			</ul>
		</div>
	</section>

	<section class="case-photo">
		<h2 class="lineTitle ">ニキビ・ニキビ跡治療症例写真</h2>
		<div class="case-photo-list">
		<div class="c-photo">
			<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_05.png" alt="女性 両頬の治療" loading="lazy" width="520" height="208">
		</div>
		<div class="c-photo">
			<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_06.png" alt="男性 両頬とこめかみの治療" loading="lazy" width="520" height="208">
		</div>
		<div class="c-photo">
			<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_07.png" alt="女性 あご・口周りの治療" loading="lazy" width="520" height="208">
		</div>
		</div>
		<div class="internal-link"><a href="#toc3">詳細はこちら</a></div>
	</section>

	<section class="clr bg-spot-wallpaper">
		<h2 class="lineTitle">にきびが治らない原因や<br class="sp">ニキビ跡が傷として残ってしまう理由</h2>
		<div class="flex-box">
			<div>
			<div class="sp"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_08.jpg" alt="にきび治療前後"></div>
		    <p>正常な皮膚は、油膜が皮膚を多い、潤いある状態です。<br>
		    しかし何らかの理由で毛穴の入り口が詰まっていると、その皮脂が外に出ることができず、毛穴の中にたまっていきます。<br>
		    このような状態の時に、毛穴の中で細菌が増殖し、毛穴の中で炎症が起こり、いわゆる「ニキビ」ができます。<br>
		    この時にコメドという袋が毛穴の入り口をふさぎ大きく発達します。ニキビをつぶしたときに出てくる乳白色の液体です。<br>
		    この膿が毛穴の袋を大きく押し広げ、余分な空間が空いてしまうため、炎症が収まったとしても、ニキビ跡として残ってしまい、クレーターになったり色素沈着になりにきび跡として残っていくのです。</p>
		    </div>
            <div class="pc"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_08.jpg" alt="にきび治療前後"></div>
        </div>
        <div class="mb20">
        	<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_09.png" alt="にきびが治らない原因やニキビ跡が傷として残ってしまう理由" class="pc">
            <img src="/wp-content/uploads/2021/10/ISC_21_SP_nikibi_06.png" alt="にきびが治らない原因やニキビ跡が傷として残ってしまう理由" class="sp">
        </div>

		<h2 class="lineTitle">にきびやニキビ跡の種類</h2>
        <div class="flex-box spwrap">
        	<div class="flex-first">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_10.png" alt="白ニキビ">
        		<p>比較的初期状態のニキビです。毛穴に詰まった皮脂や角質がまざったもの（コメド）が白く透けて見えます。痛みはまだないのですが、放置していると炎症が悪化して、赤にきびになりやすいので早めのケアが大切になります。</p>
        	</div>
        	<div class="flex-second">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_11.png" alt="黒ニキビ">
        		<p>毛穴に詰まった皮脂が参加して黒くなったもので、厳密にはニキビではなく黒ずみ（代表的なものに「いちご鼻」があります）ですが、放置するとニキビ化していきます。また、白ニキビのコメドが酸化して色が黒くなったタイプ（開放面皰）もあります。</p>
        	</div>
        	<div class="flex-third">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_12.png" alt="赤ニキビ">
        		<p>アクネ菌が毛穴の中の皮脂を栄養として繁殖、ニキビが進行して炎症を起こした状態です。ひどくなると膿んでふくれあがり、痛みを伴う場合や熱を持つことも。この状態になった場合はクリニックでの本格的な治療がお勧めです。</p>
        	</div>
        	<div class="flex-four">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_13.png" alt="黄ニキビ">
        		<p>菌の死骸が膿となった状態で、正確には「嚢腫」と呼ばれます。毛穴の中の嚢胞がやぶれると中身が出て固いシコリになったり、皮膚細胞が壊れ皮脂や角質などが周囲に漏れ出します。炎症は真皮層に達し、ひどいにきび跡になっていきます。</p>
        	</div>
        </div>
        <h3 class="white-title green-color">クレータになってしまったニキビ跡</h3>
        <div class="flex-box flst spwrap">
        	<div class="flex-first">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_14.png" alt="アイスピックで刺したようなニキビ跡">
        		<p>かなり深い傷跡のため、根気強くレーザー照射をしていくことで改善を目指します。通常、月に１度のスターラックス照射を約１０回していただく事をお勧めしております。</p>
        	</div>
        	<div class="flex-second">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_15.png" alt="水ぼうそうのような円型・楕円形のニキビ跡">
        		<p>面状に陥没し、表皮との境目がはっきりわかる傷跡に。また、両頬全体に広がるようにできるのも特徴です。通常、月に１度のスターラックス照射を約５回していただく事をお勧めしております。</p>
        	</div>
        	<div class="flex-third">
        		<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_16.png" alt="うねり、波打つようなでこぼこのニキビ跡">
        		<p>皿状にへこんだニキビ跡が多発してうねるような波状のデコボコにお肌の形状自体が変化したものです。通常、月に１度のスターラックス照射を約１５回していただく事をお勧めしております。</p>
        	</div>
        </div>
        </section>
        <section>
        <h2 class="lineTitle">こんな悩みはありませんか？</h2>
        <div class="nkibi-nayami">
        	<ul>
        		<li>毎日ケアしているのに、<span>なかなか治らない</span></li>
        		<li>色素沈着で<span>シミのようなニキビ跡に</span></li>
        		<li>潰してしまって<span>ボコボコのクレータに</span></li>
        	</ul>
        </div>
        <section class="clr bg-reddish-brown triangle">
        	<h2 class="lineTitle-white">池袋サンシャイン美容外科は<br class="sp">さまざまなニキビ・ニキビ跡の治療に対応</h2>
            <div class="lux-box">
            	<div class="herf-box">
            	<h3 class="green-title taC fs28">スターラックス<br class="sp">1540</h3>
            	<ul class="beige-bar">
            		<li>ニキビの原因であるアクネ菌の殺菌</li>
            		<li>殺菌することで新たなニキビの発生を防止</li>
            		<li>再生能力を活性化することにより肌質改善</li>
            	</ul>
            	</div>
            </div>
            <div class="flex-box spwrap">
            	<div class="flex-box-one">
            		<h3 class="green-title fs23">イオン導入</h3>
            		<div class="reddish-beige-txt">コラーゲンの合成を促進し「ニキビ跡」を改善</div>
            	</div>
            	<div class="flex-box-two">
            		<h3 class="green-title fs23">トレチノイン</h3>
            		<div class="reddish-beige-txt">ターンオーバーの正常化</div>
            	</div>
            	<div class="flex-box-three">
            		<h3 class="green-title fs23">ハイドロキノン</h3>
            		<div class="reddish-beige-txt">高い美白効果を期待できる</div>
            	</div>
            </div>
        </section>
        <section id="toc2" class="clr bg-beige">
        	<h2 class="greenHeading">皮膚に優しい「スターラックス1540」とは</h2>
        	<div class="flex-box pc">
        		<div class="flex-img">
        			<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_20.png" alt="スターラックス1540">
        		</div>
        		<div class="flex-text">
        			<h3 class="green-title fs28">表面を冷やして圧迫照射することで、<br>皮膚への負担を軽減した医療機器です。</h3>
        			<p>当院では、凝固型フラクショナルレーザーとして米国Palomar社製「スターラックス1540」を設置。皮膚表面を冷やしながら圧迫照射することによって、痛みや術後の赤み、腫れなどを軽減しながら高い出力のレーザーを照射することができるため、高い評価を得ている医療機器です。従来の機器よりも痛みが少ないため、麻酔をしない施術が可能となっただけでなく、ジェル等をお肌に塗らなくても照射できるため、施術後の洗顔が必要ありません。ニキビやニキビ跡の治療でお悩みの方はぜひ、皮膚への負担が軽減された、優しい医療機器「スターラックス1540」をお試しください。</p>
        		</div>
        	</div>
        	<div class="sp">
        		<h3 class="green-title fs28">表面を冷やして圧迫照射することで、皮膚への負担を軽減した医療機器です。</h3>
        		<div class="flex-box">
        			<div class="flex-img">
        				<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_20.png" alt="スターラックス1540">
        			</div>
        			<div class="flex-text">
        				<p>当院では、凝固型フラクショナルレーザーとして米国Palomar社製「スターラックス1540」を設置。皮膚表面を冷やしながら圧迫照射することによって、痛みや術後の赤み、腫れなどを軽減しながら高い出力のレーザーを照射することができるため、高い評価を得ている医療機器です。<br>
        					従来の機器よりも痛みが少ないため、麻酔をしない施術が可能となっただけでなく、ジェル等をお肌に塗らなくても照射できるため、施術後の洗顔が必要ありません。<br>
        				ニキビやニキビ跡の治療でお悩みの方はぜひ、皮膚への負担が軽減された、優しい医療機器「スターラックス1540」をお試しください。</p>
        			</div>
        		</div>
        	</div>
        	<div class="flex-box spwrap">
        		<div class="flex-half bg-white">
        			<div class="flex-box" style="align-items: center;">
        				<div class="flex-text">
        					<h3 class="green-title fs23">熱による殺菌効果</h3>
        					<p>細かいマイクロビームを格子状に照射、皮膚表面に目に見えないほどの微小な穴を開けます。このとき発生する熱によって微笑の穴を開けてアクネ菌を殺菌し、新たなニキビの発生も防止します。</p>
        				</div>
        				<div class="flex-img">
        					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_21.png" alt="施術">
        				</div>
        			</div>
        		</div>
        		<div class="flex-half bg-white">
        			<div class="flex-box" style="align-items: center;">
        				<div class="flex-text">
        					<h3 class="green-title fs23">ニキビ跡の治療</h3>
        					<p>肌表面に開けた微小の穴に熱を通すことで皮膚の収縮効果が生まれます。この効果により引き締めを行い、同時に皮膚細胞の再構築を促すことによりニキビ跡を滑らかな肌に導き、肌質改善に効果を発揮します。</p>
        				</div>
        				<div class="flex-img">
        					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_22.png" alt="効果">
        				</div>
        			</div>
        		</div>
        	</div>
        	<h3 class="reddish-brown-title">スターラックスによるレーザー治療の概要</h3>
        	<h4 class="nolineTitle taC">痛くなく、傷跡や内出血の心配がない<span class="green-title">最新のにきび治療</span>です。</h4>
        	<table class="overview">
        		<tbody>
        			<tr>
        				<th>通院回数</th>
        				<td class="bg-white taL">月に一度のペースで５回照射をお勧めしています</td>
        			</tr>
        			<tr>
        				<th>施術時間</th>
        				<td class="bg-white taL">全顔照射：約１時間 両頬照射：約４０分</td>
        			</tr>
        			<tr>
        				<th>赤み・腫れ</th>
        				<td class="bg-white taL">個人差がありますが、日焼けした後のような感じです。</td>
        			</tr>
        			<tr>
        				<th>痛み</th>
        				<td class="bg-white taL">従来のフラクショナルレーザーと比べ劇的に痛みの軽減ができたレーザーですが、痛みに弱い方には、表面麻酔（約15分程度）をお勧めしています。</td>
        			</tr>
        			<tr>
        				<th>生活</th>
        				<td class="bg-white taL">当日より可能</td>
        			</tr>
        		</tbody>
        	</table>
        	<h4 class="nolineTitle taC">料金</h4>
        	<table class="overview">
        		<thead>
        			<th></th>
        			<th class="bg-white taC" style="width: 38%;">１回</th>
        			<th class="taR">１クール<br class="sp">（５回）</th>
        		</thead>
        		<tbody>
        			<tr>
        				<th>全顔</th>
        				<td class="bg-white">110,000円<br class="sp"><span class="red-color">（初回88,000円）</span></td>
        				<td class="taR">440,000円</td>
        			</tr>
        			<tr>
        				<th>額</th>
        				<td class="bg-white">41,250円</td>
        				<td class="taR">165,000円</td>
        			</tr>
        			<tr>
        				<th>両目の下</th>
        				<td class="bg-white">27,500円</td>
        				<td class="taR">110,000円</td>
        			</tr>
        			<tr>
        				<th>両こめかみ</th>
        				<td class="bg-white">27,500円</td>
        				<td class="taR">110,000円</td>
        			</tr>
        			<tr>
        				<th>鼻と鼻周り</th>
        				<td class="bg-white">66,000円<br class="sp"><span class="red-color">（初回39,600円）</span></td>
        				<td class="taR">264,000円</td>
        			</tr>
        			<tr>
        				<th>両ほほ</th>
        				<td class="bg-white">77,000円<br class="sp"><span class="red-color">（初回55,000円）</span></td>
        				<td class="taR">308,000円</td>
        			</tr>
        			<tr>
        				<th>あご</th>
        				<td class="bg-white">38,500円</td>
        				<td class="taR">154,000円</td>
        			</tr>
        			<tr>
        				<th>フェイスライン裏</th>
        				<td class="bg-white">55,000円</td>
        				<td class="taR">220,000円</td>
        			</tr>
        			<tr>
        				<th>フェイスライン</th>
        				<td class="bg-white">55,000円</td>
        				<td class="taR">220,000円</td>
        			</tr>
        			<tr>
        				<th>表面麻酔</th>
        				<td class="bg-white">5,500円</td>
        				<td class="taR">22,000円</td>
        			</tr>
        		</tbody>
        	</table>
        	<ul class="circle">
        		<li>１クールは、４回分のご料金で５回照射が行え、最後の１回が無料となります。</li>
        		<li>初回トライアルをされてから、１クールお申し込みいただく場合は、合計６回の照射となります。</li>
        		<li>こちらの金額は、ニキビ跡治療の金額となります。お顔の傷跡治療については、別料金体型となります。お顔のお傷のご相談は<a href="/operations/shiwa/">こちら</a>をご覧ください。</li>
        	</ul>
        </section>
        <section class="">
        	<h2 class="lineTitle">スターラックス1540の他にも、豊富な選択肢からご要望に合った肌改善を。</h2>
        		<div class="flex-box pc">
        			<div class="flex-box-one">
        				<h3 class="ThicklineTitle">イオン導入</h3>
        				<div class="flex-box-one-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_23.png" alt="イオン導入"></div>
        				<p>微弱な電流で、肌の深層部まで美容成分を届けることが可能です。にきび・ニキビ跡の治療、ニキビ肌もイオン導入を繰り返すことによって改善されます。皮脂の分泌コントロールを行うことで、にきびの原因になっている毛穴のつまりを取り除く効果もあります。<br>
        				また、コラーゲンの合成を促進し、「ニキビ跡」も目立ちにくくなります。</p>
        			</div>
        			<div class="flex-box-two">
        				<h3 class="ThicklineTitle">トレチノイン</h3>
        				<div class="flex-box-two-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_24.png" alt="トレチノイン"></div>
        				<p>悪化したニキビは完治させることはできても、目立つニキビ跡が残ってしまいますが、初期段階でトレチノインによる治療を行うことで、目立たないレベルに回復させることが可能です。<br>
        				ただし、凸凹としたクレーター状のニキビ跡が残ってしまった場合では、トレチノインではなくレーザー治療が必要となることがありますので、まずは当クリニックにご相談ください。</p>
        			</div>
        			<div class="flex-box-three">
        				<h3 class="ThicklineTitle">ハイドロキノン</h3>
        				<div class="flex-box-three-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_25.png" alt="ハイドロキノン"></div>
        				<p>トレチノインとともに美容づくりに役立つのがハイドロキノンで、こちらは”皮膚の漂白剤”といわれるほど、高い美白効果が期待できる成分です。<br>
        				ビタミンＣ誘導体などの美白成分では、できているシミ改善効果はあまり期待できませんが、ハイドロキノンはできているシミ改善効果も期待できる特徴がありますので、当院では主に、色素沈着軽減したいお客さまに処方しています。</p>
        			</div>
        		</div>

        		<div class="flex-box spwrap sp">
        			<div class="flex-box-one">
        				<h3 class="ThicklineTitle">イオン導入</h3>
        				<div class="flex-box">
        					<div class="flex-img">
        						<div class="flex-box-one-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_23.png" alt="イオン導入"></div>
        					</div>
        					<div class="flex-text">
        						<p>微弱な電流で、肌の深層部まで美容成分を届けることが可能です。にきび・ニキビ跡の治療、ニキビ肌もイオン導入を繰り返すことによって改善されます。皮脂の分泌コントロールを行うことで、にきびの原因になっている毛穴のつまりを取り除く効果もあります。<br>
        						また、コラーゲンの合成を促進し、「ニキビ跡」も目立ちにくくなります。</p>
        					</div>
        				</div>
        			</div>
        			<div class="flex-box-two">
        				<h3 class="ThicklineTitle">トレチノイン</h3>
        				<div class="flex-box">
        					<div class="flex-img">
        						<div class="flex-box-two-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_24.png" alt="トレチノイン"></div>
        					</div>
        					<div class="flex-text">
        						<p>悪化したニキビは完治させることはできても、目立つニキビ跡が残ってしまいますが、初期段階でトレチノインによる治療を行うことで、目立たないレベルに回復させることが可能です。<br>
        						ただし、凸凹としたクレーター状のニキビ跡が残ってしまった場合では、トレチノインではなくレーザー治療が必要となることがありますので、まずは当クリニックにご相談ください。</p>
        					</div>
        				</div>
        				<div class="flex-box-three">
        					<h3 class="ThicklineTitle">ハイドロキノン</h3>
        					<div class="flex-box">
        						<div class="flex-img">
        							<div class="flex-box-three-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_25.png" alt="ハイドロキノン"></div>
        						</div>
        						<div class="flex-text">
        							<p>トレチノインとともに美容づくりに役立つのがハイドロキノンで、こちらは”皮膚の漂白剤”といわれるほど、高い美白効果が期待できる成分です。<br>
        							ビタミンＣ誘導体などの美白成分では、できているシミ改善効果はあまり期待できませんが、ハイドロキノンはできているシミ改善効果も期待できる特徴がありますので、当院では主に、色素沈着軽減したいお客さまに処方しています。</p>
        						</div>
        					</div>
        				</div>
        			</div>

        	<div class="care-box">
        		<div class="herf-box">
        			<div class="nolineTitle">トレチノインとハイドロキノンは<br class="sp">セットで使用することにより<br>しわ改善効果や美白効果を<br class="sp">より一層実感することができます。</div>
        			<p>その他にも、エイジングケアなどのご要望に合わせ、高濃度ビタミンＣローションや高濃度プラセンタローション、高濃度プラセンタクリームもご利用いただけます。</p>
        		</div>
        	</div>
        </section>
	<section id="toc3" class="clr bg-beige">
			<h2 class="lineTitle">症例写真</h2>
			<div id="case">
				<h3 class="ttl">男性 両頬の治療</h3>
				<div class="case-img" id="toc5-1">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_28.png" alt="男性 両頬の治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほで約40分</dd>
							<dt>料金</dt>
							<dd>両ほほ 1回77,000円<br>
							1クール5回308,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">男性 両頬とこめかみの治療</h3>
				<div class="case-img" id="toc5-2">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_29.png" alt="男性 両頬とこめかみの治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほ＋こめかみで約50分</dd>
							<dt>料金</dt>
							<dd>両ほほ＋こめかみ 1回104,500円<br>
							1クール5回418,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">女性 両頬の治療</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_30.png" alt="女性 両頬の治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほ＋こめかみで約40分</dd>
							<dt>料金</dt>
							<dd>両ほほ＋こめかみ 1回104,500円<br>
							1クール5回418,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">女性 両頬の治療</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_31.png" alt="女性 両頬の治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほで約40分</dd>
							<dt>料金</dt>
							<dd>両ほほ 1回77,000円<br>
							1クール5回308,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">男性 両頬の治療</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_32.png" alt="男性 両頬の治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほで約40分</dd>
							<dt>料金</dt>
							<dd>両ほほ 1回77,000円<br>
							1クール5回308,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">男性 両頬の治療</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_33.png" alt="男性 両頬の治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほで約40分</dd>
							<dt>料金</dt>
							<dd>両ほほ 1回77,000円<br>
							1クール5回308,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">女性 あご・口周りの治療</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_34.png" alt="女性 あご・口周りの治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>あご＋口周りで約30分</dd>
							<dt>料金</dt>
							<dd>あご＋口周り 1回38,500円<br>
							1クール5回154,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
				<h3 class="ttl">女性 両頬の治療</h3>
				<div class="case-img" id="toc5-3">
					<div class="case-left">
						<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_35.png" alt="女性 両頬の治療" width="520" height="208" loading="lazy">
					</div>
					<div class="case-right">
						<dl class="caseDescription">
							<dt>施術時間</dt>
							<dd>両ほほで約40分</dd>
							<dt>料金</dt>
							<dd>両ほほ 1回77,000円<br>
							1クール5回308,000円</dd>
							<dt class="bn">リスク</dt>
							<dd class="bn">数日間の赤み・乾燥かゆみ・ざらつき・色素沈着・水疱</dd>
						</dl>
					</div>
				</div>
		</section>

		<section id="toc4" class="clr bg-reddish-brown">
			<h2 class="lineTitle-white">池袋サンシャイン美容外科が選ばれる理由</h2>
			<div class="visit">
				<div class="visit-left">
					<p class="ttl"><span class="fs63p">ニキビ治療だけじゃない、<br class="sp"></span>再発防止を兼ねた治療</p>
					<p>ニキビはアクネ菌の増殖によって炎症が起こり再発してしまいます。スターラックス1540はそのアクネ菌を熱で殺菌するため再発を防ぐことにつながります。</p>
				</div>
				<div class="visit-right">
					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_36.png" alt="再発防止を兼ねた治療" width="450" height="267" loading="lazy">
				</div>
			</div>
			<div class="visit">
				<div class="visit-right">
					<p class="ttl">傷みが少なく、麻酔がいらない</p>
					<p>従来のフラクショナルレーザーよりも痛みが緩和されたため、麻酔する必要が無くなりました。<br>
					※痛みに弱く心配な方は、表面麻酔を行うことも可能です。</p>
					<dl>
						<dt>施術時間の短縮 /</dt>
						<dd>麻酔の工程がなくなるため、その分かかっていた時間をカット。</dd>
					</dl>
					<dl>
						<dt>落とす工程が無いため肌に優しい /</dt>
						<dd>麻酔やジェルの塗布がないため、照射後の洗顔が必要なくなった分、お肌への負担も軽減できるようになりました。</dd>
					</dl>
				</div>
				<div class="visit-left">
					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_37.png" alt="傷みが少なく、麻酔がいらない" width="450" height="267" loading="lazy">
				</div>
			</div>
			<div class="visit">
				<div class="visit-left">
					<p class="ttl">休日診察</p>
					<p>土曜・日曜の手術を承っております。仕事でなかなか、平日通院が難しいかたでも、週末治療が可能です。</p>
				</div>
				<div class="visit-right">
					<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image19.png.webp" alt="カレンダー" width="450" height="267" loading="lazy">
				</div>
			</div>
			<div class="visit">
				<div class="visit-right">
					<p class="ttl">未成年OK</p>
					<p>当院では、未成年の治療も行っております。頬のたるみを解消したい方はご家族とご相談の上、お越しください。</p>
					<a class="linkBtn02" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer">未成年向けの同意書(PDF)はこちら</a>
				</div>
				<div class="visit-left">
					<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image20.png" alt="未成年でもOK" width="450" height="267" loading="lazy">
				</div>
			</div>
		</section>
		<!-- ご予約から治療までの全体の流れ -->
		<section id="toc5" class="secBox">
			<h2 class="lineTitle">ご予約から治療までの全体のながれ</h2>
			<div class="flow">
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image21.png" alt="予約のお申込み" loading="lazy" width="270" height="196" style="object-fit: fill;">
					</div>
					<div class="txt">
						<p class="ttl">1.予約のお申込み</p>
						<p>まずは、お電話かご予約フォームからご来院希望日時をお申し込みください。<br>
							当日のご予約も承っております。<br>
							当日のご予約はお電話にてご予約下さい。<br>
							<br>
							お電話　<a href="tel:0120331244" class="bold">0120-331-244</a><br>
							<a href="/reservation/" class="linkBtn02 pc">　ご予約フォームへの入力はこちら　</a>
						</p>
					</div>
				</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image22.png" alt="カウンセリング" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">2.カウンセリング</p>
						<p>まずは、カウンセリング。担当のカウンセラーにお悩みをご相談ください。お悩みに合わせて効率的な照射範囲とスケジュールおよびご料金についてご提案させていただきます。</p>
					</div>
				</div>
				<div class="flow-box">
					<div class="img">
						<img src="/wp-content/uploads/2021/03/PC_ISC_mwr_image25.png" alt="施術" loading="lazy" width="270" height="196">
					</div>
					<div class="txt">
						<p class="ttl">3.施術</p>
						<p>スターラックス1540は痛みが少なく、麻酔なしで施術が可能のため照射は15分程度で終了。照射後はビタミンＣのイオン導入を行います。※痛みに弱い方には表面麻酔を行うことが可能です。</p>
						<p class="brown-frame">施術後はそのままお出かけもＯＫ！</p>
					</div>
				</div>
			</div>
			<div class="sp taC" style="margin: 1em auto;"><a href="/reservation/" class="linkBtn02">　ご予約フォームへの入力はこちら　</a></div>
			<h2 class="lineTitle">にきび・ニキビ跡 レーザー治療後のケアについて</h2>
			<h3 class="greenHeading">にきび跡治療が終わった後の生活の注意点</h3>
			<div class="flex-box spwrap">
				<div class="flex-text w100p">
					<ul>
						<li>照射後から当日１日は、日焼けした後の様なカッカッするような熱感のあるヒリヒリした感触が続きます。<br>
						クリニックにて15分程度アイスで冷やしてからご帰宅いただきますが、ご自宅でもアイスノンなどでお顔を冷やされると改善が早くなります。</li>
						<li>お化粧は治療後すぐにしていただく事が可能ですが、ニキビのあるお肌へのお化粧は肌への負担があるため、基本的にお勧めはしておりません。</li>
						<li>洗顔は泡ごしに優しく洗い、ゴシゴシこすらないようにご注意ください。</li>
						<li>治療後は大変乾燥しやすくなります。こまめに保湿を行うようにしましょう。</li>
						<li>次回のニキビ跡治療レーザーのご予約は約1ヶ月間をあけてからの照射となります。（１ヶ月以内に複数回の照射はできません）</li>
					</ul>
				</div>
				<div class="flex-img w100p">
					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_43.png" alt="注意点">
				</div>
			</div>
			<h3 class="greenHeading">にきび跡治療後のお肌の回復経過</h3>
			<div class="flex-box spwrap">
				<div class="flex-img pc">
					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_44.png" alt="お肌の回復経過">
				</div>
				<div class="flex-text w100p">
					<p>腫れている感じは、治療後2～3時間で軽減します。<br>
						照射後から当日１日は、日焼けした後の様なカッカッするような熱感のあるヒリヒリした感触が続きます。<br>
						赤みは翌日までほんのり赤みがさしたような色合いが続きます。<br>
					レーザー照射を行うことで、壊れた角質が表面に出てきますため、１週間程度は触るとザラザラした感触がありますが、1週間程度で元の肌質へ戻りますため無理にこすらないようにされてください。</p>
				</div>
				<div class="flex-img w100p sp">
					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_44.png" alt="お肌の回復経過">
				</div>
			</div>
			<h3 class="greenHeading">にきび跡治療後のアフターフォロー <br class="sp">～プラセンタ療法～</h3>
			<div class="flex-box spwrap">
				<div class="flex-text w100p">
					<p>ヒトプラセンタ配合のローションとクリームをご用意しております。<br>
						生プラセンタは一般のお化粧品に配合することが出来ない、医師の処方が必要なお薬です。プラセンタにより壊れた皮膚細胞の修復を促し、弾むようなハリとうるおいを与えてくれます。レーザー照射によりダメージを受けた皮膚の修復を行い、さらに乾燥をしっかり改善してくれる大変優れた治療薬です。<br>
						プラセンタの独特のニオイが気になる方もいらっしゃるかもしれませんが、当院では治療効果を最優先するため、クリームの中に限界までプラセンタを配合しました。<br>
					時間がたつとクリームの中からプラセンタが液状化するくらいまで配合しておりますので、混ぜてお使いください。</p>
				</div>
				<div class="flex-img w100p">
					<img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_45.jpg" alt="プラセンタ療法">
				</div>
			</div>
		</section>

	<section id="toc6" class="clr bg-beige">
		<h2 class="lineTitle">よくあるご質問</h2>
		<div id="faq">
			<div class="acbox" id="toc7-1">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>どの位のペースで何回通院する必要がありますか？</h3>
				<p>肌のターンオーバーに合わせて、約１ヶ月半に１度のペースで、約5回照射にお越しいただいております。その為治療期間としては、約９ヶ月ほどお時間がかかります。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-2">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>照射中は痛いんですか？</h3>
				<p>レーザー脱毛のように強い痛みはありません。スターラックスはジュワーと熱が伝わるような、しばらく皮膚の中に熱がこもった感じがあります。施術後は15分ほど冷やしてからおかえりいただいております。また、痛みが心配な方は、表面麻酔を行うことも可能です。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-3">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>クレーターになってしまったニキビ跡も治療できますか？</h3>
				<p>もちろんできます！当院は傷跡専門外来も行っております。このレーザーでしっかりクレーターも改善していくことが可能です。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-4">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>昔からあるニキビ跡でも治療できますか？</h3>
				<p>ニキビ跡の凹み・膨らみもスターラックスレーザー照射を月に１度実施することで可能となります。<br>
				15年前のニキビ跡でも改善している患者様もいらっしゃいますのでご安心下さい。</p>
				</div>
			</div>
			<div class="acbox" id="toc7-5">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>体のニキビ跡治療は可能でしょうか？</h3>
				<p>どの部位も治療可能です。</p>
				<div class="faq-box-img"><img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_46.png" alt="女性"></div>
				</div>
			</div>
			<div class="acbox" id="toc7-6">
				<div class="signboard"><span class="que">Q</span><span class="ans">A</span></div>
				<div class="faq-box">
				<h3>施術後に気をつけることはありますか？</h3>
				<p>照射後は、皮膚がデリケートな状態となりますので、ゴシゴシこすったり、テープなど粘着質なものは貼らないようにお願いします。<br>
				術後１週間前後は大変お肌が乾燥した状態となりますので、痒み予防の為にも保湿クリームを塗って下さい。当院にて、皮膚の補修効果が入ったプラセンタクリームを扱っております。ご興味がございましたらスタッフへお申し付けください。また、日焼けされますことは肌へのダメージとなりますので、極力お控えください。日焼け止めクリームを塗ることで対応いただければと思います。</p>
				</div>
			</div>
		</div>
	</section>

	<section class="secBox clr" id="toc1">
		<h2 class="lineTitle">院長　鈴木栄樹からのご挨拶</h2>
		<div class="doctor_greeting">
				<h3>皮膚科で治せなかった頑固なニキビや<br>酷いにきび跡についてお悩みでしたら、<br>ぜひ当院へご相談ください</h3>
				<p class="degree">池袋サンシャイン美容外科 院長 <span class="big">鈴木栄樹</span></p>
				<div class="txt">
					当院は女性だけではなく、男性もニキビ治療に多くお通いいただいております。<br>
					女性と違い、お化粧でニキビ跡を隠すことが出来ない分、男性のお悩みも深いものです。<br>
					またホルモンバランスが乱れやすい高校生のニキビ・ニキビ跡治療にお通いいただいている方も多くいらっしゃいます。<br>
					ほんの数回のレーザー治療で劇的に改善する様子をご体験いただければ、ご自宅での根気のいるケアの必要なさに感動頂けると信じております。
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
				<div class="flex-box spwrap">
					<a href="tel:0120331244"><img src="/wp-content/uploads/2021/10/consultation-by-phone.png" alt="お電話での相談はコチラ"></a>
					<a href="/reservation/"><img src="/wp-content/uploads/2021/10/free-counseling-reservation.png" alt="カウンセリングはコチラ"></a>
				</div>
			</section>
			<section id="toc9" class="secBox">
				<div class="blogRanking">
				<h2 class="lineTitle">にきび・ニキビ跡治療のブログランキング</h2>
				<ul>
					<li><span style="background-color: #E95514;">1</span><a href="/blogs/nikibiato/" target="_blank" rel="noopener noreferrer">ニキビ跡を治すには？<br class="sp">効果的な治療薬についても紹介！</a></li>
					<li><span style="background-color: #4C8237;">2</span><a href="/blogs/nikibi-type/" target="_blank" rel="noopener noreferrer">ニキビ・ニキビ跡の種類とは？<br class="sp">ニキビ跡の原因についても紹介！</a></li>
					<li><span style="background-color: #7D3423;">3</span><a href="/blogs/nikibi-tsubusu/" target="_blank" rel="noopener noreferrer">ニキビを潰すと早く治るって本当？<br class="sp">NG行為や対処法をご紹介</a></li>
				</ul>
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