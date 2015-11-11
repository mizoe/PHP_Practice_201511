<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<?php
$scores = array(
    "鈴木"  => 92,
    "佐藤" => 74,
    "中村"   => 42,
    "三浦"   => 65
);
print "ソート前<br>";
foreach ($scores as $name => $score) {
    print "キー:" . $name . " 要素:" . $score ."<br>";
}

asort($scores);
print "ソート後<br>";
foreach ($scores as $name => $score) {
    print "キー:" . $name . " 要素:" . $score ."<br>";
}


?>
</body>
</html>
