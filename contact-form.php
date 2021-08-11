<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
// 変数の初期化
$clean = array();
$error = array();
// サニタイズ
if( !empty($_POST) ) {
	foreach( array_slice($_POST,1)  as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}
// 文字成型
$clean['tel'] = str_replace(array('-', 'ー', '−', '―', '‐'), '', $clean['tel']);
$clean['tel'] = str_replace(array(" ", "　"), "", $clean['tel']);
$clean['tel'] = mb_convert_kana($clean['tel'], "n");
$clean['email'] = str_replace(array(" ", "　"), "", $clean['email']);
$clean['email'] = mb_convert_kana($clean['email'], "askhc");

// if(!empty($clean['proceed'])){
// 	$page_flag = 1;
// 	// セッションの書き込み
// 	session_start();
// 	$_SESSION['page'] = true;	
// }

if( !empty($clean['btn_confirm'])) {
	$error = validation($clean);

	if( empty($error) ) {

		$page_flag = 1;
		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;		
	}

}
// elseif(!empty($clean['btn_back'])){
// 	session_start();
// 	$page_flag = 1;
// }
 elseif( !empty($clean['btn_submit']) ) {

	$error = validation($clean);

	if( empty($error) ) {

		$page_flag = 2;
		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;
		

		session_start();
		if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {
			// セッションの削除
			unset($_SESSION['page']);
			$page_flag = 2;
			// 変数とタイムゾーンを初期化
			$header = null;
			$body = null;
			$admin_body = null;
			$auto_reply_subject = null;
			$auto_reply_text = null;
			$admin_reply_subject = null;
			$admin_reply_text = null;
			date_default_timezone_set('Asia/Tokyo');
			
			//日本語の使用宣言
			mb_language("ja");
			mb_internal_encoding("UTF-8");
		
			$header = "MIME-Version: 1.0\n";
			$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
			$header .= "From: cs@adlive.asia\n";
			$header .= "Reply-To: cs@adlive.asia\n";
		
			// 件名を設定
			$auto_reply_subject = 'お問い合わせいただきありがとうございます。｜Locaop';

			// 本文を設定
			$auto_reply_text .=  $clean['your_name'] . "様\n\n";
			$auto_reply_text .= "この度は、お問い合わせ頂きありがとうございます。\n";
			$auto_reply_text .= "以下の通りに承りました。\n";
			$auto_reply_text .= "内容をご確認の上、担当者より追ってご連絡させていただきますので\n";
			$auto_reply_text .= "今しばらくお待ち頂きますようお願い申し上げます。\n\n";
			$auto_reply_text .= "-----以下送信内容-----\n";	
			$auto_reply_text .= "お問い合わせ内容: " . $_POST['customer_attr'][0] . " - " . $_POST['customer_attr'][1] . " - " . $_POST['customer_attr'][2] . " - " . $_POST['customer_attr'][3] . "\n";
			$auto_reply_text .= "お名前: " . $clean['your_name'] . "\n";
			$auto_reply_text .= "メールアドレス: " . $clean['email'] . "\n";
			$auto_reply_text .= "会社名: " . $clean['company_name'] . "\n";	
			$auto_reply_text .= "電話番号: " . $clean['tel'] . "\n";
			$auto_reply_text .= "お問い合わせ内容: " . nl2br($clean['contents']) . "\n";
			$auto_reply_text .= "プライバシーポリシー: 同意済み\n";
			$auto_reply_text .= "---------------------------- \n";
			$auto_reply_text .= "■本メールは送信専用メールです。\n";
			$auto_reply_text .= "ご返信頂いてもお答えできませんのでご了承ください。\n";
			$auto_reply_text .= "--------------- \n\n";

			$auto_reply_text .= "──────────────────── \n";
			$auto_reply_text .= "ローカルビジネスをオープンに！\n";
			$auto_reply_text .= "Locaop（ロカオプ）\n";
			$auto_reply_text .= "https://locaop.jp\n\n";
			$auto_reply_text .= "ADlive株式会社\n";
			$auto_reply_text .= "カスタマーサクセス事業部\n";
			$auto_reply_text .= "──────────────────── \n";
			
			// テキストメッセージをセット
			$body = "--__BOUNDARY__\n";
			$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
			$body .= $auto_reply_text . "\n";
			$body .= "--__BOUNDARY__\n";
		
			// 自動返信メール送信
			mb_send_mail( $clean['email'], $auto_reply_subject, $body, $header);
		

			// 運営側へ送るメールの件名
			$admin_reply_subject = "LocaopLPよりお問い合わせがありました。";
		
			// 本文を設定;
			$admin_reply_text .= "LocaopLPより、問い合わせがありました。\n 送信内容は以下です。\n\n";
			$admin_reply_text .= "-----以下送信内容--------\n";
			$admin_reply_text .= "お問い合わせ内容: " . $_POST['customer_attr'][0] . " - " . $_POST['customer_attr'][1] . " - " . $_POST['customer_attr'][2] . " - " . $_POST['customer_attr'][3] . "\n";
			$admin_reply_text .= "お名前: " . $clean['your_name'] . "\n";
			$admin_reply_text .= "メールアドレス: " . $clean['email'] . "\n";
			$admin_reply_text .= "会社名: " . $clean['company_name'] . "\n";
			$admin_reply_text .= "電話番号: " . $clean['tel'] . "\n";
			$admin_reply_text .= "お問い合わせ内容: " . nl2br($clean['contents']) . "\n";
			$admin_reply_text .= "プライバシーポリシー: 同意済み\n";
			$admin_reply_text .= "---------------------------- \n\n";
			$admin_reply_text .= "送信された日時: " . date("Y/m/d D H:i") . "\n";
			
			// テキストメッセージをセット
			$body = "--__BOUNDARY__\n";
			$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
			$body .= $admin_reply_text . "\n";
			$body .= "--__BOUNDARY__\n";
		
			// 管理者へメール送信
			mb_send_mail('cs@adlive.asia', $admin_reply_subject, $body, $header);
		} else {
			$page_flag = 0;
		}
		
	}

		
}
function validation($data) {
	$error = array();

	if( empty($_POST['customer_attr'])) {
		$error['customer_attr'] = "「お客様属性」は入力必須項目です。";
	}

	// 氏名のバリデーション
	if( empty($data['your_name']) ) {
		$error['your_name'] = "「お名前」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['your_name']) ) {
		$error['your_name'] = "20文字以内で入力してください。";
	}

	// メールアドレスのバリデーション//
	if( empty($data['email']) ) {
		$error['email'] = "「メールアドレス」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error['email'] = "正しい形式で入力してください。";
	}

	// 氏名のバリデーション
	if( empty($data['company_name']) ) {
		$error['company_name'] = "「会社名」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['company_name']) ) {
		$error['company_name'] = "20文字以内で入力してください。";
	}

	// 電話番号のバリデーション
	// if( empty($data['tel']) ) {
	// 	$error['tel'] = "「電話番号」は入力必須項目です。";
	// } elseif( !preg_match( '/^[0-9]+[0-9.-]+$/', $data['tel']) ) {
	// 	$error['tel'] = "正しい形式で入力してください。";
	// }

	// 氏名のバリデーション
	// if( empty($data['contents']) ) {
	// 	$error['contents'] = "「お問い合わせ内容」は入力必須項目です。";
	// } elseif( 300 < mb_strlen($data['contents']) ) {
	// 	$error['contents'] = "20文字以内で入力してください。";
	// }

	if( empty($data['agreement']) ) {
		$error['agreement'] = "「個人情報の取り扱いについて」に同意します は入力必須項目です。 ";
	}

	// if( empty($data['inquiry_type']) ) {
	// 	$error['inquiry_type'] = "「お問い合わせ種別」は入力必須項目です。";
	// }
	
	// if( empty($data['time1']) ) {
	// 	$error['time1'] = "「時間」は必須項目です。";
	// }

	return $error;
}
?>


<?php if( $page_flag === 1 ):
	// 確認画面読み込み
require_once(dirname(__FILE__)."/inc/confirm.php");
 ?>
<?php elseif( $page_flag === 2 ):
	// サンクスページへリダイレクト
// $url = "https://www.e-vision.co.jp/lp/inc/thanks.php";
// header('Location: ' . $url, true, 301);
require_once(dirname(__FILE__)."/inc/thanks.html");
exit;
 ?>
<?php else:
	// フォーム画面読み込み
require_once(dirname(__FILE__)."/inc/contact.php");
 ?>
<?php endif; ?>