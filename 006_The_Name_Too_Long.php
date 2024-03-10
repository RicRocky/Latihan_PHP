<?php
    function howManyDalmations($numer) {
        if ($numer <= 10){return "Hardly any";}
        else if ($numer > 10 && $numer <= 50) {return "More than a handful!";}
        else if ($numer > 50 && $numer <= 100) {return "Woah that's a lot of dogs!";}
        else if ($numer === 101) {return "101 DALMATIANS!!!";}
    }


// 101 Dalmatians - squash the bugs, not the dogs!