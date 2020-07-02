<?php
$cities3 = [
    'Tokijas' =>
    [13.6, 1868, 'Japonija'],
    'Vasingtonas' =>
    [0.6, 1790, 'JAV'],
    'Maskva' =>
    [11.5, 1147, 'Rusija'],
];
$cities3 ['Londonas'] = [8.6, 43, 'Anglija'];
?>
<ul>
    <li>
        Gyventojų skaičius: <?php echo $cities3['Londonas'][0]?>
    </li>
    <li>
        Įkurtas: <?php echo $cities3['Londonas'][1]?>
    </li>
    <li>
    Šalis: <?php echo $cities3['Londonas'][2]?>
    </li>
</ul>