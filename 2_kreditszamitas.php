<?php

echo "Kerlek add meg a jegyeidet(veszzovel elvalasztva):";
$handle = fopen("php://stdin", "r", "\n");
$line = fgets($handle);
$jegyek = array_map('intval',explode(",", $line));
echo "Kerlek add meg a krediteket(veszzovel elvalasztva):";
$handle = fopen("php://stdin", "r", "\n");
$line = fgets($handle);
$kreditek = array_map('intval',explode(",", $line));

for ($i = 0; $i < count($jegyek); $i++) {
    if ($jegyek[$i] > 1) {
        $elfogadott_jegy[] = $jegyek[$i];
        $elfogadott_kredit[] = $kreditek[$i];
    }
}
$i = 0;
$j = 0;
$szorzat = [];
while ($i < count($elfogadott_jegy)) {
    $szorzat[$i] = $elfogadott_jegy[$j] * $elfogadott_kredit[$j];
    $j++;
    $i++;
};
$kreditatlag = array_sum($szorzat) / 30;
if ($kreditatlag > 0) {
    echo $kreditatlag;
} else
    die();
?>