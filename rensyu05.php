<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>
<?php
define('TSUBO', 3.3);
print '101号室→' . sprintf('%.2f',100/TSUBO) . '坪<BR>';
print '102号室→' . sprintf('%.2f',75/TSUBO) . '坪<BR>';
print '103号室→' . sprintf('%.2f',150/TSUBO) . '坪';
?>
</p>
</body>
</html>
