<?php

	/*получаем значения полей из формы*/
	$request = $_POST['request'];
	$email = $_POST['email'];

	/*функция для создания запроса на сервер Telegram */
	function parser($url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		if($result == false){     
			echo "Ошибка отправки запроса: " . curl_error($curl);
			return false;
		}
		else{
			return true;
		}
	}

	/*собираем сообщение*/	

	$message .= "Новое сообщение с сайта dmitriy-pozhidaev.ru";
	$message .= "Email:".$email;
	$message .= "Текст из формы:".$request;

	/*токен который выдаётся при регистрации бота */
	$token = "6111309554:AAHLrm3c0GH3EAXd1BSbNugBTpUPVZGZUP0";
	/*идентификатор группы*/
	$chat_id = "-1001745726142";
	/*делаем запрос и отправляем сообщение*/
	parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");
?>

