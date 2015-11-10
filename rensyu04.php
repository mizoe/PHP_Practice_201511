<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>
<?php
$newsText = 'セ・リーグは２４日、都内で臨時理事会を開き、東日本大震災の影響で、当初の２５日から２９日に延期してい
た開幕日を再度延期し、パ・リーグと同じ４月１２日に変更することを決めた。';
print mb_substr($newsText, 0, 25) . '…<a href="http://www.nikkansports.com/baseball/news/f-bb-tp0-20110324-752531.html">続きはこちら</a>';
?>
</p>
</body>
</html>
