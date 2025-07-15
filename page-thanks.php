<?php
/*
Template Name: Thanks Page
*/
?>

<?php get_header(); ?>

<main>
  <?php
  // パラメータ取得
  $auto = isset($_GET['auto']) ? esc_html($_GET['auto']) : '';
  ?>
    <div id="mainContents">
        <main class="reservation2 completion">
            <div id="pageTitle" class="reservation" style="margin-bottom: 2200px;">
                <h2>カウンセリング・再診予約</h2>
                <p>カウンセリング・再診のご予約を受け付けております。<br>スターラックスの2回目以降の照射予約はお電話ください。</p>
            </div>
            <section class="secBox">
                <h3 class="baseTitle">〈予約完了〉カウンセリング・再診のご予約をうけたまわりました</h3>
                <p class="mb30">
                    ご予約を頂きありがとうございました。<br>
                    頂きました内容にてご予約をうけたまわりました。<br>
                    ご入力いただきましたメールアドレスに予約完了メールをお送りしておりますので、ご確認ください。<br>
                    <br>
                    ご予約の日時変更やキャンセルはお電話にて承っております。<br>
                    <br>
                    ※メールが受信できなかった場合はクリニックまでお電話ください<br>
                </p>
                <a href="/" class="btn-back">トップページへもどる</a>
            </section>
        </main>
    </div>
</main>

<?php get_footer(); ?>
