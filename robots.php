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


/* sticker */
if($arrJson['events'][0]['message']['type']=="sticker"){

  $sticker1 = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17");
  $sticker2 = array("101","102","103","104","105","106","107","108","109","110","111","112","113","114","115","116","117","118","119","120","121","122","123","124","125","126","127","128","129","130","131","132","133","134","135","136","137","138","139");
  $merged = array_merge($sticker1,$sticker2);
  $random_keys=array_rand($merged);

  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "sticker";
  $arrPostData['messages'][0]['packageId'] = "1";
  $arrPostData['messages'][0]['stickerId'] = $merged[$random_keys];

/* text */
}else{

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
    $sticker = array("จ๋า โฮ่ง โฮ่ง","พรีเมียร์อยู่นี่แล้ว","เรียกอยู่นั้นแหละหมาจะนอน");
    $random_keys=array_rand($sticker);

    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = $sticker[$random_keys];
  }

  $keys2_1 = array('ม๊ากลับ', 'ป๋ากลับ', 'ป๊ากลับ');
  $texts2_1 = $arrJson['events'][0]['message']['text'];
  if(match($keys2_1, $texts2_1)){
    $sticker = array("เดี๋ยวพรีเมียร์ไปดูให้นะ","พรีเมียร์ก็รออยู่เหมือนกัน");
    $random_keys=array_rand($sticker);

    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = $sticker[$random_keys];
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
    $sticker = array("พรีเมียร์ ขอโทษน๊า T T","พรีเมียร์ ขอโทษจริงๆ T T","พรีเมียร์ จะไม่ดื้อแล้ว T T");
    $random_keys=array_rand($sticker);

    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = $sticker[$random_keys];
  }
  $keys3_2 = array('โอ๋ๆ', 'อย่าร้องนะ');
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

  $keys3_5 = array('เดี๋ยวตีเลย', 'เด๋วตีเลย', 'เดี๋ยวโดนตี' , 'เด๋วโดนตี');
  $texts3_5 = $arrJson['events'][0]['message']['text'];
  if(match($keys3_5, $texts3_5)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ ขอโทษนะ ฮือๆ ๆ T T อย่าตีพรีเมียร์เลยนะ";
  }

  $keys3_6 = array('เก่งจัง', 'เก่งมาก');
  $texts3_6 = $arrJson['events'][0]['message']['text'];
  if(match($keys3_6, $texts3_6)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ เก่งอยู่แล้ว โฮ่งๆ โฮ่งๆ";
  }

  $keys3_7 = array('หมาเหม็น', 'เหม็นหมา');
  $texts3_7 = $arrJson['events'][0]['message']['text'];
  if(match($keys3_7, $texts3_7)){
    $sticker = array("พรีเมียร์ ไม่เหม็นนะ หอมจะตาย ^__^","ก็อาบน้ำให้ พรีเมียร์ หน่อยสิ");
    $random_keys=array_rand($sticker);

    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = $sticker[$random_keys];
  }

  $keys4 = array('กินข้าวยัง', 'กินข้าวหรือยัง');
  $texts4 = $arrJson['events'][0]['message']['text'];
  if(match($keys4, $texts4)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "กินแล้ว แล้วพี่กินหรือยัง? โฮ่งๆ โฮ่งๆ";
  }

  $keys5 = array('ชอบกินอะไร', 'ชอบกินไร');
  $texts5 = $arrJson['events'][0]['message']['text'];
  if(match($keys5, $texts5)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ ชอบกินลูกชิ้น ปิ้งให้ด้วยนะ โฮ่งๆ โฮ่งๆ";
  }
  $keys5_1 = array('อยากกินอะไร');
  $texts5_1 = $arrJson['events'][0]['message']['text'];
  if(match($keys5_1, $texts5_1)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "image";
    $arrPostData['messages'][0]['originalContentUrl'] = "https://whispering-dusk-19966.herokuapp.com/1.jpg";
    $arrPostData['messages'][0]['previewImageUrl'] = "https://whispering-dusk-19966.herokuapp.com/1.jpg";
  }
  $keys5_2 = array('อร่อยมะ', 'อร่อยมั้ย', 'อร่อยไหม');
  $texts5_2 = $arrJson['events'][0]['message']['text'];
  if(match($keys5_2, $texts5_2)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ ขอเพิ่มอีก 3 ไม้น๊าาาาาา โฮ่งๆ โฮ่งๆ";
  }

  $keys5_3 = array('อาบน้ำกัน','ไปอาบน้ำ');
  $texts5_3 = $arrJson['events'][0]['message']['text'];
  if(match($keys5_3, $texts5_3)){
    $sticker = array("หนีก่อนดีกว่าเรา","แกล้งตายดีกว่า");
    $random_keys=array_rand($sticker);

    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = $sticker[$random_keys];
  }

  $keys6 = array('นอนนะ', 'นอนได้', 'ไปนอน', 'นอนละ', 'ฝันดี');
  $texts6 = $arrJson['events'][0]['message']['text'];
  if(match($keys6, $texts6)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "ฝันดีนะคร๊าบบ อย่าลืมฝันถึงพรีเมียร์ด้วยละ โฮ่งๆ โฮ่งๆ";
  }

  $keys7 = array('หายไป', 'อย่าหาย');
  $texts7 = $arrJson['events'][0]['message']['text'];
  if(match($keys7, $texts7)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ไม่ได้หายไปไหนน๊า พรีเมียร์อยู่นี่ไง อยู่ในใจทุกๆคน โฮ่งๆ โฮ่งๆ";

  }

  $keys8 = array('ขอดูรูป', 'ขอดูภาพ');
  $texts8 = $arrJson['events'][0]['message']['text'];
  if(match($keys8, $texts8)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "image";
    $arrPostData['messages'][0]['originalContentUrl'] = "https://whispering-dusk-19966.herokuapp.com/1111.jpg";
    $arrPostData['messages'][0]['previewImageUrl'] = "https://whispering-dusk-19966.herokuapp.com/1111.jpg";
  }

  $keys9 = array('ขอมือ', 'เอามือมา');
  $texts9 = $arrJson['events'][0]['message']['text'];
  if(match($keys9, $texts9)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "image";
    $arrPostData['messages'][0]['originalContentUrl'] = "https://whispering-dusk-19966.herokuapp.com/S__20324584.jpg";
    $arrPostData['messages'][0]['previewImageUrl'] = "https://whispering-dusk-19966.herokuapp.com/S__20324584.jpg";
  }

  $keys99 = array('ยุบ้านกะ','อยู่บ้านกับ');
  $texts99 = $arrJson['events'][0]['message']['text'];
  if(match($keys99, $texts99)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ อยู่เฝ้าบ้านคนเดียว ทุกคนทิ้งพรีเมียร์หมดเลย";

  }

  $keys10_1 = array('คิดถึงพรีเมียร์', 'คิดถึงเมียร์', 'คิดถึงนะ');
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

  $keys11_1 = array('ทำไร', 'ทำอะไร');
  $texts11_1 = $arrJson['events'][0]['message']['text'];
  if(match($keys11_1, $texts11_1)){
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "พรีเมียร์ นอนเล่นเฉยๆ แต่ก็เริ่มหิว เหมือนกันนะ โฮ่งๆ โฮ่งๆ";
  }

  /* calculate */
  $key_cal_1 = array('+');
  $text_cal_1 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_1, $text_cal_1)){
    $arr = explode("+", $text_cal_1);
    $first = $arr[0];
    $last = $arr[1];
    $sum = $first+$last;

    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "เท่ากับ ".$sum." จ้า";
  }

  $key_cal_2= array('-');
  $text_cal_2 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_2, $text_cal_2)){
    $arr = explode("-", $text_cal_2);
    $first = $arr[0];
    $last = $arr[1];
    $sum = $first-$last;
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "เท่ากับ ".$sum." จ้า";
  }

  $key_cal_3= array('*');
  $text_cal_3 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_3, $text_cal_3)){
    $arr = explode("*", $text_cal_3);
    $first = $arr[0];
    $last = $arr[1];
    $sum = $first*$last;
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "เท่ากับ ".$sum." จ้า";
  }

  $key_cal_4= array('/');
  $text_cal_4 = $arrJson['events'][0]['message']['text'];
  if(match($key_cal_4, $text_cal_4)){
    $arr = explode("/", $text_cal_4);
    $first = $arr[0];
    $last = $arr[1];
    $sum = $first/$last;
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "เท่ากับ ".$sum." จ้า";
  }
} // end message


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