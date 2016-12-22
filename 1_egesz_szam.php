        <?php
        echo "Kerlek adj meg egy pozitiv egesz szamot:";
        $handle = fopen ("php://stdin","r","\n");
        $line = fgets($handle);
        $i = intval($line);
        if (is_int($i) && $i > 0) {
            echo "Ez egy egesz szam:";
            echo $i;
        } else
            echo "Ez nem egy pozitiv egesz szam!";
            die();
        ?>

