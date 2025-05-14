<?php
/* 入力チェックモジュール */
	//全てのPOSTフォーム項目について、全角英数を半角英数へ強制変換

	if(is_array($_POST)){
		foreach($_POST as $POST_key => $POST_val){
			if(!is_array($_POST[$POST_key]) && $_POST[$POST_key] != ""){
				$_POST[$POST_key] = mb_convert_kana($POST_val, "a", "utf-8");
				$_POST[$POST_key] = str_replace("'", "’", $_POST[$POST_key]);	//データベース回避
				if(preg_match("/birth_m/u",$POST_key) || preg_match("/birth_d/u",$POST_key) || preg_match("/daym/u",$POST_key) || preg_match("/dayd/u",$POST_key)){
					$_POST[$POST_key] = sprintf("%02d",$_POST[$POST_key]);	//日付2ケタ対応
				}
			}
		}
	}

	//入力チェック
	/*
	 * $hit_key		指定したIDがチェック対象になる
	 * $option		個別設定モジュールの為に必要
	 */
	function in_chk_arr($hit_key = array(), $option=""){
		$msg = array();

		foreach($hit_key as $val){
			$err = in_chk_mod($val, $in="0", $option);
			if(is_array($err)) $msg = array_merge($msg, $err);
		}

		return $msg;
	}



	//個別設定モジュール
	/* 
	 * $in		0:必須	1:必須解除
	 * $option	同一項目回避
	 */
	function in_chk_mod($key, $in="0", $option=""){
		if($key == "in_dayy"){
			if (!is_blank($_POST[in_dayy])) {
				if (is_year($_POST[in_dayy])) {
					$iy = $_POST[in_dayy];
				} else {
					$msg[in_dayy] = "年を正しく入力してください。";
				}
			}else{
				$msg[in_dayy] = "年を入力してください。";
			}
			if (is_month($_POST[in_daym])) {
				$im = $_POST[in_daym];
			}else{
				$msg[in_daym] = "月を入力してください。";
			}
			if (is_day($_POST[in_dayd])) {
				$id = $_POST[in_dayd];
			}else{
				$msg[in_dayd] = "日を入力してください。";
			}
			if (isset($iy) && isset($im) && isset($id)) {
				$_POST['in_day'] = "{$iy}-{$im}-{$id}";
			}
		}
		elseif($key == "in_daym" || $key == "in_dayd"){
			//上記の処理の為、処理しない
		}

		elseif($key == "mail"){
			if(is_blank($_POST[mail]) || is_blank($_POST[mail_conf])){
				$msg[mail] = 'メールアドレスを入力してください。';
			}elseif ($_POST[mail] == $_POST[mail_conf]){
				if (!is_mail($_POST[mail])){
					$msg[mail] = 'メールアドレスの書式を正しく入力してください。';
				}elseif(mb_strlen($_POST[mail]) > 100){
					$msg[mail] = '文字数の制限を超えています。';
				}
			}else{
				$msg[mail] = 'メールアドレスが入力用の内容と一致しません。';
			}
		}

		elseif($key == "name1"){
			if(is_blank($_POST[name1])){
				$msg[name1] = '姓を入力してください。';
			}elseif(mb_strlen($_POST[name1]) > 25){
				$msg[name1] = '文字数の制限を超えています。';
			}else{
				$_POST[name1] = mb_convert_kana($_POST[name1]);
			}
			if(is_blank($_POST[name2])){
				$msg[name2] = '名を入力してください。';
			}elseif(mb_strlen($_POST[name2]) > 25){
				$msg[name2] = '文字数の制限を超えています。';
			}else{
				$_POST[name2] = mb_convert_kana($_POST[name2]);
			}
			$_POST[name] = $_POST[name1]."　".$_POST[name2];
		}
		elseif($key == "name2"){
			//上記の処理の為、処理しない
		}

		elseif($key == "name_kana1"){
			if(is_blank($_POST[name_kana1])){
				$msg[name_kana1] = 'ふりがなを入力してください。';
			}elseif(mb_strlen($_POST[name_kana1]) > 50){
				$msg[name_kana1] = '文字数の制限を超えています。';
			}else{
				$_POST[name_kana1] = mb_convert_kana($_POST[name_kana1]);
			}
			if(is_blank($_POST[name_kana2])){
				$msg[name_kana2] = 'ふりがなを入力してください。';
			}elseif(mb_strlen($_POST[name_kana2]) > 50){
				$msg[name_kana2] = '文字数の制限を超えています。';
			}else{
				$_POST[name_kana2] = mb_convert_kana($_POST[name_kana2]);
			}
			$_POST[name_kana] = $_POST[name_kana1]."　".$_POST[name_kana2];
		}
		elseif($key == "name_kana2"){
			//上記の処理の為、処理しない
		}

		elseif($key == "name_kana"){
			if(is_blank($_POST[$key])){
				$msg[$key] = "{$key}は必須項目です。";
			}else{
				$_POST[$key] = mb_convert_kana($_POST[$key], "KVC", "utf-8");
			}
		}

		elseif($key == "birth_y"){
			if (!is_blank($_POST[birth_y])) {
				if (is_year($_POST[birth_y])) {
					$y = $_POST[birth_y];
				} else {
					$msg[birth_y] = '年を正しく入力してください。';
				}
			} else {
				$msg[birth_y] = '年を入力してください。';
			}
			if (is_month($_POST[birth_m])) {
				$m = $_POST[birth_m];
			}else{
				$msg[birth_m] = '月を入力してください。';
			}
			if (is_day($_POST[birth_d])) {
				$d = $_POST[birth_d];
			}else{
				$msg[birth_d] = '日を入力してください。';
			}
			if (isset($y) && isset($m) && isset($d)) {
				$_POST['birthday'] = "{$y}-{$m}-{$d}";
			}
		}
		elseif($key == "birth_m" || $key == "birth_d"){
			//上記の処理の為、処理しない
		}

		elseif($key == "tel"){
			if(is_blank($_POST[tel]) && is_blank($_POST[tel2])){
				$msg[tel] = '電話番号か携帯電話番号のいずれかを入力してください。';
				$msg[tel2] = '電話番号か携帯電話番号のいずれかを入力してください。';
			}else{
				if(!is_blank($_POST[tel])){
					if(mb_strlen($_POST[tel]) > 20){
						$msg[tel] = '文字数の制限を超えています。';
					}else{
						$_POST[tel] = str_replace("-", "", $_POST[tel]);
						if(is_number($_POST[tel])){
							$_POST[tel] = mb_convert_kana($_POST[tel]);
						}else{
							$msg[tel] = '電話番号を正しく入力してください。';
						}
					}
				}

				if(!is_blank($_POST[tel2])){
					if(mb_strlen($_POST[tel2]) > 20){
						$msg[tel2] = '文字数の制限を超えています。';
					}else{
						$_POST[tel2] = str_replace("-", "", $_POST[tel2]);
						if(is_number($_POST[tel2])){
							$_POST[tel2] = mb_convert_kana($_POST[tel2]);
						}else{
							$msg[tel2] = '携帯電話番号を正しく入力してください。';
						}
					}
				}
			}
		}

		elseif($key == "company"){
			//文字数チェックのみ
			if(mb_strlen($_POST[company]) > 100){
				$msg[company] = '文字数の制限を超えています。';
			}else{
				$_POST[company] = mb_convert_kana($_POST[company]);
			}
		}

		elseif($key == "zip01" || $key == "zip02"){
			//郵便番号数値チェック
			if(!ctype_digit($_POST[$key]) && !is_blank($_POST[$key])){
				$msg[$key] = '郵便番号を正しく入力してください。';
			}
		}
		
		elseif($key == "c_name"){
			if($_POST['c2'] == "法人"){
				if(is_blank($_POST[$key])){
					$msg[$key] = "{$key}は必須項目です。";
				}
			}
		}
		
		//その他必須チェックのみ
		else{
			if(is_blank($_POST[$key])){
				$msg[$key] = "{$key}は必須項目です。";
			}
		}

		//必須のエラークリア(緊急用の為、基本は使用しない)
		if($in == 1){
			$msg[$key] = "";
		}

		//バックスラッシュ回避
//		$_POST[comment] = stripslashes($_POST[comment]);

		return $msg;
	}

?>
