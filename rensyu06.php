<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        table, td, th {
            border: 1px black solid;
        }

    </style>
</head>
<body>
<?php
$thColor = '#E1E1BC';
$tdColor = '#E7E7E7';
$textColor = 'red';

$aomoriMale = 663;
$aomoriFemale = 744;
$aomoriMaleRatio = sprintf('%.1f', $aomoriMale / ($aomoriFemale + $aomoriMale) * 100);
$aomoriFemaleRatio = 100 - $aomoriMaleRatio;
$iwateMale = 652;
$iwateFemale = 712;
$iwateMaleRatio = sprintf('%.1f', $iwateMale / ($iwateFemale + $iwateMale) * 100);
$iwateFemaleRatio = 100 - $iwateMaleRatio;
$akitaMale = 527;
$akitaFemale = 593;
$akitaMaleRatio = sprintf('%.1f', $akitaMale / ($akitaFemale + $akitaMale) * 100);
$akitaFemaleRatio = 100 - $akitaMaleRatio;
?>
<table>
    <tr>
        <th rowspan="2">県名</th>
        <th rowspan="2">総人口（千人）</th>
        <th rowspan="2"> 男性（千人）</th>
        <th rowspan="2"> 女性（千人）</th>
        <th colspan="2"> 男女比</th>
    </tr>
    <tr>
        <th>男性</th>
        <th>女性</th>
    </tr>
    <tr>
        <td>青森県</td>
        <td><?php echo ($aomoriFemale + $aomoriMale); ?></td>
        <td><?php echo $aomoriMale; ?></td>
        <td><?php echo $aomoriFemale; ?></td>
        <td
        <?php
            if($aomoriMaleRatio >= $iwateMaleRatio && $aomoriMaleRatio >= $akitaMaleRatio){
                echo 'style="color:' . $textColor . '"';
            }
        ?>><?php echo $aomoriMaleRatio; ?></td>
        <td
            <?php
            if($aomoriFemaleRatio >= $iwateFemaleRatio && $aomoriFemaleRatio >= $akitaFemaleRatio){
                echo 'style="color:' . $textColor . '"';
            }
            ?>><?php echo $aomoriFemaleRatio; ?>
        </td>
    </tr>
    <tr>
        <td>岩手県</td>
        <td><?php echo ($iwateFemale + $iwateMale); ?></td>
        <td><?php echo $iwateMale; ?></td>
        <td><?php echo $iwateFemale; ?></td>
        <td <?php
        if($iwateMaleRatio >= $aomoriMaleRatio && $iwateMaleRatio >= $akitaMaleRatio){
            echo 'style="color:' . $textColor . '"';
        }
        ?>><?php echo $iwateMaleRatio; ?></td>
        <td
            <?php
            if($iwateFemaleRatio >= $aomoriFemaleRatio && $iwateFemaleRatio >= $akitaFemaleRatio){
                echo 'style="color:' . $textColor . '"';
            }
            ?>><?php echo $iwateFemaleRatio; ?>
        </td>

    </tr>
    <tr>
        <td>秋田県</td>
        <td><?php echo ($akitaFemale + $akitaMale); ?></td>
        <td><?php echo $akitaMale; ?></td>
        <td><?php echo $akitaFemale; ?></td>
        <td <?php
        if($akitaMaleRatio >= $aomoriMaleRatio && $akitaMaleRatio >= $iwateMaleRatio){
            echo 'style="color:' . $textColor . '"';
        }
        ?>><?php echo $akitaMaleRatio; ?></td>
        <td
            <?php
            if($akitaFemaleRatio >= $iwateFemaleRatio && $akitaFemaleRatio >= $aomoriFemaleRatio){
                echo 'style="color:' . $textColor . '"';
            }
            ?>><?php echo $akitaFemaleRatio; ?>
        </td>

    </tr>
</table>
</body>
</html>
