<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("0 hour"));
$kun=date("d-m-20y",strtotime("0 hour"));
 $nik = ["ㅤㅤㅤㅤㅤㅤㅤㅤ","Sindarov"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
  $input = array("🌐My Portfolio: https://sindarov.taplink.ws 🌐https://sindarov.uz","Kelajak dasturchining qo'lida $time");
   $rand=array_rand($input);
  $bio="$input[$rand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $time",'about'=>"$bio"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
$yil = date("Y", strtotime("0 hour"));
$sana = date("d/m/Y", strtotime("0 hour"));


$logo =["https://u5320.xvest2.ru/Profil/apim/index.php?text=$time"];
$logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

if($yil == "2022"){
header('Content-type: image/jpg');
file_get_contents($logopic);
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
}
$MadelineProto->photos->updateProfilePhoto(['file' => "$logopic" ]);


// Dasturchi => @Dustbekov Kanalimiz => @Dustbekov_Uz //

?>