<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $jegyek = [2, 4, 5, 3, 1, 4, 5];
        $kreditek = [5, 6, 3, 2, 2, 5, 4];

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
    </body>
</html>