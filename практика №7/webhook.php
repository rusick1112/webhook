<?php

$body = file_get_contents('php://input');
    $arr = json_decode($body, true); 
     
	function cir_strrev($stroka){ 
		preg_match_all('/./us', $stroka, $array); 
		return implode('',array_reverse($array[0]));
	}

	include_once ('tg.class.php'); 
	 

	$tg = new tg('6390731118:AAHczSj4CGz5eD4Kx40J26yw2EWNxnFkowU');
	 
	$sms = $arr['message']['text']; //Получаем текст сообщения, которое нам пришло.

	 

	$tg_id = $arr['message']['chat']['id'];
	 

	$sms_rev = cir_strrev($sms);
	 
	
	$tg->send($tg_id, $sms_rev);
	
    exit('ok'); 