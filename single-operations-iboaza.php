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

<div class="secBox iboaza" id="iboaza">

    <section class="head">

      <div class="container">

        <div id="pageTitle" class="iboaza">
          <h1>大きなホクロ・あざ・いぼの<br class="sp">保険適用手術</h1>
          <p>ホクロ・アザ・いぼは保険適用で手術が可能です。</p>
        </div>
        <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "FAQPage",
          "description": "池袋サンシャイン美容外科の保険適用可能なほくろ・イボ除去治療について",
          "mainEntity":
          [

          {
            "@type": "Question",
            "name": "レーザーで皮膚が陥没する事はありませんか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "元々小さいホクロであれば跡形もなく治る場合もありますが、大きければ大きいものほど凹む事は考えられます。 ですが、元のホクロの面積よりも小さい面積の凹みになるわけですし、黒い大きな盛り上がりが無くなる わけですから、凹んでもホクロのある状態よりは綺麗になるわけで、治療を行う価値は十分にございます。 また、ホクロやイボは盛り上がっているものは放置しておくとどんどん大きくなるものもある為、 大きくなってから処置をすると大きな窪みになりますが、小さいうちに行えば小さな窪みで済みますので、 取ってしまいたいホクロがあるならば早いうちに取った方が良いです。"
            }
          },

          {
            "@type": "Question",
            "name": "何回の通院でホクロ・イボ・アザを取ることができますか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "1回限りです。 除去後、お鏡でしっかりホクロ・イボがなくなったことを確認してからお帰りいただいております。"
            }
          },

          {
            "@type": "Question",
            "name": "膨らみのあるホクロも小さければレーザー除去が可能ですか？膨らみのあるものは根が深いのでしょうか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "はい、膨らみのあるホクロの方が平坦なものよりも根が深い場合が多いです。 もちろん膨らんでいてもレーザーは可能です。ただ、部位によっては皮膚切除の方が綺麗になるケースも ありますので、お気軽にご相談ください。"
            }
          },

          {
            "@type": "Question",
            "name": "患部へのメイクはすぐにできますか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "除去後、肌色のテープを患部にお貼り頂きます。 その上からメイクをしていただければ大丈夫です。"
            }
          },

          {
            "@type": "Question",
            "name": "一度に何個も除去する事はできますか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "ご希望であれば、一回の治療で何個でも除去が可能です。 ただ、多く行えば直後はそれだけ凹みが出来るので、最初は目立たない端の部分から治療を受けて頂いて、 問題なければ後日再度治療すると良いと思います。"
            }
          },

          {
            "@type": "Question",
            "name": "顔に大きなホクロが有り気になっています。大きなホクロはレーザーで取れますか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "だいたい8mm以上の大きなホクロは皮膚切除術が主流となります。 大きいホクロの場合は、レーザーでの治療は治療跡が目立ってしまうことがあります。 皮膚ごと切って、1本の線にする手術の方が、レーザーよりも術後の状態がきれいで目立ちません。 手術時間は15分程度です。傷跡は3ヶ月～半年位できれいに目立たなくなります。 1週間後の抜糸までは傷跡は濡らさないようにして頂きます。その後は日常生活に支障はありません。 手術の約7日後に抜糸となります。"
            }
          },

          {
            "@type": "Question",
            "name": "術後の生活において、気を付けることはありますか？",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "当日から、お化粧・洗顔・入浴は問題ありません。 日焼けをすると、ホクロ除去部分がシミの原因になりますので予防対策が重要です。"
            }
          },

          {
            "@type": "Question",
            "name": "ホクロ除去後のケア方法について教えて下さい。",
            "acceptedAnswer": {
            "@type": "Answer",
            "text": "ホクロ・イボ・アザをレーザー除去した部分は一時的に表皮がない状態になります。 新しい表皮ができるまでの間、ばい菌が入らないよう、綿棒で軟膏を塗り、保護用の遮光(肌色)テープを 貼ることをおすすめしています。"
            }
          }

          ]
        }
        </script>

        <div class="topNav">
          <ul>
            <li><a href="#toc1">ホクロ・イボ・アザ<br>のお悩み</a></li>
            <li class="heightAjst"><a href="#toc4">皮膚切除術</a></li>
            <li class="heightAjst"><a href="/operations/skincare#toc3">レーザー除去</a></li>
            <li class="heightAjst"><a href="#toc6">症例写真</a></li>
            <li class="heightAjst"><a href="#toc7">よくある質問</a></li>
            <li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
          </ul>
        </div>

        <div class="box-item">
              <div class="flex">
                <div class="box">
                  <div class="container">
                    <h4><strong>該当箇所が小さい方</strong></h4>
                    <p class="point">レーザー治療</p>
                    <p>保険1個　<strong>8,000円～10,000円</strong></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/hokuro_laser.webp" alt="">
                  </div>
                  <a href="/operations/skincare#toc3">レーザー治療はこちら</a>
                </div>
                <div class="box">
                  <div class="container">
                    <h4><strong>該当箇所が1cm以上の方</strong></h4>
                    <p class="point">皮膚切除術<span>（再発の心配不要！）</span></p>
                    <p>保険1個　<strong>15,000円～20,000円</strong></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/hokuro_excision.webp" alt="">
                  </div>
                  <a href="#toc4">皮膚切除術はこちら</a>
                </div>
              </div>
        </div>

      <div id="toc_box">
          <p class="toc_title">目次</p>
          <div class="toc_list">
            <ul>
              <li>
                <a href="#toc1">
                  <span class="toc_num">1.</span> 大きなほくろ・イボ・アザ・母斑のお悩み
                </a>
                <ul>
                  <li>
                    <a href="#toc1-1" class="toc_num" data-number="1-1.">
                      まぶた・首・背中のほくろやイボを取りたい方へ
                    </a>
                  </li>
                  <li>
                    <a href="#toc1-2" class="toc_num" data-number="1-2.">
                      ほくろ・アザが大きくなった・痛い・気になる人へ
                    </a>
                  </li>
                  <li>
                    <a href="#toc1-3" class="toc_num" data-number="1-3.">
                      自分で取ってもいい？医療機関での治療が必要な理由
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#toc2">
                  <span class="toc_num">2.</span> 皮膚科での保険適用による除去手術のメリットとは？（医療保険・給付金対象も）
                </a>
                <ul>
                  <li><a href="#toc2-1" class="toc_num" data-number="2-1.">医療保険や生命保険の給付対象になることも</a></li>
                  <li><a href="#toc2-2" class="toc_num" data-number="2-2.">“皮膚皮下腫瘍摘出術”として申請できる手術とは？</a></li>
                  <li><a href="#toc2-3" class="toc_num" data-number="2-3.">保険証提示で費用が安くなる「3割負担」の仕組み</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc3">
                <span class="toc_num">3.</span> 除去手術による治療のおすすめポイント
                </a>
                <ul>
                  <li><a href="#toc3-1" class="toc_num" data-number="3-1.">01. 手術給付金や保険金を受け取れることがあります</a></li>
                  <li><a href="#toc3-2" class="toc_num" data-number="3-2.">02. 土日祝日も診療・手術できます</a></li>
                  <li><a href="#toc3-3" class="toc_num" data-number="3-3.">03. 中高生など未成年の方も治療ができます</a></li>
                  <li><a href="#toc3-4" class="toc_num" data-number="3-4.">04. 診察当日の治療も大丈夫｜ダウンタイムも短め</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc4">
                  <span class="toc_num">4.</span> 大きなほくろ・アザ・イボの治療法と手術の選び方
                </a>
                <ul>
                  <li><a href="#toc4-1" class="toc_num" data-number="4-1.">CO2レーザーと皮膚切除術の違い</a></li>
                  <li><a href="#toc4-2" class="toc_num" data-number="4-2.">切開・縫合法・くり抜き法など手術法の使い分け</a></li>
                  <li><a href="#toc4-3" class="toc_num" data-number="4-3.">色素性母斑・スキンタグ・粉瘤などの診断名ごとの治療法</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc5">
                  <span class="toc_num">5.</span> 来院から手術による、ほくろ除去治療完了までの全体の流れ
                </a>
                <ul>
                  <li><a href="#toc5-1" class="toc_num" data-number="5-1.">01 カウンセリングと治療プランの決定</a></li>
                  <li><a href="#toc5-2" class="toc_num" data-number="5-2.">02 お見積もりと同意手続き（保険適用確認）</a></li>
                  <li><a href="#toc5-3" class="toc_num" data-number="5-3.">03 手術当日</a></li>
                  <li><a href="#toc5-4" class="toc_num" data-number="5-4.">04 包帯外し・抜糸</a></li>
                  <li><a href="#toc5-5" class="toc_num" data-number="5-5.">05 病理検査と1ヶ月後の経過診察</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc6">
                  <span class="toc_num">6.</span> 大きなほくろ・アザ・イボ　除去手術の症例写真
                </a>
                <ul>
                  <li><a href="#toc6-1" class="toc_num" data-number="6-1.">面状に大きくなったほくろの除去例</a></li>
                  <li><a href="#toc6-2" class="toc_num" data-number="6-2.">皮膚の下にある腫瘍（母斑・皮下腫瘍）の除去例</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc7">
                  <span class="toc_num">7.</span> 大きなほくろ・アザ・母斑除去手術のよくあるご質問
                </a>
                <ul>
                  <li><a href="#toc7-1" class="toc_num" data-number="7-1.">ほくろ・あざ除去治療が終わった後の生活の注意点を教えてください</a></li>
                  <li><a href="#toc7-2" class="toc_num" data-number="7-2.">ほくろ・あざ除去後のアフターフォローについて教えてください</a></li>
                  <li><a href="#toc7-3" class="toc_num" data-number="7-3.">傷が残ってしまわないか心配なのですが</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc8">
                  <span class="toc_num">8.</span> 費用・支払い方法のご案内
                </a>
                <ul>
                  <li><a href="#toc8-1" class="toc_num" data-number="8-1.">手術による治療概要</a></li>
                  <li><a href="#toc8-2" class="toc_num" data-number="8-2.">何回通院が必要ですか？</a></li>
                  <li><a href="#toc8-3" class="toc_num" data-number="8-3.">支払い方法</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc9">
                  <span class="toc_num">9.</span> 監修医師紹介
                </a>
                <ul>
                  <li><a href="#toc9-1" class="toc_num" data-number="9-1.">ほくろ・イボ・あざについてお悩みでしたら是非一度ご相談ください</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc10">
                  <span class="toc_num">10.</span> ほくろ除去・イボ治療のブログや体験レポート
                </a>
                <ul>
                  <li><a href="#toc10-1" class="toc_num" data-number="10-1.">Instagram</a></li>
                  <li><a href="#toc10-2" class="toc_num" data-number="10-2.">大きなほくろ・イボ・アザ保険適用手術のブログランキング</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc11">
                  <span class="toc_num">11.</span> アクセス
                </a>
              </li>
            </ul>
          </div>
      </div>

    <div>

    </section>

    <section class="overview yellow">
      <div class="container">
        <h2 id="toc1">
          <span class="sub"><strong>大きなほくろ・イボ・アザ・<br class="sp">母斑のお悩み</strong></span>
        </h2>
        <div class="box-item">
              <div class="sub-container">
                  <h3 id="toc1-1"><strong>なぜ、<br class="sp">イボ・アザ・母斑ができるの？</strong></h3>
                    <div class="flex">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/about01.webp" alt="アザのイメージ写真" class="about01">
                      <p>
                        アザとは先天性で生まれたときから<br class="sp">存在するものが一般的です。<br>
                        黒い色の原因は、一般的なしみと同じで<br class="sp">メラニン色素になります。<br>
                        <br>
                        正式名称は<strong>母斑</strong>です。皮膚の色素以上から来るお顔全体に広がるようなアザを除去することはできませんが、<strong>面状のアザ（お顔であれば５×５㎝以内）のものであれば除去が可能です。</strong><br>
                        <br>
                        イボはヒトパピローマウイルスという<br class="sp">ウイルスの一種が皮膚に感染してできます。<br class="sp"><br class="sp">感染原因としては、ヒトからヒトへという直接的接触と、<br class="pc">プールや足拭きマット、スリッパなどを介した間接的感染もあります。
                      </p>
              </div>
        </div>
		  </div>
		  <div class="box-item">
			<div class="sub-container">
				<h3 id="toc1-2"><strong>ほくろ・アザが大きくなった・<br class="sp">痛い・気になる人へ</strong></h3>
				<div class="circles-container">
            <div class="info-circle">
                <div class="circle-text">該当部分が<br class="sp">大きく<br class="pc">面状に<br class="sp">広がっている</div>
            </div>
            <div class="info-circle">
                <div class="circle-text">しこり（腫瘍）を<br>切除したい方</div>
            </div>
            <div class="info-circle">
                <div class="circle-text">何cmもある<br>大きな方</div>
            </div>
            <div class="info-circle">
                <div class="circle-text">レーザー除去後<br>何度も再発する</div>
            </div>
				</div>
				<div class="cards-container">
            <div class="condition-card">
                <img class="condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/about02-1.webp" alt="症例の写真">
                <div>
                    <div class="condition-title">ホクロ</div>
                    <div class="condition-content">
                        <ul class="condition-list">
                            <li class="condition-item">
                                <span>メイクで隠せない<br>ホクロがある</span>
                            </li>
                            <li class="condition-item">
                                <span>大きなホクロがあって<br>目立っている</span>
                            </li>
                            <li class="condition-item">
                                <span>小さなホクロがたくさんある</span>
                            </li>
                            <li class="condition-item">
                                <span>年々ホクロが増えてきた</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                        
            <div class="condition-card">
              <img class="condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/about02-2.webp" alt="症例の写真">
                <div>
                    <div class="condition-title">イボ</div>
                    <div class="condition-content">
                        <ul class="condition-list">
                            <li class="condition-item">
                                <span>イボが少しずつ大きく<br>なっている</span>
                            </li>
                            <li class="condition-item">
                                <span>メイクで隠せないイボがある</span>
                            </li>
                            <li class="condition-item">
                                <span>イボを病理検査してほしい</span>
                            </li>
                            <li class="condition-item">
                                <span>難治性イボの為、<br>なかなか完治しない</span>
                            </li>
                            <li class="condition-item">
                                <span>皮膚腫瘍なのではないか<br>と不安</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                        
            <div class="condition-card">
              <img class="condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/about02-3.webp" alt="症例の写真">
                    <div>
                        <div class="condition-title">アザ</div>
                        <div class="condition-content">
                            <ul class="condition-list">
                                <li class="condition-item">
                                    <span>生まれつき大きなアザがある</span>
                                </li>
                                <li class="condition-item">
                                    <span>どんどんシミ・そばかすの<br>色が濃くなってきている</span>
                                </li>
                                <li class="condition-item">
                                    <span>アザの部分の皮膚が<br>少し盛り上がっている</span>
                                </li>
                                <li class="condition-item">
                                    <span>顔など目立つ所にアザがある</span>
                                </li>
                                <li class="condition-item">
                                    <span>悪性のものもあるので不安</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
				</div>
		  </div>
		  <div class="box-item">
			<div class="sub-container">
				<h3 id="toc1-3"><strong><span class="sub">自分で取ってもいい？</span>
					医療機関での治療が必要な理由</strong></h3>
					<p>
					ほくろ、イボなどを自己判断で取ろうとすると、<br>
					感染や傷跡の悪化、再発などのリスクがあります。<br><br>
					
					皮膚科や美容外科など医療機関では、<strong>色素性母斑</strong>や<strong>皮膚皮下腫瘍</strong>などの傷病名に基づき、<br>
					皮膚切除術やCO2レーザーなど適切な方法を選択します。<br><br>
					
					また、<strong>医療保険や生命保険の手術給付金</strong>や<strong>保険適用の対象</strong>となるケースもありますので、<br>
					まずは当院にご相談ください。
					</p>
			</div>
		  </div>
		<a href="/reservation/">
            <picture>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
            </picture>
		</a>
      </div>
    </section>
	<section class="merit">
		<div class="container">
			<h2 id="toc2"><strong>
				<span class="sub">美容外科や皮膚科での保険適用による</span>
				<span>除去手術のメリット</span><span class="sub" style="display:inline;">とは？</span><br>
				<span class="mini">（医療保険・給付金対象も）</span>
      </strong>
			</h2>
			<ul class="white-box">
				<li>
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/merit01.webp" alt="診療明細書のイメージ画像">
				<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/merit01_sp.webp" alt="診療明細書のイメージ画像">
				<div>
					<h3 id="toc2-1" class="lh03">医療保険や生命保険の給付対象になることも</h3>
					<p>任意保険（生命保険や共済保険）に<br class="sp">加入している場合、<br class="pc">日帰りのほくろ除去<br class="sp">手術でも保険給付の対象となることが<br class="sp">あります。</p>
					<p class="up">実際には<strong>「皮膚腫瘍摘出術」</strong>として<br class="sp">申請するケースが多く、<br><br class="sp">
					給付金を受け取るためには<br class="sp"><strong>保険会社の指定書式に沿った<br>
					診断書の提出が必要です。</strong></p>
					<p class="up">当院では、<br class="sp">手術を受けられた患者様に対して<br>
					<strong>保険会社用の診断書作成を承っております</strong><br>
					（※ご相談のみで治療をされていない場合は対象外となります）。</p>
					<p class="up">該当する方は、保険会社発行の<br class="sp">診断書用紙をご持参ください。</p>
				</div>
				</li>
				<li>
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/merit02.webp" alt="皮膚皮下腫瘍抽出の画像">
				<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/merit02_sp.webp" alt="皮膚皮下腫瘍抽出の画像">
				<div>
					<h3 id="toc2-2">保険請求で給付対象となる”皮膚皮下腫瘍抽出”とは？</h3>
					<p>当院で行う保険適用の除去手術は、<br>
					医学的には<strong>「皮膚皮下腫瘍摘出術」</strong><br class="sp">として分類されます。 </p>
					<p class="up">この名称は、<br class="pc">保険申請や生命保険給付金の請求の際にも使用されるものであり、<br><br class="sp">
					<strong>あざ・ほくろ・皮膚腫瘍（しこり）</strong><br class="sp">などの除去に適用されます。</p>
					<p class="up">ご加入中の医療保険・生命保険によっては、<br class="pc">この手術が<strong>観血的手術</strong>に該当し、<br class="sp"><strong>手術給付金や通院給付金の請求対象</strong><br class="pc">となる場合があります。</p>
					<p class="up">その際には、保険会社の指定書式に<br class="sp">基づく診断書が必要です。<br><br class="sp">
					当院では診断書の作成に<br class="sp">対応しておりますので、<br>
					ご希望の方は受付までお申し出ください。</p>
					<p class="up">また、<br class="sp">除去した組織は病理検査に提出され、<br>
					10日前後で診断結果が返ってきます。</p>
					<p class="up">ほとんどは良性ですが、<br class="sp">万が一悪性と判断された場合でも、<br>
						既に適切に除去されているため<br class="sp">心配は不要です。</p>
					<p class="up">その際は必要に応じて大学病院などへの紹介状を発行いたします。</p>
				</div>
				</li>
				<li>
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/merit03.webp" alt="3割負担のイメージ画像">
				<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/merit03_sp.webp" alt="3割負担のイメージ画像">
				<div>
					<h3 id="toc2-3">保険証提示で費用が安くなる<br class="sp">「3割負担」の仕組み</h3>
					<p>当院では、保険証を提示いただければ、<br>
					自己負担3割で手術を受けて<br class="sp">いただけます。</p>
					<p class="up">たとえば、1か所のほくろ除去費用は<br class="sp"><strong>約8,000円～15,000円程度、</strong><br>
					部位や大きさによっては17,000円ほど<br class="sp">となる場合もあります。</p>
					<p class="up"><strong>顔の手術の場合：約10,000円～17,000円<br>
					体の手術の場合：約15,000円前後</strong></p>
					<p class="up">※1回の保険適用手術は1か所まで。<br>
					複数箇所のご希望がある場合は、<br class="sp">1か所目の治療後に<br class="pc">改めて<br class="sp">ご予約いただく形となります。</p>
				</div>
				</li>
			</ul>
		</div>
	</section>
    <section class="iboaza_goodPoints yellow">
      <div class="container">
          <h2 id="toc3"><strong>除去手術による治療の<br class="sp">おすすめポイント</strong></h2>
          <ul class="white-box">
            <li>
              <p class="reason">01</p>
              <div>
                <h3 id="toc3-1">手術給付金や保険金を<br class="sp">受け取れることがあります</h3>
                <p>任意で加入されている<br class="sp">生命保険や共済組合の保険によっては<br><br class="sp">
                ほくろ・あざ・母斑の除去手術に対し<br class="sp">手術の給付金を受けられる保険が<br class="sp">あります。</p>
                        <p class="up">
                保険適用手術名は<strong>”皮膚腫瘍摘出術”</strong>です。<br>
                この名前にて<br class="sp">給付金を受けられるか保険会社への<br class="sp">ご確認をお願いいたします。</p>
                        <p class="up">給付を受けられるようでしたら<br class="sp"><strong>保険会社から指定の診断書を受け取り<br>
                クリニックへご持参ください。</strong></p>
                <p class="up">当院にて手術を受けられた方を対象に<br class="sp">診断書の作成をいたします。<br>
                ※ご相談のみで治療をされていない方への<br class="sp">診断書の作成は行っておりません。</p>
              </div>
            </li>
            <li>
              <p class="reason">02</p>
              <div>
                <h3 id="toc3-2">土日祝日も<br class="sp">診療・手術できます</h3>
                <p>当クリニックでは<br class="sp">土日祝日も診療しておりますので、<br>
				お仕事や学校をお休みする必要なく<br class="sp">治療にお通いいただけます。</p>
                <p class="up"><strong>また休日診療扱いになりませんため、<br class="sp">保険の料金が増えることも<br class="sp">ございません。</strong></p>
              </div>
            </li>
            <li>
              <p class="reason">03</p>
              <div>
                <h3 id="toc3-3">中高生など<br class="sp">未成年の方も治療ができます</h3>
                <p>当クリニックでは中学生以上の<br class="sp">未成年の方も治療を承っております。<br>
				（小学生以下の方は<br class="sp">ご治療をお控えいただいておりますので<br class="sp">ご了承ください。）</p>
				<p class="up">また、基本的に未成年の方は<br class="sp">保護者の方とのご同伴が必要となりますが<br><br class="sp">
				<strong>高校卒業された方は、親権者同意書を<br class="sp">ご持参いただければ、<br class="pc">お一人での<br class="sp">ご来院と治療が可能となります。</strong></p>
                  <a class="agreementDLD" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer">未成年者向けの同意書（PDF）はこちら</a>
              </div>
            </li>
            <li>
              <p class="reason">04</p>
              <div>
                <h3 id="toc3-4">診察当日の治療も大丈夫｜<br class="sp">ダウンタイムも短め</h3>
                <p>診察当日に手術をすることが可能です。<br class="sp"><strong>手術時間は20分程度</strong>となります。</p>
                <p class="up">当日に手術をお受けいただき、術後すぐにお帰りいただくことが可能です。<br>
                手術当日から通常の生活をしていただいてかまいません。</p>
                <p class="up"><strong>7日～10日目が<br class="sp">抜糸の予定日</strong>となりますので、<br class="sp">事前の日程のご調整をお願いいたします。</p>
                </p>
              </div>
            </li>
          </ul>
		<a href="/reservation/">
            <picture>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
            </picture>
		</a>
        </div>
      </section>
	<section class="method">
		<div class="container">
			<h2 id="toc4">
        <strong>
          <span class="sub">大きなほくろ・アザ・イボの</span>
          <span>治療法と手術の選び方</span>
        </strong>
			</h2>
			<div class="box-item">
				<div class="sub-container">
					<h3 id="toc4-1"><strong>CO2レーザーと皮膚切除術の違い</strong></h3>
					<p>
						小さなほくろやイボであれば<br class="sp"><strong>CO2レーザーによる除去が可能です。</strong><br>
						レーザーは皮膚表面を面状に削るようにして除去するため、傷跡が残りにくい利点があります。
					</p>
					<p class="up">
						しかし、<br class="sp">大きなほくろや盛り上がった腫瘍の場合、<br><br class="sp">
						レーザーでは除去しきれない・<br class="sp">色素沈着を起こすなどの懸念があり、<br><br class="sp">
						むしろ皮膚切除術（メスによる切除）を<br class="sp">行った方が結果として傷跡が<br class="sp">目立ちません。
					</p>
					<p class="up">
						切除手術では、皮膚を一本の細い線で<br class="sp">縫合するため、<br class="pc"><strong>傷はシワのように<br class="sp">目立たなく仕上げることができます。</strong>
					</p>
				</div>
			</div>
			<div class="box-item">
				<div class="sub-container">
					<h3 id="toc4-2"><strong>切開・縫合法・くり抜き法など<br class="sp">手術法の使い分け</strong></h3>
					<div class="card-content">
						<p class="introduction">
							切除手術にはいくつかの方法があり、<br class="sp">症状や部位に応じて<br class="sp">適切な手法を選びます。
						</p>
						<div class="techniques-list">
							<div class="technique-item">
							<img class="pc technique-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method2-1.webp" alt="方錐形切開術">
							<img class="sp technique-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method2-1_sp.webp" alt="方錐形切開術">
								<div class="technique-content">
									<h3 class="technique-title">方錐形切開術<span class="spmini">（ほうすいけいせっかいじゅつ）</span></h3>
									<p class="technique-description">
										紡錘形に切り取る方法で、<br>
										縫合後の仕上がりが自然になりやすい。
									</p>
								</div>
							</div>
							<div class="technique-item">
							<img class="pc technique-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method2-2.webp" alt="巾着縫合法">
							<img class="sp technique-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method2-2_sp.webp" alt="巾着縫合法">
								<div class="technique-content">
									<h3 class="technique-title">巾着縫合法</h3>
									<p class="technique-description">
										円形や不規則な形のほくろに適した<br class="sp">縫い方で、<br class="pc">皮膚を中心に寄せて閉じます。
									</p>
								</div>
							</div>
							<div class="technique-item">
							<img class="pc technique-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method2-3.webp" alt="くり抜き法">
							<img class="sp technique-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method2-3_sp.webp" alt="くり抜き法">
								<div class="technique-content">
									<h3 class="technique-title">くり抜き法</h3>
									<p class="technique-description">
										一部のクリニックでは<br class="sp">円形パンチでくり抜く手法もあり、<br class="sp">皮膚を最小限に切除できるが、<br class="sp">再発や傷跡が残るリスクもあるため、<br class="sp">当院ではケースにより判断します。
									</p>
								</div>
							</div>
						</div>
						<p class="conclusion">
							施術前に医師が形状・深さ・部位を診察し、最適な方法をご提案いたします。
						</p>
					</div>
				</div>
			</div>
			<div class="box-item last">
				<div class="sub-container">
					<h3 id="toc4-3"><strong>色素性母斑・スキンタグ・粉瘤<br class="sp">などの診断名ごとの治療法</strong></h3>
					<div class="card-content">
						<p class="introduction">
							ほくろやイボにはいくつかの医学的な<br class="sp">診断名があります。<br class="pc">それぞれ治療法が<br class="sp">異なるため、適切な診断が重要です。
						</p>
						
						<div class="conditions-list">
							<div class="condition-item">
							<img class="pc condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method3-1.webp" alt="色素性母斑・母斑細胞母斑">
							<img class="sp condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method3-1_sp.webp" alt="色素性母斑・母斑細胞母斑">
								<div class="condition-content">
									<h3 class="technique-title">色素性母斑・母斑細胞母斑</h3>
									<p class="condition-description">
										皮膚のメラニン色素の異常によるもので、<br>
										皮膚切除術の適応となることが多い。
									</p>
								</div>
							</div>
							
							<div class="condition-item">
							<img class="pc condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method3-2.webp" alt="スキンタグ（軟性線維腫）">
							<img class="sp condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method3-2_sp.webp" alt="スキンタグ（軟性線維腫）">
								<div class="condition-content">
									<h3 class="technique-title">スキンタグ（軟性線維腫）</h3>
									<p class="condition-description">
										皮膚表面にできる小さな突起。<br>
										CO2レーザーでの除去が有効。
									</p>
								</div>
							</div>
							
							<div class="condition-item last">
							<img class="pc condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method3-3.webp" alt="粉瘤（アテローム）">
							<img class="sp condition-image" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/method3-3_sp.webp" alt="粉瘤（アテローム）">
								<div class="condition-content">
									<h3 class="technique-title">粉瘤（アテローム）</h3>
									<p class="condition-description">
										皮膚の下に袋状の腫瘍ができる疾患で、<br>
										感染リスクもあるため完全摘出が<br class="sp">推奨されます。
									</p>
								</div>
							</div>
						</div>
						
						<p class="conclusion">
							診断名は術後の病理検査で確定され、<br class="sp">保険の申請や手術給付金請求時にも<br class="sp">必要となります。
						</p>
					</div>
				</div>
			</div>
		</div>
      </section>

      <section class="flow orange">
        <div class="container">
          <h2 id="toc5"><strong>
            <span class="sub">来院から手術による、</span>
            <span>ほくろ除去治療完了<br class="sp">までの全体の流れ</span>
          </strong></h2>
          <ul class="white-box">
              <li class="box-item block">
                <div class="flex">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow01.webp" alt="カウンセリングと治療プランの決定">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow01_sp.webp" alt="カウンセリングと治療プランの決定">
                  <div>
                    <h3 id="toc5-1" class="one"><span>1.</span>カウンセリングと治療プランの決定</h3>
                    <p>カウンセリング時に気になる<br class="sp">ほくろ・あざ・母斑など<br class="sp">すべてご提示ください。<br class="sp"><br class="sp">その箇所によって、<br class="sp">レーザー除去がお勧めか手術が<br class="sp">必要か医師が判断いたします。</p>
                    <p class="up">小さなものですとレーザーが<br class="sp">お勧めですし、大きなものですと<br class="sp">手術をお勧め致します。<br class="sp"><br class="sp">また部位・大きさによっては<br class="sp">分割切除をお勧めする場合も<br class="sp">ございます。</p>
                    </div>
                </div>
                <div class="blue-box">
                    <p class="point">予約のお申込み</p>
                    <p>
                      まずは、お電話またはWEB予約フォームより、ご希望の来院日時をご連絡ください。
                      当日予約も可能ですので、当日のご予約はお電話にてご予約下さい。
                    </p>
                    <p class="tel" >お電話<a href="tel:0120331244">0120-331-244</a></p>
                    <a class="rese" href="/reservation/">ご予約フォームへの入力はこちら</a>
                </div>
              </li>
              <li class="box-item">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow02.webp" alt="お見積もり">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow02_sp.webp" alt="お見積もり">
                  <div>
                    <h3 id="toc5-2"><span>2.</span>お見積もり</h3>
                    <p>
                    カウンセリング時に<br class="sp">ご相談いただきました、<br>
                    ほくろ・あざ・母斑などを除去するのに<br>
                    必要な必要をご説明させていただきます。</p>
                    <p class="up">ご予算に応じて、<br class="pc">治療箇所の数を<br class="sp">ご調整いただくことも可能です。<br><br class="sp">
                    お支払いは現金以外に<br class="sp">カードもご利用いただけます。
                    </p>
                  </div>
              </li>
              <li class="box-item block">
                <div class="flex">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow03.webp" alt="手術">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow03_sp.webp" alt="手術">
                  <div>
                    <h3 id="toc5-3"><span>3.</span>手術</h3>
                    <p>
                    治療内容をご理解頂きましたら、<br class="sp">同意書にサインの上、<br>
                    カウンセリング当日に<br class="sp">そのまま治療することも可能です。<br><br class="sp">
                    （もちろん別のお日にちにて<br class="sp">手術をお申込みいただいても<br class="sp">かまいません）</p>
                    <p class="up">手術時間は<br class="sp">約20分局所麻酔にて行います。<br>
                    除去したものは<br class="sp">病理検査に提出を行います。
                    </p>
                  </div>
                </div>
                <div class="blue-box">
                  <div class="step-card">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-1.webp" alt="手順1の画像" class="step-image">
                    <div class="step-content">
                      <h3 class="step-title"><strong>STEP01</strong></h3>
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-1_sp.webp" alt="手順1の画像" class="step-image">
                      <p class="step-description">
                        取りたいほくろを確認後、局所麻酔をします。32Gという大変細い針を使用していますが、チクっとしたいたみがございます。<br class="sp">麻酔が効けば、痛みは全くわかりません。触られる感覚のみが伝わってきます。
                      </p>
                    </div>
                  </div>
                  <div class="step-card">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-2.webp" alt="手順2の画像" class="step-image">
                    <div class="step-content">
                      <h3 class="step-title"><strong>STEP02</strong></h3>
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-2_sp.webp" alt="手順2の画像" class="step-image">
                      <p class="step-description">
                        デザインをして、皮膚切除する範囲を決めた後、メスにより切開し皮膚を切除します。<br class="sp">止血後縫合。小さなものですと約20分程度で終わります。
                      </p>
                    </div>
                  </div>
                  <div class="step-card">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-3.webp" alt="手順3の画像" class="step-image">
                    <div class="step-content">
                      <h3 class="step-title"><strong>STEP03</strong></h3>
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-3_sp.webp" alt="手順3の画像" class="step-image">
                      <p class="step-description">
                        縫合後は、医療用の絆創膏をお貼りいただいてお帰り頂きます。抗生剤と痛み止めを処方いたします。<br class="sp">7日目～10日目に抜糸を行いますが、それまでは患部を濡らさないようにご注意ください。止血後縫合。小さなものですと約20分程度で終わります。
                      </p>
                    </div>
                  </div>
                  <div class="step-card">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-4.webp" alt="手順4の画像" class="step-image">
                    <div class="step-content">
                      <h3 class="step-title"><strong>STEP04</strong></h3>
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow3-4_sp.webp" alt="手順4の画像" class="step-image">
                      <p class="step-description">
                        縫合後のテーピングの写真です。<br class="sp">この状態でお帰り頂きます。
                      </p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="box-item">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow04.webp" alt="包帯外し・抜糸">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow04_sp.webp" alt="包帯外し・抜糸">
                <div>
                  <h3 id="toc5-4"><span>4.</span>包帯外し・抜糸</h3>
                  <p>手術から約７日目に<br class="sp">抜糸を行います。<br><br class="sp">
                  抜糸は痛みはありませんので<br class="sp">ご安心下さい。</p>
                  <p class="up">抜糸後、翌日から患部を<br class="sp">濡らしていただく事が可能です。</p>
                </div>
              </li>
              <li class="box-item last">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow05.webp" alt="病理検査と1ヶ月語の経過観察">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/flow05_sp.webp" alt="病理検査と1ヶ月語の経過観察">
                <div>
                  <h3 id="toc5-5"><span>5.</span>病理検査と1ヶ月語の経過観察</h3>
                  <p>１ヶ月検診時に病理検査の結果を<br class="sp">ご報告いたします。<br class="sp"><br class="sp">
                  また傷口が化膿していないか・<br class="sp">ケロイド化していないかの確認をさせて頂きます。</p>
                </div>
              </li>
          </ul>
        </div>
      </section>

      <section class="beforeafter yellow">
        <div class="container">
          <h2 id="toc6">
              <span class="sub" style="color:#16A4BD;">大きなほくろ・アザ・イボ</span>
              除去手術の症例写真
          </h2>
          <div class="box-item">
            <div class="sub-container">
				<h3 id="toc6-1"><strong>面状に大きくなったほくろの除去例</strong></h3>
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/bfaf01.webp" alt="面状に大きくなったほくろの除去例の写真">
				<table>
					<tr>
						<th>金額<br class="sp"><span class="spmini">（保険治療）</span></th>
						<td>約 18,000 円　<br class="sp">自己負担3割の保険証を<br class="sp">お持ちの場合</td>
					</tr>
					<tr>
						<th>リスク</th>
						<td>縫合跡・赤み・化膿</td>
					</tr>
					<tr>
						<th>アフターケア</th>
						<td>抗生剤の軟膏塗布後、<br class="sp">保護用のテーピングを<br class="sp">行います。<br>
						当日は抗生剤と痛み止めを<br class="sp">3日分お持ち帰り頂きます。<br>
						約10日目に抜糸をして<br class="sp">治療は終了です。<br>
						新しい皮膚ができるまで<br class="sp">10日〜1ヶ月ほど<br class="sp">テープにて保護します。</td>
					</tr>
					<tr class="last">
						<th>時間</th>
						<td>約 25 分　<br class="sp">局所麻酔後、切開して<br class="sp">皮膚切除後　縫合します。</td>
					</tr>
				</table>
            </div>
          </div>
          <div class="box-item">
            <div class="sub-container">
				<h3 id="toc6-2"><strong>皮膚の下にある腫瘍(母斑・皮下腫瘍の除去例)</strong></h3>
				<img src="<?php echo get_template_directory_uri(); ?>/img/operations/iboaza/bfaf02.webp" alt="皮膚の下にある腫瘍(母斑・皮下腫瘍の除去例)の写真">
				<table>
					<tr>
						<th>金額<br class="sp"><span class="spmini">（保険治療）</span></th>
						<td>約 18,000 円　<br class="sp">自己負担3割の保険証を<br class="sp">お持ちの場合</td>
					</tr>
					<tr>
						<th>リスク</th>
						<td>縫合跡・赤み・化膿</td>
					</tr>
					<tr>
						<th>アフターケア</th>
						<td>抗生剤の軟膏塗布後、<br class="sp">保護用のテーピングを<br class="sp">行います。<br>
						当日は抗生剤と痛み止めを<br class="sp">3日分お持ち帰り頂きます。<br>
						約10日目に抜糸をして<br class="sp">治療は終了です。<br>
						新しい皮膚ができるまで<br class="sp">10日〜1ヶ月ほど<br class="sp">テープにて保護します。</td>
					</tr>
					<tr class="last">
						<th>時間</th>
						<td>約 25 分　<br class="sp">局所麻酔後、切開して<br class="sp">皮膚切除後　縫合します。</td>
					</tr>
				</table>
            </div>
          </div>
        </div>
      </section>
      <section id="operations-faq" class="faq">
        <div class="container">
          <h2 id="toc7"><strong>
            <span class="sub">大きなほくろ・アザ・母斑除去手術の</span>
            <span>よくある質問</span>
          </strong>
        </h2>
        </div>
        <div class="sub-container">

          <div class="faq-item open"> <!-- 初期表示はここだけ open -->
            <button class="faq-question"><h3 id="toc7-1">ほくろ・あざ除去治療が<br class="sp">終わった後の生活の注意点を<br class="sp">教えてください</h3></button>
            <div class="faq-answer">
              <p>ホクロ除去後、約7日～10日後に抜糸を行うまでの間は濡らすことができません。<br>
              除去した場所によっては入浴をお控え頂き、患部をさけたシャワー浴をお願いいたします。 <br>
              <br>
              抜糸が終われば、濡らしても大丈夫です。普通にお風呂へご入浴いただけます。<br>
              <br>
              また、手術部位に負荷がかかる動作は傷口が開く可能性がありますので<br>
              2週間ほどはお控え頂いております。 <br>
              <br>
              抜糸が終わった後は、傷に対して直角にテープを張ってお帰り頂きます。<br>
              これは皮膚に負荷がかかった時に傷口が開かないように抑える働きと、<br>
              傷が太く広がらないようにするための大切なテーピングです。 <br>
              <br>
              このテーピングをしっかり続けていただくと、傷口が細く薄い状態で落ち着いてまいります。 <br>
              個人差はございますが１か月ほどは張り続けていただくことをお勧めしております。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question li01"><h3 id="toc7-2">ほくろ・あざ除去後の<br class="sp">アフターフォローについて<br class="sp">教えてください</h3></button>
            <div class="faq-answer">
              <p>ほくろ除去後１０日目前後に送付されてくる病理検査結果を確認し、<br>
              悪性の腫瘍の場合は大学病院への紹介状を作成し、<br>
              精密検査をお受けいただくようご案内させていただいております。<br>
              <br>
              ほくろを取った傷跡が盛り上がりケロイド状になった場合は<br>
              ケロイド予防のお薬の処方ならびにケナコルト注射によるケロイドの軽減を<br>
              行うことも可能です。<br>
              <br>
              ほくろ除去後の最大の注意点は日焼けですが、<br>
              色素沈着が１年たっても軽減しない場合は、トレチノイン療法による<br>
              色素沈着軽減クリームを処方することも可能です。<br>
              <br>
              もともとアトピー性皮膚炎をお持ちの方など色素沈着ができやすい体質の方は、<br>
              肌の美白成分配合の内服薬を処方し、色素沈着の予防を計ることも可能です。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question"><h3 id="toc7-3">傷が残ってしまわないか<br class="sp">心配なのですが</h3></button>
            <div class="faq-answer">
              <p>ほくろ除去跡が気になる方にはスターラックスによるレーザー照射を行うことも可能です。<br>
                <br>
              月に１度のペースの照射を５回行いますが、血が出たりカサブタになりませんし、<br>
              月に1度以外のご来院の必要がないため比較的治療しやすいレーザーとなります。<br>
              </p>
			<a href="/operations/laser/">詳しくはこちらをご覧ください</a>
            </div>
          </div>
        </div>
      </section>

      <section class="cost yellow">
        <div class="container">
          <h2 id="toc8"><span class="sub"><strong>費用・支払い方法のご案内</strong></span></h2>
		<div class="box-item gaiyou">
            <div class="sub-container">
              <h3 id="toc8-1">手術による治療概要</h3>
              <table>
                <tr>
                  <th>施術時間</th>
                  <td>１箇所　約 15 分程度</td>
                </tr>
                <tr>
                  <th>治療直後</th>
                  <td>患部は濡らせないので入浴には気をつける</td>
                </tr>
                <tr>
                  <th>スポーツ</th>
                  <td>切除の大きさにもよるが、基本的には問題ない</td>
                </tr>
                <tr class="last">
                  <th>アフターケア</th>
                  <td>7日目にて抜糸</td>
                </tr>
              </table>
            </div>
          </div>
        <div class="box-item">
            <div class="sub-container">
              <h3 id="toc8-2">保険適用時の目安費用</h3>
              <table class="pc">
                <tr>
                  <th>自費治療1個</th>
                  <td class="td01">20分</td>
                  <td>定価211,680円　モニター価格105,840円</td>
                </tr>
                <tr>
                  <th>皮膚腫瘍</th>
                  <td class="td01">20分</td>
                  <td>約15,000円〜約20,000円　自己負担3割の保険証をお持ちの場合</td>
                </tr>
              </table>
              <table class="sp">
                <tr class="title">
                  <th colspan="2">自費治療1個</th>
                </tr>
                <tr>
                  <td class="td01">20分</td>
                  <td>定価211,680円　モニター価格105,840円</td>
                </tr>
                <tr class="title">
                  <th colspan="2">皮膚腫瘍</th>
                </tr>
                <tr>
                  <td class="td01">20分</td>
                  <td>約15,000円〜約20,000円　自己負担3割の保険証をお持ちの場合</td>
                </tr>
              </table>
			  <p>※目安金額となります。治療箇所/範囲によって変動致しますので、お気軽にお問い合わせください。</p>
            </div>
          </div>
          <div class="box-item last">
            <div class="sub-container">
              <h3 id="toc8-3">お支払い方法</h3>
              <table>
                <tr>
                  <th>現金</th>
                  <td>現金でのお支払いが可能です</td>
                </tr>
                <tr>
                  <th>クレジットカード</th>
                  <td>
                      クレジットカードでのお支払いが可能です。<br class="pc">VISA/Master/UCカードは分割払いも可能です。<br class="pc">2回払いは手数料無料です。<br>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_01.png" alt="VISA" loading="lazy" width="70" height="43">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_02.png" alt="MasterCard" loading="lazy" width="70" height="43">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_03.png" alt="JCB" loading="lazy" width="70" height="43">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_04.png" alt="AmericanExpress" loading="lazy" width="70" height="43">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_05.png" alt="NICOS" loading="lazy" width="70" height="43">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_06.png" alt="DC" loading="lazy" width="70" height="43">
                   </td>
                </tr>
                <tr>
                  <th>銀行<br>キャッシュカード</th>
                  <td>
                      銀行口座から手数料なしの一括引き落としが可能です。<br class="pc">デビット機能、ゆうちょ銀行や地銀、信用金庫のカードも<br class="pc">ご利用いただけます。
                      <span>
                        特別な事前申請などは必要ございません。<br>
                        ※ お口座に、残高がないと引き落としができません。
                      </span>
                   </td>
                </tr>
                <tr>
                  <th>電子マネー</th>
                  <td>
                    AirPay導入により、電子マネーのご利用も可能です。<br>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_01.png" alt="Kitaca" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_02.png" alt="Suica" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_03.png" alt="PASMO" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_04.png" alt="TOICA" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_05.png" alt="manaca" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_06.png" alt="ICOCA" loading="lazy" width="70" height="43">
                    <br>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_07.png" alt="SUGOCA" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_08.png" alt="nimoca" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_09.png" alt="はやかけん" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_10.png" alt="iD" loading="lazy" width="70" height="43">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_11.png" alt="QUICPay" loading="lazy" width="70" height="43">
                   </td>
                </tr>
                <tr class="last">
                  <th>医療ローン</th>
                  <td>
                    6万円以上の場合、
                    患者様ご指定口座からの分割引き落としを行うことが可能です。
                    <span>
                      身分証をご提示の上、必要書類にご記入いただきます。
                      分割回数・金額を自由にご選択いただけます。途中解約も可能です。
                    </span>
                   </td>
                </tr>
              </table>
            </div>
          </div>
			<a href="/reservation/">
				<picture>
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 pc" data-eio="p">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/img/banner_sp.webp" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341 sp" data-eio="p">
				</picture>
			</a>
        </div>
      </section>

      <section id="greeting">
          <div class="container"> 
            <h2 id="toc9">監修医師紹介</h2>
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
            ほくろ・イボ・あざについてお悩みでしたら<br>
            是非一度ご相談ください
            </h3>
            <p class="text">
              私たち池袋サンシャイン美容外科は、<br class="sp">豊富な経験を元に高い技術提供を<br class="sp">しております。<br><br class="sp">
              医師の携わる医療機関として、<br class="sp">ウソのない施術を行いたい。<br>
            <br>
              もっと美しくありたいと願う方が<br class="sp">「ここにしてよかった」とおっしゃる<br class="sp">笑顔をたくさん見たい。<br><br class="sp">
              それが誇りであり、<br class="sp">あなたへの誠意だと思うのです。<br>
            <br>
              私たちは確かなノウハウを活かし、<br class="sp">ムダのない施術・経営を実現することで、<br class="sp"><br class="sp">よい治療を、<br class="pc">よりリーズナブルな料金で、<br>
              よりたくさんの方にご提供させて<br class="sp">いただきたいと考えています。</p>
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/profile.webp" alt="院長の経歴">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/profile_sp.webp" alt="院長の経歴">
          </div>
      </section>

      <section class="yellow" id="snsreport">
        <div class="container">
          <h2 id="toc10">
            <strong>
              <span class="sub">ほくろ除去・イボ治療の</span><br>
              <span class="main">ブログや体験レポート</span>
            </strong>
          </h2>
        </div>
        <div class="box">
          <div class="container item">
            <div class="flex">
              <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skincare_insta.webp" alt="">
              <div>
                <h3 id="toc10-1">Instagram</h3>
                <p>
                  ほくろ・イボ除去の実際の様子や<br>
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
                大きなほくろ・イボ・アザ保険適用手術の<br class="sp">ブログランキング
              </h3>
              <ul>
                <li class="rank01"><a href="/blogs/mole_wart/mole-removal-scars/">ほくろ除去切開による傷跡はいつまで残る？目立たなくするには？</a></li>
                <li class="rank02"><a href="/blogs/mole_wart/ibo_cause/">イボの原因とは？除去するための治療方法を紹介！</a></li>
                <li class="rank03"><a href="/blogs/mole_wart/hokuro/">ホクロが大きくなることはある？気になるホクロは治療で改善できます！</a></li>
                <li class="rank04 last"><a href="/blogs/mole_wart/viral-warts/">イボがうつるって本当？ウイルス感染の原因や治療法をご紹介</a></li>
              </ul>
          </div>
        </div>
      </section>

      <section id="access">
        <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8118773271394!2d139.71221927652596!3d35.73084487257129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d66478657c1%3A0xb1fc479363821a13!2z5rGg6KKL44K144Oz44K344Oj44Kk44Oz576O5a655aSW56eR!5e0!3m2!1sja!2sjp!4v1751103762661!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div>
            <h2 id="toc11">アクセス</h2>
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

</div>

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