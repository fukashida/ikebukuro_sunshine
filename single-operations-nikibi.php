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
<main id="nikibi">
<!--/ここからコンテンツ-->

            <div class="container fv bgfff">
                <div class="pageTitle">
                    <h1 class="brown-color">ニキビ・<br>ニキビ跡治療</h1>
                    <p>ニキビ跡治療<br><span class="brown-color">１ショット体験</span><br>１箇所<span
                            class="small">(1.5cm×1.5cm)</span><br><span class="fee brown-color">2,200円</span></p>
                </div>
                <div class="topNav">
                    <ul>
                        <li class="heightAjst"><a href="#toc1">治療について</a></li>
                        <li class="heightAjst"><a href="#toc7">症例写真</a></li>
                        <li class="heightAjst"><a href="#toc8">選ばれる理由</a></li>
                        <li class="heightAjst"><a href="#toc9">施術の流れ</a></li>
                        <li class="heightAjst"><a href="#toc11">よくある<br>ご質問</a></li>
                        <li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
                    </ul>
                </div>
            </div>

            <section class="table-of-contents">
                <div class="container">
                <div id="toc_box">
				<p class="toc_title">目次</p>
				<div class="toc_list">
					<ul>
						<li>
							<a href="#toc1">
								<span class="toc_num">1.</span> ニキビができる原因とメカニズム
							</a>
							<ul>
								<li><a href="#toc1-1"><span class="toc_num">1-1.</span> ニキビの種類</a></li>
								<li><a href="#toc1-2"><span class="toc_num">1-2.</span> クレーター</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc2">
								<span class="toc_num">2.</span> ニキビ・ニキビ跡治療の症例写真
							</a>
							<ul>
								<li><a href="#toc2-1"><span class="toc_num">2-1.</span> ニキビ・ニキビ跡治療のビフォーアフター</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc3">
								<span class="toc_num">3.</span> こんな悩みはありませんか？
							</a>
							<ul>
								<li><a href="#toc3-1"><span class="toc_num n55">3-1.</span> 池袋サンシャイン美容外科はさまざまなニキビ・ニキビ跡の治療に対応</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc4">
								<span class="toc_num">4.</span> 皮膚に優しい「スターラックスレーザー」とは
							</a>
							<ul>
								<li><a href="#toc4-1"><span class="toc_num">4-1.</span> スターラックスレーザーの特徴</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc5">
								<span class="toc_num">5.</span> スターラックスによるレーザー治療の概要
							</a>
							<ul>
								<li><a href="#toc5-1"><span class="toc_num n55">5-1.</span> スターラックスレーザーによるニキビ・ニキビ跡治療の特徴</a></li>
								<li><a href="#toc5-1"><span class="toc_num">5-2.</span> 料金</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc6">
								<span class="toc_num">6.</span> スターラックスレーザーの他にも、豊富な選択肢からご要望に合った肌改善を
							</a>
							<ul>
								<li><a href="#toc6-1"><span class="toc_num">6-1.</span> 池袋サンシャイン美容外科で受けられるその他治療法</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc7">
								<span class="toc_num">7.</span> 症例写真
							</a>
							<ul>
								<li><a href="#toc7-1"><span class="toc_num">7-1.</span> 男性 両頬のニキビ跡治療症例</a></li>
								<li><a href="#toc7-2"><span class="toc_num">7-2.</span> 男性 両頬とこめかみのニキビ跡治療症例</a></li>
								<li><a href="#toc7-3"><span class="toc_num">7-3.</span> 女性 両頬のニキビ跡治療症例</a></li>
								<li><a href="#toc7-4"><span class="toc_num">7-4.</span> 女性 両頬のニキビ跡治療症例</a></li>
								<li><a href="#toc7-5"><span class="toc_num">7-5.</span> 男性 両頬のニキビ跡治療症例</a></li>
								<li><a href="#toc7-6"><span class="toc_num">7-6.</span> 男性 両頬のニキビ跡治療症例</a></li>
								<li><a href="#toc7-7"><span class="toc_num">7-7.</span> 女性 あご・口周りのニキビ跡治療症例</a></li>
								<li><a href="#toc7-8"><span class="toc_num">7-8.</span> 女性 両頬のニキビ跡治療症例</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc8">
								<span class="toc_num">8.</span> 池袋サンシャイン美容外科が選ばれる理由
							</a>
							<ul>
								<li><a href="#toc8-1"><span class="toc_num">8-1.</span> ニキビ治療だけじゃない、再発防止を兼ねた治療</a></li>
								<li><a href="#toc8-2"><span class="toc_num">8-2.</span> 傷みが少なく、麻酔がいらない</a></li>
								<li><a href="#toc8-3"><span class="toc_num n55">8-3.</span> カウンセリング当日に施術を受けることもできますか？</a></li>
								<li><a href="#toc8-4"><span class="toc_num">8-4.</span> 当院なら土日も診療</a></li>
								<li><a href="#toc8-5"><span class="toc_num">8-5.</span> 未成年のニキビ治療もOK</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc9">
								<span class="toc_num">9.</span> ご予約から治療までの全体のながれ
							</a>
              <ul>
								<li><a href="#toc9-1"><span class="toc_num">9-1.</span> 1. 予約のお申込み</a></li>
								<li><a href="#toc9-2"><span class="toc_num">9-2.</span> 2. カウンセリング</a></li>
								<li><a href="#toc9-3"><span class="toc_num">9-3.</span> 3. 施術</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc10">
								<span class="toc_num">10.</span> ニキビ・ニキビ跡 レーザー治療後のケアについて
							</a>
							<ul>
								<li><a href="#toc10-1"><span class="toc_num">10-1.</span> ニキビ跡治療が終わった後の生活の注意点</a></li>
								<li><a href="#toc10-2"><span class="toc_num">10-2.</span> ニキビ跡治療後のお肌の回復経過</a></li>
								<li><a href="#toc10-3"><span class="toc_num n55">10-3.</span> ニキビ跡治療後のアフターフォロー ～プラセンタ療法～</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc11">
								<span class="toc_num">11.</span> よくあるご質問
							</a>
              <ul>
								<li><a href="#toc11-1"><span class="toc_num n55">11-1.</span> どの位のペースで何回通院する必要がありますか？</a></li>
								<li><a href="#toc11-2"><span class="toc_num">11-2.</span> 照射中は痛いんですか？</a></li>
								<li><a href="#toc11-3"><span class="toc_num n55">11-3.</span> クレーターになってしまったニキビ跡も治療できますか</a></li>
								<li><a href="#toc11-3"><span class="toc_num">11-4.</span> 昔からあるニキビ跡でも治療できますか？</a></li>
								<li><a href="#toc11-3"><span class="toc_num">11-5.</span> 体のニキビ跡治療は可能でしょうか？</a></li>
								<li><a href="#toc11-3"><span class="toc_num">11-6.</span> 施術後に気をつけることはありますか？</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc12">
								<span class="toc_num">12.</span> 監修医師紹介
							</a>
              <ul>
								<li><a href="#toc12-1" class="toc12"><span class="toc_num n85">12-1.</span> 皮膚科で治せなかった頑固なニキビや酷いニキビ跡についてお悩みでしたら、ぜひ当院へご相談ください</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc13">
								<span class="toc_num">13.</span> ニキビ・ニキビ跡治療のブログや体験レポート
							</a>
              <ul>
								<li><a href="#toc12-1"><span class="toc_num">13-1.</span> Instgram</a></li>
								<li><a href="#toc12-1"><span class="toc_num n55">13-2.</span> ニキビ・ニキビ跡治療のブログランキング</a></li>
							</ul>
						</li>
						<li>
							<a href="#toc14">
								<span class="toc_num">14.</span> アクセス
							</a>
						</li>
					</ul>
				</div>
			</div>
                </div>
            </section>

            <section class="clr bg-spot-wallpaper" id="section1">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc1">ニキビができる原因と<br class="sp-only">メカニズム</h2>
                    <div class="flex-box factor">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/nikibi-before.png" alt="にきび治療前後">
                        <p>正常な皮膚は、油膜が皮膚を多い、潤いある状態です。<br>
                            しかし何らかの理由で毛穴の入り口が詰まっていると、その皮脂が外に出ることができず、毛穴の中にたまっていきます。<br /><br />
                            このような状態の時に、毛穴の中で細菌が増殖し、毛穴の中で炎症が起こり、いわゆる<strong>「ニキビ」</strong>ができます。<br />
                            この時にコメドという袋が毛穴の入り口をふさぎ大きく発達します。<strong>ニキビをつぶしたときに出てくる乳白色の液体</strong>です。<br /><br />
                            この膿が毛穴の袋を大きく押し広げ、余分な空間が空いてしまうため、炎症が収まったとしても、ニキビ跡として残ってしまい、<strong>クレーターになったり色素沈着になりにきび跡</strong>として残っていくのです。
                        </p>
                    </div>
                    <div class="mg60">
                        <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_09.png" alt="にきびが治らない原因やニキビ跡が傷として残ってしまう理由"
                            class="pc-only">
                        <img src="/wp-content/uploads/2021/10/ISC_21_SP_nikibi_06.png" alt="にきびが治らない原因やニキビ跡が傷として残ってしまう理由"
                            class="sp sp-only">
                    </div>
                    <div class="bgfff acneTypesBox">
                        <div class="nikibi-kind">
                            <h3 class="lineTitle" id="toc1-1">ニキビの種類</h3>
                            <div class="flex-box spwrap">
                                <div class="flex-first">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_10.png" alt="白ニキビ">
                                    <p>比較的初期状態のニキビです。毛穴に詰まった皮脂や角質がまざったもの（コメド）が白く透けて見えます。痛みはまだないのですが、放置していると炎症が悪化して、赤にきびになりやすいので早めのケアが大切になります。
                                    </p>
                                </div>
                                <div class="flex-second">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_11.png" alt="黒ニキビ">
                                    <p>毛穴に詰まった皮脂が参加して黒くなったもので、厳密にはニキビではなく黒ずみ（代表的なものに「いちご鼻」があります）ですが、放置するとニキビ化していきます。また、白ニキビのコメドが酸化して色が黒くなったタイプ（開放面皰）もあります。
                                    </p>
                                </div>
                                <div class="flex-third">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_12.png" alt="赤ニキビ">
                                    <p>アクネ菌が毛穴の中の皮脂を栄養として繁殖、ニキビが進行して炎症を起こした状態です。ひどくなると膿んでふくれあがり、痛みを伴う場合や熱を持つことも。この状態になった場合はクリニックでの本格的な治療がお勧めです。
                                    </p>
                                </div>
                                <div class="flex-four">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_13.png" alt="黄ニキビ">
                                    <p>菌の死骸が膿となった状態で、正確には「嚢腫」と呼ばれます。毛穴の中の嚢胞がやぶれると中身が出て固いシコリになったり、皮膚細胞が壊れ皮脂や角質などが周囲に漏れ出します。炎症は真皮層に達し、ひどいにきび跡になっていきます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="nkibi-crater">
                            <h3 class="lineTitle up" id="toc1-2">クレーター</h3>
                                    <div class="flex-box flst spwrap">
                                        <div class="flex-first">
                                            <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_14.png" alt="アイスピックで刺したようなニキビ跡">
                                            <p>かなり深い傷跡のため、根気強くレーザー照射をしていくことで改善を目指します。通常、月に１度のスターラックス照射を約１０回していただく事をお勧めしております。
                                            </p>
                                        </div>
                                        <div class="flex-second">
                                            <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_15.png"
                                                alt="水ぼうそうのような円型・楕円形のニキビ跡">
                                            <p>面状に陥没し、表皮との境目がはっきりわかる傷跡に。また、両頬全体に広がるようにできるのも特徴です。通常、月に１度のスターラックス照射を約５回していただく事をお勧めしております。
                                            </p>
                                        </div>
                                        <div class="flex-third">
                                            <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_16.png"
                                                alt="うねり、波打つようなでこぼこのニキビ跡">
                                            <p>皿状にへこんだニキビ跡が多発してうねるような波状のデコボコにお肌の形状自体が変化したものです。通常、月に１度のスターラックス照射を約１５回していただく事をお勧めしております。
                                            </p>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="case-photo" id="section2">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc2">ニキビ・ニキビ跡治療の<br class="sp-only">症例写真</h2>
                    <p class="desc">池袋サンシャイン美容外科では、<br />
                        多くの患者様にご満足いただいている<span class="bold"><br class="sp-only">ニキビ・ニキビ跡治療</span>を行っています。 <br />
                        こちらでは実際の症例写真を<br class="sp-only">ご紹介いたします。</p>
                    <div class="case-photo-lists bgfff">
                        <h3 class="lineTitle" id="toc2-1">ニキビ・ニキビ跡治療の<br class="sp">ビフォーアフター</h3>
                        <div class="case-bf">
                            <div class="case-photo-list">
                                <p class="case-foto-desc">女性 両頬の治療</p>
                                <div class="c-photo">
                                    <div class="c-photo-bf">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/cheek-before.png" alt="女性 両頬の治療前">
                                    </div>
                                    <div class="c-photo-af">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/cheek-after.png" alt="女性 両頬の治療後">
                                    </div>
                                </div>
                            </div>
                            <div class="case-photo-list">
                                <p class="case-foto-desc">男性 両頬とこめかみの治療</p>
                                <div class="c-photo">
                                    <div class="c-photo-bf">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/temple-before.png" alt="男性 両頬とこめかみの治療前">
                                    </div>
                                    <div class="c-photo-af">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/temple-after.png" alt="男性 両頬とこめかみの治療後">
                                    </div>
                                </div>
                            </div>
                            <div class="case-photo-list">
                                <p class="case-foto-desc">女性 あご・口周りの治療</p>
                                <div class="c-photo">
                                    <div class="c-photo-bf">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/mouth-before.png" alt="女性 あご・口周りの治療前">
                                    </div>
                                    <div class="c-photo-af">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/mouth-after.png" alt="女性 あご・口周りの治療後">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="concern bgfff">
                <div class="container">
                    <div class="concern-contents">
                        <h2 class="lineTitle title" id="toc3">こんな悩みは<br class="sp">ありませんか？</h2>
                        <div class="nkibi-nayami">
                            <ul>
                                <li>
                                    <p class="nayami-num">悩み➀</p>
                                    <p>毎日ケアしているのに、<br class="sp-only"><span class="under">なかなか治らない</span></p>
                                </li>
                                <li>
                                    <p class="nayami-num">悩み➁</p>
                                    <p>色素沈着で<br class="sp-only"><span class="under">シミのようなニキビ跡に</span></p>
                                </li>
                                <li>
                                    <p class="nayami-num">悩み➂</p>
                                    <p>潰してしまって<br class="sp-only"><span class="under">ボコボコのクレータに</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="img-box sp-only">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/nayami-left.png" alt="悩み男性">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/nayami-right.png" alt="悩み女性">
                        </div>
                    </div>
                    <div class="medical-system bgfff">
                        <h3 class="lineTitle-white title" id="toc3-1">池袋サンシャイン美容外科は<br class="tb">さまざまなニキビ・ニキビ跡の治療に対応</h3>
                        <div class="lux-box">
                            <div class="herf-box">
                                <p class="taC fs28">スターラックスレーザー</p>
                                <ul class="beige-bar">
                                    <li>ニキビの原因であるアクネ菌の殺菌</li>
                                    <li class="li2">殺菌することで<br class="sp">新たなニキビの発生を防止</li>
                                    <li class="li2 last">再生能力を活性化することにより<br class="sp">肌質改善</li>
                                </ul>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/lux.png" alt="スターラックス">
                        </div>
                        <div class="flex-box spwrap sub-systems">
                            <div class="flex-box-one sub-system">
                                <h4 class="fs23">イオン導入</h4>
                                <div class="reddish-beige-txt">コラーゲンの合成を促進し<br />「ニキビ跡」を改善</div>
                            </div>
                            <div class="flex-box-two sub-system">
                                <h4 class="fs23">トレチノイン</h4>
                                <div class="reddish-beige-txt">ターンオーバーの<br class="pc-only">正常化</div>
                            </div>
                            <div class="flex-box-three sub-system last">
                                <h4 class="fs23">ハイドロキノン</h4>
                                <div class="reddish-beige-txt">高い美白効果を<br class="pc-only">期待できる</div>
                            </div>
                        </div>
                    </div>
                    <div class="consultation-card1">
                        <a href="/reservation/">
                            <picture>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
                            </picture>
                        </a>
                    </div>
                </div>
            </section>
            <section class="clr lux-about">
                <div class="container">
                    <h2 id="toc4" class="lineTitle secTi">皮膚に優しい<br class="sp-only">「スターラックスレーザー」とは</h2>
                    <p class="lux-intro">従来のレーザー治療と比べ、<br class="sp">肌へのダメージや痛みを抑えながら、<br />
                        <span class="bold">高い効果を発揮する<br class="sp">最新の医療レーザー機器</span>です。 <br /><br class="sp">
                        皮膚の表面を冷却しながら<br class="sp">圧迫照射を行うことで、<br class="sp">施術中の快適さと<br class="sp">仕上がりの美しさを両立します。
                    </p>
                    <div class="lux-feature">
                        <div class="lux-feature-main">
                            <h3 class="subTitle left lineTitle" id="toc4-1">スターラックスレーザーの特徴</h3>
                            <div class="flex-box">
                                <div class="flex-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/lux-about.png"
                                        alt="スターラックス1540">
                                </div>
                                <div class="flex-text">
                                    <p>当院では、凝固型フラクショナルレーザーとして米国Palomar社製<span
                                            class="bold">「スターラックス1540」</span>を設置。皮膚表面を冷やしながら圧迫照射することによって、痛みや術後の赤み、<span
                                            class="bold">腫れなどを軽減しながら高い出力のレーザーを照射することができるため、高い評価を得ている医療機器</span>です。
                                        <br /><br />
                                        従来の機器よりも痛みが少ないため、麻酔をしない施術が可能となっただけでなく、ジェル等をお肌に塗らなくても照射できるため、<span
                                            class="bold">施術後の洗顔が必要ありません</span>。 <br /><br />
                                        ニキビやニキビ跡の治療でお悩みの方はぜひ、皮膚への負担が軽減された、<span
                                            class="bold">優しい医療機器「スターラックスレーザー」</span>をお試しください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-box spwrap lux-feature-sub">
                            <div class="flex-half bg-white">
                                <h4 class="green-title fs23">熱による殺菌効果</h4>
                                <div class="flex-box">
                                    <div class="flex-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/lux-feature-sub01.png"
                                            alt="施術">
                                    </div>
                                    <div class="flex-text">
                                        <p>細かいマイクロビームを格子状に照射、皮膚表面に目に見えないほどの微小な穴を開けます。このとき発生する熱によって微笑の穴を開けてアクネ菌を殺菌し、新たなニキビの発生も防止します。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-half bg-white">
                                <h4 class="green-title fs23">ニキビ跡の治療</h4>
                                <div class="flex-box">
                                    <div class="flex-img">
                                        <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_22.png" alt="効果">
                                    </div>
                                    <div class="flex-text">
                                        <p>肌表面に開けた微小の穴に熱を通すことで皮膚の収縮効果が生まれます。この効果により引き締めを行い、同時に皮膚細胞の再構築を促すことによりニキビ跡を滑らかな肌に導き、肌質改善に効果を発揮します。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="clr lux-summary">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc5">スターラックスによる<br class="sp">レーザー治療の概要</h2>
                    <p class="lux-intro">痛くなく、傷跡や内出血の心配がない<br class="sp">最新のニキビ治療です。</p>
                    <div class="lux-feature-table">
                        <h3 class="subTitle lineTitle taC" id="toc5-1">スターラックスレーザーによる<br />ニキビ・ニキビ跡治療の特徴</h3>
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
                                    <td class="bg-white taL">
                                        従来のフラクショナルレーザーと比べ劇的に痛みの軽減ができたレーザーですが、痛みに弱い方には、表面麻酔（約15分程度）をお勧めしています。</td>
                                </tr>
                                <tr>
                                    <th>生活</th>
                                    <td class="bg-white taL">当日より可能</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="lux-feature-table">
                        <h3 class="subTitle lineTitle taC" id="toc5-2">料金</h3>
                        <table class="overview">
                            <thead>
                                <th></th>
                                <th class="bg-white taC" style="width: 38%;">１回</th>
                                <th>１クール<br class="sp">（５回）</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>全顔</th>
                                    <td class="bg-white">110,000円<br class="sp-only">（初回88,000円）</td>
                                    <td class="taR">440,000円</td>
                                </tr>
                                <tr>
                                    <th>額</th>
                                    <td class="bg-white">42,250円</td>
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
                                    <td class="bg-white">66,000円<br class="sp-only">（初回39,600円）</td>
                                    <td class="taR">264,000円</td>
                                </tr>
                                <tr>
                                    <th>両ほほ</th>
                                    <td class="bg-white">77,000円<br class="sp-only">（初回55,000円）</td>
                                    <td class="taR">308,000円</td>
                                </tr>
                                <tr>
                                    <th>あご</th>
                                    <td class="bg-white">38,550円</td>
                                    <td class="taR">154,000円</td>
                                </tr>
                                <tr>
                                    <th>フェイス<br class="sp-only">ライン裏</th>
                                    <td class="bg-white">55,000円</td>
                                    <td class="taR">220,000円</td>
                                </tr>
                                <tr>
                                    <th>フェイス<br class="sp-only">ライン</th>
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
                    </div>
                    <ul class="circle">
                        <li>1クールは、4回分のご料金で5回照射が行え、最後の1回が無料となります。</li>
                        <li>初回トライアルをされてから、1クールお申し込みいただく場合、合計6回の照射となります。</li>
                        <li>こちらの金額は、ニキビ跡治療の金額となります。お顔の傷跡治療については、別料金体型となります。<a href="/operations/shiwa/">こちら</a>をご覧ください。
                        </li>
                    </ul>
                    <div class="consultation-card1">
                        <a href="/reservation/">
                            <picture>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
                            </picture>
                        </a>
                    </div>
                </div>
            </section>
            <section class="lux-other">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc6">スターラックス<br class="sp">レーザーの他にも、 <br />豊富な選択肢から<br class="sp">ご要望に合った肌改善を
                    </h2>
                    <p class="desc">池袋サンシャイン美容外科では、<br class="sp">お客様一人ひとりのお悩みに応じて、<br />
                        スターラックスレーザーをはじめとした<br class="sp">多様な治療法をご提案しています。<br /><br class="sp">
                        より理想に近い美肌を目指し、<br class="sp">多彩な選択肢から最適な施術を<br class="sp">お選びいただけます。</p>
                    <div class="other-treatments bgfff">
                        <h3 id="toc6-1">池袋サンシャイン美容外科で受けられるその他治療法</h3>
                        <div class="flex-box">
                            <div class="flex-box-one other-treatment">
                                <h4 class="ThicklineTitle">イオン導入</h4>
                                <div class="flex-box-one-img">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_23.png" alt="イオン導入">
                                </div>
                                <p>微弱な電流で、肌の深層部まで美容成分を届けることが可能です。にきび・ニキビ跡の治療、ニキビ肌もイオン導入を繰り返すことによって改善されます。皮脂の分泌コントロールを行うことで、にきびの原因になっている毛穴のつまりを取り除く効果もあります。<br>
                                    また、コラーゲンの合成を促進し、「ニキビ跡」も目立ちにくくなります。</p>
                            </div>
                            <div class="flex-box-two other-treatment">
                                <h4 class="ThicklineTitle">トレチノイン</h4>
                                <div class="flex-box-two-img">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_24.png" alt="トレチノイン">
                                </div>
                                <p>悪化したニキビは完治させることはできても、目立つニキビ跡が残ってしまいますが、初期段階でトレチノインによる治療を行うことで、目立たないレベルに回復させることが可能です。<br>
                                    ただし、凸凹としたクレーター状のニキビ跡が残ってしまった場合では、トレチノインではなくレーザー治療が必要となることがありますので、まずは当クリニックにご相談ください。
                                </p>
                            </div>
                            <div class="flex-box-three other-treatment">
                                <h4 class="ThicklineTitle">ハイドロキノン</h4>
                                <div class="flex-box-three-img">
                                    <img src="/wp-content/uploads/2021/10/ISC_21_PC_nikibi_25.png" alt="ハイドロキノン">
                                </div>
                                <p>トレチノインとともに美容づくりに役立つのがハイドロキノンで、こちらは”皮膚の漂白剤”といわれるほど、高い美白効果が期待できる成分です。<br>
                                    ビタミンＣ誘導体などの美白成分では、できているシミ改善効果はあまり期待できませんが、ハイドロキノンはできているシミ改善効果も期待できる特徴がありますので、当院では主に、色素沈着軽減したいお客さまに処方しています。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="consultation-card1">
                        <a href="/reservation/">
                            <picture>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
                            </picture>
                        </a>
                    </div>
                </div>
            </section>
            <section class="clr clinical-case">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc7">症例写真</h2>
                    <div id="case">
                        <h3 class="ttl fs" id="toc7-1">男性 両頬のニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case01-before01.png"
                                        alt="男性 両頬の治療前">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case01-before02.png"
                                        alt="男性 両頬の治療前" class="sp-only">
                                </div>
                                <div class="case-before02">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case01-before02.png"
                                        alt="男性 両頬の治療前" class="pc-only">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case01-after.png"
                                        alt="男性 両頬の治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-2">男性 両頬とこめかみのニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case02-before.png"
                                        alt="男性 両頬とこめかみ治療前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case02-after.png"
                                        alt="男性 両頬とこめかみの治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-3">女性 両頬のニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case03-before.png"
                                        alt="女性 両頬の治療前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case03-after.png"
                                        alt="女性 両頬の治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-4">女性 両頬のニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case04-before.png"
                                        alt="女性 両頬のニキビ跡治療治療前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case04-after.png"
                                        alt="女性 両頬のニキビ跡治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-5">男性 両頬のニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case05-before.png"
                                        alt="女性 両頬のニキビ跡治療治療前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case05-after.png"
                                        alt="女性 両頬のニキビ跡治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-6">男性 両頬のニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case06-before.png"
                                        alt="男性 両頬のニキビ跡治療前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case06-after.png"
                                        alt="男性 両頬のニキビ跡治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-7">女性 あご・口周りのニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case07-before.png"
                                        alt="女性 あご・口周りのニキビ跡治療症例前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case07-after.png"
                                        alt="女性 あご・口周りのニキビ跡治療後">
                                </div>
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
                        <h3 class="ttl" id="toc7-8">女性 両頬のニキビ跡治療症例</h3>
                        <div class="case-img">
                            <div class="case-left">
                                <div class="case-before">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case08-before.png"
                                        alt="女性 両頬のニキビ跡治療前">
                                </div>
                                <p class="arrow pc-only">▶︎</p>
                                <p class="arrow sp-only">▼</p>
                                <div class="case-after">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/case08-after.png"
                                        alt="女性 両頬のニキビ跡治療後">
                                </div>
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
                    </div>
                    <div class="consultation-card1">
                        <a href="/reservation/">
                            <picture>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
                            </picture>
                        </a>
                    </div>
                </div>
            </section>
            <section class="clr select-reason">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc8">池袋サンシャイン美容外科が<br />選ばれる理由</h2>
                    <p class="desc">ニキビやニキビ跡の治療はもちろん、再発予防やダウンタイムの短縮、土日診療の対応まで、<br />
                        患者様のライフスタイルに合わせた通いやすい治療環境を整えています。<br />
                        安全性と高い効果の両立を目指しています。</p>
                    <div class="visit right">
                        <div class="visit-left visit-text">
                            <h3 class="ttl" id="toc8-1">ニキビ治療だけじゃない、<br class="sp">再発防止を兼ねた治療</h3>
                            <p>ニキビはアクネ菌の増殖によって炎症が起こり再発してしまいます。 スターラックスレーザーはそのアクネ菌を熱で殺菌するため 再発を防ぐことにつながります。</p>
                        </div>
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit01.png" alt="再発防止を兼ねた治療"
                                width="450" height="267" loading="lazy">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit01_sp.png" alt="再発防止を兼ねた治療"
                                width="450" height="267" loading="lazy">
                    </div>
                    <div class="visit" id="section8-2">
                        <div class="visit-right visit-text">
                            <h3 class="ttl" id="toc8-2">傷みが少なく、麻酔がいらない</h3>
                            <p>従来のフラクショナルレーザーよりも痛みが緩和されたため、麻酔する必要が無くなりました。<br>
                                ※痛みに弱く心配な方は、表面麻酔を行うことも可能です。</p>
                            <dl>
                                <dt>■施術時間の短縮</dt>
                                <dd>麻酔の工程がなくなるため、その分かかっていた時間をカット。</dd>
                            </dl>
                            <dl>
                                <dt>■落とす工程が無いため肌に優しい</dt>
                                <dd>麻酔やジェルの塗布がないため、照射後の洗顔が必要なくなった分、お肌への負担も軽減できるようになりました。</dd>
                            </dl>
                        </div>
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit02.png" alt="傷みが少なく、麻酔がいらない"
                                width="450" height="267" loading="lazy">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit02_sp.png" alt="傷みが少なく、麻酔がいらない"
                                width="450" height="267" loading="lazy">
                    </div>
                    <div class="visit right" id="section8-3">
                        <div class="visit-left visit-text">
                            <h3 class="ttl" id="toc8-3">当院なら土日も診療</h3>
                            <p>土曜・日曜の手術を承っております。仕事でなかなか、平日通院が難しいかたでも、週末治療が可能です。</p>
                        </div>
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit03.png" alt="カレンダー" width="450"
                                height="267" loading="lazy">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit03_sp.png" alt="カレンダー" width="450"
                                height="267" loading="lazy">
                    </div>
                    <div class="visit" id="section8-4">
                        <div class="visit-right visit-text">
                            <h3 class="ttl" id="toc8-4">未成年のニキビ治療もOK</h3>
                            <p>当院では、未成年の治療も行っております。頬のたるみを解消したい方はご家族とご相談の上、お越しください。</p>
                            <a class="linkBtn02 consentBt "
                                href="/pdf/douisyo.pdf"
                                target="_blank" rel="noopener noreferrer">未成年向けの同意書(PDF)はこちら</a>
                        </div>
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit04.png" alt="未成年でもOK" width="450"
                                height="267" loading="lazy">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/visit04_sp.png" alt="未成年でもOK" width="450"
                                height="267" loading="lazy">
                    </div>
                </div>
            </section>
            <section class="flow3">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc9">ご予約から治療までの<br class="sp">全体のながれ</h2>
                    <div class="flows">
                        <div class="flow-box reservation" id="section9-1">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/flow01-pc.png" alt="予約のお申込み"
                                    class="pc-only">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/flow01-sp.png" alt="予約のお申込み"
                                    class="sp-only">
                            </div>
                            <div class="txt">
                                <h3 class="ttl" id="toc9-1">1.予約のお申込み</h3>
                                <p class="explanation">まずは、お電話またはWEB予約フォームより、<br />
                                    ご希望の来院日時をご連絡ください。<br />
                                    当日予約も可能ですので、当日のご予約はお電話にてご予約下さい。<br /><br />
                                    お電話　<a href="tel:0120331244" class="bold yellow">0120-331-244</a><br>
                                    <a href="/reservation/" class="linkBtn02 formBt">ご予約フォームへの入力はこちら</a>
                                </p>
                            </div>
                        </div>
                        <div class="flow-box consultation" id="section9-2">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/flow02-pc.png" alt="カウンセリング"
                                    class="pc-only">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/flow02-sp.png" alt="カウンセリング"
                                    class="sp-only">
                            </div>
                            <div class="txt">
                                <h3 class="ttl" id="toc9-2">2.カウンセリング</h3>
                                <p class="explanation">
                                    当院では、必ず最初に、カウンセリングをします。女性カウンセラーが担当しますので、男性の医師には聞きづらいことなどなんでもお尋ね下さい。
                                    手術の流れ、術後の経過や日常生活の過ごし方など詳しくご説明します。</p>
                            </div>
                        </div>
                        <div class="flow-box" id="section9-3">
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/flow03-pc.png" alt="施術"
                                    class="pc-only">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/flow03-sp.png" alt="施術"
                                    class="sp-only">
                            </div>
                            <div class="txt">
                                <h3 class="ttl" id="toc9-3">3.施術</h3>
                                <p class="explanation">
                                    治療内容をご理解頂きましたら、同意書にサインの上、カウンセリング当日にそのまま治療することも可能です。スターラックスレーザーは痛みが少なく、麻酔なしで施術が可能のため照射は15分程度で終了。照射後はビタミンＣのイオン導入を行います。※痛みに弱い方には表面麻酔を行うことが可能です。<br />
                                    <span class="bold">施術後はそのままお出かけもＯＫ！</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="secBox aftercare">
                <div class="container">
                    <h2 class="lineTitle secTi" id="toc10"><span>ニキビ・ニキビ跡 レーザー治療後の</span><br />ケアについて</h2>
                    <div class="aftercare-boxes bgfff">
                        <div class="aftercare-box">
                            <h3 class="greenHeading" id="toc10-1">ニキビ跡治療が終わった後の<br class="sp">生活の注意点</h3>
                            <p>照射後から当日１日は、日焼けした後の様なカッカッするような熱感のあるヒリヒリした感触が続きます。
                                クリニックにて15分程度アイスで冷やしてからご帰宅いただきますが、ご自宅でもアイスノンなどでお顔を冷やされると改善が早くなります。<br /><br />
                                お化粧は治療後すぐにしていただく事が可能ですが、ニキビのあるお肌へのお化粧は肌への負担があるため、基本的にお勧めはしておりません。 <span
                                    class="bold">洗顔は泡ごしに優しく洗い、ゴシゴシこすらないようにご注意ください。</span>
                                治療後は大変乾燥しやすくなります。こまめに保湿を行うようにしましょう。<br />
                                <span class="bold">次回のニキビ跡治療レーザーのご予約は約1ヶ月間をあけてからの照射となります。（１ヶ月以内に複数回の照射はできません）</span>
                            </p>
                        </div>
                        <div class="aftercare-box" id="section10-2">
                            <h3 class="greenHeading" id="toc10-2">ニキビ跡治療後のお肌の回復経過</h3>
                            <p>腫れている感じは、<span class="bold">治療後2～3時間で軽減</span>します。<br />
                                照射後から当日１日は、日焼けした後の様なカッカッするような熱感のあるヒリヒリした感触が続きます。 赤みは翌日までほんのり赤みがさしたような色合いが続きます。<br />
                                レーザー照射を行うことで、壊れた角質が表面に出てきますため、<span
                                    class="bold">１週間程度は触るとザラザラした感触がありますが、1週間程度で元の肌質へ戻りますため無理にこすらないようにされてください。</span></p>
                        </div>
                        <div class="aftercare-box" id="section10-3">
                            <h3 class="greenHeading" id="toc10-3">ニキビ跡治療後のアフターフォロー<br class="sp"> ～プラセンタ療法～</h3>
                            <p class="last"><span class="bold">ヒトプラセンタ配合のローションとクリーム</span>をご用意しております。 <br />
                                生プラセンタは一般のお化粧品に配合することが出来ない、医師の処方が必要なお薬です。<span
                                    class="bold">プラセンタにより壊れた皮膚細胞の修復を促し、弾むようなハリとうるおいを与えてくれます。</span>レーザー照射によりダメージを受けた皮膚の修復を行い、さらに乾燥をしっかり改善してくれる大変優れた治療薬です。
                                プラセンタの独特のニオイが気になる方もいらっしゃるかもしれませんが、当院では治療効果を最優先するため、クリームの中に限界までプラセンタを配合しました。<br />
                                時間がたつとクリームの中からプラセンタが液状化するくらいまで配合しておりますので、混ぜてお使いください。</p>
                        </div>
                    </div>
                    <div class="consultation-card1">
                        <a href="/reservation/">
                            <picture>
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
                            </picture>
                        </a>
                    </div>
                </div>
            </section>

            <section id="operations-faq" class="faq clr faq-area">
                <div class="container">
                    <h2 id="toc11">よくある質問</h2>
                    <div class="sub-container">
                        <div class="faq-item open"> <!-- 初期表示はここだけ open -->
                            <button class="faq-question"><h3 id="toc11-1">どの位のペースで<br class="sp">何回通院する必要がありますか？</h3></button>
                            <div class="faq-answer">
                            <p>肌のターンオーバーに合わせて、約１ヶ月半に１度のペースで、約5回照射にお越しいただいております。その為治療期間としては、約９ヶ月ほどお時間がかかります。</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question n1"><h3 id="toc11-2">照射中は痛いんですか？</h3></button>
                            <div class="faq-answer">
                            <p>レーザー脱毛のように強い痛みはありません。スターラックスはジュワーと熱が伝わるような、しばらく皮膚の中に熱がこもった感じがあります。施術後は15分ほど冷やしてからおかえりいただいております。また、痛みが心配な方は、表面麻酔を行うことも可能です。</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><h3 id="toc11-3">クレーターになってしまったニキビ跡も治療できますか？</h3></button>
                            <div class="faq-answer">
                            <p>もちろんできます！当院は傷跡専門外来も行っております。このレーザーでしっかりクレーターも改善していくことが可能です。</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question li01"><h3 id="toc11-4">昔からあるニキビ跡でも治療できますか？</h3></button>
                            <div class="faq-answer">
                            <p>ニキビ跡の凹み・膨らみもスターラックスレーザー照射を月に１度実施することで可能となります。15年前のニキビ跡でも改善している患者様もいらっしゃいますのでご安心下さい。</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><h3 id="toc11-5">体のニキビ跡治療は可能でしょうか</h3></button>
                            <div class="faq-answer">
                            <p>どの部位も治療可能です。</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><h3 id="toc11-6">施術後に気を付けることはありますか？</h3></button>
                            <div class="faq-answer">
                            <p>照射後は、皮膚がデリケートな状態となりますので、ゴシゴシこすったり、テープなど粘着質なものは貼らないようにお願いします。<br>
                                術後１週間前後は大変お肌が乾燥した状態となりますので、痒み予防の為にも保湿クリームを塗って下さい。当院にて、皮膚の補修効果が入ったプラセンタクリームを扱っております。ご興味がございましたらスタッフへお申し付けください。また、日焼けされますことは肌へのダメージとなりますので、極力お控えください。日焼け止めクリームを塗ることで対応いただければと思います。</p>
                            </div>
                        </div>
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
                        <h2 id="toc12">監修医師紹介</h2>
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
                <h3 id="toc12-1">
                    皮膚科で治せなかった頑固なニキビや<br>
                    酷いニキビ跡についてお悩みでしたら、<br class="sp">ぜひ当院へご相談ください
                </h3>
                <p class="text">
                    当院は女性だけではなく、男性もニキビ治療に多くお通いいただいております。<br>
                    女性と違い、お化粧でニキビ跡を隠すことが出来ない分、男性のお悩みも深いものです。<br>
                    またホルモンバランスが乱れやすい高校生のニキビ・ニキビ跡治療に<br>
                    お通いいただいている方も多くいらっしゃいます。<br>
                    <br>
                    ほんの数回のレーザー治療で劇的に改善する様子をご体験いただければ、<br>
                    ご自宅での根気のいるケアの必要なさに感動頂けると信じております。
                </p>
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/profile.webp" alt="院長の経歴">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/profile_sp.webp" alt="院長の経歴">
                </div>
            </section>
            <section class="yellow" id="snsreport">
                <div class="container">
                <h2 id="toc13">
                    <strong>
                    <span class="sub">ニキビ・ニキビ後治療の</span><br>
                    <span class="main">ブログや体験レポート</span>
                    </strong>
                </h2>
                </div>
                <div class="box">
                <div class="container item">
                    <div class="flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/nikibi/nikibi_insta.webp" alt="インスタグラム">
                    <div>
                        <h3 id="toc13-1">Instagram</h3>
                        <p>
                        ニキビ・ニキビ後治療の実際の様子や<br>
                        ビフォーアフターをご紹介しています。
                        </p>
                        <a href="https://www.instagram.com/ikesunshine331244?utm_source=ig_web_button_share_sheet&igsh=czhpOTc0cmxpaWYz">公式インスタグラムへ</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="box left">
                <div class="container item">
                    <h3 id="toc13-2">
                        ニキビ・ニキビ跡治療のブログランキング
                    </h3>
                    <ul>
                        <li class="rank01"><a href="/blogs/acne-scar-laser/">ニキビ跡に効くレーザー治療は？<br class="sp">必要な通院回数も種類別に解説</a></li>
                        <li class="rank02"><a href="/blogs/nikibiato/">ニキビ跡を治すには？効果的な治療薬についても紹介！</a></li>
                        <li class="rank03"><a href="/blogs/nikibi-type/">ニキビ・ニキビ跡の種類とは？ニキビ跡の原因についても紹介！</a></li>
                        <li class="rank04 last"><a href="/blogs/nikibi-tsubusu/">ニキビを潰すと早く治るって本当？NG行為や対処法をご紹介</a></li>
                    </ul>
                </div>
                </div>
            </section>
            <section id="access">
                <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8118773271394!2d139.71221927652596!3d35.73084487257129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751103762661!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div>
                    <h2 id="toc14">アクセス</h2>
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