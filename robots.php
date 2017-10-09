<?php 
header('HTTP/1.1 200 OK');
header("Status: 200 OK");
$strAccessToken = "5/iFxAAffk0dRCb1xwsgXbiIU+rUbuTmBaoabFY+fiRwQ3uDTnOx1SHGgAUrxyJ70I6eCL9i8ptT6bkfsELPgKfiJkRqNcfvq+ct1iT/wlUXcNYqIT5V9LDFbiq4GCeFVKI9HrkOoJcweh4hieB5CAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

//-- ทักทาย
$listKeyword1= array('เมียร์', 'พรีเมียร์', 'ว่าไงเมียร์', 'ว่าไงพรีเมียร์');
$getKeyword1 = $arrJson['events'][0]['message']['text'];
$viewKeyword1 = end(explode(' ', $getKeyword1));

if(in_array($viewKeyword1,$listKeyword1)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "จ๋า โฮ่งๆ โฮ่งๆ";
}

//-- ชื่อ
$listKeyword2= array('ชื่อไร', 'ชื่ออะไร', 'หนูชื่ออะไร', 'ชื่อว่า');
$getKeyword2 = $arrJson['events'][0]['message']['text'];
$viewKeyword2 = end(explode(' ', $getKeyword2));

if(in_array($viewKeyword2,$listKeyword2)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ชื่อ พรีเมียร์ จ้า โฮ่งๆ โฮ่งๆ";
}
/* 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else if($arrJson['events'][0]['message']['text'] == "ทำไมไม่ตอบ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เป็นใบ้ ตอบได้เท่าที่ตอบ";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}
*/
 
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
?>