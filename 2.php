<?php
function hitungKembalian($pembelanjaan, $pembayaran) {
    // Mencari cashback
    if($pembelanjaan > 200000){
        $cashback = $pembelanjaan*10/100;
    }else{
        $cashback = 0;
    }

    $kembalian = $pembayaran - $pembelanjaan + $cashback;   
    // data array 
    $pecahan =[50000, 2000];
    // jumlah data dalam array
    $arrayLength = count($pecahan);

    for ($x = 0; $x < $arrayLength; $x++) {

        if($kembalian >= $pecahan[$x]){
            
            if($pecahan[$x] == 2000){
                echo"$pecahan[$x] disumbangkan karena tidak ada pecahan dibawah 5000";
            }else{
                echo"1 x $pecahan[$x] <br>";   
            }     

        }
        
        $kembalian = $kembalian-$pecahan[$x];

    }
}

hitungKembalian(220000, 250000); 

// Result
// 1 x 50000
// 2000 disumbangkan karena tidak ada pecahan dibawah 5000

?> 