<?php

//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
include('cfg.php');
system('pkg install mpv -y');
system('pkg install termimage -y');
system('clear');
sleep(2);
function Get($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function Post($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function strip(){
$ungu2 = "\e[1;35m";
echo$ungu2." ✦=================================================✦ \n";
}

echo$banner = "          
                                                                                                                                                                                                                    
    $merah _____                     _               
    $merah/__   \___ _   _ _ __   _| | ___ _ __ ___ 
    $merah / /\/ __| | | | '_ \ / _` |/ _ \ '__/ _ \
    $putih1/ /  \__ \ |_| | | | | (_| |  __/ | |  __/
    $putih1\/   |___/\__,_|_| |_|\__,_|\___|_|  \___|
                                         "."\n";
                                                                                                                                                                                                                                                                              
strip();

echo$kuning."         ʟᴏɢɪɴ      ";
$detik1 = "15";
for($x=$detik1;$x>0;$x--){echo "\r \r";
echo$hijau2." ᴄᴏɴɴᴇᴄᴛᴇᴅ........  ".$merah."[".$kuning2.$x.$merah."] ";
echo "\r \r";
sleep(1);}


//Dashboard
$url = "https://bux.money/dashboard/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);

$one = explode('<span class="font-size-md">My ID: <b>',$cfg);
$two = explode('</b></span>',$one[1]);
$user = "$two[0]";

$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$balance = "$two[0]";

echo$putih1."        𝐔𝐒𝐄𝐑 𝐈𝐃   : ".$cyan1.$user."\n";
echo$putih1."        𝐁𝐀𝐋𝐀𝐍𝐂𝐄   : ".$cyan1.$balance." 𝑹𝑼𝑩\n";

strip();
echo$abu."                            𝑳𝑶𝑮𝑰𝑵 𝑺𝑼𝑪𝑪𝑬𝑺𝑭𝑼𝑳𝑳𝒀"."\n";
sleep(5);

system("clear");

while(true){
echo$Watch = "
          
$ungu              𝘚𐊢ᏒƖⲢ𝚃 𝗕Ⲩ @𝚃𝘚Ս𝑵Ｄ𝞔Ꮢ𝞔~
                 
$hijau2  ██╗    ██╗ █████╗  ██████╗████████╗██╗  ██╗
$hijau2  ██║    ██║██╔══██╗██╔════╝╚══██╔══╝██║  ██║
$hijau2  ██║ █╗ ██║███████║██║        ██║   ███████║
$hijau2  ██║███╗██║██╔══██║██║        ██║   ██╔══██║
$hijau2  ╚███╔███╔╝██║  ██║╚██████╗   ██║   ██║  ██║
$hijau2   ╚══╝╚══╝ ╚═╝  ╚═╝ ╚═════╝   ╚═╝   ╚═╝  ╚═╝
                                           
$kuning  ██╗   ██╗██╗██████╗ ██╗ ██████╗            
$kuning  ██║   ██║██║██╔══██╗██║██╔═══██╗           
$kuning  ██║   ██║██║██║  ██║██║██║   ██║           
$kuning  ╚██╗ ██╔╝██║██║  ██║██║██║   ██║           
$kuning   ╚████╔╝ ██║██████╔╝██║╚██████╔╝           
$kuning    ╚═══╝  ╚═╝╚═════╝ ╚═╝ ╚═════╝"."\n";            

strip();

error_reporting(E_ERROR | E_PARSE);

//TASK VIDEO
$url = "https://bux.money/tasks/video/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);

$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$b = "$two[0]";

echo$biru1."        𝐁𝐀𝐋𝐀𝐍𝐂𝐄   : ".$cyan1.$b." 𝑹𝑼𝑩\n";
strip();

                             $url = "https://bux.money/tasks/control/get.php";
                             $ua = ["user-agent: ".$useragent, "cookie: ".$cookie,"x-requested-with: ".$with];
                             $data = "type=video";
                             $cfg = Post($url, $ua,$data);
                             $usr = json_decode($cfg);
$tmr = $usr->data->duration;
   $rewards = $usr->data->price;
      $id = $usr->data->id;
         $rep = $usr->data->rep;
            $s_id = $usr->data->s_id;
              $lm = $usr->data->limitHour;
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$hijau2." 𝐖𝐀𝐈𝐓𝐈𝐍𝐆 𝐏𝐑𝐎𝐆𝐑𝐄𝐒  ".$merah."[".$kuning2.$x.$merah."] ".$abu2."sᴄʀɪᴘᴛ ʙʏ ᴛsᴜɴᴅᴇʀᴇ◎[▪‿▪]◎"; 
echo "\r \r";
sleep(1)."\n";}
strip();

                               $link = "https://bux.money/captcha/control/get.php";
                               $ua = ["user-agent: ".$useragent, "set-cookie:PHPSESSID=$s_id; path/captcha/control/get.php ", "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin, "referer: ".$referer];
                               $data = "s_id=$s_id&id=$id";
                               $cfg = Post($link, $ua, $data);                                   
"\n";
                               $link = "https://bux.money/captcha/control/check.php";
                               $ua = ["user-agent: ".$useragent, "set-cookie:PHPSESSID=$s_id; path/captcha/control/check.php ", "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin, "referer: ".$referer];
                               $data = "s_id=$s_id&rep=$rep";
                               $cfg1 = Post($link, $ua, $data);
                               $usr2 = json_decode($cfg1);
                               $st1 = $usr2->status;
                               $dta = $usr2->data->img;

$url = "https://api.sctg.xyz/in.php";
$ua = ["user-agent: ".$useragent, "content-type: ".$type];
$data = "key=$api&method=buxmoney&body=$dta";
$cfg = Post($url, $ua,$data);
$one = explode('OK|',$cfg)[1];

echo$putih1."      𝐂𝐎𝐃𝐄  𝐁𝐘𝐏𝐀𝐒𝐒   : ".$kuning2.$one."\n";
strip();
sleep(3);

$url = "https://api.sctg.xyz/res.php?key=$api&id=$one&action=get";
$ua = ["user-agent: ".$useragent, "content-type: ".$type];
$cfg = Get($url, $ua);
$one = explode('OK|coordinate:x=',$cfg)[1];
$two = explode(',y=' ,$one)[0];

$one = explode(',y=' ,$cfg)[1];

echo$putih1."      𝐁𝐘𝐏𝐀𝐒𝐒  𝐗      : ".$kuning2.$two."\n";
echo$putih1."      𝐁𝐘𝐏𝐀𝐒𝐒  𝐘      : ".$kuning2.$one."\n";
sleep(3);

$sw = "10";
for($x=$sw;$x>0;$x--){echo "\r \r";                   
echo$hijau2."     𝐁𝐘𝐏𝐀𝐒𝐒𝐈𝐍𝐆 ".$merah."[".$kuning2.$x.$merah."] ".$putih1."sᴄʀɪᴘᴛ ʙʏ ᴛsᴜɴᴅᴇʀᴇ◎[▪‿▪]◎";
echo "\r \r";
sleep(1)." \n";}
strip();
                               $link = "https://bux.money/captcha/control/check.php";
                               $ua = ["user-agent: ".$useragent, "set-cookie:PHPSESSID=$s_id; path/captcha/control/check.php ", "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin, "referer: ".$referer];
                               $data = "x=$two&y=$one&s_id=$s_id&rep=$rep";
                               $cfg = Post($link, $ua, $data)."\n";
                                                                              
echo$putih1."      𝐒𝐓𝐀𝐓𝐔𝐒         : ".$putih1.$st1."\n";
echo$putih1."      √𝐃𝐎𝐍𝐄, 𝐘𝐎𝐔 𝐆𝐄𝐓 : ".$putih1."(₽)".$hijau2." $rewards\n";
echo$putih1."      𝐋𝐈𝐌𝐈𝐓 /??𝐀𝐌     : ".$putih1.$lm."\n";
strip();

$url = "https://bux.money/tasks/video/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);
$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$b = "$two[0]";

echo$biru1."      𝐔𝐏𝐃𝐀𝐓𝐄         : ".$cyan1.$b." 𝑹𝑼𝑩\n";
strip();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
system('clear');

echo $surf = "

$merah     _______. __    __  .______       _______ 
$merah    /       ||  |  |  | |   _  \     |   ____|
$merah   |   (----`|  |  |  | |  |_)  |    |  |__   
$putih1    \   \    |  |  |  | |      /     |   __|  
$putih1.----)   |   |  `--'  | |  |\  \----.|  |     
$putih1|_______/     \______/  | _| `._____||__|     
                                              
$merah     ___       _______       _______.         
$merah    /   \     |       \     /       |         
$merah   /  ^  \    |  .--.  |   |   (----`         
$putih1  /  /_\  \   |  |  |  |    \   \             
$putih1 /  _____  \  |  '--'  |.----)   |            
$putih1/__/     \__\ |_______/ |_______/         "."\n";    

strip();

error_reporting(E_ERROR | E_PARSE);

//SURF ADS
$url = "https://bux.money/tasks/visits/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);

$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$b = "$two[0]";

echo$biru1."        𝐁𝐀𝐋𝐀𝐍𝐂𝐄   : ".$cyan1.$b." 𝑹𝑼𝑩\n";
strip();

                             $url = "https://bux.money/tasks/control/get.php";
                             $ua = ["user-agent: ".$useragent, "cookie: ".$cookie, "x-requested-with: ".$with];
                             $data = "id=&type=traffic";
                             $cfg = Post($url, $ua,$data);
                             $usr = json_decode($cfg);
$tmr = $usr->data->duration;
   $rewards = $usr->data->price;
"\n";                                   
                             $url = "https://bux.money/tasks/visits/page/";
                             $ua = ["user-agent: ".$useragent, "cookie: ".$cookie, " accept: ".$accept];
                             $cfg = Get($url, $ua);
       
for($x=$tmr;$x>0;$x--){echo "\r \r";
echo$hijau2."  𝐕𝐈𝐒𝐈𝐓𝐄𝐃 𝐒𝐔𝐑𝐅  ".$merah."[".$kuning2.$x.$merah."] ".$abu2."sᴄʀɪᴘᴛ ʙʏ ᴛsᴜɴᴅᴇʀᴇ◎[▪‿▪]◎"; 
echo "\r \r";
sleep(1)."\n";}
strip();

                               $link = "https://bux.money/captcha/control/get.php";
                               $ua = ["user-agent: ".$useragent, "cookie: ".$cookie, "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin1, "referer: ".$referer1, "x-requested-with: ".$with];
                               $data = "";
                               $cfg = Post($link, $ua, $data);                                   
"\n";
                               $link = "https://bux.money/captcha/control/check.php";
                               $ua = ["user-agent: ".$useragent, "cookie: ".$cookie, "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin1, "referer: ".$referer1, "x-requested-with: ".$with];
                               $data = "x=&y=";
                               $cfg1 = Post($link, $ua, $data);
                               $usr2 = json_decode($cfg1);
                               $st1 = $usr2->status;
                               $dta = $usr2->data->img;

$url = "https://api.sctg.xyz/in.php";
$ua = ["user-agent: ".$useragent, "content-type: ".$type];
$data = "key=$api&method=buxmoney&body=$dta";
$cfg = Post($url, $ua,$data);
$one = explode('OK|',$cfg)[1];

echo$putih1."      𝐂𝐎𝐃𝐄  𝐁𝐘𝐏𝐀𝐒𝐒   : ".$kuning2.$one."\n";
strip();
sleep(3);

$url = "https://api.sctg.xyz/res.php?key=$api&id=$one&action=get";
$ua = ["user-agent: ".$useragent, "content-type: ".$type];
$cfg = Get($url, $ua);
$one = explode('OK|coordinate:x=',$cfg)[1];
$two = explode(',y=' ,$one)[0];

$one = explode(',y=' ,$cfg)[1];

echo$putih1."      𝐁𝐘𝐏𝐀𝐒𝐒  𝐗      : ".$kuning2.$two."\n";
echo$putih1."      𝐁𝐘𝐏𝐀𝐒𝐒  𝐘      : ".$kuning2.$one."\n";
sleep(3);

$sw = "10";
for($x=$sw;$x>0;$x--){echo "\r \r";                   
echo$hijau2."     𝐁𝐘𝐏𝐀𝐒𝐒𝐈𝐍𝐆 ".$merah."[".$kuning2.$x.$merah."] ".$putih1."sᴄʀɪᴘᴛ ʙʏ ᴛsᴜɴᴅᴇʀᴇ◎[▪‿▪]◎";
echo "\r \r";
sleep(1)." \n";}
strip();
                               $link = "https://bux.money/captcha/control/check.php";
                               $ua = ["user-agent: ".$useragent, "cookie: ".$cookie, "accept: ".$accept11,"accept-language: ".$language, "content-type: ".$type, "origin: ".$origin1, "referer: ".$referer1, "x-requested-with: ".$with];
                               $data = "x=$two&y=$one";
                               $cfg = Post($link, $ua, $data)."\n";
                                                                              
echo$putih1."      𝐒𝐓𝐀𝐓𝐔𝐒         : ".$putih1.$st1."\n";
echo$putih1."      √𝐃𝐎𝐍𝐄, 𝐘𝐎𝐔 𝐆𝐄𝐓 : ".$putih1."(₽)".$hijau2." $rewards\n";

strip();

$url = "https://bux.money/tasks/visits/";
$ua = ["user-agent: ".$useragent,
"cookie: ".$cookie, " accept: ".$accept];
$cfg = Get($url, $ua);

$one = explode('<span class="balance-numeric">',$cfg);
$two = explode('</span></a>',$one[1]);
$b = "$two[0]";

echo$biru1."      𝐔𝐏𝐃𝐀𝐓𝐄         : ".$cyan1.$b." 𝑹𝑼𝑩\n";
            
system("cd thanks\n"."termimage 112.jpg\n");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   system("cd thanks\n"."mpv 321.mp3\n");
sleep(2);
system('clear');
}