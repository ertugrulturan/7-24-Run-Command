<?php
set_time_limit(20);
$sayi = 10;
while($sayi == 10) {
@exec('python sample.py > /dev/null 2>/dev/null &');
sleep(20);
@exec('pkill python');
echo "7/24 run script by tier/t13r";
}
?>
