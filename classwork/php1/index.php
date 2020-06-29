<p>labas
    <?php
    echo ' pasauli.';
    echo "Tarkim 'pavadinimas' šis. ";
    echo 'Tarkim "pavadinimas" šis. ';
    //phpinfo();

    //kintamieji
    $firmosPavadinimas = 'UAB Labas Pasauli';
    $firmosPavadinimas = "'Papludimys miesto centre'";

    echo "Tarkim " .  $firmosPavadinimas . ' sis.';

    //dbigubomis kabutemis galima inkapsuliuoti stringus ir divus kartu
    //pvz
    echo "Tarkim  $firmosPavadinimas  sis.";

    ?>
</p>
<?php
// uzduotis
$manoMetai = 33;
// optimisation
$dvidesimtmetis = 20;
$trisdesimtmetis = 30;

if ($manoMetai >= 0) {
    if ($manoMetai >= $dvidesimtmetis && $manoMetai <= $trisdesimtmetis) {
        echo 'tau virs 20';
    } else if ($manoMetai >= $trisdesimtmetis) {
        echo 'tau virs 30';
    } else {
        echo "tu labai jaunesnis nei 20";
    }
}
?>
<?php



?>