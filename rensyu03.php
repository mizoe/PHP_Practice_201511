<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$thColor = '#E1E1BC';
$tdColor = '#E7E7E7';
?>
<table border="1">
    <tr>
        <th style="background-color: <?php print $thColor; ?>">ホテル名</th>
        <th style="background-color: <?php print $thColor; ?>">予約状況</th>
    </tr>
    <tr style="background-color: <?php print $tdColor; ?>">
        <td>○○ホテル</td>
        <td>空室あり</td>
    </tr>
    <tr style="background-color: <?php print $tdColor; ?>">
        <td>××旅館</td>
        <td>満室</td>
    </tr>
</table>
</body>
</html>
