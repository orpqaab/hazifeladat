
<?php
echo "Kerlek add meg mennyiert dolgoznal minimum:";
$handle = fopen("php://stdin", "r", "\n");
$line = fgets($handle);
$line=(int)$line;

echo "Kerlek add meg, hogy mennyiert dolgoznal maximum:";
$handle2 = fopen("php://stdin", "r", "\n");
$line2 = fgets($handle2);
$line2=(int)$line2;
if ($line>$line2){
    echo "Nem ervenyes intervallum";
    die();   
}
else echo $line . "-tol " . $line2 . "-ig";

        
        ?>

