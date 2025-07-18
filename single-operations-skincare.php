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

<div class="secBox iboaza" id="skincare">

    <section class="head">

      <div class="container">

        <div id="pageTitle" class="skincare">
          <h1>ほくろ除去・イボ治療<br class="sp">【保険適用可】</h1>
          <p>短時間で完了の<br class="sp">ほくろ除去治療について</p>
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
            <li class="heightAjst"><a href="#toc2">治療メリット</a></li>
            <li class="heightAjst"><a href="/operations/iboaza#hokuro07">皮膚切除術</a></li>
            <li class="heightAjst"><a href="#toc7">症例写真</a></li>
            <li class="heightAjst"><a href="#toc8">よくある質問</a></li>
            <li class="toForm"><a href="/reservation/" target="_blank" rel="noopener noreferrer">カウンセリング<br>申し込み</a></li>
          </ul>
        </div>

      <div id="toc_box">
          <p class="toc_title">目次</p>
          <div class="toc_list">
            <ul>
              <li>
                <a href="#toc1">
                  <span class="toc_num">1.</span> 池袋サンシャイン美容外科のほくろ・イボ除去治療とは
                </a>
                <ul>
                  <li>
                    <a href="#toc1-1" class="toc_num" data-number="1-1.">
                      まぶた・首・背中のほくろやイボを取りたい方へ
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#toc2">
                  <span class="toc_num">2.</span> 即日施術・保険診療も対応！池袋で選ばれる治療のメリット
                </a>
                <ul>
                  <li><a href="#toc2-1" class="toc_num" data-number="2-1.">一回の治療で取り切れるケースが多い（通院不要な場合も）</a></li>
                  <li><a href="#toc2-2" class="toc_num" data-number="2-2.">保険適用・生命保険の手術給付金にも対応</a></li>
                  <li><a href="#toc2-3" class="toc_num" data-number="2-3.">土日祝日も診療・学校や仕事を休まず通える</a></li>
                  <li><a href="#toc2-4" class="toc_num" data-number="2-4.">中学生以上の未成年にも対応（親権者同意書のご案内あり）</a></li>
                  <li><a href="#toc2-5" class="toc_num" data-number="2-5.">カウンセリング当日の施術も可能（当日手術）</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc3">
                <span class="toc_num">3.</span> 痛みが少なく、短時間で終わるほくろ・イボ除去の施術方法とは？
                </a>
                <ul>
                  <li><a href="#toc3-1" class="toc_num" data-number="3-1.">東京・豊島区でおすすめの皮膚科レベルの除去治療を受けたい方へ</a></li>
                  <li><a href="#toc3-2" class="toc_num" data-number="3-2.">CO2レーザーによる除去治療の特長（5mm程度でもOK）</a></li>
                  <li><a href="#toc3-3" class="toc_num" data-number="3-3.">ほくろ・イボ除去後のアフターケアと再発予防</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc4">
                  <span class="toc_num">4.</span> ほくろ・いぼ除去後のケアと色素沈着・ケロイド予防について
                </a>
                <ul>
                  <li><a href="#toc4-1" class="toc_num" data-number="4-1.">正しいアフターケアと注意点（浸出液・赤みが出る場合）</a></li>
                  <li><a href="#toc4-2" class="toc_num" data-number="4-2.">ほくろ・イボ除去後の回復経過について</a></li>
                  <li><a href="#toc4-3" class="toc_num" data-number="4-3.">再発した場合の再治療・アフターケアについて</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc5">
                  <span class="toc_num">5.</span> ほくろ・いぼ除去の費用目安と保険適用されるケースについて
                </a>
                <ul>
                  <li><a href="#toc5-1" class="toc_num" data-number="5-1.">料金（5000円〜／5mm程度から対応）</a></li>
                  <li><a href="#toc5-2" class="toc_num" data-number="5-2.">お支払い方法</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc6">
                  <span class="toc_num">6.</span> 治療までの流れとご予約方法
                </a>
                <ul>
                  <li><a href="#toc6-1" class="toc_num" data-number="6-1.">診察・治療方針の決定</a></li>
                  <li><a href="#toc6-2" class="toc_num" data-number="6-2.">初回治療</a></li>
                  <li><a href="#toc6-3" class="toc_num" data-number="6-3.">アフターケア・次回予約</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc7">
                  <span class="toc_num">7.</span> レーザーによるほくろ・イボ除去の症例写真
                </a>
                <ul>
                  <li><a href="#toc7-1" class="toc_num" data-number="7-1.">頭部にあるほくろ・イボ除去の症例</a></li>
                  <li><a href="#toc7-2" class="toc_num" data-number="7-2.">背中にあるほくろ・イボ除去の症例</a></li>
                  <li><a href="#toc7-3" class="toc_num" data-number="7-3.">顔にあるほくろ・イボ除去の症例</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc8">
                  <span class="toc_num">8.</span> よくあるご質問
                </a>
                <ul>
                  <li><a href="#toc8-1" class="toc_num" data-number="8-1.">レーザーで皮膚が陥没することはありますか？</a></li>
                  <li><a href="#toc8-2" class="toc_num" data-number="8-2.">何回通院が必要ですか？</a></li>
                  <li><a href="#toc8-3" class="toc_num" data-number="8-3.">膨らんだほくろもレーザーで除去できますか？</a></li>
                  <li><a href="#toc8-4" class="toc_num" data-number="8-4.">除去後すぐにメイク・洗顔・お風呂は可能ですか？</a></li>
                  <li><a href="#toc8-5" class="toc_num" data-number="8-5.">一度に何個も除去することはできますか？</a></li>
                  <li><a href="#toc8-6" class="toc_num" data-number="8-6.">大きなほくろはレーザー？それとも手術？</a></li>
                  <li><a href="#toc8-7" class="toc_num" data-number="8-7.">術後の生活において、気を付けることはありますか？</a></li>
                  <li><a href="#toc8-8" class="toc_num" data-number="8-8.">ほくろ・イボ除去後のケア方法について教えて下さい。</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc9">
                  <span class="toc_num">9.</span> ほくろ・イボを取るかお悩みの方へ〜院長からのご挨拶〜
                </a>
                <ul>
                  <li><a href="#toc9-1" class="toc_num" data-number="9-1.">ほくろ・イボについてお悩みでしたら、まずは無料相談・カウンセリングへお気軽にお越しください</a></li>
                </ul>
              </li>
              <li>
                <a href="#toc10">
                  <span class="toc_num">10.</span> リスカ跡治療のブログや体験レポート
                </a>
                <ul>
                  <li><a href="#toc10-1" class="toc_num" data-number="10-1.">Instagram</a></li>
                  <li><a href="#toc10-2" class="toc_num" data-number="10-2.">ほくろ保険適用治療のブログランキング</a></li>
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
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skincare_banner.webp" alt="皮膚科で消えないほくろ・いぼに！ほくろ・いぼ除去（電気メス・レーザー）" width="700" height="500" class="alignnone size-full wp-image-3954" />
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skincare_banner_sp.webp" alt="皮膚科で消えないほくろ・いぼに！ほくろ・いぼ除去（電気メス・レーザー）" width="700" height="500" class="alignnone size-full wp-image-3954" />
        <h2 id="toc1">
          <span class="sub">池袋サンシャイン美容外科の</span>
          <span class="main">ほくろ・イボ除去治療とは</span>
        </h2>
        <p>
          小さなときには全然なかったのに、<br class="sp">年を取るにつれて増えてくるほくろ。<br>
          特にお顔に増えたほくろは<br class="sp">気になりますよね。
        </p>
        <p class="up">
          増えてくるだけではなく、<br class="sp"><strong>大きくなるほくろ・触ると痛いほくろ・<br class="sp">ジュクジュクしたほくろ</strong><br><br class="sp">
          色々なほくろのお悩みを<br class="sp">抱えていらっしゃる方が<br class="sp">多くご来院されます。
        </p>
        <p class="up">
          例えば、顔にあると、まぶたにあって<br class="sp">視界の邪魔になってしまったり、<br>
          ひげを剃る時に<br class="sp">引っかかったりしてしまいます。<br class="sp"><br class="sp">また、<strong>悪性腫瘍の可能性</strong>もあります。
        </p>
        <div class="box-item">
          <div class="sub-container">
              <h3 id="toc1-1"><span>まぶた</span>・<span>首</span>・<span>背中のほくろ</span>や<br class="sp"><span>イボ</span>を<br class="pc">取りたい方へ</h3>
              <div class="flex">
                <div class="box">
                  <div class="container">
                    <h4>該当箇所が小さい方</h4>
                    <p class="point">レーザー治療</p>
                    <p>保険1個　<strong>8,000円～10,000円</strong></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/hokuro_laser.webp" alt="レーザー治療">
                  </div>
                  <a href="#toc3">レーザー治療はこちら</a>
                </div>
                <div class="box">
                  <div class="container">
                    <h4>該当箇所が1cm以上の方</h4>
                    <p class="point">皮膚切除術<span>（再発の心配不要！）</span></p>
                    <p>保険1個　<strong>15,000円～20,000円</strong></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/hokuro_excision.webp" alt="皮膚切除術">
                  </div>
                  <a href="/operations/iboaza/">皮膚切除術はこちら</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="iboaza_goodPoints">
      <div class="container">
          <h2 id="toc2"><span>即日施術</span>・<span>保険診療</span>も対応！<br>池袋で選ばれる治療のメリット</h2>
          <p class="center">池袋サンシャイン美容外科の治療が<br class="sp">選ばれる理由</p>

          <ul class="white-box">
            <li>
              <p class="reason">01</p>
              <div>
                <h3 id="toc2-1">一回の治療で取り切れる<br class="sp">ケースが多い<span>（通院不要な場合も）</span></h3>
                <p>
                  1回限りで取り切れます。<br class="sp">何度も通う必要はありません。<br><br class="sp">
                  医師がメラニン組織ギリギリで<br class="sp">切除します。<br class="sp">小さなほくろは表皮化するのが早く<br>
                  <strong>傷跡が目立ちません。</strong>
                </p>
              </div>
            </li>
            <li>
              <p class="reason">02</p>
              <div>
                <h3 id="toc2-2">保険適用・生命保険の<br class="sp">手術給付金にも対応</h3>
                <p>
                  任意で加入されている生命保険や共済組合の保険によっては<br><br class="sp">
                  ほくろ・あざ・母斑の除去手術に対し手術の給付金を受けられる保険があります。<br><br class="sp">
                  保険適用手術名は<strong>”皮膚腫瘍摘出術”</strong>です。<br>
                </p>
                <p class="up">
                  この名前にて給付金を受けられるか保険会社へのご確認をお願いいたします。<br><br class="sp">
                  <strong>給付を受けられるようでしたら保険会社から指定の診断書を受け取り<br>
                  クリニックへご持参ください。</strong><br><br class="sp">
                  当院にて手術を受けられた方を対象に診断書の作成をいたします。
                </p>
                <p class="up t16">※ご相談のみで治療をされていない方への診断書の作成は行っておりません。</p>
              </div>
            </li>
            <li>
              <p class="reason">03</p>
              <div>
                <h3 id="toc2-3">土日祝日も診療・<br class="sp">学校や仕事を休まず通える</h3>
                <p>
                  当クリニックでは<strong>土日祝日も診療</strong>しておりますので、お仕事や学校をお休みする必要なく治療にお通いいただけます。また休日診療扱いになりませんため、保険の料金が増えることもございません。
                </p>
              </div>
            </li>
            <li>
              <p class="reason">04</p>
              <div>
                <h3 id="toc2-4">中学生以上の<br class="sp">未成年にも対応<br class="sp"><span>（親権者同意書のご案内あり）</span></h3>
                <p>
                  当クリニックでは中学生以上の未成年の方も治療を承っております。<br><br class="sp">
                  （小学生以下の方はご治療をお控えいただいておりますのでご了承ください。）<br><br class="sp">
                  また、基本的に未成年の方は保護者の方とのご同伴が必要となりますが<br><br class="sp">
                  高校卒業された方は、<strong>親権者同意書</strong>をご持参いただければ、<br>
                  お一人でのご来院と治療が可能となります。</p>
                  <a class="agreementDLD" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer">親権者同意書ダウンロード</a>
                </p>
              </div>
            </li>
            <li>
              <p class="reason">05</p>
              <div>
                <h3 id="toc2-5">カウンセリング当日の<br class="sp">施術も可能<span>（当日手術）</span></h3>
                <p>
                  診察当日に手術をすることが可能です。
                </p>
                <p class="up">
                  <strong>手術時間は20分程度</strong>となります。当日に手術をお受けいただき、術後すぐにお帰りいただくことが可能です。<br class="sp"><br class="sp">手術当日から通常の生活をしていただいてかまいません。
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

      <section class="method yellow">
        <div class="container">
          <h2 id="toc3">
            <span class="sub">痛みが少なく、短時間で終わる</span>
            <span>ほくろ</span>・<span>イボ除去</span>の<br class="sp"><span>施術方法</span>とは？
          </h2>
          <h3 id="toc3-1" class="center">東京・豊島区で<br>
            <span>皮膚科レベルの除去治療</span>を<br class="sp">受けたい方へ
          </h3>
          <ul class="list">
            <li>顔や首など目立つ場所にあって<br class="sp">お化粧で隠せない</li>
            <li>短時間で治療したいほくろやイボが<br class="sp">だんだん大きくなってきている</li>
            <li>病理検査して欲しい</li>
          </ul>
          <p>
            ほくろ除去治療をレーザーにて行う場合は、カウンセリングの後すぐに治療が可能です。<br><br class="sp">
            当院では、ほくろの症状に応じて、電気メスによる<strong>切開凝固法</strong>と<br><br class="sp">
            炭酸ガスレーザーである<strong>CO2レーザーによる蒸散法</strong>の2通りをご用意しております。
          </p>
          <table>
            <tr>
              <th>施術時間</th>
              <td>5mm程度のホクロ・イボ・アザで約5分程度</td>
            </tr>
            <tr>
              <th>メイク</th>
              <td>当日より可能</td>
            </tr>
            <tr>
              <th>治療直後</th>
              <td>赤くうっすらと跡になる程度</td>
            </tr>
            <tr>
              <th>アフターケア</th>
              <td>遮光テープを患部に10日程度貼るだけ</td>
            </tr>
          </table>
          <ul class="white-box">
            <li>
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/method01.webp" alt="CO2レーザー治療の画像">
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/method01_sp.webp" alt="CO2レーザー治療の画像">
              <div>
                <h3 id="toc3-2" class="lh03"><span class="blue">CO2レーザー</span><br class="sp">除去治療の特長<br><span>（5mm程度でもOK）</span></h3>
                <p>
                  ほくろやイボを<br class="sp">CO2レーザーにより除去致します。<br><br class="sp">
                  施術前に局所麻酔を行うため<br class="sp"><strong>痛みもございません。</strong><br>
                  <strong>5分程度で終わる</strong>簡単な施術となります。
                </p>
                <p class="up">
                  治療後は紫外線を避けて、<br>
                  <strong>色素沈着の予防をしっかり行うことが必要です。</strong>
                </p>
                <p class="up">
                  <strong>1mm程度の小さなほくろ</strong>でしたら、跡形もなくきれいになる方も<br class="sp">いらっしゃいますが、<br class="sp"><br class="sp">大きくまた皮膚深くまでほくろのある方ですと、ニキビ跡のような少し陥没した傷跡が定着する場合もあります。<br class="sp"><br class="sp">（この陥没は表皮化するにつれて徐々に改善してきます。）
                </p>
                <p class="up">
                  ほくろの除去は保険診療で対応可能なため、<strong>非常にリーズナブル</strong>に治療をお受け頂けます。<br><br class="sp">
                  ※保険診療の対象とならないほくろの種類もございますので、まずはお問合せください。
                </p>
              </div>
            </li>
            <li>
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/method02.webp" alt="保険適用・生命保険の手術給付金のイメージ画像">
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/method02_sp.webp" alt="保険適用・生命保険の手術給付金のイメージ画像">
              <div>
                <h3 id="toc3-3"><span>ほくろ・イボ除去後の</span><br><span class="blue">アフターケアと再発予防</span></h3>
                <p>
                  またアフターケアについてですが、<br class="sp">ほくろがあった場所を焼いて取り切っていますため、<br class="sp">ほくろ除去直後は皮膚がない状態です。<br><br class="sp">
                  そのため、そのままお帰りになると<br class="sp">日焼けによる色素沈着の原因となります。<br>
                </p>
                <p class="up">
                  そこで、抗生剤入りの軟膏を湿布後、日焼け防止の為肌色のテープを<br class="sp">3枚重ねにした保護用のテープをほくろの上にはってお帰り頂きます。
                </p>
                <p class="up">
                  表皮化するまでの約10日間は、<br class="sp">ばい菌による化膿を防ぐためにも<br>
                  必ずお貼りいただくよう<br class="sp">お願いしております。
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="aftercare">
        <div class="container">
          <h2 id="toc4">
              <span>ほくろ・いぼ除去後のケア</span>と<br>
              <span>色素沈着・ケロイド予防</span><br class="sp">について
          </h2>
          <h3 id="toc4-1" class="center">
            正しいアフターケアと注意点<br>
            （浸出液・赤みが出る場合）
          </h3>
          <ul class="solid-box">
            <li>
               <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare01.webp" alt="皮膚が赤くなる／炎症がある場合の処置のイメージ画像">
               <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare01_sp.webp" alt="皮膚が赤くなる／炎症がある場合の処置のイメージ画像">
               <div>
                  <h4>皮膚が赤くなる／<br class="sp">炎症がある場合の<br class="sp">処置</h4>
                  <p>
                    ほくろ除去後は、<br class="sp">皮膚がない状態となり<strong>赤みがでます。</strong><br><br class="sp">
                    新しい皮膚が形成されるまでは、抗生剤の軟膏を塗り、<br class="pc">皮膚の代わりのテープを貼って生活していただきます。
                  </p>
               </div>
            </li>
            <li class="li02">
               <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare02.webp" alt="浸出液が出る場合の対処法のイメージ画像">
               <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare02_sp.webp" alt="浸出液が出る場合の対処法のイメージ画像">
               <div>
                  <h4>浸出液が出る場合の対処法と衛生管理</h4>
                  <p>
                    ほくろ除去後は、<strong>自然治癒力により浸出液が出ています。</strong><br class="pc">（テープが少しにじむ程度）。<br><br class="sp">
                    浸出液がしたたり落ちるくらいしっかり出てくる方には、<br class="pc">浸出液を止める処置をさせていただいております。
                  </p>
               </div>
            </li>
            <li>
               <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare03.webp" alt="メイク・洗顔・お風呂の注意点のイメージ画像">
               <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare03_sp.webp" alt="メイク・洗顔・お風呂の注意点のイメージ画像">
               <div>
                  <h4>メイク・洗顔・<br class="sp">お風呂の注意点と<br class="sp">タイミング</h4>
                  <p>
                    お化粧などはテープの上からで、<br>
                    <strong>24時間テープは張りっぱなしにしていただきます。</strong><br><br class="sp">
                    お顔を洗う時やお風呂に入ってる時などに、<br class="pc">自然にはがれた時だけ軟膏を塗って<br class="sp">テープを張りなおしてください。<br>
                  </p>
                  <p class="up">
                    無理にテープを剥がそうとすると、<br>
                    表皮化されてきていた薄い皮膚も一緒にはがれてしまいますので<br>
                    <strong>無理にはがされないようにご注意ください。</strong><br>
                  </p>
               </div>
            </li>
            <li>
               <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare04.webp" alt="保護テープを剥がす時期のイメージ画像">
               <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/aftercare04_sp.webp" alt="保護テープを剥がす時期のイメージ画像">
               <div>
                  <h4>保護テープを剥がす時期の目安と<br class="sp">日焼け対策の重要性</h4>
                  <p>
                    基本的に<strong>新しい皮膚</strong>が形成されてきても、<br class="pc">１か月程度はテープを張りっぱなしになさることをお勧めいたします。<br><br class="sp">
                    それは、<br class="sp">新しい皮膚はできたばかりの時は<br>
                    薄くテラテラした素材でまだ日焼けに対する耐性がありません。<br>
                  </p>
                  <p class="up">
                    その時に<strong>保護用テープを剥がしてしまうと日焼けをしてしまい、<br class="pc">色素沈着によるシミの原因</strong>となってしまうのです。<br>
                  </p>
                  <p class="up">
                    その為、皮膚が形成されてきたとしても<br class="pc">念のため１か月近くはテープをお貼りください。<br><br class="sp">
                    テープを剥がした後も、しっかり<strong>日焼け止めクリーム</strong>を塗られることを<br>
                    お勧めいたします。
                  </p>
               </div>
            </li>
          </ul>
          <h3 id="toc4-2" class="back">ほくろ・イボ除去後の<br class="sp">回復経過について</h3>
          <p>
            ほくろを取り終わった跡は、皮膚がなく、えぐれたような<strong>陥没した状態</strong>になっています。
            </p>
            <p class="up">
            これは、ほくろの元となっているメラニン組織が皮膚の中まで深く入っているため、
            そのほくろ組織（メラニン）を削って取らなければほくろを取れないためです。
            </p>
            <p class="up">
            この、ほくろを取った後の傷跡は、<strong>浅いものであれば１週間程度で表皮化</strong>し、
            <strong>皮膚のへこみもなくなり、外見的にも全く傷がわからないところまで回復</strong>してきます。
            </p>
            <p class="up btm80">
            一方で、皮膚深くまでほくろの組織があった方は、
            表皮化するまで１か月近くかかる方もいらっしゃいます。
            また表皮化が終わったとしても、へこみが改善せず最終的にニキビ跡のような傷跡で
            収まる方もいらっしゃいます。
          </p>
          <h3 id="toc4-3" class="back">再発した場合の再治療・<br class="sp">アフターケアについて</h3>
          <p>
            ほくろ除去について、しっかりほくろがとり切れたことを確認してからお帰り頂きますが、
            <strong>ほくろが再発した場合</strong>は再度レーザーにて除去いたします。
            </p>
            <p class="up">
            しかし、何度も再発する場合には切除手術をご案内しております。
            </p>
            <p class="up">
            ほくろ除去後１０日目前後に送付されてくる<strong>病理検査結果</strong>を確認し、
            悪性の腫瘍の場合は大学病院への紹介状を作成し、
            精密検査をお受けいただくようご案内させていただいております。
            </p>
            <p class="up">
            ほくろを取った傷跡が盛り上がりケロイド状になった場合は
            ケロイド予防ののお薬の処方ならびにケナコルト注射によるケロイドの軽減を行うことも可能です。
            </p>
            <p class="up">
            ほくろ除去後の最大の注意点は日焼けですが、色素沈着が１年たっても軽減しない場合は、
            <strong>トレチノイン療法による色素沈着軽減クリームを処方することも可能</strong>です。
            </p>
            <p class="up last">
            もともとアトピー性皮膚炎をお持ちの方など色素沈着ができやすい体質の方は、
            肌の美白成分配合の内服薬を処方し、色素沈着の予防を計ることも可能です。
          </p>
        </div>
      </section>

      <section class="cost yellow">
        <div class="container">
          <h2 id="toc5"><span><span class="blue">ほくろ・いぼ除去の費用目安</span>と</span><br>
          <span class="blue">保険適用</span>されるケースについて</h2>
          <h3 id="toc5-1">料金：5000円〜／5mm程度から対応</h3>
          <table>
            <tr>
              <th>1個1mm<br class="sp">あたり</th>
              <td class="td01">5分</td>
              <td>5,000円<span>※</span></td>
            </tr>
            <tr>
              <th>皮膚腫瘍</th>
              <td class="td01">1個保険</td>
              <td>顔・前腕・体・上腕・太腿　約10,000円前後</td>
            </tr>
          </table>
          <p>※目安金額となります。治療箇所/範囲によって変動致しますので、お気軽にお問い合わせください</p>
          <div class="box-item">
            <div class="sub-container">
              <h3 id="toc5-2">お支払い方法</h3>
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
        </div>
      </section>

      <section class="flow">
        <div class="container">
          <h2 id="toc6"><span class="blue">治療までの流れ</span>と<span class="blue">ご予約方法</span></h2>
          <div class="sub-container">
              <h3 class="back">まずは無料カウンセリング</h3>
              <p class="point">予約のお申込み</p>
              <p>
                まずは、お電話またはWEB予約フォームより、ご希望の来院日時をご連絡ください。
                当日予約も可能ですので、当日のご予約はお電話にてご予約下さい。
              </p>
              <p class="tel" >お電話<a href="tel:0120331244">0120-331-244</a></p>
              <a class="rese" href="/reservation/">ご予約フォームへの入力はこちら</a>
          </div>
          <ul class="white-box">
            <li class="box-item">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/flow01.webp" alt="診察・治療方針の画像">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/flow01_sp.webp" alt="診察・治療方針の画像">
                <div>
                  <h3 id="toc6-1"><span>1.</span>診察・治療方針の決定</h3>
                  <p>
                    診察を行い、傷の状態やご希望に応じて最適な治療法をご提案します。
                    お見積り提示後、当日の施術も可能です。
                  </p>
                </div>
            </li>
            <li class="box-item">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/flow02.webp" alt="初回治療の画像">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/flow02_sp.webp" alt="初回治療の画像">
                <div>
                  <h3 id="toc6-2"><span>2.</span>初回治療</h3>
                  <p>
                    ご希望があれば当日施術も可能です。
                    レーザーは照射後に15分ほど冷却し、そのままご帰宅。
                    手術は局所麻酔で実施し、術後は患部保護と内服薬の処方を行います。
                  </p>
                </div>
            </li>
            <li class="box-item last">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/flow03.webp" alt="アフターケア">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/flow03_sp.webp" alt="アフターケア">
                <div>
                  <h3 id="toc6-3"><span>3.</span>アフターケア・次回予約</h3>
                  <p>
                    レーザー治療を受けた方は、1か月後を目安に、照射予約を
                    ご案内いたします。手術を受けた方は、3日目の経過診察と
                    7〜10日目の抜糸をご案内します。
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

      <section class="view yellow">
        <div class="container">
          <h2 id="toc7">
            <span class="sub">レーザーによる</span><br>
            <span class="main">ほくろ・イボ除去の症例写真</span>
          </h2>
        </div>
        <!-- Swiperスライダー -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <!-- スライド -->
            <div class="swiper-slide">
              <div class="case-box">
                  <div class="container">
                  <h3 id="toc7-1" class="case-title">頭部にある<br class="sp">ほくろ・イボ除去の症例</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/slide01.webp" alt="頭部にあるほくろ・イボ除去のビフォーアフター">
                  <table>
                    <tr>
                      <th>金額<br class="sp">（保険治療）</th>
                      <td>9,434円　自己負担３割の保険証をお持ちの場合</td>
                    </tr>
                    <tr>
                      <th>リスク</th>
                      <td>赤み・化膿・ニキビ跡のような凹み</td>
                    </tr>
                    <tr>
                      <th>アフターケア</th>
                      <td>抗生剤の軟膏塗布後、<br>  
                      新しい皮膚ができるまで10日〜1ヶ月ほどテープにて保護します</td>
                    </tr>
                    <tr>
                      <th>時間</th>
                      <td>約5分・局所麻酔後、すぐに除去可能です</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="case-box">
                  <div class="container">
                  <h3 id="toc7-2" class="case-title">背中・身体にある<br class="sp">ほくろ・イボ除去の症例</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/slide02.webp" alt="背中・身体にあるほくろ・イボ除去のビフォーアフター">
                  <table>
                    <tr>
                      <th>金額<br class="sp">（保険治療）</th>
                      <td>8,294円　自己負担３割の保険証をお持ちの場合</td>
                    </tr>
                    <tr>
                      <th>リスク</th>
                      <td>赤み・化膿・ニキビ跡のような凹み</td>
                    </tr>
                    <tr>
                      <th>アフターケア</th>
                      <td>抗生剤の軟膏塗布後、<br>  
                      新しい皮膚ができるまで10日〜1ヶ月ほどテープにて保護します</td>
                    </tr>
                    <tr>
                      <th>時間</th>
                      <td>約5分・局所麻酔後、すぐに除去可能です</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="case-box">
                  <div class="container">
                  <h3 id="toc7-3" class="case-title">顔にある<br class="sp">ほくろ・イボ除去の症例</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/slide03.webp" alt="顔にあるほくろ・イボ除去のビフォーアフター">
                  <table>
                    <tr>
                      <th>金額<br class="sp">（保険治療）</th>
                      <td>9,434円　自己負担３割の保険証をお持ちの場合</td>
                    </tr>
                    <tr>
                      <th>リスク</th>
                      <td>赤み・化膿・ニキビ跡のような凹み</td>
                    </tr>
                    <tr>
                      <th>アフターケア</th>
                      <td>抗生剤の軟膏塗布後、<br>  
                      新しい皮膚ができるまで10日〜1ヶ月ほどテープにて保護します</td>
                    </tr>
                    <tr>
                      <th>時間</th>
                      <td>約5分・局所麻酔後、すぐに除去可能です</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="case-box">
                  <div class="container">
                  <h3 class="case-title">頭部にある<br class="sp">ほくろ・イボ除去の症例</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/slide01.webp" alt="頭部にあるほくろ・イボ除去のビフォーアフター">
                  <table>
                    <tr>
                      <th>金額<br class="sp">（保険治療）</th>
                      <td>9,434円　自己負担３割の保険証をお持ちの場合</td>
                    </tr>
                    <tr>
                      <th>リスク</th>
                      <td>赤み・化膿・ニキビ跡のような凹み</td>
                    </tr>
                    <tr>
                      <th>アフターケア</th>
                      <td>抗生剤の軟膏塗布後、<br>  
                      新しい皮膚ができるまで10日〜1ヶ月ほどテープにて保護します</td>
                    </tr>
                    <tr>
                      <th>時間</th>
                      <td>約5分・局所麻酔後、すぐに除去可能です</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="case-box">
                  <div class="container">
                  <h3 class="case-title">背中・身体にある<br class="sp">ほくろ・イボ除去の症例</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/slide02.webp" alt="背中・身体にあるほくろ・イボ除去のビフォーアフター">
                  <table>
                    <tr>
                      <th>金額<br class="sp">（保険治療）</th>
                      <td>8,294円　自己負担３割の保険証をお持ちの場合</td>
                    </tr>
                    <tr>
                      <th>リスク</th>
                      <td>赤み・化膿・ニキビ跡のような凹み</td>
                    </tr>
                    <tr>
                      <th>アフターケア</th>
                      <td>抗生剤の軟膏塗布後、<br>  
                      新しい皮膚ができるまで10日〜1ヶ月ほどテープにて保護します</td>
                    </tr>
                    <tr>
                      <th>時間</th>
                      <td>約5分・局所麻酔後、すぐに除去可能です</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="case-box">
                  <div class="container">
                  <h3 class="case-title">顔にある<br class="sp">ほくろ・イボ除去の症例</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/slide03.webp" alt="顔にあるほくろ・イボ除去のビフォーアフター">
                  <table>
                    <tr>
                      <th>金額<br class="sp">（保険治療）</th>
                      <td>9,434円　自己負担３割の保険証をお持ちの場合</td>
                    </tr>
                    <tr>
                      <th>リスク</th>
                      <td>赤み・化膿・ニキビ跡のような凹み</td>
                    </tr>
                    <tr>
                      <th>アフターケア</th>
                      <td>抗生剤の軟膏塗布後、<br>  
                      新しい皮膚ができるまで10日〜1ヶ月ほどテープにて保護します</td>
                    </tr>
                    <tr>
                      <th>時間</th>
                      <td>約5分・局所麻酔後、すぐに除去可能です</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="operations-faq">
        <div class="container">
          <h2 id="toc8">よくある質問</h2>
        </div>
        <div class="sub-container">

          <div class="faq-item open"> <!-- 初期表示はここだけ open -->
            <button class="faq-question"><h3 id="toc8-1">レーザーで皮膚が陥没する<br class="sp">ことはありますか?</h3></button>
            <div class="faq-answer">
              <p>元々小さいほくろであれば跡形もなく治る場合もありますが、大きければ大きいものほど凹む事は考えられます。 ですが、元のほくろの面積よりも小さい面積の凹みになるわけですし、黒い大きな盛り上がりが無くなる わけですから、凹んでもほくろのある状態よりは綺麗になるわけで、治療を行う価値は十分にございます。 また、ほくろやイボは盛り上がっているものは放置しておくとどんどん大きくなるものもある為、 大きくなってから処置をすると大きな窪みになりますが、小さいうちに行えば小さな窪みで済みますので、 取ってしまいたいほくろがあるならば早いうちに取った方が良いです。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question li01"><h3 id="toc8-2">何回通院が必要ですか？</h3></button>
            <div class="faq-answer">
              <p>1回限りです。 除去後、お鏡でしっかりほくろ・イボがなくなったことを確認してからお帰りいただいております。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question"><h3 id="toc8-3">膨らんだほくろもレーザーで<br class="sp">除去できますか？</h3></button>
            <div class="faq-answer">
              <p>はい、膨らみのあるほくろの方が平坦なものよりも根が深い場合が多いです。 もちろん膨らんでいてもレーザーは可能です。ただ、部位によっては皮膚切除の方が綺麗になるケースも ありますので、お気軽にご相談ください。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question"><h3 id="toc8-4">除去後すぐにメイク・<br class="sp">洗顔・お風呂は可能ですか？</h3></button>
            <div class="faq-answer">
              <p>除去後、肌色のテープを患部にお貼り頂きます。 その上からメイクをしていただければ大丈夫です。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question"><h3 id="toc8-5">一度に何個も除去することは<br class="sp">できますか？</h3></button>
            <div class="faq-answer">
              <p>ご希望であれば、一回の治療で何個でも除去が可能です。 ただ、多く行えば直後はそれだけ凹みが出来るので、最初は目立たない端の部分から治療を受けて頂いて、 問題なければ後日再度治療すると良いと思います。</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question"><h3 id="toc8-6">一大きなほくろはレーザー？<br class="sp">それとも手術？</h3></button>
            <div class="faq-answer">
              <p>だいたい8mm以上の大きなほくろは皮膚切除術が主流となります。 </p>
              <a href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf">親権者同意書ダウンロード</a>
              <p>大きいほくろの場合は、レーザーでの治療は治療跡が目立ってしまうことがあります。 皮膚ごと切って、1本の線にする手術の方が、レーザーよりも術後の状態がきれいで目立ちません。 手術時間は15分程度です。傷跡は3ヶ月～半年位できれいに目立たなくなります。 1週間後の抜糸までは傷跡は濡らさないようにして頂きます。その後は日常生活に支障はありません。 手術の約7日後に抜糸となります。 </p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question"><h3 id="toc8-7">術後の生活において、<br class="sp">気を付けることはありますか？</h3></button>
            <div class="faq-answer">
              <p>当日から、お化粧・洗顔・入浴は問題ありません。 日焼けをすると、ほくろ除去部分がシミの原因になりますので予防対策が重要です。 </p>
            </div>
          </div>
          <div class="faq-item last">
            <button class="faq-question"><h3 id="toc8-8">ほくろ・イボ除去後の<br class="sp">ケア方法について教えて下さい。</h3></button>
            <div class="faq-answer">
              <p>ほくろ・イボ・アザをレーザー除去した部分は一時的に表皮がない状態になります。 新しい表皮ができるまでの間、ばい菌が入らないよう、綿棒で軟膏を塗り、保護用の遮光(肌色)テープを貼ることをおすすめしています。</p>
            </div>
          </div>

        </div>
        <div class="container">
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
            <h2 id="toc9">
              ほくろ・イボを取るかお悩みの方へ<br>
              ～院長からのご挨拶～
            </h2>
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
              ほくろ・イボについてお悩みでしたら、<br>
              まずは無料相談・カウンセリングへお気軽にお越しください
            </h3>
            <p class="text">
              ほくろについてお悩みでしたら、<br>
              ぜひ当院へご相談ください。<br><br class="sp">
              ほくろや頑固なシミを<br class="sp">レーザーにより除去いたします。<br>
              施術前に局所麻酔を行うため<br class="sp">痛みもございません。<br>
              <br>
              5分程度で終わる簡単な施術となります。<br>
              <br>
              治療後は紫外線を避けて、色素沈着の予防を<br class="sp">しっかり行うことが必要です。<br>
              <br>
              ほくろの除去は保険診療で対応可能なため、<br class="sp">非常にリーズナブルに施術をお受けできます。<br><br class="sp">
              ※保険診療の対象とならないほくろの種類もございますので、まずはお問合せください。
            </p>
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/profile.webp" alt="院長の経歴">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/profile_sp.webp" alt="院長の経歴">
          </div>
      </section>

      <section class="yellow" id="snsreport">
        <div class="container">
          <h2 id="toc10">
            <span class="sub">ほくろ除去・イボ治療の</span><br>
            <span class="main">ブログや体験レポート</span>
          </h2>
        </div>
        <div class="box">
          <div class="container item">
            <div class="flex">
              <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/skincare_insta.webp" alt="Instagramのイメージ画像">
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
                ほくろ保険適用治療の<br class="sp">ブログランキング
              </h3>
              <ul>
                <li class="rank01"><a href="/blogs/mole_wart/mole-removal-scars/">ほくろ除去切開による傷跡はいつまで残る？目立たなくするには？</a></li>
                <li class="rank02"><a href="/blogs/mole_wart/hokuro-cream-2/">ほくろ除去クリームは効果なし？自分で対処する方法とおすすめ治療法</a></li>
                <li class="rank03"><a href="/blogs/mole_wart/self-removement/">ほくろ除去を簡単に自分で行うには？クリーム・カソーダ・もぐさを徹底比較</a></li>
                <li class="rank04 last"><a href="/blogs/mole_wart/hokuro_hueru/">ほくろが増える原因とは？ほくろ除去についても解説！</a></li>
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

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    /** ① 自動再生（3秒） */
    autoplay: {
      delay: 3000,           // 3,000ms＝3秒
      disableOnInteraction: false // ユーザー操作後も自動再開
    },

    /** ② スライドを中央寄せ＋両端チラ見せ */
    slidesPerView: 0.9,
    centeredSlides: true,    // アクティブスライドを中央配置
    spaceBetween: 10,        // スライド間の余白（px）
    loop: true,

    /** ④ レスポンシブ調整（例） */
    breakpoints: {
      768: {                 // 画面幅768px以上
        slidesPerView: 1.5,  // PCではもう少しチラ見せ量UP
        spaceBetween: 40
      }
    }
  });
</script>

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