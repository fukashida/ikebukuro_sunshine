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
<div id="pageTitle" class="<?php echo get_page($page_id)->post_name; ?>">
<h1><?php the_title(); ?></h1>
<?php if(get_post_meta( $post->ID, 'titlesub', true )): ?>
<p><?php echo get_post_meta($post->ID,'titlesub', true);?></p>
<?php endif; ?>
</div>

<!--/#mainContents-->

<div id="chargeArea">
<div class="inner">
<p class="bold">Face</p>
<ul class="menuList head clrfix mb20">
<li><a href="#cnav01"><span>目もと</span></a></li>
<li><a href="#cnav02"><span>お鼻</span></a></li>
<li><a href="#cnav03"><span>アゴ</span></a></li>
<li><a href="#cnav04"><span>エラ</span></a></li>
<!-- <li><a href="#cnav05"><span>口唇・歯グキ</span></a></li> -->
<li><a href="#cnav06"><span>若返り</span></a></li>
<!-- <li><a href="#cnav07"><span>オートコラーゲン</span></a></li> -->
</ul>
</div>
<div class="inner">
<p class="bold">Body</p>
<ul class="menuList head clrfix mb20">
<li><a href="#cnav08"><span>わきが(保険あり)</span></a></li>
<li><a href="#cnav09"><span>多汗症</span></a></li>
<li><a href="#cnav10"><span>メディカルダイエット</span></a></li>
<li><a href="#cnav11"><span>キズ跡（瘢痕）修正・タトゥー除去</span></a></li>
</ul>
</div>
<div class="inner">
<p class="bold">Skin</p>
<ul class="menuList head clrfix mb20 skinList">
<li><a href="#cnav12"><span>シミ・そばかす</span></a></li>
<li><a href="#cnav13"><span>ほくろ・イボ（保険あり）</span></a></li>
<li><a href="#cnav14"><span>にきび・ニキビ跡治療<br>スターラックス照射</span></a></li>
<li><a href="#cnav15"><span>リストカット傷跡治療<br>スターラックス照射</span></a></li>
<li><a href="#cnav17"><span>ニンニク・プラセンタ・ビタミン注射</span></a></li>
</ul>
</div>
<div class="inner">
<p class="bold">Others</p>
<ul class="menuList head clrfix mb40">
<li><a href="#cnav18"><span>医療ピアス</span></a></li>
<!-- <li><a href="#cnav19"><span>医療レーザー脱毛</span></a></li> -->
<li><a href="#cnav20"><span>その他</span></a></li>
</ul>
</div>
</div>
<section class="secBox" id="cnav01">
<h3 class="baseTitle">目もと(片目)</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th rowspan="2" class="td-01"><a href="/operations/futae/">二重まぶた（片目）</a></th>
              <td>埋没法（2点留）</td>
              <td>10分</td>
              <td>60,000円</td>
            </tr>
            <tr>
              <td>埋没法（3点留）</td>
              <td>10分</td>
              <td>80,000円</td>
            </tr>
            <!-- <tr>
              <td>マイクロ切開法</td>
              <td>15分</td>
              <td>100,000円</td>
            </tr>
            <tr>
              <td>ナチュラル切開法</td>
              <td>30分</td>
              <td>125,000円</td>
            </tr>
            <tr>
              <td>抜糸/当院</td>
              <td>5分</td>
              <td>30,000円</td>
            </tr>
            <tr>
              <td>抜糸/他院</td>
              <td>5分</td>
              <td>40,000円</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/futae#futae05">目を切れ長に大きく</a></th>
              <td>目尻切開</td>
              <td>20分</td>
              <td>150,000円</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/futae#futae06">より目の解消</a></th>
              <td>目頭切開</td>
              <td>20分</td>
              <td>150,000円</td>
            </tr>
            <tr>
              <th rowspan="2" class="td-01"><a href="/operations/futae#futae08">目の下ふくらみく<br class="sp"> (涙袋)形成</a></th>
              <td>ヒアルロン酸</td>
              <td>5分</td>
              <td>37,500円～ </td>
            </tr>
            <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/futae#futae06">目をたてに大きく<br class="sp">（チワワ目）</a></th>
              <td>筋肉の縮小に作用する薬剤注射</td>
              <td>5分</td>
              <td>40,000円～</td>
            </tr>
            <tr>
              <th rowspan="2" class="td-01"><a href="/operations/futae#futae07">目の下のクマ解消</a></th>
              <td>色素沈着改善薬</td>
              <td>1ヶ月分</td>
              <td>25,000円</td>
            </tr>
            <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td><p>42,500円～</p>
              </td>
            </tr> -->
            <tr>
              <th rowspan="1" class="td-01"><a href="/operations/futae#futae09">目の下のシワ取り（片目）</a></th>
              <td>ヒアルロン酸</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
            <!-- <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr> -->
            <tr>
              <th rowspan="1" class="td-01"><a href="/operations/futae#futae09">目尻のシワ取り（片目）</a></th>
              <td>ボトックス</td>
              <td>5分</td>
              <td>40,000円～</td>
            </tr>
            <!-- <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr>
            <tr>
              <th rowspan="2" class="td-01"><a href="/operations/futae#futae08">目のくぼみ解消</a></th>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr>
            <tr>
              <td>オートコラーゲン</td>
              <td>20分</td>
              <td>250,000円～</td>
            </tr> -->
          </table>
</div>
</div>
</section>

<section class="secBox" id="cnav02">
<h3 class="baseTitle">お鼻</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th rowspan="1"><a href="/operations/faceline#faceline01">隆鼻</a></th>
              <td>ヒアルロン酸注入</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
            <!-- <tr>
              <td>抜去/当院</td>
              <td>15分</td>
              <td>50,000円</td>
            </tr>
            <tr>
              <td>抜去/他院</td>
              <td>20分</td>
              <td>100,000円</td>
            </tr>
            <tr>
              <td>入替/当院</td>
              <td>30分</td>
              <td>280,000円</td>
            </tr>
            <tr>
              <td>入替/他院</td>
              <td>30分</td>
              <td>330,000円</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/faceline#faceline01">鼻先をツンとく<br class="sp">尖らせる</a></th>
              <td>鼻尖修正</td>
              <td>20分</td>
              <td>250,000円</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/faceline#faceline01">小鼻縮小</a></th>
              <td>&nbsp;</td>
              <td>30分</td>
              <td>280,000円</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/faceline#faceline01">鼻孔形成</a></th>
              <td>&nbsp;</td>
              <td>30分</td>
              <td>250,000円</td>
            </tr>
            <tr>
              <th class="td-01"><a href="/operations/faceline#faceline01">鷲鼻形成</a></th>
              <td>&nbsp;</td>
              <td>60分</td>
              <td>400,000円</td>
            </tr> -->
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav03">
<h3 class="baseTitle">アゴ</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th><a href="/operations/faceline#faceline02">すっきりシャープに</a></th>
              <td>ヒアルロン酸</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav04">
<h3 class="baseTitle">エラ</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th><a href="/operations/faceline#faceline05">エラ</a></th>
              <td>ボトックス</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
          </table>
</div>
</div>
</section>
<!-- <section class="secBox" id="cnav05">
<h3 class="baseTitle">口唇（くちびる）・歯グキ</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tbody>
              <tr>
                <th><a href="/operations/faceline#faceline04">グラマラスに厚く</a></th>
                <td>ヒアルロン酸</td>
                <td>5分</td>
                <td>35,714円～</td>
              </tr>
              <tr>
                <th><a href="/operations/faceline#faceline04">すっきり薄く</a></th>
                <td>&nbsp;</td>
                <td>30分</td>
                <td>250,000円</td>
              </tr>
              <tr>
                <th class="td-01"><a href="/operations/faceline#faceline06">笑うと見えるハグキ</a></th>
                <td width="102" class="td-02">筋肉の縮小に作用する薬剤注射</td>
                <td>5分</td>
                <td>40,000円～</td>
              </tr>
            </tbody>
          </table>
</div>
</div>
</section> -->
<section class="secBox" id="cnav06">
<h3 class="baseTitle">若返り</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th rowspan="1"><a href="/operations/futae#futae09">上まぶたのタルミ（片側）</a></th>
              <td>スタンダード埋没法</td>
              <td>15分</td>
              <td>60,000円（税抜き）</td>
            </tr>
            <!-- <tr>
              <td>眉毛下皮膚切除法</td>
              <td>20分</td>
              <td>125,000円</td>
            </tr>
            <tr>
              <td>ナチュラル切開法</td>
              <td>30分</td>
              <td>140,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/futae#futae07">下まぶたのタルミ（片側）</a></th>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>85,000円～</td>
            </tr>
            <tr>
              <td>余剰皮膚切除法</td>
              <td>30分</td>
              <td>140,000円～</td>
            </tr>
            <tr> -->
              <th rowspan="1"><a href="/operations/shiwa/">目の下のシワ取り</a></th>
              <td>ヒアルロン酸</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
            <!-- <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr> -->
            <tr>
              <th rowspan="1"><a href="/operations/shiwa/">目尻のシワ取り</a></th>
              <td>ボトックス</td>
              <td>5分</td>
              <td>40,000円～</td>
            </tr>
            <!-- <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr> -->
            <!-- <tr>
              <th rowspan="2"><a href="/operations/shiwa/">目のくぼみ解消</a></th>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr>
            <tr>
              <td>オートコラーゲン</td>
              <td>20分</td>
              <td>250,000円</td>
            </tr> -->
            <!-- <tr>
              <th class="td-01"><a href="/operations/shiwa/">法齢線（口元）く<br class="sp">シワ取り</a></th>
              <td>ヒューマンコラーゲン </td>
              <td>5分</td>
              <td>42,500円～</td>
            </tr> -->
            <tr>
              <th rowspan="2" class="td-01"><a href="/operations/shiwa/">額（おでこ）のく<br class="sp">シワ取り</a></th>
              <td>ボトックス</td>
              <td>5分</td>
              <td>40,000円～</td>
            </tr>
            <tr>
              <td>ヒアルロン酸</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
            <!-- <tr>
              <td>ヒューマンコラーゲン</td>
              <td>5分</td>
              <td>85,000円～</td>
            </tr> -->
            <tr>
              <th rowspan="1"><a href="/operations/shiwa/">こけたホホをふっくらと</a></th>
              <td>ヒアルロン酸</td>
              <td>5分</td>
              <td>70,000円</td>
            </tr>
            <!-- <tr>
              <td>オートコラーゲン</td>
              <td>60分</td>
              <td>307,143円</td>
            </tr> -->
            <tr>
              <th rowspan="2"><a href="/operations/shiwa/">切らないお顔のく<br class="sp">リフトアップ</a></th>
              <td rowspan="2">MWデュアルリフト</td>
              <td>片方3本［合計6本］</td>
              <td> 220,000円</td>
            </tr>
            <tr>
              <td>片方5本［合計10本］</td>
              <td> 275,000円</td>
            </tr>
          </table>
</div>
</div>
</section>
<!-- <section class="secBox" id="cnav07">
<h3 class="baseTitle">オートコラーゲン</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th><a href="/operations/shiwa#shiwa03">目のくぼみ</a></th>
              <td>上／下各 </td>
              <td>60分 </td>
              <td>250,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/shiwa#shiwa03">頬（ホホ）</a></th>
              <td>片側 </td>
              <td>60分 </td>
              <td>307,143円</td>
            </tr>
            <tr>
              <th><a href="/operations/shiwa#shiwa03">こめかみ</a></th>
              <td>片側</td>
              <td>60分</td>
              <td>307,143円</td>
            </tr>
          </table>
</div>
</div>
</section> -->
<section class="secBox" id="cnav08">
<h3 class="baseTitle">わきが(保険診療あり)</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tbody>
              <tr>
                <th rowspan="4"><a href="/operations/wakiga#wakiga01">片ワキ</a></th>
                <!-- <td>吸引法</td>
                <td>20分</td>
                <td>83,333円</td> -->
              </tr>
              <tr>
                <td rowspan="2">直視下剪除法</td>
                <td rowspan="2">40分</td>
                <td>女性　125,000円～175,000円</td>
              </tr>
              <tr>
                <td>男性　125,000円～225,000円</td>
              </tr>
              <tr>
                <td>保険診療</td>
                <td>30分</td>
                <td>25,000円前後</td>
              </tr>
            </tbody>
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav09">
<h3 class="baseTitle">多汗症 (わきがとは異なります)</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tbody>
              <tr>
                <th rowspan="3"><a href="/operations/wakiga#wakiga04">片ワキ</a></th>
                <td>ボトックス</td>
                <td>5分</td>
                <td>40,000円～</td>
              </tr>
              <tr>
                <td rowspan="2">直視下剪除法</td>
                <td rowspan="2">40分</td>
                <td>女性　125,000円～175,000円</td>
              </tr>
              <tr>
                <td>男性　125,000円～225,000円</td>
              </tr>
            </tbody>
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav10">
<h3 class="baseTitle">メディカルダイエット</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <!-- <tr>
              <th rowspan="2"><a href="/operations/faceline#faceline01">メソセラピー</a></th>
              <td>1回（トライアル）</td>
              <td>10分</td>
              <td>25,000円</td>
            </tr>
            <tr>
              <td>1クール</td>
              <td>5回分</td>
              <td>100,000円</td>
            </tr> -->
            <tr>
              <th rowspan="1"><a href="/operations/faceline#faceline09">美脚注射</a></th>
              <td>ボトックス</td>
              <td>5分</td>
              <td>40,000円～</td>
            </tr>
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav11">
<h3 class="baseTitle">キズ跡（瘢痕）修正・タトゥー除去</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th><a href="/operations/bodyline#bodyline09">キズのく<br class="sp">盛り上がり解消</a></th>
              <td>エクラーブラスター</td>
              <td>1枚</td>
              <td>3,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/bodyline#bodyline09">色素沈着・赤み軽減</a></th>
              <td nowrap>トレチノイン・ハイドロキノン</td>
              <td>1か月分</td>
              <td>25,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/bodyline#bodyline09">ケロイド予防・治療</a></th>
              <td>リザベン内服</td>
              <td>1か月分</td>
              <td>4,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/laser/">レーザー治療</a></th>
              <td>1ミリ</td>
              <td>5分</td>
              <td>5,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/bodyline/">タトゥー・刺青切除</a></th>
              <td>5×5cm</td>
              <td>30分</td>
              <td>196,000円<br>
              ⇒モニター98,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/bodyline/">形成外科手術</a></th>
              <td></td>
              <td>15分～</td>
              <td>100,000円～</td>
            </tr>
 <tr>
              <th rowspan="2"><a href="/operations/laser#laser01">傷跡</a></th>
               <td colspan="2">5×5cm以下</td>
              <td>35,000円/回</td>
            </tr>
<tr>
              <td colspan="2">1クール（5回分）</td>
              <td>140,000円～</td>
            </tr>
          </table>
<p>※スターラックスによる傷跡治療をご希望の方は、<br class="sp"><a href="#cnav15">こちら</a></p>
</div>
</div>
</section>
<section class="secBox" id="cnav12">
<h3 class="baseTitle">シミ・そばかす</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th><a href="/operations/skincare#skincare01">レーザー治療</a></th>
              <td>1ミリ</td>
              <td>5分</td>
              <td><span>5,000円</span></td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta11">肝班（かんぱん）<br class="sp">治療</a></th>
              <td>トランサミン内服</td>
              <td>30日分</td>
              <td>6,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/placenta#placenta06">美白・美肌注射</a></th>
              <td>タオチン</td>
              <td>5分</td>
              <td>3,000円</td>
            </tr>
            <tr>
              <td>ビタミン</td>
              <td>5分</td>
              <td>3,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta01">医療用シミ取りクリーム5点セット</a></th>
              <td>&nbsp;</td>
              <td>1か月分</td>
              <td>27,500円</td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta01">医療用トレチノインクリーム</a></th>
              <td>肌のターンオーバー促進剤</td>
              <td>1か月分</td>
              <td>5,500円</td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta02">医療用ハイドロキノンクリーム</a></th>
              <td>医療用強力美白剤</td>
              <td>1か月分</td>
              <td>5,500円</td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta04">高濃度ビタミンCローション</a></th>
              <td>&nbsp;</td>
              <td>1か月分</td>
              <td>5,500円</td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta04">高濃度プラセンタローション(PHL)</a></th>
              <td>&nbsp;</td>
              <td>1か月分</td>
              <td>5,500円</td>
            </tr>
            <tr>
              <th><a href="/operations/placenta#placenta04">高濃度プラセンタクリーム(PHC)</a></th>
              <td>&nbsp;</td>
              <td>1か月分</td>
              <td>5,500円</td>
            </tr>
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav13">
<h3 class="baseTitle">ほくろ・イボ（保険あり）</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th><a href="/operations/skincare#skincare01">1ミリ/1個</a></th>
              <td>5分</td>
              <td>5,000円</td>
            </tr>
            <!-- <tr>
              <th><a href="/operations/skincare#skincare01">5個以上</a></th>
              <td>15分</td>
              <td>10%OFF</td>
            </tr> -->
            <!-- 
            <tr>
              <th><a href="/operations/skincare#skincare01">10個以上</a></th>
              <td>30分</td>
              <td>20%OFF</td>
            </tr>
             -->
            <tr>
              <th><a href="/operations/skincare#skincare01">皮膚腫瘍</a></th>
              <td>20分</td>
              <td>保険診療有</td>
            </tr>
          </table>
</div>
</div>
</section>
<section class="secBox" id="cnav14">
<h3 class="baseTitle">にきび・ニキビ跡治療　スターラックス照射</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th rowspan="2"><a href="/operations/nikibi#nikibi01">全顔</a></th>
              <td>1回</td>
              <td>110,000円<br><font color="red">(初回トライアル88,000円)</font></td>
            </tr>
            <tr>
              <td>1クール(5回)</td>
              <td>440,000円</td>
            </tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">額</a></th>
			  <td>1回</td>
			  <td>41,250円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>165,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">両目の下</a></th>
			  <td>1回</td>
			  <td>27,500円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>110,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">両こめかみ</a></th>
			  <td>1回</td>
			  <td>27,500円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>110,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">鼻と鼻周り</a></th>
			  <td>1回</td>
			  <td>66,000円<br><font color="red">(初回トライアル39,600円)</font></td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>264,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">両ほほ</a></th>
			  <td>1回</td>
			  <td>77,000円<br><font color="red">(初回トライアル55,000円)</font></td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>308,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">あご</a></th>
			  <td>1回</td>
			  <td>38,500円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>154,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">フェイスライン裏</a></th>
			  <td>1回</td>
			  <td>50,000円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>220,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">フェイスライン</a></th>
			  <td>1回</td>
			  <td>50,000円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>200,000円</td>
			</tr>
			<tr>
			  <th rowspan="2"><a href="/operations/nikibi#nikibi01">表面麻酔</a></th>
			  <td>1回（1カ所）</td>
			  <td>5,500円</td>
			</tr>
			<tr>
			  <td>1クール(5回)</td>
			  <td>22,000円</td>
			</tr>
          </table>
</div>
</div>
		  <p>
		  	● １クールは、４回分のご料金で５回照射が行え、最後の１回分が無料となります<br>
		  	● 初回トライアルをされてから、１クールをお申込みいただく場合は、合計６回の照射となります。<br>
		  	● こちらの金額は、ニキビ跡治療の金額となります。お顔の傷跡治療については、別料金体系となります。<br>お顔のお傷のご相談は<a href="#cnav11" style="text-decoration: underline;">こちら</a>をご覧ください
		  </p>
</section>
<section class="secBox" id="cnav15">
<h3 class="baseTitle">リストカット傷跡治療　スターラックス照射</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th rowspan="3"><a href="/operations/placenta#placenta07">傷跡</a></th>
              <td>5×5cm以下</td>
              <td>38,500円/回</td>
            </tr>
            <tr>
              <td>1クール(5回分)</td>
              <td>154,000円</td>
            </tr>
            <tr>
              <td>修正手術</td>
              <td>220,000円</td>
            </tr>
          </table>
		  <p>
		  	1クール（5回）行うことをおススメします。<!-- <br><b>※初回トライアル価格（会計時にお申し付けください）</b> -->
		  </p>
</div>
</div>
</section>
<section class="secBox" id="cnav17">
<h3 class="baseTitle">ニンニク・プラセンタ・ビタミンC注射・強ミノ</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tbody>
              <tr>
                <th><a href="/operations/placenta#placenta05">ニンニク</a></th>
                <td>2アンプル</td>
                <td>5分</td>
                <td>5,000円</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta/">強ミノ</a></th>
                <td>1アンプル</td>
                <td>5分</td>
                <td>3,000円</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta#placenta03">プラセンタ</a></th>
                <td>2アンプル</td>
                <td>5分</td>
                <td>5,000円</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta/">タオチン</a></th>
                <td>1アンプル</td>
                <td>5分</td>
                <td>3,000円</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta#placenta06">ビタミンC</a></th>
                <td>1アンプル</td>
                <td>5分</td>
                <td>3,000円</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta#placenta06">美容注射</a></th>
                <td>1本</td>
                <td>5分</td>
                <td>8,500円<br>
                  ⇒ 7,650円（10%オフ）</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta#placenta06">体力増強・健康注射</a></th>
                <td>1本</td>
                <td>5分</td>
                <td>11,000円<br>
                  &rArr; 9,900円（10%オフ）</td>
              </tr>
              <tr>
                <th><a href="/operations/placenta#placenta06">欲張りパック</a></th>
                <td>1本</td>
                <td>5分</td>
                <td>14,000円<br>
                  &rArr; 9,800円（30%オフ）</td>
              </tr>
            </tbody>
          </table>
</div>
</div>
          <p>点滴はプラス3,240円 （ ただしプラセンタは除く ）<br class="sp">プラセンタのみ保険診療有</p>
</section>
<section class="secBox" id="cnav18">
<h3 class="baseTitle">医療ピアス</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tbody>
              <tr>
                <th>耳</th>
                <td>1箇所</td>
                <td>3分</td>
                <td>3,000円</td>
              </tr>
              <!-- <tr>
                <th>ヘソ</th>
                <td>1箇所</td>
                <td>10分</td>
                <td>10,000円</td>
              </tr> -->
            </tbody>
          </table>
</div>
</div>
</section>
<!--
<section class="secBox" id="cnav19">
<h3 class="baseTitle">医療レーザー脱毛</h3>
<div class="baseTbl01 nowrap">
<div class="wrap cScroll">
<table class="mb20">
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">両ワキ(A)</a></th>
              <td>1回料金</td>
              <td>10,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>50,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">ビキニライン(B)</a></th>
              <td>1回料金</td>
              <td>20,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>100,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/datsumou/">(A)＋(B)</a></th>
              <td>1年フリー</td>
              <td>90,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">太股(C)</a></th>
              <td>1回料金</td>
              <td>55,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>250,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">下腿(D)</a></th>
              <td>1回料金</td>
              <td>45,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>150,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">ヒザ(E)</a></th>
              <td>1回料金</td>
              <td>10,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>50,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/datsumou/">(C)＋(D)＋(E)</a></th>
              <td>1年フリー</td>
              <td>400,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">足趾甲</a></th>
              <td>1回料金</td>
              <td>10,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>50,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">上腕(F)</a></th>
              <td>1回料金</td>
              <td>20,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>100,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">肘下(G)</a></th>
              <td>1回料金</td>
              <td>20,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>100,000円</td>
            </tr>
            <tr>
              <th><a href="/operations/datsumou/">(F)＋(G)</a></th>
              <td>1年フリー</td>
              <td>180,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">手指甲</a></th>
              <td>1回料金</td>
              <td>10,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>50,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">肩</a></th>
              <td>1回料金</td>
              <td>16,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>60,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">胸</a></th>
              <td>1回料金</td>
              <td>32,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>180,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">腹部</a></th>
              <td>1回料金</td>
              <td>24,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>140,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">背中</a></th>
              <td>1回料金</td>
              <td>48,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>250,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">腰</a></th>
              <td>1回料金</td>
              <td>24,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>14,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">ヒップ</a></th>
              <td>1回料金</td>
              <td>24,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>140,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">首</a></th>
              <td>1回料金</td>
              <td>22,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>120,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">うなじ</a></th>
              <td>1回料金</td>
              <td>30,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>150,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">乳輪周り</a></th>
              <td>1回料金</td>
              <td>12,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>70,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">へそ周り</a></th>
              <td>1回料金</td>
              <td>10,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>30,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">口周り</a></th>
              <td>1回料金</td>
              <td>22,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>120,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">鼻の下</a></th>
              <td>1回料金</td>
              <td>12,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>70,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">アゴ</a></th>
              <td>1回料金</td>
              <td>12,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>70,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">アゴ裏</a></th>
              <td>1回料金</td>
              <td>12,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>70,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">頬</a></th>
              <td>1回料金</td>
              <td>22,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>120,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/datsumou/">額</a></th>
              <td>1回料金</td>
              <td>22,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>120,000円</td>
            </tr>
            <tr>
              <th rowspan="2"><a href="/operations/laser/">男性ヒゲ</a></th>
              <td>1回料金</td>
              <td>30,000円</td>
            </tr>
            <tr>
              <td>1年フリー</td>
              <td>150,000円</td>
            </tr>
          </table>
</div>
</div>
</section>
-->
<section class="secBox" id="cnav20">
<h3 class="baseTitle">その他の診療</h3>
<!-- <p class="mb10">皮フ腫瘍（脂肪腫、粉瘤などのできもの）、陥没乳頭、乳頭縮小、処女膜再生、 膣縮小、クリトリス包茎、小陰唇縮小、発毛（プロペシア処方）</p> -->
<p><a href="/inquiry/" class="icon">料金はお問合せください</a></p>
</section>


<!--/#mainContents-->

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
