<?php
$cities = ['Berlynas', 'Roma', 'Londonas'];
$cities[] = 'Tokijas';
print_r($cities);

echo '<br>';
$cities2 = ['Tokijas' => '13.6', 'Vasingtonas' => '0.6', 'Maskva' => '11.5'];
$cities2['Londonas'] = 8.6;

?>
<ul>
    <li>
        <?php echo $cities[2]; ?>
    </li>
    <li>
        <?php echo 'Gyventojų skaičius: ' . $cities2['Tokijas']; ?>
    </li>

</ul>

