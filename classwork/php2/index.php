<?php
$testText;
$testText = 'Hello World </br>';
echo $testText;
$studentNames = [
    'male' => ['andrius', 'tomas', 'darius'],
    'female' => ['alina', 'egle']
];
$studentNames['female'][] = 'Nijole';

$studentNames['anotherMale'] = 'giedrius';
// echo $studentNames[3];
print_r($studentNames['female']);
echo '<br>';
echo count($studentNames);

echo '<br>';
asort($studentNames['male']);
echo implode(', ', $studentNames['male']);
echo '<br>';
echo '<br>';
echo '<br>';

?>
<?php
//ciklai
foreach ($studentNames['female'] as $studentName) {
echo $studentName;


};


for ($i = 0; $i < count($studentNames['male']); $i++ ) {?>
<script>
//console.log( <?php echo "'" . $studentNames['male'][$i] . "'"; ?>);
console.log(' <?php echo $studentNames['male'][$i]; ?>!');
 </script>
<?php 
};





?>













<?php

//php 4

// - Sukurk masyvą $cities ir priskirk ‘Berlynas’, ‘Roma’, ‘Londonas’
// - Panaudok print_r funkciją taip, kad ji išvestų masyvo $cities duomenis 
// - HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą.
// - Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas”
// - Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
// - Pridėk: londonas - 8.6
// - HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.”
// - Sprendimą įkelk į GitHub

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

<?php
//php5
// Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys: 
// - Tokijas - 13.6, 1868, Japonija
// - Vasingtonas - 0.6, 1790, JAV
// - Maskva - 11.5, 1147, Rusija
// - Pridėk: Londonas - 8.6, 43, Anglija
// - HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu:
// - Gyventojų skaičius: 8.6 mln. 
// - Įkurtas: 43 m.
// - Šalis: Anglija

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