<?php
session_start();
#error_reporting(1);
error_reporting(0);
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$white= "\033[0;37m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";

$maugi="\033[1;35m";
$white= "\033[1;37m";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
  $_SESSION['load'] = 2000;
  $_SESSION['delay'] = 150000;
} else {
  $_SESSION['load'] = 0;
  $_SESSION['delay'] = 50000;
}
$thanh_xau= $trang."~".$do."[".$luc."●".$do."] ".$trang."➩ ";
$thanh_dep= $trang."~".$do."[".$luc."✓".$do."] ".$trang."➩ ";
/***[ Banner ]***/
/***[ Clear + Thông Số Admin ]***/
if (file_exists('luutim.txt')){
  fopen("luutim.txt", "a+");
}
if (file_exists('luusub.txt')){
  fopen("luusub.txt", "a+");
}
@system('clear');
echo "\033[1;31m[\033[1;37m>.<\033[1;31m]\033[1;37m => \033[1;36m Coppyright Đậu Văn Quân Tool Vip Có Phí !!!!
\n";

@system('clear');
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
	if(!$sock = @fsockopen('www.google.com', 80))
{
    echo 'Vui lòng bật kết nối mạng';
    exit();
}
	back:
system('clear');
echo $banner;
$weekday = date("l");
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$weekday = strtolower($weekday);switch($weekday) { case 'monday': $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday': $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday': $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday': $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday': $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday': $weekday = "\033[1;33mThứ \033[1;36m7"; break; default: $weekday = "\033[1;33mCN"; break; }
$cuongdz = $do."[".$luc."●".$do."] ".$trang."=> ";
$cuongvip = $do."[".$luc."●".$do."]";
$n_truoc = date("d");
$ngay = date("d"); $thang = date("m"); $nam = date("Y"); $a=date('d');  $b=date("m"); $thoigian=date('d/m'); $day = []; $day= date('d-m-y'); $today = date("d-m-y"); $d = date("d-m");$ip = file_get_contents('http://kiemtraip.com/raw.php');
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$sr = "\033[1;97m➻❥\033[1;92m ";

$pedat="\r\033[0;45m\033[1;36m🔰\033[1;97mSever Đang Hoạt Động Tốt\033[1;36m🔰\n";
$datxu="\r\033[0;41m\033[1;36m🔰\033[1;97mSever Đang Hoạt Động Rất Tốt\033[1;36m🔰\n";
$datxu1="\r\033[1;42m\033[1;36m🔰\033[1;97mSever Hoạt Động Vô Cùng Tốt\033[1;36m🔰\n";
$a=array("$pedat"=>"a","$datxu"=>"b","$datxu1"=>"c");
print_r(array_rand($a,1));
echo"\033[0m\033[1;35m
╔══════════════════════╗
║ \033[1;33m█ █ █ █ █ █ █ █ █ █\033[0m  \033[1;35m║ 100% \033[1;32m    \033[1;35m
╚══════════════════════╝\n ";usleep(0);
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $luc."▂";
}echo"\n";
echo "\n";
echo"   \033[1;97m╭═════════════════════════════════════════════════════╮\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
$t=
 $trang."          \033[1;37m\033[1;41m \033[1;32m🌺\033[;33mHôm Nay Là Ngày $ngay Tháng $thang Năm $nam\033[1;32m🌺 \033[0m\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

$t=
 $trang."          \033[1;97m\033[1;40m➻❥ Chức Bạn\033[1;97m\033[1;97m \033[1;92mNgày Mới Vui Vẽ\n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

$t=
 $trang."          \033[1;97m\033[1;40m➻❥ Tool Được Khởi Động Vào\033[1;97m\033[1;97m: \033[1;92m".$tim.date("H:i:s")."\033[1;92m \n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}

$t=
 $trang. "          \033[1;97m\033[1;40m➻❥ Ip Của Bạn Là:\033[1;97m\033[1;97m \033[1;92m$ip \n";
for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
  usleep(2000);
}
echo"   \033[1;97m╰═════════════════════════════════════════════════════╯\n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $luc."▂";
}echo"\n";
echo "\n";
      system('clear');
      
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo"   \033[1;37m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓ \n";
echo"      \033[0;41m\033[1;37m\033[1;93m🔥Hôm Nay\033[0;41m ";echo"\033[0;41m\033[1;36m$weekday ";echo"\033[0;41m\033[1;33mNgày "; echo"\033[0;41m\033[1;36m$ngay ";echo"\033[0;41m\033[1;33mTháng "; echo"\033[0;41m\033[1;36m$thang ";echo"\033[0;41m\033[1;33mNăm "; echo"\033[0;41m\033[1;36m$nam$end🔥\033[0;00m"; echo "\n";
echo "      \033[1;97m\033[1;40m➻❥ Chú́c Bạn\033[1;97m\033[1;97m \033[1;92mNgày Mới Vui Vẽ\n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Được Khởi Động Vào\033[1;97m\033[1;97m: \033[1;92m".$tim.date("H:i:s")."\033[1;92m \n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Vip\033[1;97m\033[1;97m \033[1;92mBy  ANH ❤️❤️ em \n";
echo "      $sr\033[1;97m\033[1;40mIP Tool Của Bạn:\033[1;92m $ip\n";
echo"   \033[1;37m┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛ \n";
echo $banner;
for ($makep=30;$makep > 0;$makep--){
echo $trang."=";
usleep(2500);
echo $luc."=";
}echo"\n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Đang Check Dữ Liệu Tương Tác Chéo \r";
while (true){
if (file_exists("configttc.txt")){
  $_SESSION['token'] = fread(fopen("configttc.txt", "r"), filesize("configttc.txt"));
  $login = logintoken();
  echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập ".$vang."[".$trang."1".$vang."] ".$luc."Giữ Lại Tài Khoản ".$vang.$_SESSION['user']."\n";
  echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập ".$vang."[".$trang."2".$vang."] ".$luc."Nhập Access_Token TTC Mới \n";
  echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập Lựa Chọn:".$trang." $vang";
      $chon_tk = trim(fgets(STDIN));
    if ($chon_tk == "2") {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
      @system("rm configttc.txt");
    } else {
      @system("del configttc.txt");
    }
        for($v=0;$v<= 26;$v++){
    echo "\033[1;37m▂";
    echo "\033[1;36m▂";
}
echo "\033[1;37m▂";
echo"\n\n";
  } else if ($chon_tk == "1") {
    } else {
    echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$do."Lựa Chọn Không Xác Định!!!\n"; 
    for($v=0;$v<= 26;$v++){
    echo "\033[1;37m▂";
    echo "\033[1;36m▂";
}
echo "\033[1;37m▂";
echo"\n\n"; continue;
    }
}
if(!file_exists("configttc.txt")){
echo "\r                                         \r";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập Token TTC: $vang";
  $tokenacc = trim(fgets(STDIN));
$file = fopen("configttc.txt", "a+");
fwrite($file, ''.$tokenacc);
fclose($file);
}
$_SESSION['token'] = fread(fopen("configttc.txt", "r"), filesize("configttc.txt"));
  $login = logintoken();
  if($login == true){
    echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Đăng Nhập Thành Công.   \n";
    break;
  } else {
    echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$do."Sai Access Token TTC   \n";
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
      @system("rm configttc.txt");
    } else {
      @system("del configttc.txt");
    }
    for($v=0;$v<= 26;$v++){
    echo "\033[1;37m▂";
    echo "\033[1;36m▂";
}
echo "\033[1;37m▂";
echo"\n\n";
  }
}
$xu = coin($thanh_dep);
@system('clear');
echo "\033[1;31m[\033[1;37m>.<\033[1;31m]\033[1;37m => \033[1;36m Coppyright Đậu Văn Quân Tool Vip Có Phí !!!!
\n";
echo "\033[1;93m╔═══════════════════════════════════════════════════════════════╗\n";
echo "\033[1;93m║                                  \033[1;93m  ║\033[1;92m Bản Quyền:\033[1;97m Đậu Văn Quân\033[1;93m  ║\n";
echo "\033[1;93m║                                  \033[1;93m  ║\033[1;92m Momo: \033[1;94m0354389283\033[1;93m         ║\n";
echo "\033[1;93m║\033[1;36m █▀█ █ █ ▄▀█ █▄█ ▄▄ \033[1;93m▀█▀ █▀█ █▀█ █   \033[1;93m║\033[1;92m Facebook: \033[1;96mVăn Quân       \033[1;93m║\n";
echo "\033[1;93m║\033[1;34m ▀▀█ █▄█ █▀█ █▀█    \033[1;97m █  █▄█ █▄█ █▄▄ \033[1;93m║\033[1;92m Donate: \033[1;97m0354389283\033[1;93m       ║\n";
echo "\033[1;93m║                                  \033[1;93m  ║\033[1;92m Zalo : 0354389283\033[1;93m        ║\n";
echo "\033[1;93m║                                  \033[1;93m  ║\033[1;92m Support Tool: \033[1;95mQUÂN-TOOL  \033[1;93m║\n";
echo "\033[1;93m╚═══════════════════════════════════════════════════════════════╝\n";
echo $banner;
for ($makep=30;$makep > 0;$makep--){
echo $trang."=";
usleep(2500);
echo $luc."=";
}echo"\n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Tên Tài Khoản: ".$vang.$_SESSION['user']."\n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Xu hiện tại: ".$vang.$xu."\n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."=";
usleep(2500);
echo $luc."=";
}echo"\n";
$dem = 0;
while (true){
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập ".$do."[".$vang."1".$do."]".$luc." Nhiệm Vụ Tim \n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập ".$do."[".$vang."2".$do."]".$luc." Nhiệm Vụ Follow\n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập ".$do."[".$vang."3".$do."]".$luc." Làm Lại Tim \n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập ".$do."[".$vang."4".$do."]".$luc." Làm Lại Follow \n";
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập Số Để Chạy Nhiệm Vụ: $vang";
  $nhiemvu = trim(fgets(STDIN));
echo $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhập Delay: $vang";
  $delay = trim(fgets(STDIN));
for ($makep=30;$makep > 0;$makep--){
echo $trang."=";
usleep(2500);
echo $luc."=";
}echo"\n";
while (true){
if($nhiemvu == 1){
    $listtim = get_youtube("");
    if(count($listtim) == 0){
    echo $do." Đã Hết Nhiệm Vụ Tim             \r"; sleep (2); break;
  }
    for($lap = 0; $lap < count($listtim); $lap++){
      $id = $listtim[$lap]["idpost"];
      $link = $listtim[$lap]["link"];
      if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
          @system('xdg-open '.$link);
      } else {
          @system('cmd /c start '.$link);
      }
      $xu = coin($thanh_dep);
      $dem++;
    $loai = 'TIM';
    $mau = "\033[1;97m";
    $kl = "\033[1;97m[\033[1;91m".$dem."\033[1;97m]\033[1;96m 🔥 \033[1;92m".date("H:i")."\033[1;96m 🔥$mau $loai\033[1;96m 🔥 \033[1;97m".$id."\n";
    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
    delay($delay);
      $list = $list.$id.",";
      if($dem % 10 == 0){
        $list = substr($list, 0, (strlen($list) - 1));
        $nhantien = nhantien($list, "");
        if($nhantien["mess"]){
          $xujob = $nhantien["sodu"];
          $xu = $xu + $xujob;
          
          $kl = $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhận Thành Công $trang".($xujob/500)."$green Job $trang➻❥ $yellow".$xu." Xu\n";
        for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
      
        } else {
          echo $do.$nhantien["error"]."          \n";
          fwrite (fopen("luutim.txt", "a+"), $list.",");
          sleep (1);
        }
        $list = '';
    }
    }
 } else if ($nhiemvu == 2){
    $listsub = get_youtube("/subcheo");
    if(count($listsub) == 0){
    echo $do." Đã Hết Nhiệm Vụ Follow          \r"; sleep (2); break;
  }
    for($lap = 0; $lap < count($listsub); $lap++){
      $id = $listsub[$lap]["idpost"];
      $link = $listsub[$lap]["link"];
      if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
          @system('xdg-open https://youtube.com/channel/'.$link);
      } else {
          @system('cmd /c start https://youtube.com/channel/'.$link);
      }
      $xu = coin($thanh_dep);
      $dem++;
      $loai = 'Follow';
    $mau = "\033[1;97m";
    $kl = "\033[1;97m[\033[1;91m".$dem."\033[1;97m]\033[1;96m 🔥 \033[1;92m".date("H:i")."\033[1;96m 🔥$mau $loai\033[1;96m 🔥 \033[1;97m".$id."\n";
    for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(1500);}
    delay($delay);
      $list = $list.$id.",";
      if($dem % 10 == 0){
        $list = substr($list, 0, (strlen($list) - 1));
        $nhantien = nhantien($list, "/subcheo");
        if($nhantien["mess"]){
          $xujob = $nhantien["sodu"];
          $xu = $xu + $xujob;
          $kl = $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhận Thành Công $trang".($xujob/1000)."$green Job $trang➻❥ $yellow".$xu." Xu\n";
        for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
        } else {
          sleep (1);
          fwrite (fopen("luusub.txt", "a+"), $list.",");
          echo $do.$nhantien["error"]."          \n";
        }
        $list = '';
      }
    }
} else if ($nhiemvu == 3){
  $dem = 0;
  $list = explode (',', file_get_contents("luutim.txt"));
  for($lap = 0; $lap < (count($list) - 1); $lap++){
    $id = $list[$lap];
    echo $thanh_xau.$luc.$id."     \r"; usleep (10000);
    $nhantien = nhantien($id, "");
      if($nhantien["mess"]){
        $stt += 1;
      }
  }
  $xu = coin($thanh_dep);
  $kl = $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhận Thành Công $trang".$stt."$green Job $trang➻❥ $yellow".$xu." Xu\n";
  for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    system("rm luutim.txt");
  } else {
    system("del luutim.txt");
  }
  die;
} else if($nhiemvu == 4){
  $dem = 0;
  $list = explode (',', file_get_contents("luusub.txt"));
  for($lap = 0; $lap < (count($list) - 1); $lap++){
    $id = $list[$lap];
    echo $thanh_xau.$luc.$id."     \r"; usleep (10000);
    $nhantien = nhantien($id, "/subcheo");
      if($nhantien["mess"]){
        $stt += 1;
      }
  }
  $xu = coin($thanh_dep);
  $kl = $do."[".$trang.">.<".$do."] ".$trang."=> ".$green."Nhận Thành Công $trang".$stt."$green Job $trang➻❥ $yellow".$xu." Xu\n";
  for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    system("rm luusub.txt");
  } else {
    system("del luusub.txt");
  }
  die;
} else {
  echo $do." Vui Lòng Chọn 1 Nhiệm Vụ (1 hoặc 2 hoặc 3 hoặc 4).     \n"; 
  for($v=0;$v<= 26;$v++){
    echo "\033[1;37m▂";
    echo "\033[1;36m▂";
}
echo "\033[1;37m▂";
echo"\n\n"; break;
}
}
}
/***#####################[ FUNCTION ]#################### ***/
function logintoken(){
  $data = 'access_token='.$_SESSION['token'];
  $head[] = 'Content-type: application/x-www-form-urlencoded';
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://tuongtaccheo.com/logintoken.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_COOKIEJAR => "TTC.txt",
    CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_USERAGENT => $_SESSION['useragent'],
        CURLOPT_ENCODING => TRUE
    ));
    $login = json_decode(curl_exec($ch));
if($login->status == 'success'){
  $xu = $login->data->sodu;
  $_SESSION['user'] = $login->data->user;
  $js = fopen($_SESSION['user'].".txt", "w+");
  file_put_contents($_SESSION['user'].".txt", file_get_contents("TTC.txt"));
  return $xu;
} else {
  return false;
}
}
function cauhinh($idtik){
    $data = "iddat[]=".$idtik."&loai=tt";
    $head = array(
"Host: tuongtaccheo.com",
"content-length: ".strlen($data),
"accept: */*",
"origin: https://tuongtaccheo.com",
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"referer: https://tuongtaccheo.com/cauhinh/index.php"
);
    $ch = curl_init();
    curl_setopt_array($ch, array(
  CURLOPT_URL => 'https://tuongtaccheo.com/cauhinh/datnick.php',
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_ENCODING => TRUE
));
    $access = curl_exec($ch);
    if(strpos($access, 'Chưa đăng nhập !!!') !== false){
      $login = logintoken();
        if($login == true){
          echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n";
        } else {
          echo $luc." COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die; 
        }
  } else {
    return $access;
  }
}
function get_youtube($type){
    $url  = "https://tuongtaccheo.com/youtube/kiemtien".$type."/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/tiktok/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = json_decode(curl_exec($ch), true);
    return $data;
}
function nhantien($id,$type){
while (true){
    $url  = "https://tuongtaccheo.com/youtube/kiemtien".$type."/nhantien.php";
    $data = "id=".$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/youtube/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if($data == '0'){
      $login = logintoken();
      if($login == true){
        echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n"; continue;
      } else {
        echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;
    }
  } else {
      return json_decode($data, true);
    }
}
}
function coin($thanh_dep){
while (true){
  $ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_URL => 'https://tuongtaccheo.com/home.php',
  CURLOPT_PORT => "443",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => $_SESSION['user'].".txt",
  ));
$access = curl_exec($ch);
curl_close($ch);
$xu = explode('"soduchinh">', explode('</strong>', $access)[0])[1];
if (strpos ($access, "Chào mừng") == false){
  $login = logintoken();
    if($login == true){
      echo "\033[1;32m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THÀNH CÔNG \n"; continue;
    } else {
      echo "\033[1;31m COOKIE TUONGTACCHEO DIE, ĐĂNG NHẬP LẠI THẤT BẠI \n"; die;  
    }
} else if ($xu !== ''){
  return $xu;
} else {
  echo "\033[1;31m Lỗi Không Xác Định                  \r";
}
}
}
function delay ($delay){
  for($tt = $delay ;$tt>= 1;$tt--){
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);
        echo "\r\033[1;35m   QuanTool \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $tt | ";usleep(150000);} 
echo "\r\e[1;95m    QuanTool                       \r"; 
}
function hienthi($dem, $loai, $id, $xujob, $xu){
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );
  $kl = "\e[1;32m[\e[1;33QuanTool\e[1;32m]\033[1;34m[\033[1;33m".$dem."\033[1;34m]\033[1;91m ● \033[1;36m".date("H:i:s")."\033[1;31m ● \033[1;".rand(31,37)."m".$loai."\033[1;31m ● \033[1;37m".$id."\033[1;31m ● \033[1;32m$xujob \033[1;31m●\033[1;32m $xu \n";
for($i = 0; $i < strlen($kl); $i++){echo $kl[$i];usleep(500);}
}
function chay($t) { for ($x = 0; $x <= $t; $x++) { echo "\033[1;37m= ";usleep($_SESSION['load']); } echo"\n";}
function gioithieu($banner, $thanh_xau){ @system('clear');
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
echo "\033[1;37m~\033[1;32m Mua Key Tại:\033[1;37m vmtuan.ml\n"; chay(35);
echo $thanh_xau."\033[1;35mTOOL AUTO TTC TIKTOK \n"; usleep($_SESSION['load']);
echo $thanh_xau."\033[1;33mBản Quyền:\033[1;34m VMT\n"; usleep($_SESSION['load']);
echo $thanh_xau."\033[1;32mAdmin:\033[1;36m Vũ Mạnh Tuấn\n"; usleep($_SESSION['load']);
echo $thanh_xau."\033[1;31mZalo : \033[1;34m0963603983\n"; usleep($_SESSION['load']);
chay(35);}