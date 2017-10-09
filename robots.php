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

$keys3_1 = array('ดื้อ');
$texts3_1 = $arrJson['events'][0]['message']['text'];
if(match($keys3_1, $texts3_1)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ ขอโทษน๊า T T";
}
$keys3_2 = array('โอ๋ๆ', "อย่าร้องนะ");
$texts3_2 = $arrJson['events'][0]['message']['text'];
if(match($keys3_2, $texts3_2)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฮือ หือ ฮือ T_T";

}
$keys3_3 = array('ไม่ร้อง', 'อย่าร้อง' , 'ห้ามร้อง');
$texts3_3 = $arrJson['events'][0]['message']['text'];
if(match($keys3_3, $texts3_3)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "อึ๊บ! พรีเมียร์ ไม่ร้องละ ^__^";
}
$keys3_4 = array('ใครกิน', 'กินมั้ย' , 'กินไหม');
$texts3_4 = $arrJson['events'][0]['message']['text'];
if(match($keys3_4, $texts3_4)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ ขอกินด้วยได้ไหม โฮ่งๆ โฮ่งๆ";
}


$keys4 = array('กินข้าวยัง', "กินข้าวหรือยัง");
$texts4 = $arrJson['events'][0]['message']['text'];
if(match($keys4, $texts4)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กินแล้ว แล้วพี่กินหรือยัง? โฮ่งๆ โฮ่งๆ";
}

$keys5 = array('ชอบกินอะไร', "ชอบกินไร");
$texts5 = $arrJson['events'][0]['message']['text'];
if(match($keys5, $texts5)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ ชอบกินลูกชิ้น ปิ้งให้ด้วยนะ โฮ่งๆ โฮ่งๆ";
}

$keys6 = array('นอนนะ', "นอนได้", "ไปนอน", "นอนละ");
$texts6 = $arrJson['events'][0]['message']['text'];
if(match($keys6, $texts6)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฝันดีนะคร๊าบบ อย่าลืมฝันถึงพรีเมียร์ด้วยละ โฮ่งๆ โฮ่งๆ";
}

$keys7 = array('หายไป', "อย่าหาย");
$texts7 = $arrJson['events'][0]['message']['text'];
if(match($keys7, $texts7)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ไม่ได้หายไปไหนน๊า พรีเมียร์อยู่นี่ไง อยู่ในใจทุกๆคน โฮ่งๆ โฮ่งๆ";

}

$keys8 = array('ขอดูรูป', "ขอดูภาพ");
$texts8 = $arrJson['events'][0]['message']['text'];
if(match($keys8, $texts8)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://whispering-dusk-19966.herokuapp.com/1111.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://whispering-dusk-19966.herokuapp.com/1111.jpg";
}

$keys9 = array('ขอมือ', "เอามือมา");
$texts9 = $arrJson['events'][0]['message']['text'];
if(match($keys9, $texts9)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://whispering-dusk-19966.herokuapp.com/S__20324584.jpg";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://whispering-dusk-19966.herokuapp.com/S__20324584.jpg";
}

$keys99 = array('ยุบ้านกะ', "อยู่บ้านกับ");
$texts99 = $arrJson['events'][0]['message']['text'];
if(match($keys99, $texts99)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ อยู่เฝ้าบ้านคนเดียว ทุกคนทิ้งพรีเมียร์หมดเลย";

}

$keys10_1 = array('คิดถึงพรีเมียร์', 'คิดถึงเมียร์');
$texts10_1 = $arrJson['events'][0]['message']['text'];
if(match($keys10_1, $texts10_1)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ ก็คิดถึงเหมือนกัน เผลอๆอาจคิดถึงมากกว่าด้วย โฮ่งๆ โฮ่งๆ";
}

$keys10_2 = array('คิดถึงใคร');
$texts10_2 = $arrJson['events'][0]['message']['text'];
if(match($keys10_2, $texts10_2)){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "พรีเมียร์ คิดถึงพี่ไง โฮ่งๆ โฮ่งๆ";
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
?>