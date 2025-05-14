<?php
// /wp-content/themes/ikebukuro_sunshine/receive.php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// ✅ POSTデータ（JSからのfetch）を受け取る
$data = json_decode(file_get_contents("php://input"), true);
$bookingID = $data['bookingID'] ?? null;

// 例：ログ出力やGAS送信で使う
file_put_contents(__DIR__ . "/log.txt", "予約ID: " . $bookingID . PHP_EOL, FILE_APPEND);

$referrer = $data['tracking']['referrer'] ?? '未取得';
$link = $data['tracking']['link'] ?? '未取得';

// ✅ UTM パラメータ保存（GET優先 → リファラー）
if (!empty($_GET)) {
    $_SESSION['utm_data'] = $_GET;
} else {
    // 🔽 ここに2重デコードしてreferrerから取得する処理を追加
    $decodedReferrer = urldecode(urldecode($referrer)); // ←ここ重要！
    
    // ログで確認用（オプション）
    file_put_contents(__DIR__ . "/log.txt", "\n[Decoded Referrer]\n" . $decodedReferrer, FILE_APPEND);

    if (strpos($decodedReferrer, 'utm_') !== false) {
        $refUrlParts = parse_url($decodedReferrer);
        if (isset($refUrlParts['query'])) {
            parse_str($refUrlParts['query'], $refQuery);
            $_SESSION['utm_data'] = $refQuery;
        }
    }
}

file_put_contents(__DIR__ . "/log.txt", "\n[utm_data SESSION]\n" . print_r($_SESSION['utm_data'], true), FILE_APPEND);

// ✅ 必ずここで読み込む！
$utmData = $_SESSION['utm_data'] ?? [];

$data['tracking'] = [
    'referrer' => $referrer,
    'link' => $link,
    'bookingID' => $bookingID,
    'utm_source' => $utmData['utm_source'] ?? '未設定',
    'utm_medium' => $utmData['utm_medium'] ?? '未設定',
    'utm_campaign' => $utmData['utm_campaign'] ?? '未設定',
    'utm_content' => $utmData['utm_content'] ?? '未設定',
    'utm_term' => $utmData['utm_term'] ?? '未設定',
    'device' => $utmData['device'] ?? '未設定',
];

// ✅ GASへ送信
$gasUrl = "https://script.google.com/macros/s/AKfycbw1MwqxHfmK0EECWv1RMsAAKuQMhFa6Sv5Xpg37fcFdx3KixFVEf5_HPTkixgUmrGZ8/exec"; // ←あなたのGAS URL

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/json",
        'content' => json_encode($data),
        'timeout' => 5
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($gasUrl, false, $context);

// ✅ GASレスポンスもログ
file_put_contents(__DIR__ . "/log.txt", "\n[GAS Response]\n" . $response, FILE_APPEND);

echo "✅ 受信＆送信OK";
