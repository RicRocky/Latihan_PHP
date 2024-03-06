<?php
    // function flip(string $dir, array $arr) {
    //     for($i = 0; $i < (count($arr) * 4); $i++){
    //         $tampung_angka = 0;
    //         $angka = $arr[0];
    //         for($j = 0; $j < (count($arr)); $j++){
    //             if ($dir == "R"){
    //                 if ($angka > $arr[$j]){
    //                     $tampung_angka = $arr[$j-1]; 
    //                     $arr[$j-1] = $arr[$j];
    //                     $arr[$j] = $tampung_angka;
    //                     $angka = $arr[$j];
    //                 }else{
    //                     $angka = $arr[$j];
    //                 }
    //             }else{
    //                 if ($angka < $arr[$j]){
    //                     $tampung_angka = $arr[$j-1]; 
    //                     $arr[$j-1] = $arr[$j];
    //                     $arr[$j] = $tampung_angka;
    //                     $angka = $arr[$j];
    //                 }else{
    //                     $angka = $arr[$j];
    //                 }
    //             }
    //         }
    //     }
    //     return $arr;
    // }

    function flip(string $dir, array $arr) {
        $dir == "R"? sort($arr) : rsort($arr);
        return $arr;
    }

    print_r(flip("R", [3, 2, 1, 2]));
    print_r("<br");
    print_r(flip('L', [1, 4, 5, 3, 5]))
?>