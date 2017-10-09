<?php 
header('HTTP/1.1 200 OK');
header("Status: 200 OK");

function match($keys, $texts)
{
  foreach($keys as $key){
    if (strpos($texts, $key) !== false) {
      return true;
    }
  }
  return false;
}

$strAccessToken = "M1sMaIyJRkqLfMMUidifFZyEb03ZMzZi+j0jJYQdWFattCHVfN3r0v8OYlc1x2pb0I6eCL9i8ptT6bkfsELPgKfiJkRqNcfvq+ct1iT/wlXdUlUuLeRtn+7+ufEHh7ELV7XjoZmoE1ZHyEdSFVC44wdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$keys1 = array('ชื่ออะไร','ชื่อไร');
$texts1 = $arrJson['events'][0]['message']['text'];
if(match($keys1, $texts1)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ชื่อ พรีเมียร์ โฮ่งๆ โฮ่งๆ";
}

$keys2 = array('เมียร์', 'พรีเมียร์');
$texts2 = $arrJson['events'][0]['message']['text'];
if(match($keys2, $texts2)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "จ๋า โฮ่งๆ โฮ่งๆ";
}

$keys3 = array('น่ารัก');
$texts3 = $arrJson['events'][0]['message']['text'];
if(match($keys3, $texts3)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "น่ารัก ก็รักสะเลยสิ โฮ่งๆ โฮ่งๆ";
}

$keys4 = array('กินข้าวยัง', "กินข้าวหรือยัง");
$texts4 = $arrJson['events'][0]['message']['text'];
if(match($keys4, $texts4)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กินแล้ว แล้วพี่กินหรือยัง? โฮ่งๆ โฮ่งๆ";
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
}else if($arrJson['events'][0]['message']['text'] == "พี่เครักใคร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พี่เครักทิพย์มาก";
}else if($arrJson['events'][0]['message']['text'] == "ทิพย์รักใคร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ไม่รู้เดาใจยาก";
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