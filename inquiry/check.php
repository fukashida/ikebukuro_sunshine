<?php
	//初期処理
	//データのセッション処理
	session_start();
	$session = session_id();

	//エラーレポート
	// error_reporting(0);
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//読み込み
	/* 利便性向上のモジュール */

		//ログアウト
		function logout(){
			unset($_SESSION[info]);
			session_destroy();
		}

		//エラー処理
		function error_page(){
			header('content-type:text/html;charset=UTF-8');
			print"不正な処理が行われました。<br>アドレスは書き変えないでください。";
			exit;
		}

		//ユーザーデータ取得
		function userinit(){
			$sqls[init] = "select distinct * from sys_user where login = '" . $_SESSION[info][login] . "' and pass = '" . $_SESSION[info][pass] . "' limit 0, 1 ";
			$ret = execdb($sqls);
			while($arrtmp = mysql_fetch_array($ret[init], MYSQL_ASSOC)){
				$arruser[id]    = $arrtmp[id];
				$arruser[login] = $arrtmp[login];
				$arruser[pass]  = $arrtmp[pass];
				$arruser[name]  = $arrtmp[name];
				$arruser[mail]  = $arrtmp[mail];
				$arruser[type]  = $arrtmp[type];
			}
			return $arruser;
		}

		//メンバーデータ取得
		function membersinit(){
			$sqls[init] = "select distinct * from tbl_members where id = '{$_SESSION[info][type]}' limit 0, 1 ";
			$ret = execdb($sqls);
			while($arrtmp = mysql_fetch_array($ret[init], MYSQL_ASSOC)){
				$arruser = $arrtmp;
			}
			return $arruser;
		}

		//HTML用に改行を置き換え
		function brchange($str){
			$str = str_replace("\n","<br>",$str);
			return $str;
		}

		//オリジナル配列内の文字コードを変換するモジュール
		function mb_convert_array($arr, $from, $to){
			if(is_array($arr)) {
				foreach($arr as $k => $v) {
					$arr[$k] = mb_convert_array($v, $from, $to);
				}
			} else {
				//英数字とスペースを全角から半角へ
				$arr = mb_convert_kana($arr, "as", $from);
				//文字コードの変換
				$arr = mb_convert_encoding($arr, $to, $from);
				//文頭文末の空白スペースを取り除く
				//$arr = trim($arr);
			}
			return $arr;
		}

		//住所から都道府県検索
		function change_pref($data){
			$pref = array("北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県", "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県");
			foreach ($pref as $val) {
				if(mb_substr_count($data, $val, "UTF-8") != 0){
					$ture_pref = $val;
				}
			}
			return $ture_pref;
		}

		//携帯UA取得
		$agent = mobile($_SERVER["HTTP_USER_AGENT"]);
		/**
		 *
		 * 空欄チェック
		 *
		**/
		function is_blank(&$val) {
	//		$val = replace_special_character(mb_trim($val));
			if (empty($val)) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 *
		 * メールアドレスチェック
		 *
		**/
		function is_mail($mail) {
			if (trim($mail, '　') != '' && preg_match("/^[0-9a-zA-Z]+[\w\._\+-]{0,}@[\w_-]+\.[\w\._-]+$/", $mail)) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 *
		 * 数値チェック
		 *
		**/
		function is_number(&$val) {
			$val = mb_convert_kana($val, 'n');
			if (preg_match("/^[0-9\.]+$/", $val)) {
				return true;
			}
			return false;
		}

		/**
		 *
		 * 文字数チェック
		 *
		**/
		function is_len($val, $len, $multibyte=false) {
			if ($multibyte) {
				if (mb_strlen($val) == $len) {
					return true;
				}
			} else {
				if (strlen($val) == $len) {
					return true;
				}
			}
			return false;
		}

		/**
		 *
		 * URLチェック
		 *
		**/
		function is_url($url) {
			if (mb_trim($url) != '' && preg_match('/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/', $url)) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 *
		 * 年チェック(1896 ～ 今年+25年まで)
		 *
		**/
	//	function is_year(&$val) {
	//		$begin = 1896;
	//		$end   = date("Y") + 25;
	//		if (is_number($val)) {
	//			if ($val >= $begin && $val <= $end) {
	//				return true;
	//			} else {
	//				return false;
	//			}
	//		}
	//		return false;
	//	}

		/**
		 *
		 * 月チェック
		 *
		**/
	//	function is_month(&$val) {
	//		$begin = 1;
	//		$end   = 12;
	//		if (is_number($val)) {
	//			if ($val >= $begin && $val <= $end) {
	//				return true;
	//			} else {
	//				return false;
	//			}
	//		}
	//		return false;
	//	}
		/**
		 *
		 * 日チェック
		 *
		**/
	//	function is_day(&$val) {
	//		$begin = 1;
	//		$end   = 31;
	//		if (is_number($val)) {
	//			if ($val >= $begin && $val <= $end) {
	//				return true;
	//			} else {
	//				return false;
	//			}
	//		}
	//		return false;
	//	}
		/**
		 *
		 * 時チェック
		 *
		**/
		function is_hour(&$val) {
			$begin = 0;
			$end   = 23;
			if (is_number($val)) {
				if ($val >= $begin && $val <= $end) {
					return true;
				} else {
					return false;
				}
			}
			return false;
		}
		/**
		 *
		 * 分チェック
		 *
		**/
		function is_minute(&$val) {
			$begin = 0;
			$end   = 59;
			if (is_number($val)) {
				if ($val >= $begin && $val <= $end) {
					return true;
				} else {
					return false;
				}
			}
			return false;
		}

		function sei2wa($y, $m, $d) {
			$seireki = array (
				'meiji'  => 18680908,
				'taisho' => 19120730,
				'showa'  => 19261215,
				'heisei' => 19890108
			);
			$ymd = $y * 10000 + $m * 100 + $d;

			if ($seireki['meiji'] > $ymd) {
				return $y . '年' . $m . '月' . $d . '日';
			}
			if ($seireki['taisho'] > $ymd && $seireki['meiji'] <= $ymd) {
				return '明治' . ($y - 1867) . '年' . $m . '月' . $d . '日';
			}
			if ($seireki['showa'] > $ymd && $seireki['taisho'] <= $ymd) {
				return '大正' . ($y - 1911) . '年' . $m . '月' . $d . '日';
			}
			if ($seireki['heisei'] > $ymd && $seireki['showa'] <= $ymd) {
				return '昭和' . ($y - 1925) . '年' . $m . '月' . $d . '日';
			}
			if ($seireki['heisei'] <= $ymd) {
				return '平成' . ($y - 1988) . '年' . $m . '月' . $d . '日';
			}
		}

		/**
		 *
		 * マルチバイト対応 trim
		 *
		**/
		function mb_trim($str) {
			return mb_ereg_replace('^[[:space:]]*(.*?)[[:space:]]*$', '\\1', $str);
		}

		/**
		 *
		 * データをPostして、結果のソースを返す
		 *
		 * @param $url 送信先
		 * @param $post ポストデータ ex 'r=aaa&i=bbb&p=ccc'
		 * @param $referer リファラー
		 * @param $agent ユーザーエージェント
		 *
		**/
		function get_src($url, $referer='http://www.google.com', $post=null, $agent="'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C)'") {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_REFERER, $referer);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			if ($post) {
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			}
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$src = curl_exec($ch);
			curl_close ($ch);
			return $src;
		}

		//文字エンコード変換
		function encode($data) {
			$data = mb_convert_encoding($data, "SJIS", "auto");
			return $data;
		}

		//携帯端末のユーザエージェントを判定
		function mobile($data){
			if (preg_match("/^DoCoMo\/[12]\.0/i", $data) || preg_match("/Slurp/i", $data)) {
				return "i";// i-mode
			} elseif (preg_match("/^(J\-PHONE|Vodafone|MOT\-[CV]980|SoftBank|Semulator)\//i", $data)) {
				return "s";// softbank
			} elseif (preg_match("/^KDDI\-/i", $data) || preg_match("/UP\.Browser/i", $data)) {
				return "e";// ezweb
			} elseif(preg_match("/^PDXGW/i", $data) || preg_match("/(DDIPOCKET|WILLCOM);/i", $data)) {
				return "w";// willcom
			} elseif(preg_match("/^L\-mode/i", $data)) {
				return "l";// l-mode
			} elseif(preg_match("/(iPhone|iPod)/", $data)) {
				return "ip";// iPhone/iPod
			} else {
				return "p";// pc
			}
		}

		function doctype() {
			global $agent;
			$html = "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ja\" lang=\"ja\">\n"
				. "<head>\n";

			switch($agent) {
				case "i":// i-mode
					$doc = "<!DOCTYPE html PUBLIC \"-//i-mode group (ja)//DTD XHTML i-XHTML(Locale/Ver.=ja/2.3) 1.0//EN\" \"i-xhtml_4ja_10.dtd\">\n";
					$content = "<meta http-equiv=\"Content-Type\" content=\"application/xhtml+xml; charset=Shift_JIS\" />";
					break;

				case "s":// softbank
					$doc = "<!DOCTYPE html PUBLIC \"-//J-PHONE//DTD XHTML Basic 1.0 Plus//EN\" \"xhtml-basic10-plus.dtd\">\n";
					$content = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Shift_JIS\" />";
					break;

				case "e":// ezweb
					$doc = "<!DOCTYPE html PUBLIC \"-//OPENWAVE//DTD XHTML 1.0//EN\" \"http://www.openwave.com/DTD/xhtml-basic.dtd\">\n";
					$content = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Shift_JIS\" />";
					break;

				default: // other
					$doc = "<!DOCTYPE html PUBLIC \"-//WAPFORUM//DTD XHTML Mobile 1.0//EN\" \"http://www.wapforum.org/DTD/xhtml-mobile10.dtd\">\n";
					$content = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Shift_JIS\" />";
					$html = "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ja\">\n"
						. "<head>\n";
					break;
			}
			return "<?xml version=\"1.0\" encoding=\"Shift_JIS\"?>\n".$doc.$html.$content;
		}

		//スクロールメッセージ出力
		function print_scroll_message($message="", $bgcolor="#0066ff", $fontColor="#ffffff", $fontSize="xx-small") {
			if (empty($message)) {
				$message = "スクロールメッセージサンプル";
			}
			return "<div style=\"display:-wap-marquee;-wap-marquee-loop:infinite; background-color:{$bgcolor}; color:{$fontColor}; font-size:{$fontSize}\">{$message}</div>\n";
		}

		/**
		 *
		 * メニュー出力
		 *
		**/
		function set_menu($url, $menu, $key=null, $current="background-color:#ff4500;color:#ffffff") {
			if ($url == "" || $menu == "") {
				return "";
			}
			if ($_SERVER['REQUEST_URI'] == $url) {
				echo "<span style=\"{$current}\">{$menu}</span>";
			} else {
				if (is_null($key)) {
					return "<a href=\"{$url}\">{$menu}</a>";
				} else {
					return "<a href=\"{$url}\" accesskey=\"{$key}\">{$menu}</a>";
				}
			}
		}

		/**
		 *
		 * スペーサー
		 *
		**/
		function spacer($height, $spacer_gif="/wp/common/spacer.gif") {
			return "<div style=\"height:{$height}px;\"><img src=\"{$spacer_gif}\" width=\"1\" height=\"{$height}\" alt=\"\" /></div>";
		}


		/**
		 *
		 * ボーダー
		 *
		**/
		function border($height=1, $color="#000000", $spacer_gif="/wp/common/spacer.gif") {
			return "<div style=\"height:{$height}px;background-color:{$color};\"><img src=\"{$spacer_gif}\" width=\"1\" height=\"{$height}\" alt=\"\" /></div>";
		}

		/**
		 *
		 * 生年月日から年齢を求める
		*
		**/
		function get_age($birthday=array()) {
			if (empty($birthday['year']) || empty($birthday['month']) || empty($birthday['day'])) {
				return false;
			}
			$year  = date('Y');
			$month = date('n');
			$day   = date('j');
			$b_year  = $birthday['year'];
			$b_month = $birthday['month'];
			$b_day   = $birthday['day'];

			$age = $year - $b_year;
			if ($month < $b_month) {
				$age--;
			} elseif ($month == $b_month) {
				if ($day < $b_day) {
					$age--;
				}
			}
			return $age;
		}

		/**
		 *
		 * 年度を求める
		 * $startMonth	年度を切り替える月(デフォルト4月)
		 * $timestamp	年度を求めたい日付
		 *
		**/
		function getFiscalYear($startMonth=4, $timestamp=FALSE) {
			if ($startMonth < 1 || $startMonth > 12) {
				return FALSE;
			}

			//日付が省略された場合は現在の日時を使用
			if ($timestamp === FALSE) {
				$date = getdate();
			} else {
				$date = getdate($timestamp);
			}

			//年度を計算する
			$year = $date['year'];
			$month = $date['mon'] - ($startMonth - 1);
			$result = getdate(mktime(0, 0, 0, $month, 1, $year));

			return $result['year'];
		}

		/**
		 *
		 * 特殊文字変換
		 *
		 */
		function replace_special_character($str) {
			$ret = $str;
			$arr = array(
				"\xE2\x85\xA0" => 'I',
				"\xE2\x85\xA1" => 'II',
				"\xE2\x85\xA2" => 'III',
				"\xE2\x85\xA3" => 'IV',
				"\xE2\x85\xA4" => 'V',
				"\xE2\x85\xA5" => 'VI',
				"\xE2\x85\xA6" => 'VII',
				"\xE2\x85\xA7" => 'VIII',
				"\xE2\x85\xA8" => 'IX',
				"\xE2\x85\xA9" => 'X',
				"\xE2\x85\xB0" => 'i',
				"\xE2\x85\xB1" => 'ii',
				"\xE2\x85\xB2" => 'iii',
				"\xE2\x85\xB3" => 'iv',
				"\xE2\x85\xB4" => 'v',
				"\xE2\x85\xB5" => 'vi',
				"\xE2\x85\xB6" => 'vii',
				"\xE2\x85\xB7" => 'viii',
				"\xE2\x85\xB8" => 'ix',
				"\xE2\x85\xB9" => 'x',
				"\xE2\x91\xA0" => '(1)',
				"\xE2\x91\xA1" => '(2)',
				"\xE2\x91\xA2" => '(3)',
				"\xE2\x91\xA3" => '(4)',
				"\xE2\x91\xA4" => '(5)',
				"\xE2\x91\xA5" => '(6)',
				"\xE2\x91\xA6" => '(7)',
				"\xE2\x91\xA7" => '(8)',
				"\xE2\x91\xA8" => '(9)',
				"\xE2\x91\xA9" => '(10)',
				"\xE2\x91\xAA" => '(11)',
				"\xE2\x91\xAB" => '(12)',
				"\xE2\x91\xAC" => '(13)',
				"\xE2\x91\xAD" => '(14)',
				"\xE2\x91\xAE" => '(15)',
				"\xE2\x91\xAF" => '(16)',
				"\xE2\x91\xB0" => '(17)',
				"\xE2\x91\xB1" => '(18)',
				"\xE2\x91\xB2" => '(19)',
				"\xE2\x91\xB3" => '(20)',
				"\xE3\x8A\xA4" => '(上)',
				"\xE3\x8A\xA5" => '(中)',
				"\xE3\x8A\xA6" => '(下)',
				"\xE3\x8A\xA7" => '(左)',
				"\xE3\x8A\xA8" => '(右)',
				"\xE3\x8D\x89" => 'ミリ',
				"\xE3\x8D\x8D" => 'メートル',
				"\xE3\x8C\x94" => 'キロ',
				"\xE3\x8C\x98" => 'グラム',
				"\xE3\x8C\xA7" => 'トン',
				"\xE3\x8C\xA6" => 'ドル',
				"\xE3\x8D\x91" => 'リットル',
				"\xE3\x8C\xAB" => 'パーセント',
				"\xE3\x8C\xA2" => 'センチ',
				"\xE3\x8E\x9D" => 'cm',
				"\xE3\x8E\x8F" => 'kg',
				"\xE3\x8E\xA1" => 'm2',
				"\xE3\x8E\xA5" => 'm3',
				"\xE3\x8F\x8D" => 'K.K.',
				"\xE2\x84\xA1" => 'TEL',
				"\xE2\x84\x96" => 'No.',
				"\xE3\x8D\xBB" => '平成',
				"\xE3\x8D\xBC" => '昭和',
				"\xE3\x8D\xBD" => '大正',
				"\xE3\x8D\xBE" => '明治',
				"\xE3\x88\xB1" => '(株)',
				"\xE3\x88\xB2" => '(有)',
				"\xE3\x88\xB9" => '(代)'
			);
			return str_replace( array_keys( $arr), array_values( $arr), $str);
		}

		/**
		 *
		 * 並列処理
		 *
		 * @param $url_list 並列処理したいURLの配列
		 * @param $time 処理時間
		 *
		**/
		function multi_act($url_list=array(), $timeout=0, &$time, &$errors=array()) {
			//開始時間取得
			$begin_time = get_microsec();
			//実行
			$res = fetch_multi_url($url_list, $timeout, $errors);
			$time = get_microsec() - $begin_time;
			return $res;
		}

		/**
		 *
		 * 複数URLを同時に取得する
		 *
		 * @param array $url_list URLの配列
		 * @param int $timeout タイムアウト秒数 0だと無制限
		 * @param $errors エラー格納配列
		 * @return array 取得したソースコードの配列
		 *
		**/
		function fetch_multi_url($url_list, $timeout=0, &$errors=array()) {
			$mh = curl_multi_init();

			foreach ($url_list as $i => $url) {
				$conn[$i] = curl_init($url);
				curl_setopt($conn[$i],CURLOPT_RETURNTRANSFER,1);
				curl_setopt($conn[$i],CURLOPT_FAILONERROR,1);
				//curl_setopt($conn[$i],CURLOPT_FOLLOWLOCATION,1);
				curl_setopt($conn[$i],CURLOPT_MAXREDIRS,3);

				//SSL証明書を無視
				curl_setopt($conn[$i],CURLOPT_SSL_VERIFYPEER,false);
				curl_setopt($conn[$i],CURLOPT_SSL_VERIFYHOST,false);

				//タイムアウト
				if ($timeout){
					curl_setopt($conn[$i],CURLOPT_TIMEOUT,$timeout);
				}
				curl_multi_add_handle($mh,$conn[$i]);
			}

			//URLを取得
			//すべて取得するまでループ
			$active = null;
			do {
				$mrc = curl_multi_exec($mh,$active);
			} while ($mrc == CURLM_CALL_MULTI_PERFORM);

			while ($active and $mrc == CURLM_OK) {
				if (curl_multi_select($mh) != -1) {
					do {
						$mrc = curl_multi_exec($mh,$active);
					} while ($mrc == CURLM_CALL_MULTI_PERFORM);
				}
			}

			if ($mrc != CURLM_OK) {
				$errors['read'] = '読み込みエラーが発生しました:'.$mrc;
			}

			//ソースコードを取得
			$res = array();
			foreach ($url_list as $i => $url) {
				if (($err = curl_error($conn[$i])) == '') {
					$res[$i] = curl_multi_getcontent($conn[$i]);
				} else {
					$errors['get'][$i] = '取得に失敗しました:'.$url_list[$i].":".$err.'<br />';
				}
				curl_multi_remove_handle($mh,$conn[$i]);
				curl_close($conn[$i]);
			}
			curl_multi_close($mh);
			return $res;
		}

		/**
		 * 
		 * get_microsec
		 * ミリ秒までの値を返す
		 *
		 */
		function get_microsec() {
			list($sec, $msec) = explode(' ', microtime());
			return ((float)$sec + (float)$msec);
		}

		/**
		 *
		 * csv読み込み 文字化け対策済み
		 *
		**/
		function fgetcsv_reg (&$handle, $length = null, $d = ',', $e = '"') {
			$d = preg_quote($d);
			$e = preg_quote($e);
			$_line = "";
			while ($eof != true) {
				$_line .= (empty($length) ? fgets($handle) : fgets($handle, $length));
				$itemcnt = preg_match_all('/'.$e.'/', $_line, $dummy);
				if ($itemcnt % 2 == 0) $eof = true;
			}
			$_csv_line = preg_replace('/(?:\\r\\n|[\\r\\n])?$/', $d, trim($_line));
			$_csv_pattern = '/('.$e.'[^'.$e.']*(?:'.$e.$e.'[^'.$e.']*)*'.$e.'|[^'.$d.']*)'.$d.'/';
			preg_match_all($_csv_pattern, $_csv_line, $_csv_matches);
			$_csv_data = $_csv_matches[1];
			for($_csv_i=0;$_csv_i<count($_csv_data);$_csv_i++){
				$_csv_data[$_csv_i]=preg_replace('/^'.$e.'(.*)'.$e.'$/s','$1',$_csv_data[$_csv_i]);
				$_csv_data[$_csv_i]=str_replace($e.$e, $e, $_csv_data[$_csv_i]);
			}
			return empty($_line) ? false : $_csv_data;
		}

		/**
		 *
		 * 年セレクト
		 *
		**/
		function get_year_select($name="year", $selected="", $blank='', $st="2012", $options=array()) {
			$year = array();
			$yearnow = date(Y);
			for ($i = $st; $i <= $yearnow + 1; $i++) {
				$year[$i] = $i;
			}
			if($selected != ""){
				return get_select($year, $name, $selected, $blank, $options);
			}else{
				return get_select($year, $name, $yearnow, $blank, $options);
			}
		}

		/**
		 *
		 * 月セレクト
		 *
		**/
		function get_month_select($name="month", $selected="", $blank='', $options=array()) {
			$month = array();
			for ($i = 1; $i < 13; $i++) {
				$month[$i] = $i;
			}
			return get_select($month, $name, $selected, $blank, $options);
		}
		/**
		 *
		 * 日セレクト
		 *
		**/
		function get_day_select($name="day", $selected="", $blank='', $options=array()) {
			$day = array();
			for ($i = 1; $i < 32; $i++) {
				$day[$i] = $i;
			}
			return get_select($day, $name, $selected, $blank, $options);
		}

		/**
		 *
		 * 時間セレクト
		 *
		**/
		function get_hour_select($name='hour', $selected='', $blank='', $options=array()) {
			$hour = array();
			for ($i = 0; $i < 24; $i++) {
				$hour[$i] = $i.'時';
			}
			return get_select($hour, $name, $selected, $blank, $options);
		}

		/**
		 *
		 * 分セレクト
		 *
		**/
		function get_min_select($name='min', $selected='', $blank='', $options=array()) {
			$min = array();
			for ($i = 0; $i < 60; $i++) {
				$min[$i] = $i.'分';
			}
			return get_select($min, $name, $selected, $blank, $options);
		}

		/**
		 *
		 * 市区町村セレクト
		 *
		**/
		function get_pref_select($name='pref', $selected='', $blank='', $options=array()) {
			$pref = array("北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県", "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県");
			$ary_pref = array();
			foreach ($pref as  $key => $val) {
				$ary_pref[$val] = $val;
			}
			return get_select($ary_pref, $name, $selected, $blank, $options);
		}

		/**
		 *
		 * セレクトボックス
		 *
		**/
		function get_select($values=array(), $name="select", $selected="", $blank="", $options=array()) {

		if (is_array($values)) {
			if (!$blank && ($count = count($values)) < 1) {
			return false;
			}
		} else {
			$values = array();
		}
		$option = "";
		if (count($options) > 0) {
			foreach ($options as $attr => $val) {
			$option .= " {$attr}=\"{$val}\"";
			}
		}
		$buff = array();
		if ($blank) {
			$buff[] = '<option value="">'.$blank.'</option>';
		}
		foreach ($values as $key => $val) {
			$sel = '';
			if ($key == $selected) {
			$sel = ' selected="selected"';
			}
			$buff[] = "<option value=\"{$key}\"{$sel}>{$val}</option>";
		}
		return "<select name=\"{$name}\" id=\"{$name}\"{$option}>".join("\n", $buff)."</select>";
		}

		/**
		 *
		 * セレクトボックス(VALUE)
		 *
		**/
		function get_select_val($values=array(), $name="select", $selected="", $blank="", $options=array()) {

		if (is_array($values)) {
			if (!$blank && ($count = count($values)) < 1) {
			return false;
			}
		} else {
			$values = array();
		}
		$option = "";
		if (count($options) > 0) {
			foreach ($options as $attr => $val) {
			$option .= " {$attr}=\"{$val}\"";
			}
		}
		$buff = array();
		if ($blank) {
			$buff[] = '<option value="">'.$blank.'</option>';
		}
		foreach ($values as $val) {
			$sel = '';
			if ($val == $selected) {
			$sel = ' selected="selected"';
			}
			$buff[] = "<option value=\"{$val}\"{$sel}>{$val}</option>";
		}
		return "<select name=\"{$name}\" id=\"{$name}\"{$option}>".join("\n", $buff)."</select>";
		}

		/**
		 *
		 * ラジオボタン
		 *
		**/
		function get_radio($values=array(), $name="radio", $blank=true, $checked="", $options=array()) {
		if (($count = count($values)) < 1) {
			return false;
		}
		
		$option = "";
		if (count($options) > 0) {
			foreach ($options as $attr => $val) {
			$option .= " {$attr}=\"{$val}\"";
			}
		}
		$br = '<br>';
		if (!$blank) {
			$br = '';
		}

		$i = 0;
		$radio = "<input type=\"hidden\" name=\"{$name}\" value=\"\">\n";
		foreach ($values as $key => $value) {
			$i++;
			if ($checked == $key) {
			$radio .= "<input type=\"radio\" id=\"{$name}{$i}\" name=\"{$name}\" value=\"{$key}\" checked{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
			} else {
			$radio .= "<input type=\"radio\" id=\"{$name}{$i}\" name=\"{$name}\" value=\"{$key}\"{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
			}
		}
		return $radio;
		}

		/**
		 *
		 * チェックボックス
		 *
		**/
		function get_checkbox($values=array(), $name="checkbox", $blank=true, $checked="", $options=array()) {
		if (($count = count($values)) < 1) {
			return false;
		}
		
		$option = "";
		if (count($options) > 0) {
			foreach ($options as $attr => $val) {
			$option .= " {$attr}=\"{$val}\"";
			}
		}
		$br = '<br>';
		if (!$blank) {
			$br = '';
		}

		$i = 0;
		$checkbox = "<input type=\"hidden\" name=\"{$name}[]\" value=\"\">\n";
		foreach ($values as $key => $value) {
			$i++;
			if ($checked == $key) {
			$checkbox .= "<input type=\"checkbox\" id=\"{$name}{$i}\" name=\"{$name}[]\" value=\"{$key}\" checked{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
			} else {
			$checkbox .= "<input type=\"checkbox\" id=\"{$name}{$i}\" name=\"{$name}[]\" value=\"{$key}\"{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
			}
		}
		return $checkbox;
		}

		/**
		 *
		 * チェックボックス 複数チェック版
		 *
		**/
		function get_checkbox2($values=array(), $name="checkbox", $blank=true, $checked=array(), $options=array()) {
		if (($count = count($values)) < 1) {
			return false;
		}
		
		$option = "";
		if (count($options) > 0) {
			foreach ($options as $attr => $val) {
			$option .= " {$attr}=\"{$val}\"";
			}
		}
		$br = '<br>';
		if (!$blank) {
			$br = '';
		}

		$i = 0;
		$checkbox = "<input type=\"hidden\" name=\"{$name}[]\" value=\"\">\n";
		foreach ($values as $key => $value) {
			$i++;
			if (is_array($checked)){
				if (array_search($key,$checked)) {
					$checkbox .= "<input type=\"checkbox\" id=\"{$name}{$i}\" name=\"{$name}[]\" value=\"{$key}\" checked{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
				} else {
					$checkbox .= "<input type=\"checkbox\" id=\"{$name}{$i}\" name=\"{$name}[]\" value=\"{$key}\"{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
				}
			}else{
				$checkbox .= "<input type=\"checkbox\" id=\"{$name}{$i}\" name=\"{$name}[]\" value=\"{$key}\"{$option}><label for=\"{$name}{$i}\">{$value}</label>{$br}\n";
			}
		}
		return $checkbox;
		}

	/**
	 *
	 * ファイルアップロード
	 *
	**/
	function picture_upload($file, $name, $filename=null, $width=200, $suffix='', $thumb_x=null, &$errors=array()) {
		if ($file[$name]['error'] == 0) {
			if (is_blank($filename)) {
				$filename = $name.time().$suffix;
			} else {
				$extension = strtolower(mb_substr($filename, mb_strrpos($filename, '.')));
				$filename = basename($filename, $extension);
			}
			$picture = $file[$name];
			$up_error = "";
			if (!($up = file_upload($picture, IMG_PATH.'/'.$filename, $up_error, 'over', null, null, $width))) {
				$errors[$name] = $up_error;
				return false;
			} else {
				$ret_name = str_replace(IMG_PATH.'/', '', $up);
				if ($thumb_x) {
					// サムネイル
					create_thumb($up, IMG_PATH.'/t_'.$ret_name, $thumb_x);
					chmod(IMG_PATH.'/t_'.$ret_name, 0707);
				}
				chmod($up, 0707);
				return $ret_name;
			}
		} else {
			return $filename;
		}
	}

	/**
	 *
	 * サムネイル
	 *
	**/
	function create_thumb($filepath, $putpath, $resizeX) {
		// リサイズ処理（GD必須)
		$im = ImageCreateFromJPEG($filepath);
		$w = ImageSX($im);
		$h = ImageSY($im);
		if ($w > $resizeX) {
			$per = (int) $resizeX / $w;
			$rw = $resizeX;
			$rh = (int) $h * $per;
			$im_out = ImageCreateTrueColor($rw, $rh);
			ImageCopyResampled($im_out, $im, 0, 0, 0, 0, $rw, $rh, $w, $h);
			imageJPEG($im_out, $putpath, 100);
			ImageDestroy($im);
			ImageDestroy($im_out);
		} else {
			copy($filepath, $putpath);
		}
	}

	/**
	 *
	 * ファイル削除
	 *
	**/
	function del_file($filepath) {
		if (file_exists($filepath)) {
			unlink($filepath);
		}
	}

	/**
	 *
	 * ファイルアップロード
	 *
	 * $file     : アップロードファイル($_FILES)
	 * $filename : アップロード後のファイル名
	 * $rewrite  : 重複ファイル時の対処
	 *    null:上書きしない
	 *    'rename':リネームして上書き
	 *    'over':そのまま上書き
	 * $max      : アップロード可能容量
	 * $ext      : アップロード可能な拡張子の配列
	 * $resizeX  : 画像ファイルの横幅指定(GD必須)
	 * $resizeY  : 画像ファイルの縦幅指定(GD必須)
	 *
	**/
	function file_upload($file, $filename, &$error="", $rewrite=null, $max=2048, $ext=array(), $resizeX=null, $resizeY=null) {
		// アップロード許可する拡張子
		if (is_null($ext) || count($ext) == 0) {
			$aryext = array(
				'jpg',
				'gif',
				'png',
				'pdf'
			);
			$ext = $aryext;
		}

		// 最大サイズ
		if (is_null($max)) {
			$max = 104857600;
		}

		// リサイズ処理（GD必須)
		if ($resizeX || $resizeY) {
			$im = ImageCreateFromJPEG($file['tmp_name']);
			$w = ImageSX($im);
			$h = ImageSY($im);
			if ($resizeX && !$resizeY) {
				if ($w > $resizeX) {
					$per = (int) $resizeX / $w;
					$rw = $resizeX;
					$rh = (int) $h * $per;
					$im_out = ImageCreateTrueColor($rw, $rh);
					//ImageCopyResized($im_out, $im, 0, 0, 0, 0, $rw, $rh, $w, $h);
					ImageCopyResampled($im_out, $im, 0, 0, 0, 0, $rw, $rh, $w, $h);
					imageJPEG($im_out, $file['tmp_name'], 100);
					ImageDestroy($im);
					ImageDestroy($im_out);
				}
			} elseif (!$resizeX && $resizeY) {
				if ($h > $resizeY) {
					$per = (int) $resizeY / $h;
					$rh = $resizeY;
					$rw = (int) $w * $per;
					$im_out = ImageCreateTrueColor($rw, $rh);
					//ImageCopyResized($im_out, $im, 0, 0, 0, 0, $rw, $rh, $w, $h);
					ImageCopyResampled($im_out, $im, 0, 0, 0, 0, $rw, $rh, $w, $h);
					imageJPEG($im_out, $file['tmp_name'], 100);
					ImageDestroy($im);
					ImageDestroy($im_out);
				}
			} elseif ($resizeX && $resizeY) {
				$im_out = ImageCreateTrueColor($resizeX, $resizeY);
				//ImageCopyResized($im_out, $im, 0, 0, 0, 0, $resizeX, $resizeY, $w, $h);
				ImageCopyResampled($im_out, $im, 0, 0, 0, 0, $resizeX, $resizeY, $w, $h);
				imageJPEG($im_out, $file['tmp_name'], 100);
				ImageDestroy($im);
				ImageDestroy($im_out);
			}
		}

		$basename = basename($file['name']);
		$extension = strtolower(mb_substr($basename, mb_strrpos($basename, '.')));

		// 拡張子チェック
		$extflg = 0;
		foreach ($ext as $val) {
			if ($extension == '.'.$val) {
				$extflg = 1;
				break;
			}
		}

		if ($extflg == 1) {
			if ($file['tmp_name']['size'] <= $max) {
				// アップロード
				switch ($rewrite) {
					case 'over':
						// 上書きする
						move_uploaded_file($file['tmp_name'], $filename.$extension);
						return $filename.$extension;
						break;

					case 'rename':
						// リネームして保存
						if (!file_exists($filename.$extension)) {
							move_uploaded_file($file['tmp_name'], $filename.$extension);
							return $filename.$extension;
						} else {
							// 重複名がなくなるまでファイル名末尾に番号を加える
							$cnt = 1;
							while (file_exists($filename.'-'.$cnt.$extension)) {
								$cnt++;
							}
							move_uploaded_file($file['tmp_name'], $filename.'-'.$cnt.$extension);
							return $filename.'-'.$cnt.$extension;
						}
						break;

					default:
						// 上書きしない
						if (!file_exists($filename.$extension)) {
							move_uploaded_file($file['tmp_name'], $filename.$extension);
							return $filename.$extension;
						} else {
							$error = "Error:[{$filename}{$extension}]はすでに存在します";
							return false;
						}
						break;
				}
			} else {
				$error = "Error:アップロード可能なファイルサイズは {$max} byteです";
				return false;
			}
		} else {
			$error = 'Error:アップロード許可されていないファイルです';
			return false;
		}
	}


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
		$msg = array();  // ← これを追加！
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
			if(is_blank($_POST['mail']) || is_blank($_POST['mail_conf'])){
				$msg['mail'] = 'メールアドレスを入力してください。';
			}elseif ($_POST['mail'] == $_POST['mail_conf']){
				if (!is_mail($_POST['mail'])){
					$msg['mail'] = 'メールアドレスの書式を正しく入力してください。';
				}elseif(mb_strlen($_POST['mail']) > 100){
					$msg['mail'] = '文字数の制限を超えています。';
				}
			}else{
				$msg['mail'] = 'メールアドレスが入力用の内容と一致しません。';
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
			if(is_blank($_POST['tel']) && is_blank($_POST['tel2'])){
				$msg['tel'] = '電話番号か携帯電話番号のいずれかを入力してください。';
				$msg['tel2'] = '電話番号か携帯電話番号のいずれかを入力してください。';
			}else{
				if(!is_blank($_POST['tel'])){
					if(mb_strlen($_POST['tel']) > 20){
						$msg['tel'] = '文字数の制限を超えています。';
					}else{
						$_POST['tel'] = str_replace("-", "", $_POST['tel']);
						if(is_number($_POST['tel'])){
							$_POST['tel'] = mb_convert_kana($_POST['tel']);
						}else{
							$msg['tel'] = '電話番号を正しく入力してください。';
						}
					}
				}
		
				if(!is_blank($_POST['tel2'])){
					if(mb_strlen($_POST['tel2']) > 20){
						$msg['tel2'] = '文字数の制限を超えています。';
					}else{
						$_POST['tel2'] = str_replace("-", "", $_POST['tel2']);
						if(is_number($_POST['tel2'])){
							$_POST['tel2'] = mb_convert_kana($_POST['tel2']);
						}else{
							$msg['tel2'] = '携帯電話番号を正しく入力してください。';
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

//check.php
if ($_SERVER['SCRIPT_NAME'] == $dir . "/check.php") {
$msg = in_chk_arr($hit_key);
if (count($msg) != 0) {
	$_SESSION['input'] = $_POST;
	$_SESSION['msg'] = $msg;
	$jump = $dir . "/index.php";
	header("Location:$jump");
	exit;
}
}

?>
<?php require('../wp-blog-header.php'); ?>
<?php include (STYLESHEETPATH . '/header.php'); ?>

<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<li>お問い合わせ</li>
	</ol>
</div>
<div id="mainContents">
	<main class="check">
		<div id="pageTitle" class="inquiry">
			<h2>お問い合わせ</h2>
			<p>ご質問やご相談を下記フォームより受け付けております。</p>
		</div>
<section class="secBox">
		<p class="mb10">おひとりで悩まずに、まずはお気軽にご相談ください。</p>
		<p class="mb10">なお、いただいたメールは当院で厳重に管理しますので、外部に漏れることはございません。<br>
			氏名の欄は、仮名でもかまいません。</p>
		<p class="mb10">年齢によってお答えする内容が変わってきますので、年齢の欄は正確にお書きください。<br>
			回答には3～5日ほどかかる場合もございますのでご了承ください。</p>
		<p class="att mb10">※は必須項目になります。必ずご入力ください。</p>
		<h3 class="baseTitle">お問い合わせフォーム</h3>
		<form name="" method="post" action="finish.php" >
			<div class="baseTbl01 contactTbl nowrap mb20">
			<div class="wrap">
			<table>
				<tr>
					<th>お名前</th>
					<td><?php print($_POST['name']); ?>
						<input type="hidden" name="name" value="<?php print($_POST['name']); ?>"></td>
				</tr>
				<tr>
					<th>ふりがな</th>
					<td><?php print($_POST['kname']); ?>
						<input type="hidden" name="kname" value="<?php print($_POST['kname']); ?>"></td>
				</tr>
				<tr>
					<th>性別</th>
					<td><?php print($_POST['c1']); ?>
						<input name="c1" type="hidden" value="<?php print($_POST['c1']); ?>" /></td>
				</tr>
				<tr>
					<th>年齢</th>
					<td><?php print($_POST['old']); ?>
						<input type="hidden" name="old" value="<?php print($_POST['old']); ?>"></td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td><?php print($_POST['tel']); ?>
						<input type="hidden" name="tel" value="<?php print($_POST['tel']); ?>"></td>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<td><?php print($_POST['mail']); ?>
						<input type="hidden" name="mail" value="<?php print($_POST['mail']); ?>">
						<input type="hidden" name="mail_conf" value="<?php print($_POST['mail_conf']); ?>"></td>
				</tr>
				<tr class="checkCell">
					<th>ご関心のある治療項目に<br>
						チェックしてください。 <br>
						複数の選択も可能です。</th>
					<td>
				<?php if(is_array($_POST['treatment'])){ ?>
					<?php foreach($_POST['treatment'] as $val){ ?>
						<?php if($val != ""){ ?>
							<?php print($val); ?><br>
						<?php } ?>
						<input name="treatment[]" type="hidden" value="<?php print($val); ?>" />
					<?php } ?>
				<?php } ?>
						その他：<?php print($_POST['other']); ?>
						<input type="hidden" name="other" value="<?php print($_POST['other']); ?>">
					</td>
				</tr>
				<tr>
					<th>ご意見・ご質問 ご相談内容</th>
					<td><?php print($_POST['comment']); ?>
						<input type="hidden" name="comment" value="<?php print($_POST['comment']); ?>"></td>
				</tr>
			</table>
			</div>
			</div>
			<div class="btnarea">
				<input name="send" type="submit" value="上記の内容で送信">
				<input name="re" type="submit" value="修正する">
			</div>
		</form>
</section>
	</main>
</div>
<!--/#mainContents--> 
<!--/ここまでコンテンツ-->

<?php include (STYLESHEETPATH . '/sidecontact.php'); ?>
<div class="breadcrumbs">
	<ol class="clrfix">
		<li><a href="/">HOME</a></li>
		<li>お問い合わせ</li>
	</ol>
</div>
<?php include (STYLESHEETPATH . '/footer.php'); ?>
