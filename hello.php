<?php
echo "Hello World!\n";

//模式分隔符后的"i"标记这是一个大小写不敏感的搜索
if (preg_match("%php%i", "PHP is the web scripting language of choice.")) {
    echo "A match was found. \n";
} else {
    echo "A match was not found. \n";
}

$date_film = "2017-06-30";
preg_match('/([1-2]{1}\d{3})-\d{2}-\d{2}/', $date_film, $out);

echo count($out) . "\n";

if (count($out) > 1) {
    for ($i = 0; $i < count($out); $i++) {
        echo $out[$i] . "\n";
    }
    echo "hello exist subgroup. \n";
    $publishYear = $out[1];
    echo $publishYear . "\n";
    echo (2016 - $publishYear) . "\n";

//    $dateNow = date("Y-m-d");
//    $datePublish = date($date_film);
//    $d1 = strtotime($dateNow);
//    $d2 = strtotime($date_film);
//    $spanDays = round(($d1 - $d2) / 3600 / 24);
}

?>