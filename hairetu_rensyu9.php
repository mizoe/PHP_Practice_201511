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
    $level = "不可";
    if($score >= 80){
        $level = "優";
    }elseif($score >= 70){
        $level = "良";
    }elseif($score >= 60){
        $level = "可";
    }
    print "氏名:" . $name . " 点数:" . $score . " 評価:". $level ."<br>";
    $total += $score;
}
print "合計点:" . $total . "<br>";
$average = sprintf('%.1f', $total / count($scores));
print "平均点:" . $average . "<br>";

?>
</body>
</html>
