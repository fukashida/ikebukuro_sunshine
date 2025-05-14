<?php 
/* Template Name: 特商法ページ */
get_header(); 
?>
    <section class="page-law">
        <div id="pageTitle" class="<?php echo get_post_field('post_name', get_the_ID()); ?>">
        <h1><?php the_title(); ?></h1>
        <?php if(get_post_meta( get_the_ID(), 'titlesub', true )): ?>
        <p><?php echo get_post_meta(get_the_ID(),'titlesub', true);?></p>
        <?php endif; ?>
        </div>

        <h2>販売業者</h2>
        <p>池袋サンシャイン美容外科</p>
        
        <h2>運営責任者</h2>
        <p>鈴木 栄樹</p>
        
        <h2>所在地</h2>
        <p>〒170－0013<br>東京都豊島区東池袋1-15-3 近代ビル9F</p>
        
        <h2>お問い合わせ先</h2>
        <p>電話番号：<a href="tel:0120331244"><span class="number">0120-331-244</span></a></p>
        <p>メールアドレス：<a href="mailto:info@ike-sunshine.co.jp">info@ike-sunshine.co.jp</a></p>
        <p><a href="/inquiry/">お問い合わせフォーム</a>はこちら</p>
        
        <h2>販売価格</h2>
        <p>各施術ごとに異なります。詳細は <a href="/charge/">こちら</a> をご確認ください。</p>
        <p>※価格は全て税込みです。</p>
        
        <h2>商品代金以外の必要料金</h2>
        <ul>
            <li>麻酔代・処方薬代（施術内容に応じて追加費用が発生する場合があります）</li>
            <li>カウンセリング料（無料の場合はその旨を記載）</li>
            <li>交通費（クリニックまでの交通費はお客様負担）</li>
        </ul>
        
        <h2>お支払い方法</h2>
        <p>治療のご予約時に、治療代金の20%を予約金としてお預かりします。</p>
        <p>予約金は治療代金の一部となるため、当日のお支払い時に差し引かれます。</p>
        <h3>予約金の振込先：</h3>
        <ul>
            <li>銀行名：みずほ銀行 池袋支店</li>
            <li>口座番号：普通 1124166</li>
            <li>名義名：スズキ シゲキ</li>
            <li>※振込名義は診察券番号下5桁+患者様氏名</li>
        </ul>
        <h3>現金</h3>
        <p>現金でのお支払いが可能です。</p>
        
        <h3>クレジットカード</h3>
        <p>クレジットカードでのお支払いが可能です。VISA / MasterCard / JCB / AMEX / NICOS / DCカードが利用できます。2回払いは手数料無料です。</p>
        
        <h3>銀行キャッシュカード</h3>
        <p>銀行口座から手数料なしの一括引き落としが可能です。デビット機能、ゆうちょ銀行や地銀、信用金庫のカードも利用できます。特別な事前申請などは必要ありません。※お口座に残高がないと引き落としができません。</p>
        
        <h3>電子マネー</h3>
        <p>AirPay導入により、Suica / PASMO / TOICA / manaca / ICOCA / SUGOCA / nimoca / はやかけん / iD / QUICPay などの電子マネーのご利用が可能です。</p>
        
        <h3>医療ローン</h3>
        <p>6万円以上の場合、患者様ご指定の口座からの分割引き落としを行うことが可能です。身分証明書をご提示の上、必要書類にご記入いただきます。分割回数・金額を自由に選択いただけます。途中解約も可能です。</p>
        
        <h2>お支払い期限</h2>
        <p>クレジットカード・電子マネー：ご利用時</p>
        <p>医療ローン：契約内容に準ずる</p>
        
        <h2>キャンセル・返金について</h2>
        <p><span class="bold">カウンセリング予約のキャンセル：</span>予約日の<span style="color:red;">当日まで無料</span></p>
        <p><span class="bold">施術の変更・キャンセル：</span>治療日当日の予約変更は1回消化扱いとなります。変更希望の場合は前日17:00までにご連絡ください。</p>
        <p><span class="bold">返金対応：</span>予約後のキャンセルは、予約金の返金ができません。医療ローンでの支払いの場合、キャンセルにはクリニックでの手続きが必要です。</p>
        <p class="up"></p>
        <p>変更・キャンセルのご連絡は、電話（<a href="tel:0120331244"><span class="number">0120-331-244</span></a>）またはメール（<a href="mailto:info@ike-sunshine.co.jp">info@ike-sunshine.co.jp</a>）にてご対応しております。</p>
        
        <h2>提供時期</h2>
        <p>カウンセリング：ご予約に応じて随時提供</p>
        <p>施術：診察後、予約日に実施</p>
        
        <h2>個人情報の取り扱い</h2>
        <p>個人情報の取り扱いについては <a href="/privacy_policy">こちら</a> をご確認ください。</p>
    </section>
<?php get_footer(); ?>
