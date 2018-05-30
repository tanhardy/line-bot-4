<?php 
header('HTTP/1.1 200 OK');
header("Status: 200 OK");
$strAccessToken = "YAUg5wm0qQbIA3a9LwA4XntIf9i22QRy9v296uj+fjqA6nFPBo8Hrxs34vT/fzd640sMUNVyDoMB1QN+708xZOyfVsFjHH3H5dqG87PenA9iKT64JNnm+n3HT0frX0VT5G79cmHoyP4d/vKq9f60PQdB04t89/1O/w1cDnyilFU=
";
 
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
  $arrPostData['messages'][0]['text'] = "MirageBoTNoi จ้า";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง""Help"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "โปรดพิมพ์เลือกฟังก์ชั่น ดังนี้ 1.STOCK 2.ราคาขาย 3.สินค้าค้างสต๊อก 4.โปรโมชั่น 5.อื่นๆ";
}else if($arrJson['events'][0]['message']['text'] == "MirageAudio"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "World Champion Quality";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กำลังพัฒนาระบบรอสักครู่จ้า ^^ ";
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
