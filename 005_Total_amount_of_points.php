<?php
    function points(array $games): int {
        $poin = 0;
        for ($i = 0; $i < count($games); $i++){
            $games[$i]
            if (intval($games[$i][0]) > intval($games[$i][2])){
                $poin += 3;
            }else if(intval($games[$i][0]) == intval($games[$i][2])){
                $poin += 1;
            }
        }
        return $poin;
    }