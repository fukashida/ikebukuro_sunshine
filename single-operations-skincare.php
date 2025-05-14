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

<div id="pageTitle" class="skincare">
<h1>ほくろ除去・イボ治療【保険適用可】</h1>
<p>短時間で完了のほくろ除去治療について</p>
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



<section class="secBox iboaza">

  <section class="secBox top-menu">
    <div class="topNav">
      <ul>
        <li><a href="#toc1">ホクロ・イボ・アザ<br>のお悩み</a></li>
        <li class="heightAjst"><a href="#toc1-3">治療メリット</a></li>
        <li class="heightAjst"><a href="/operations/iboaza#hokuro07">皮膚切除術</a></li>
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
            <span class="toc_num">1.</span> ほくろについてのご説明
          </a>
          <ul>
            <li>
              <a href="#toc1-1">
                <span class="toc_num">1－1.</span> ほくろとは
              </a>
            </li>
            <li>
              <a href="#toc1-2">
                <span class="toc_num">1－2.</span> ほくろ除去治療はこんな人におすすめ
              </a>
            </li>
<li>
              <a href="#toc1-3">
                <span class="toc_num">1－3.</span> 当院にて保険でほくろを取るおすすめポイント
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#toc2">
            <span class="toc_num">2.</span> 当院にて行っているおすすめのほくろの取り方
          </a>
<ul>
<li>
              <a href="#toc2-1">
                <span class="toc_num">2－1.</span> レーザーによるほくろ除去の概要
              </a>
            </li>
<li>
              <a href="#toc2-2">
                <span class="toc_num">2－2.</span> レーザー治療はこんな方におすすめ
              </a>
            </li>
<li>
              <a href="#toc2-3">
                <span class="toc_num">2－3.</span> 施術概要
              </a>
            </li>
<li>
              <a href="#toc2-4">
                <span class="toc_num">2－4.</span> 費用保険と自費の金額
              </a>
            </li>
<li>
              <a href="#toc2-4">
                <span class="toc_num">2－4.</span> レーザーによるほくろ除去治療の詳しい流れ
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#toc3">
            <span class="toc_num">3.</span> レーザーによる、ほくろ除去後のケアについて
          </a>
          <ul>
            <li>
              <a href="#toc3-1">
                <span class="toc_num">3－1.</span> ほくろ除去治療が終わった後の生活の注意点
              </a>
            </li>
            <li>
              <a href="#toc3-2">
                <span class="toc_num">3－2.</span> ほくろ除去後の傷跡回復経過
              </a>
            </li>
            <li>
              <a href="#toc3-3">
                <span class="toc_num">3－3.</span> ほくろ除去後のアフターフォロー
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#toc4">
            <span class="toc_num">4.</span> レーザーによるほくろ除去の症例写真
          </a>
          <ul>
            <li>
              <a href="#toc4-1">
                <span class="toc_num">4－1.</span> 頭部にあるほくろ・いぼ除去
              </a>
            </li>
            <li>
              <a href="#toc4-2">
                <span class="toc_num">4－2.</span> 背中にあるほくろ・いぼ除去
              </a>
            </li>
<li>
              <a href="#toc4-3">
                <span class="toc_num">4－3.</span> 顔にあるほくろ・いぼ除去
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#toc5">
            <span class="toc_num">5.</span> レーザーによるほくろ除去・いぼ除去に関するご質問
          </a>
<ul>
<li>
          <a href="#toc5-1">
            <span class="toc_num">5－1.</span> レーザーで皮膚が陥没することはありませんか？
          </a>

        </li>
<li>
          <a href="#toc5-2">
            <span class="toc_num">5－2.</span> 何回の通院でホクロ・イボ・アザを取ることができますか？
          </a>

        </li>
<li>
          <a href="#toc5-3">
            <span class="toc_num">5－3.</span> 膨らみのあるホクロも小さければレーザー除去が可能ですか？膨らみのあるものは根が深いのでしょうか？
          </a>

        </li>
<li>
          <a href="#toc5-4">
            <span class="toc_num">5－4.</span> 患部へのメイクはすぐにできますか？
          </a>

        </li>
<li>
          <a href="#toc5-5">
            <span class="toc_num">5－5.</span> 一度に何個も除去することはできますか？
          </a>

        </li>
<li>
          <a href="#toc5-6">
            <span class="toc_num">5－6.</span> 顔に大きなホクロが有り気になっています。大きなホクロはレーザーで取れますか？
          </a>

        </li>
<li>
          <a href="#toc5-7">
            <span class="toc_num">5－7.</span> 術後の生活において、気を付けることはありますか？
          </a>

        </li>
<li>
          <a href="#toc5-8">
            <span class="toc_num">5－8.</span> ホクロ除去後のケア方法について教えて下さい。
          </a>

        </li>



<li>
          <a href="#toc5-9">
            <span class="toc_num">5－9.</span> ほくろを取るかお悩みの患者様へ〜院長からのご挨拶〜
          </a>

        </li>
<li>
          <a href="#toc5-10">
            <span class="toc_num">5－10.</span> ほくろ保険適用治療のブログランキング
          </a>

        </li>
<li>
          <a href="#toc5-11">
            <span class="toc_num">5－11.</span> お支払い方法について教えてください
          </a>

        </li>
</ul>

        </li>

      </ul>
    </div>
  </div>

<p style="text-align:center;">
<img src="https://stg.ike-sunshine.co.jp/wp-content/uploads/2021/01/aec659d50afa8e0ce48c82e4ea662d7d.png" alt="" width="700" height="500" class="alignnone size-full wp-image-3954" />
</p>
<p>&nbsp;</p>
<h2 class="baseTitle" id="toc1">ほくろについてのご説明</h2>
<p>小さなときには全然なかったのに、年を取るにつれて増えてくるほくろ。</p>
<p> 特にお顔に増えたほくろは気になりますよね。</p><p> 増えてくるだけではなく、大きくなるほくろ・触ると痛いほくろ・ジュクジュクしたほくろ 色々なほくろのお悩みを抱えていらっしゃる方が多くご来院されます。</p><p>
例えば、顔にあると、まぶたにあって視界の邪魔になってしまったり、ひげを剃る時に引っかかったりしてしまいます。</p><p>また、悪性腫瘍の可能性もあります。</p>

<h3 class="subTitle" id="toc1-2">ほくろ除去治療はこんな人におすすめ</h3>

<section class="secBox">
    <ul class="cheap_recommend">
      <li>
        <a href="/operations/skincare/">
          <img class="top_txt" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/choice01_on_text.png" alt="レーザー">
          <h3>レーザー治療</h3>
          <div class="img"><picture><source srcset="/wp-content/uploads/2021/03/choice01_on.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/choice01_on.png" alt="レーザー" width="130" height="69"></picture></div>
          <span class="txt">保険1個8,000円～15,000円</span>
          <br>
        </a>
      </li>
      <li>
        <a href="/operations/iboaza/">
          <img class="top_txt" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/choice02_on_text.png" alt="皮膚切除">
          <h3><span class="small">再発の心配不要！</span>皮膚切除術</h3>
          <div class="img"><picture><source srcset="/wp-content/uploads/2021/03/choice02_on.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/choice02_on.png" alt="皮膚切除" width="130" height="69"></picture></div>
          <span class="txt">保険1個15,000円～20,000円</span>
          <br>
        </a>
      </li>
    </ul>
  </section>


<h3 class="subTitle" id="toc1-3">当院のほくろ除去術の特徴、メリットをご紹介</h3>
<section class="secBox iboaza_goodPoints">
    <div class="container">
      <h4>ほくろ除去治療の良い点</h4>

      <ul>
<li>
          <h3>01. 1回取り切りで完了</h3>
          <p>1回限りで取り切れます。何度も通う必要はありません。</p><p>医師がメラニン組織ギリギリで切除します。小さなほくろは表皮化するのが早く傷跡が目立ちません。</p>
        </li>
        <li>
          <h3>02. 手術給付金が受けられることがあります</h3>
          <p>任意で加入されている生命保険や共済組合の保険によっては　ホクロ・あざ・母斑の除去手術に対し手術の給付金を受けられる保険があります。</p><p>保険適用手術名は”<font color="red"><strong>皮膚腫瘍摘出術</strong></font>”です。</p><p>この名前にて給付金を受けられるか保険会社へのご確認をお願いいたします。給付を受けられるようでしたら保険会社から指定の診断書を受け取りクリニックへご持参ください。</p><p>当院にて手術を受けられた方を対象に診断書の作成をいたします。</p><p>※ご相談のみで治療をされていない方への診断書の作成は行っておりません。</p><p>
          </p>
        </li>
        <li>
          <h3>03. 土日祝日も診療・手術できます</h3>
          <p>
            当クリニックでは<font color="red"><strong>土日祝日も診療</strong></font>しておりますので、お仕事や学校をお休みする必要なく治療にお通いいただけます。また休日診療扱いになりませんため、保険の料金が増えることもございません。</p>
        </li>
        <li>
          <h3>04. 未成年の方の治療もできます</h3>
          <p>
            当クリニックでは中学生以上の未成年の方も治療を承っております。（小学生以下の方はご治療をお控えいただいておりますのでご了承ください。） <strong>また、基本的に未成年の方は保護者の方とのご同伴が必要となりますが高校卒業された方は、<font color="red">親権者同意書</font>をご持参いただければ、お一人でのご来院と治療が可能となります。</p></strong>
            <a class="agreementDLD" href="<?php echo get_template_directory_uri(); ?>/pdf/douisyo.pdf" target="_blank" rel="noopener noreferrer"><picture><source srcset="/wp-content/uploads/2021/03/pdfDLD.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/pdfDLD.png" alt="親権者同意書ダウンロード" width="320" height="79"></picture></a>
          </p>
        </li>
        <li>
          <h3>05. 診察当日の治療も大丈夫</h3>
          <p>
            診察当日に手術をすることが可能です。</p><p>手術時間は20分程度となります。当日に手術をお受けいただき、術後すぐにお帰りいただくことが可能です。手術当日から通常の生活をしていただいてかまいません。</p>
        </li>
      </ul>
    </div>
  </section>


<p>&nbsp;</p>
<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>
<p>&nbsp;</p>

<h2 class="baseTitle" id="toc2">ほくろ除去（レーザー治療）の手術概要について</h2>
<h3 class="subTitle" id="toc2-2">レーザー治療はこんな方におすすめ</h3>
<div class="this_rcmmnd">
  <ul>
    <li><span class="circle_txt">顔や首など<br>目立つ場所にあって<br>お化粧で隠せない</span></li>
    <li><span class="circle_txt">短時間で<br>治療したい</span></li>
    <li><span class="circle_txt">ホクロやイボが<br>だんだん<br>大きくなってきている</span></li>
    <li><span class="circle_txt">病理検査<br>して欲しい</span></li>
  </ul>
</div>

<p>ほくろ除去治療をレーザーにて行う場合は、カウンセリングの後すぐに治療が可能です。</p><p>当院では、ほくろの症状に応じて、電気メスによる<font color="red"><strong>切開凝固法</strong></font>と炭酸ガスレーザーであるCO2<font color="red"><strong>レーザーによる蒸散法</strong></font>の2通りをご用意しております。</p>

<h3 class="subTitle" id="toc2-3">レーザーによるほくろ除去の概要</h3>

<h4>・施術概要</h4>
<img src="/wp-content/uploads/2019/08/c6184e4a41afcf00a9722563b7fd6f07.jpg" alt="施術概要" width="40%" height="218" class="alignnone size-full wp-image-2159" />
<p>ホクロやイボをレーザーにより除去致します。</p>
<p>施術前に局所麻酔を行うため<font color="red"><strong>痛みもございません。</p><p></strong></font>
<font color="red"><strong>5分程度で終わる</strong></font>簡単な施術となります。</p><p>治療後は紫外線を避けて、<font color="red"><strong>色素沈着の予防をしっかり行うことが必要</strong></font>です。</p>
<p>
1mm程度の小さなほくろでしたら、跡形もなくきれいになる方もいらっしゃいますが、大きくまた皮膚深くまでほくろのある方ですと、ニキビ跡のような少し陥没した傷跡が定着する場合もあります。（この陥没は表皮化するにつれて徐々に改善してきます。）</p>

<p>
ホクロの除去は保険診療で対応可能なため、<font color="red"><strong>非常にリーズナブル</strong></font>に治療をお受け頂けます。</p><p>
※保険診療の対象とならないホクロの種類もございますので、まずはお問合せください。</p>
<p>&nbsp;</p>

<h4>・アフターケア</h4>

<p>またアフターケアについてですが、ほくろがあった場所を焼いて取り切っていますため、ほくろ除去直後は皮膚がない状態です。</p><p>そのため、そのままお帰りになると日焼けによる色素沈着の原因となります。</p><p>そこで、抗生剤入りの軟膏を湿布後、日焼け防止の為肌色のテープを3枚重ねにした保護用のテープをほくろの上にはってお帰り頂きます。</p>

<p>表皮化するまでの約10日間は、ばい菌による化膿を防ぐためにも必ずお貼りいただくようお願いしております。</p>


<table class="blogs" style="width:100%;">
<tbody>
<tr style="height: 18px; border:solid 1px #5454547a;">
<th style="height: 18px; border:solid 1px #5454547a;">施術時間</th>
<td style="height: 18px; border:solid 1px #5454547a;"><center>5mm程度のホクロ・イボ・アザで約5分程度</center></td>
</tr>
<tr style="height: 18px; border:solid 1px #5454547a;">
<th style="height: 18px; border:solid 1px #5454547a;">メイク</th>
<td style="height: 18px; border:solid 1px #5454547a;"><center>当日より可能</center>
</td>
</tr>
<tr style="height: 18px; border:solid 1px #5454547a;">
<th style="height: 18px; border:solid 1px #5454547a;">治療直後</th>
<td style="height: 18px; border:solid 1px #5454547a;"><center>赤くうっすらと跡になる程度</center>
</td>
</tr>
<tr style="height: 18px; border:solid 1px #5454547a;">
<th style="height: 18px; border:solid 1px #5454547a;">アフターケア</th>
<td style="height: 18px; border:solid 1px #5454547a;"><center>遮光テープを患部に10日程度貼るだけ</center>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>
<h3 class="subTitle" id="toc2-4">費用保険と自費の金額</h3>
<div id="price">
<table>
<tbody><tr>
<th>1個1mmあたり</th>
<td class="time">5分</td>
<td class="price_0">5,000円&nbsp;&nbsp;&nbsp;<span>※</span></td>
</tr>
<tr>
<th>皮膚腫瘍</th>
<td class="time">1個保険</td>
<td class="price_0">顔・前腕・体・上腕・大腿　約10,000円前後</td>
</tr>
</tbody></table>
<p class="attn">※目安金額となります。治療箇所/範囲によって変動致しますので、お気軽にお問い合わせください。</p>
</div>

<h3 class="subTitle" id="toc2-5">レーザーによる、ほくろ除去治療の詳しい流れ</h3>
<div class="iboazaTreatment">
        <div class="container">
          <h3>施術の流れ</h3>
          <ul>
            <li>
              <div class="num"><span>01</span>カウンセリング</div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_01.png" alt="01 カウンセリング" loading="lazy" class="" width="187" height="120"><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_01.png" alt="01 カウンセリング"></noscript></div><p>患者さんに一人一人に合わせて、レーザー除去がお勧めか手術が必要か医師が判断いたします。</p>
            </li>
            <li>
              <div class="num"><span>02</span>お見積もり</div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_02.png" alt="02 お見積もり" loading="lazy" class="" width="187" height="120"><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_02.png" alt="02 お見積もり"></noscript></div><p>除去するのに必要な費用をご説明させていただきます。</p>

</li>
            <li>
              <div class="num"><span>03</span>施術</div>
              <div class="img"><img src="/wp-content/uploads/2020/10/hokuro_03.png" alt="03 施術" loading="lazy" class="" width="187" height="120"><noscript><img loading="lazy" src="/wp-content/uploads/2020/10/hokuro_03.png" alt="03 施術"></noscript></div>
<p>局部麻酔をし、痛みをケアしながら除去していきます。<br>除去したほくろは病理検査に出します。</p>        </li>
            <li>
              <div class="num"><span>04</span>アフターケア</div>
              <div class="img"><img src="/wp-content/uploads/2020/10/hokuro_04.png" alt="04 アフターケア" loading="lazy" class="" width="187" height="120"><noscript><img loading="lazy" src="/wp-content/uploads/2020/10/hokuro_04.png" alt="04 アフターケア"></noscript></div><p>術後はアフターケアを施し、ご帰宅していただきます。<br><a href="#toc3">詳しくはこちらをご覧ください</a></p>
            </li>
            <li>
              <div class="num"><span>05</span>経過診察</div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_05.png" alt="05 経過診察" loading="lazy" class="" width="187" height="120"><noscript><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/treatment_05.png" alt="05 経過診察"></noscript></div>
<p>施術から10日目後、1か月後と2回検診させていただいています。</p>
            </li>
          </ul>
        </div>
      </div>
<p>&nbsp;</p>
<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>
<p>&nbsp;</p>

<h2 class="baseTitle" id="toc3">レーザーによる、ほくろ除去後のケアについて</h2>

<h3 class="subTitle" id="toc3-1">ほくろ除去治療が終わった後の生活の注意点</h3>


<h4>・皮膚が赤くなる</h4>

<p>ほくろ除去後は、皮膚がない状態となり<font color="red"><strong>赤みがでます</strong></font>。</p>

<p>新しい皮膚が形成されるまでは、抗生剤の軟膏を塗り、皮膚の代わりのテープを貼って生活していただきます。</p>


<h4>・浸出液</h4>
<p>
ホクロ除去後は、自然治癒力により浸出液が出ています。（テープが少しにじむ程度）。</p><p>浸出液がしたたり落ちるくらいしっかり出てくる方には、浸出液を止める処置をさせていただいております。</p>

<h4>・お化粧やお風呂について</h4>
<p>お化粧などはテープの上からで、２４時間テープは張りっぱなしにしていただきます。</p>
<p>お顔を洗う時やお風呂に入ってる時などに、自然にはがれた時だけ軟膏を塗ってテープを張りなおしてください。</p>
<p>
無理にテープを剥がそうとすると、表皮化されてきていた薄い皮膚も一緒にはがれてしまいますので無理にはがされないようにご注意ください。</p>

<h4>・テープをはがすタイミングについて</h4>
<p>
基本的に<font color="red"><strong>新しい皮膚</strong></font>が形成されてきても、１か月程度はテープを張りっぱなしになさることをお勧めいたします。</p>
<p>それは、新しい
皮膚はできたばかりの時は薄くテラテラした素材でまだ日焼けに対する耐性がありません。</p><p>
その時に保護用テープを剥がしてしまうと日焼けをしてしまい、色素沈着によるシミの原因となってしまうのです。</p><p>その為、皮膚が形成されてきたとしても念のため１か月近くはテープをお貼りください。</p><p>テープを剥がした後も、しっかり<font color="red"><strong>日焼け止めクリーム</strong></font>を塗られることをお勧めいたします。</p>


<h3 class="subTitle" id="toc3-2">ほくろ除去後の傷跡の回復経過</h3>
<p>ほくろを取り終わった跡は、皮膚がなく、えぐれたような<font color="red"><strong>陥没した状態</strong></font>になっています。</p><p>
これは、ほくろの元となっているメラニン組織が皮膚の中まで深く入っているため、そのほくろ組織（メラニン）を削って取らなければほくろを取れないためです。</p><p>
この、ほくろを取った後の傷跡は、浅いものであれば１週間程度で表皮化し、皮膚のへこみもなくなり、外見的にも全く傷がわからないところまで回復くしてきます。</p><p>
一方で、皮膚深くまでほくろの組織があった方は、表皮化するまで１か月近くかかる方もいらっしゃいます。</p><p>
また表皮化が終わったとしても、へこみが改善せず最終的にニキビ跡のような傷跡で収まる方もいらっしゃいます。</p>
<p>&nbsp;</p>
<h3 class="subTitle" id="toc3-3">ほくろ除去後のアフターフォロー</h3>
<p>ほくろ除去について、しっかりほくろがとり切れたことを確認してからお帰り頂きますが、ホクロが<font color="red"><strong>再発</strong></font>した場合は再度レーザーにて除去いたします。</p><p>しかし、何度も再発する場合には切除手術をご案内しております。</p><p>
ほくろ除去後１０日目前後に送付されてくる<font color="red"><strong>病理検査結果</strong></font>を確認し、悪性の腫瘍の場合は大学病院への紹介状を作成し、精密検査をお受けいただくようご案内させていただいております。</p><p>
ほくろを取った傷跡が盛り上がりケロイド状になった場合はケロイド予防ののお薬の処方ならびにケナコルト注射によるケロイドの軽減を行うことも可能です。</p><p>
ほくろ除去後の最大の注意点は日焼けですが、色素沈着が１年たっても軽減しない場合は、<font color="red"><strong>トレチノイン療法による色素沈着軽減クリームを処方することも可能</strong></font>です。</p><p>もともとアトピー性皮膚炎をお持ちの方など色素沈着ができやすい体質の方は、肌の美白成分配合の内服薬を処方し、色素沈着の予防を計ることも可能です。</p>



<h2 class="baseTitle" id="toc4">レーザーによるほくろ除去の症例写真</h2>
<h3 class="subTitle" id="toc4-1">頭部にあるほくろ・いぼ除去</h3>

<img loading="lazy" src="/wp-content/uploads/2019/09/5621deba8a18b839c7a4321764bb05e8.jpg" alt="頭部" width="750" height="377" class="alignnone size-full wp-image-2213" />

<div id="price"><table>
<tbody>
<tr>
<th>金額（保険治療）</th>
<td class="price_0">9,434円　自己負担３割の保険証をお持ちの場合</td>
</tr>
<tr>
<th>リスク</th>
<td class="price_0">赤み・化膿・ニキビ跡のような凹み</td>
</tr>
<tr>
<th>アフターケア
</th>
<td class="price_0">抗生剤の軟膏塗布後、<br>
新しい皮膚ができるまで１０日～１ヶ月ほどﾃｰﾌﾟにて保護します
</td>
</tr>
<tr>
<th>時間</th>
<td class="price_0">約5分・局所麻酔後、すぐに除去可能です</td>
</tr>
</tbody></table>
</div>
<h3 class="subTitle">背中にあるほくろ・いぼ除去</h3>

<img loading="lazy" src="/wp-content/uploads/2019/09/2a831ec055ed4fee4e1d0936ea40500d.jpg" alt="背中にあるほくろ" width="750" height="377" class="alignnone size-full wp-image-2214" />

<div id="price"><table>
<tbody>
<tr>
<th>金額（保険治療）</th>
<td class="price_0">8294円　自己負担３割の保険証をお持ちの場合</td>
</tr>
<tr>
<th>リスク</th>
<td class="price_0">赤み・化膿・ニキビ跡のような凹み</td>
</tr>
<tr>
<th>アフターケア
</th>
<td class="price_0">抗生剤の軟膏塗布後、<br>
新しい皮膚ができるまで１０日～１ヶ月ほどﾃｰﾌﾟにて保護します
</td>
</tr>
<tr>
<th>時間</th>
<td class="price_0">約5分・局所麻酔後、すぐに除去可能です</td>
</tr>
</tbody></table>
</div>




<h3 class="subTitle" id="toc4-2">顔にあるほくろ・いぼ除去
</h3>

<img loading="lazy" src="/wp-content/uploads/2019/09/ee3be1d100caf1aa771552d59c2bd436.jpg" alt="顔にあるほくろ・いぼ除去" width="750" height="377" class="alignnone size-full wp-image-2215" />

<div id="price"><table>
<tbody>
<tr>
<th>金額（保険治療）</th>
<td class="price_0">9,434円　自己負担３割の保険証をお持ちの場合</td>
</tr>
<tr>
<th>リスク</th>
<td class="price_0">赤み・化膿・ニキビ跡のような凹み</td>
</tr>
<tr>
<th>アフターケア
</th>
<td class="price_0">抗生剤の軟膏塗布後、<br>
新しい皮膚ができるまで１０日～１ヶ月ほどﾃｰﾌﾟにて保護します
</td>
</tr>
<tr>
<th>時間</th>
<td class="price_0">約5分・局所麻酔後、すぐに除去可能です</td>
</tr>
</tbody></table>
</div>


<h2 class="baseTitle" id="toc5">レーザーによるほくろ除去・いぼ除去に関するご質問</h2>

<div id="faq">

    <div class="body">
    <div id="tab_box">
    <div id="tab1" class="show">
  <dl>
    <dt id="toc5-1"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" >レーザーで皮膚が陥没する事はありませんか？</dt>
    <dd>元々小さいホクロであれば跡形もなく治る場合もありますが、大きければ大きいものほど凹む事は考えられます。
ですが、元のホクロの面積よりも小さい面積の凹みになるわけですし、黒い大きな盛り上がりが無くなる
わけですから、凹んでもホクロのある状態よりは綺麗になるわけで、治療を行う価値は十分にございます。
また、ホクロやイボは盛り上がっているものは放置しておくとどんどん大きくなるものもある為、
大きくなってから処置をすると大きな窪みになりますが、小さいうちに行えば小さな窪みで済みますので、
取ってしまいたいホクロがあるならば早いうちに取った方が良いです。</dd>
    </dl>
    <dl>
    <dt id="toc5-2"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" >何回の通院でホクロ・イボ・アザを取ることができますか？</dt>
    <dd>1回限りです。
除去後、お鏡でしっかりホクロ・イボがなくなったことを確認してからお帰りいただいております。</dd>
    </dl>
    <dl>
    <dt id="toc5-3"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" >膨らみのあるホクロも小さければレーザー除去が可能ですか？<br>膨らみのあるものは根が深いのでしょうか？</dt>
    <dd>はい、膨らみのあるホクロの方が平坦なものよりも根が深い場合が多いです。
もちろん膨らんでいてもレーザーは可能です。ただ、部位によっては皮膚切除の方が綺麗になるケースも
ありますので、お気軽にご相談ください。</dd>
    </dl>
    <dl>
    <dt id="toc5-4"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" >患部へのメイクはすぐにできますか？</dt>
    <dd>除去後、肌色のテープを患部にお貼り頂きます。
その上からメイクをしていただければ大丈夫です。</dd>
    </dl>
    <dl>
    <dt id="toc5-5"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" > 一度に何個も除去する事はできますか？</dt>
    <dd>ご希望であれば、一回の治療で何個でも除去が可能です。
ただ、多く行えば直後はそれだけ凹みが出来るので、最初は目立たない端の部分から治療を受けて頂いて、
問題なければ後日再度治療すると良いと思います。</dd>
    </dl>
    <dl>
    <dt id="toc5-6"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" > 顔に大きなホクロが有り気になっています。大きなホクロはレーザーで取れますか？</dt>
    <dd>だいたい8mm以上の大きなホクロは皮膚切除術が主流となります。
大きいホクロの場合は、レーザーでの治療は治療跡が目立ってしまうことがあります。
皮膚ごと切って、1本の線にする手術の方が、レーザーよりも術後の状態がきれいで目立ちません。
手術時間は15分程度です。傷跡は3ヶ月～半年位できれいに目立たなくなります。
1週間後の抜糸までは傷跡は濡らさないようにして頂きます。その後は日常生活に支障はありません。
手術の約7日後に抜糸となります。</dd>
    </dl>
    <dl>
    <dt id="toc5-7"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" >術後の生活において、気を付けることはありますか？</dt>
    <dd>当日から、お化粧・洗顔・入浴は問題ありません。
日焼けをすると、ホクロ除去部分がシミの原因になりますので予防対策が重要です。</dd>
    </dl>
    <dl>
    <dt id="toc5-8"><img src="<?php echo get_template_directory_uri(); ?>/skincare/lp/img/q.png" alt="Q" width="35" height="36" >ホクロ除去後のケア方法について教えて下さい。</dt>
    <dd>ホクロ・イボ・アザをレーザー除去した部分は一時的に表皮がない状態になります。
新しい表皮ができるまでの間、ばい菌が入らないよう、綿棒で軟膏を塗り、保護用の遮光(肌色)テープを
貼ることをおすすめしています。</dd>
    </dl>
    </div>

    </div>
</div>
</div>
<p>&nbsp;</p>
<p><a href="/reservation/">
<picture><source srcset="/wp-content/uploads/2019/05/banner.png.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2019/05/banner.png" alt="banner" width="1830" height="366" class="aligncenter size-full wp-image-341" data-eio="p"></picture></a></p>
<p>&nbsp;</p>



<h2 class="baseTitle" id="toc5-9">ほくろを取るかお悩みの患者様へ　～院長からのご挨拶～</h2>
<div class="doctor_r">
    <picture><source srcset="/wp-content/uploads/2021/03/doctor_r.jpg.webp" type="image/webp"><img loading="lazy" class="right sp" src="/wp-content/uploads/2021/03/doctor_r.jpg" alt="院長" width="258" height="354" data-eio="p"></picture>
    <div class="left">
        <h3><div>ほくろについてお悩みでしたら、</div><div>ぜひ当院へご相談ください。</div></h3>
        <span class="txt">
<p>ホクロや頑固なシミをレーザーにより除去いたします。
施術前に局所麻酔を行うため痛みもございません。</p>
<p>5分程度で終わる簡単な施術となります。</p>
<p>治療後は紫外線を避けて、色素沈着の予防をしっかり行うことが必要です。</p>
<p>ホクロの除去は保険診療で対応可能なため、非常にリーズナブルに施術をお受けできます。<br>
※保険診療の対象とならないホクロの種類もございますので、まずはお問合せください。</p></span>
        <picture><source srcset="/wp-content/uploads/2021/03/doctor_study.jpg.webp" type="image/webp"><img loading="lazy" src="/wp-content/uploads/2021/03/doctor_study.jpg" alt="院長" data-eio="p" width="565" height="120"></picture>
    </div>
    <picture><source srcset="/wp-content/uploads/2021/03/doctor_r.jpg.webp" type="image/webp"><img loading="lazy" class="right pc" src="/wp-content/uploads/2021/03/doctor_r.jpg" alt="院長" width="258" height="354" data-eio="p"></picture>
</div>

  <section class="secBox" id="toc5-10">
    <div class="blogRanking">
      <h4>ほくろ保険適用治療のブログランキング</h4>
      <ul>
        <li><span style="background-color: #FF93A6;">1</span><a href="/blogs/mole_wart/hokuro-cream-2/" target="_blank" rel="noopener noreferrer">ほくろ除去クリームは効果なし？自分で対処する方法とおすすめ治療法</a></li>
        <li><span style="background-color: #F39800;">2</span><a href="/blogs/mole_wart/self-removement/" target="_blank" rel="noopener noreferrer">ほくろ除去を簡単に自分で行うには？クリーム・カソーダ・もぐさを徹底比較</a></li>
        <li><span style="background-color: #70cdde;">3</span><a href="/blogs/mole_wart/hokuro_hueru/" target="_blank" rel="noopener noreferrer">ほくろが増える原因とは？ほくろ除去についても解説！</a></li>
<li><span style="background-color: #fff; color:#222; border:1px solid #222;">4</span><a href="/blogs/mole_wart/hokuro-iden/" target="_blank" rel="noopener noreferrer">ほくろが出来るのは遺伝のせい？除去する方法や費用を解説！</a></li>
      </ul>
    </div>
  </section>



  <h3 class="subTitle" id="toc5-11">お支払い方法について教えてください</h3>
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_01.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_02.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_03.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_04.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_05.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/cdc_ico_06.png" alt="クレジットカードでのお支払いが可能" loading="lazy" width="70" height="43">
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_01.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_02.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_03.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_04.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_05.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_06.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <br>
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_07.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_08.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_09.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_10.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
        <img src="<?php echo get_template_directory_uri(); ?>/img/operations/skincare/dm_ico_11.png" alt="電子マネー利用可能" loading="lazy" width="70" height="43">
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