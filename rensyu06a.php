<!-- here document を使った回答例 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .red { color: red; }
    </style>
</head>
<body>
<?php
$aomori_m = 663;
$aomori_f = 744;
$aomori_total = $aomori_f + $aomori_m;
$aomori_f_ratio = sprintf('%.1f', $aomori_f / $aomori_total * 100);
$aomori_m_ratio = 100-$aomori_f_ratio;

$iwate_m  = 652;
$iwate_f  = 712;
$iwate_total = $iwate_f + $iwate_m;
$iwate_f_ratio = sprintf('%.1f', $iwate_f / $iwate_total * 100);
$iwate_m_ratio = 100-$iwate_f_ratio;

$akita_m  = 527;
$akita_f  = 593;
$akita_total = $akita_f + $akita_m;
$akita_f_ratio = sprintf('%.1f', $akita_f / $akita_total * 100);
$akita_m_ratio = 100-$akita_f_ratio;

$aomori_m_color = "";
$iwate_m_color = "";
$akita_m_color = "";

//どれが最大か(男性)
if($aomori_m_ratio >= $iwate_m_ratio && $aomori_m_ratio >= $akita_m_ratio){
    $aomori_m_color = "red";
}
if($iwate_m_ratio >= $aomori_m_ratio && $iwate_m_ratio >= $akita_m_ratio){
    $iwate_m_color = "red";
}
if($akita_m_ratio >= $aomori_m_ratio && $akita_m_ratio >= $iwate_m_ratio){
    $akita_m_ratio = "red";
}

$aomori_f_color = "";
$iwate_f_color = "";
$akita_f_color = "";
//どれが最大か(女性)
if($aomori_f_ratio >= $iwate_f_ratio && $aomori_f_ratio >= $akita_f_ratio){
    $aomori_f_color = "red";
}
if($iwate_f_ratio >= $aomori_f_ratio && $iwate_f_ratio >= $akita_f_ratio){
    $iwate_f_color = "red";
}
if($akita_f_ratio >= $aomori_f_ratio && $akita_f_ratio >= $iwate_f_ratio){
    $akita_f_color = "red";
}
?>
<table border="1">
    <tr>
        <th rowspan="2">県名</th><th rowspan="2">総人口（千人）</th><th rowspan="2">男性（千人）</th><th rowspan="2">女性（千人）</th><th colspan="2">男女比</th>
    </tr>
    <tr>
        <th>男性</th><th>女性</th>
    </tr>
    <?php
    print <<< EOF
<tr>
<td>青森県</td><td>$aomori_total</td><td>{$aomori_m}</td><td>{$aomori_f}</td><td class="{$aomori_m_color}">{$aomori_m_ratio}%</td><td class="{$aomori_f_color}">{$aomori_f_ratio}%</td>
</tr>
<tr>
<td>岩手県</td><td>$iwate_total</td><td>{$iwate_m}</td><td>{$iwate_f}</td><td class="{$iwate_m_color}">{$iwate_m_ratio}%</td><td class="{$iwate_f_color}">{$iwate_f_ratio}%</td>
</tr>
<tr>
<td>秋田県</td><td>$akita_total</td><td>{$akita_m}</td><td>{$akita_f}</td><td class="{$akita_m_color}">{$akita_m_ratio}%</td><td class="{$akita_f_color}">{$akita_f_ratio}%</td>
</tr>
EOF;
    ?>
<?php

?>
</table>
</body>
</html>
