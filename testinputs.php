<?php
$integerinput = $_POST['integerinput'];
$stringinput = $_POST['stringinput'];
$floatinput = $_POST['floatinput'];

echo "<p>";
if (is_int($integerinput)) {
    echo $integerinput." is an integer";
} else {
    echo $integerinput." is a ";
    var_dump($integerinput);
};
echo "</p><p>";
if (is_string($stringinput)) {
    echo $stringinput." is a string";
} else {
    echo $stringinput." is a ";
    var_dump($stringinput);
};

echo "</p><p>";
if (is_float($floatinput)) {
    echo $floatinput." is a float";
} else {
    echo $floatinput." is a ";
    var_dump($floatinput);
}
echo "</p>"
?>
