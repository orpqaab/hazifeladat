
        <?php
echo "Kerlek add meg a licit also erteket:";
$handle = fopen("php://stdin", "r", "\n");
$line = fgets($handle);
$line=(int)$line;

echo "Kerlek add meg, hogy mennyit ajanlasz:";
$handle2 = fopen("php://stdin", "r", "\n");
$line2 = fgets($handle2);
$line2=(int)$line2;
if ($line>$line2){
    echo "Nem ervenyes licit";
    die();   
}
else echo $line2;

        
        ?>
