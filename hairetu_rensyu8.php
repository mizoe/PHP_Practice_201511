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
$total = 0;
$average = 0;
foreach ($scores as $name => $score) {
    print "氏名:" . $name . " 点数:" . $score . "<br>";
    $total += $score;
}
print "合計点:" . $total . "<br>";
$average = sprintf('%.1f', $total / count($scores));
print "平均点:" . $average . "<br>";

?>
</body>
</html>
