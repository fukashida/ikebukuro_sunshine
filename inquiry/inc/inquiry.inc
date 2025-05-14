<?php
	//初期処理
	//データのセッション処理
	session_start();
	$session = session_id();

	//エラーレポート
	error_reporting(0);

	//読み込み
	require_once dirname(__FILE__).'/common.inc';
	require_once dirname(__FILE__).'/common_chk.inc';

	//設置ディレクトリ(ルートから)
	$dir = "/inquiry";

	//必須マスター
	$hit_key = array(
		'name', 'kname', 'c1', 'old', 'tel', 'mail', 'comment'
	);

	//管理者アドレス設定
	$mail_address = "info@ike-sunshine.co.jp";

	//カテゴリーマスター
	$mst_arr_c1 = array("男性" => "男性", "女性" => "女性" );
	$mst_treatment = array(
		"わきが治療（保険適用）" => "わきが治療（保険適用）",
		"多汗症治療" => "多汗症治療",
		"タトゥー・刺青除去手術" => "タトゥー・刺青除去手術",
		"ニキビ跡・傷跡・毛穴治療・リストカット傷跡" => "ニキビ跡・傷跡・毛穴治療・リストカット傷跡",
		"ホクロ・イボ除去・皮膚腫瘍等のでき物(保険適用)" => "ホクロ・イボ除去・皮膚腫瘍等のでき物(保険適用)",
		"シミ・そばかす・肝班・色素沈着" => "シミ・そばかす・肝班・色素沈着",
		"フェイス・デザイン(お顔のシワ・タルミ・二重・鼻)" => "フェイス・デザイン(お顔のシワ・タルミ・二重・鼻)",
		"プラセンタ・にんにく・ビタミン注射" => "プラセンタ・にんにく・ビタミン注射",
		"男性型脱毛症治療（プロペシア）" => "男性型脱毛症治療（プロペシア）"
	);

//index.php
	if($_SERVER[SCRIPT_NAME] == $dir."/index.php"){
		$input = $_SESSION[input];
		$msg = $_SESSION[msg];
		unset($_SESSION[input]);
		unset($_SESSION[msg]);
	//メニュー
	$rad_c1 = get_radio($mst_arr_c1, 'c1', '', $input['c1']);
	$chk_treatment = get_checkbox2($mst_treatment, "treatment", true, $input['treatment']);
	}
	
//check.php
	if($_SERVER[SCRIPT_NAME] == $dir."/check.php"){
		//入力情報のチェック
		$msg = in_chk_arr($hit_key);
		if(count($msg) != 0){
			$_SESSION[input] = $_POST;
			$_SESSION[msg] = $msg;
			$jump = $dir."/index.php";
			header("Location:$jump");
			exit;
		}
	}

//fin.php
	if($_SERVER[SCRIPT_NAME] == $dir."/finish.php"){
		if(isset($_POST[re])){
			unset($_SESSION[input]);
			unset($_SESSION[msg]);
			$_SESSION[input] = $_POST;
			$jump = $dir."/index.php";
			header("Location:$jump");
			exit;
		}

		//送信処理
		if(isset($_POST[send])){
			mb_internal_encoding("UTF-8");

			//お客様用
			$to = $_POST[mail];
			$subject = "【お問い合わせありがとうございました】";
			$body = "$_POST[name]様

ホームページよりお問い合わせありがとうございました。
後ほど当院より折り返しご連絡を差し上げますので、もうしばらくお待ちください。

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
　　　　　　　　　　　　　　　[ 入力情報 ]
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ";
$body .= mailbodyset();
$body .= "
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
";
			$from = $mail_address;
			mb_send_mail($to,$subject,$body,"From:".$from);

			//社内確認用
			$to = $mail_address;
			$subject = "【池袋サンシャインHPよりお問い合わせ】";
			$body = "$_POST[name]様

池袋サンシャインHPよりお問い合わせ

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
　　　　　　　　　　　　　　　[ 入力情報 ]
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ";
$body .= mailbodyset();
$body .= "
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
";

$body .= "
";
			$from = $_POST[mail];
			mb_send_mail($to,$subject,$body,"From:".$from);

			unset($_SESSION[input]);
			unset($_SESSION[msg]);
		}
	}

	//メール本文成型(共通読み込み用)
	function mailbodyset(){
		//ご関心のある治療項目整形
		$treatment = "";
		if(is_array($_POST['treatment'])){
			foreach($_POST['treatment'] as $val){
				if($val != ""){
					$treatment .= "{$val}\n";
				}
			}
		}
		
		$body = "

【お名前】
$_POST[name]

【ふりがな】
$_POST[kname]

【性別】
$_POST[c1]

【年齢】
$_POST[old]

【電話番号】
$_POST[tel]

【メールアドレス】
$_POST[mail]

【関心のある治療項目】
$treatment
その他：$_POST[other]

【ご意見・ご質問】
$_POST[comment]
";
		return $body;
	}

?>