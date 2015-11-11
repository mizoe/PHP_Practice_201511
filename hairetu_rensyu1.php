<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<?php
$fruits = array(
    'オレンジ' => 25,
    'バナナ' => 30,
    'りんご' => 38,
    'みかん' => 62,
);
print_r($fruits);
foreach ($fruits as $k => $v) {
    print "キー:" . $k . " 要素:" . $v . "<br>";
}

?>
</body>
</html>
