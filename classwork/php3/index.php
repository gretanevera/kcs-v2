<?php
define("ID_NUMBER", 45656565656);
echo PHP_VERSION;

?>

<?php
$firstName = $_POST['first_name'] ?? '';

if ($firstName) {
    addCookie('fisrt_name', $firstName, 3);
    echo $firstName;
}

?>


<form method="post">
    <input placeholder="Your name" name="first_name" value='<?php echo $firstName; ?>'>
    <input placeholder="Your age" type="number" name="age">
    <input type="submit">
</form>

<?php

function insertTextIntoFile($fileName, $insertableText)
{

    $file = fopen($fileName, 'w+');
    if ($insertableText !== '') {
        fwrite($file, $insertableText . "/n");
    }
    fwrite($file, 'asd');
    fclose($file);
}

insertTextIntoFile('input-values.txt', 'Demo text');

$cookieFirstName = (isset($_COOKIE['first_name'])) ? $_COOKIE['first_name'] : '';
echo $cookieFirstName;

function addCookie($cookieName, $cookieValue, int $extraDays = 1)
{
    $daysToIve = time() + (60 * 60 * 24 * $extraDays);
    setcookie($cookieName, $cookieValue, $daysToIve, '/', '', 0);
    echo 'Success ';
}
?>