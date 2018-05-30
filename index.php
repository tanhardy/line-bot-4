<?php 
header('HTTP/1.1 200 OK');
header("Status: 200 OK");

$strAccessToken = "g9dQqU7Lew8MZMX8Mj1daewAER0g4eygxB/FLDUbMecNMAJ7vyBDOtyHk2osLE1540sMUNVyDoMB1QN+708xZOyfVsFjHH3H5dqG87PenA/zLKndQskuG8WuEXYrLiHUyHmiaZVd7sbgkSAgK73O7AdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "BOT_Mirage จ้า";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else if($arrJson['events'][0]['message']['text'] == "MirageAudio"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "World Champion Quality";
  /*------------------------*/
  /* calculate */
  /*------------------------*/
  $key_cal_1= array('+');
  $text_cal_1 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_1, $text_cal_1)){
    $key_cal_1_1 = array('%');
    $text_cal_1_1 = $arrJson['events'][0]['message']['text'];
    if(match($key_cal_1_1, $text_cal_1_1)){
      $arr = explode("+", $text_cal_1_1);
      $first = $arr[0];
      $last = $arr[1];
      $arr2 = explode("%", $last);
      $explode_percent = $arr2[0];
      $sum = $explode_percent*$first/100 + $first;
      
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }else{
      $arr = explode("+", $text_cal_1);
      $first = $arr[0];
      $last = $arr[1];
      $sum = $first+$last;
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }
  }
  $key_cal_2= array('-');
  $text_cal_2 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_2, $text_cal_2)){
    $key_cal_2_1 = array('%');
    $text_cal_2_1 = $arrJson['events'][0]['message']['text'];
    if(match($key_cal_2_1, $text_cal_2_1)){
      $arr = explode("-", $text_cal_2_1);
      $first = $arr[0];
      $last = $arr[1];
      $arr2 = explode("%", $last);
      $explode_percent = $arr2[0];
      $percent = $explode_percent*100/100 + 100;
      $sum = $first*100/$percent;
      
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }else{
      $arr = explode("-", $text_cal_2);
      $first = $arr[0];
      $last = $arr[1];
      $sum = $first-$last;
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }
  }
  $key_cal_3= array('*');
  $text_cal_3 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_3, $text_cal_3)){
    $key_cal_3_1 = array('%');
    $text_cal_3_1 = $arrJson['events'][0]['message']['text'];
    if(match($key_cal_3_1, $text_cal_3_1)){
      $arr = explode("*", $text_cal_3_1);
      $first = $arr[0];
      $last = $arr[1];
      $arr2 = explode("%", $last);
      $explode_percent = $arr2[0];
      $sum = $first*$explode_percent/100;
      
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }else{
      $arr = explode("*", $text_cal_3);
      $first = $arr[0];
      $last = $arr[1];
      $sum = $first*$last;
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }
  }
   $key_cal_4= array('/');
   $text_cal_4 = $arrJson['events'][0]['message']['text'];
   if(match($key_cal_4, $text_cal_4)){
    $key_cal_4_1 = array('%');
    $text_cal_4_1 = $arrJson['events'][0]['message']['text'];
    if(match($key_cal_4_1, $text_cal_4_1)){
      $arr = explode("/", $text_cal_4_1);
      $first = $arr[0];
      $last = $arr[1];
      $arr2 = explode("%", $last);
      $explode_percent = $arr2[0];
      $sum = $explode_percent*$first/100 / $first;
      
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }else{
      $arr = explode("/", $text_cal_4);
      $first = $arr[0];
      $last = $arr[1];
      $sum = $first/$last;
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เท่ากับ ".number_format($sum)." จ้า";
    }else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

echo "Hello World";
?>
