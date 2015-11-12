<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<?php
$temps = array(
    array('東京', 32, 25),
    array('名古屋', 28, 21),
    array('大阪', 27, 20),
    array('京都', 26, 19),
    array('福岡', 27, 22),
);
?>

<table border="1">
    <tr>
        <th>都市名</th>
        <th>最高気温</th>
        <th>最低気温</th>
    </tr>
    <?php
        for($i=0; $i < count($temps); $i++){
            echo '<tr><td>';
            echo $temps[$i][0];
            echo '</td><td>';
            echo $temps[$i][1];
            echo '</td><td>';
            echo $temps[$i][2];
            echo '</td></tr>';
        }
    ?>
</table>
</body>
</html>
