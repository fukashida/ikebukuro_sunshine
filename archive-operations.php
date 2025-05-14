<?php get_header(); ?>

<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<!--/ここからコンテンツ-->
<div id="mainContents">
<main>

<div id="pageTitle" class="operations">
<h1>施術一覧</h1>
<p>池袋サンシャイン美容外科の施術一覧</p>
</div>

<div class="operations-container">
    <ul class="operationsList clrfix">
        <?php
        $operations = array(
            array(
                "slug" => "skincare",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist01.jpg",
                "alt" => "ホクロ除去・イボ治療",
                "title" => "ホクロ・イボ（保険適用）",
                "desc" => "ホクロ・イボは保険で一度に除去"
            ),
            array(
                "slug" => "iboaza",
                "image" => "/wp-content/uploads/2020/10/im_operationslist01_1.jpg",
                "alt" => "アザ除去(保険適用)",
                "title" => "大きなホクロ・あざ・いぼ（保険適用）",
                "desc" => "手術で確実に除去（保険適用）"
            ),
            array(
                "slug" => "wakiga",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist05.jpg",
                "alt" => "わきが治療（保険適用）",
                "title" => "わきが治療（保険適用）",
                "desc" => "ワキの臭い対策には保険適用のわきが手術で永久に解決いたします"
            ),
            array(
                "slug" => "hyperhidrosis",
                "image" => "/wp-content/uploads/2020/10/im_operationslist05_1.jpg",
                "alt" => "多汗症",
                "title" => "多汗症",
                "desc" => "とまらない汗には筋肉の縮小に作用する薬剤注射による治療がお勧めです"
            ),
            array(
                "slug" => "mwlift",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist16.jpg",
                "alt" => "MWデュアルリフトによるリフトアップ・小顔治療",
                "title" => "リフトアップ・小顔治療",
                "desc" => "切らずにフェイスラインを引き上げる"
            ),
            array(
                "slug" => "laser",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist15.jpg",
                "alt" => "傷跡・リストカット治療",
                "title" => "リストカット・傷跡",
                "desc" => "リストカット・傷跡の治療にはスターラックスレーザーがお勧めです"
            ),
            array(
                "slug" => "nikibi",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist02.jpg",
                "alt" => "ニキビ・ニキビ跡",
                "title" => "ニキビ・ニキビ跡",
                "desc" => "ニキビ・ニキビ跡の治療にはスターラックスレーザーがお勧めです"
            ),
            array(
                "slug" => "shiwa",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist10.jpg",
                "alt" => "交通事故の傷跡治療",
                "title" => "交通事故の傷跡治療",
                "desc" => "交通事故や傷害の傷跡に悩んでいる方へ"
            ),
            array(
                "slug" => "faceline",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist06.jpg",
                "alt" => "フェイス・ボディライン",
                "title" => "注入療法",
                "desc" => "鼻や輪郭の悩みに短時間でコンプレックス解消"
            ),
            array(
                "slug" => "futae",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist03.jpg",
                "alt" => "二重まぶた・タルミ取り",
                "title" => "二重まぶた・タルミ取り",
                "desc" => "お望みの美しい目元へと生まれ変わります"
            ),
            array(
                "slug" => "bodyline",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist07.jpg",
                "alt" => "刺青除去・タトゥー除去",
                "title" => "刺青除去・タトゥー除去",
                "desc" => "レーザーで取れない刺青・タトゥー除去"
            ),
            array(
                "slug" => "placenta",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist08.jpg",
                "alt" => "シミ・肝斑・くすみ治療",
                "title" => "シミ・肝斑・くすみ治療",
                "desc" => "東大式トレチノインクリーム療法"
            ),
            array(
                "slug" => "datumousyou",
                "image" => "/wp-content/themes/ikebukuro_sunshine/img/operations/im_operationslist12.jpg",
                "alt" => "男性型脱毛症治療（プロペシア）",
                "title" => "男性型脱毛症治療（プロペシア）",
                "desc" => "プロペシアを処方いたします"
            ),
        );

        foreach ($operations as $operation) {
            $custom_link = site_url('/operations/' . $operation['slug']);
            ?>
            <li>
                <a href="<?php echo esc_url($custom_link); ?>">
                    <dl class="clrfix">
                        <dt><img src="<?php echo esc_url($operation['image']); ?>" alt="<?php echo esc_attr($operation['alt']); ?>"></dt>
                        <dd>
                            <h3><span><?php echo esc_html($operation['title']); ?></span></h3>
                        </dd>
                    </dl>
                    <p><?php echo esc_html($operation['desc']); ?></p>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>

</main>
</div>
<!--/#mainContents-->
<!--/ここまでコンテンツ-->


<div class="breadcrumbs">
<ol class="clrfix">
<li><a href="/">HOME</a></li>
<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?><li><a href="<?php echo get_page_link( $parid );?>"><?php echo get_page($parid)->post_title; ?></a></li>
<?php } ?>
<li><?php the_title(); ?></li>
</ol>
</div>

<?php get_footer(); ?>
