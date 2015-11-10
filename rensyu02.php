<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>
<?php
print "先頭から2文字切り取る：".mb_substr("あいうえお", 0, 2);
print "<br>";
print "末尾3文字切り取る：".mb_substr("あいうえお", -3, 3);

?>
</p>
</body>
</html>
