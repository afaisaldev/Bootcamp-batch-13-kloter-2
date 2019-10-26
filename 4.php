<?php

function hitungVoucher($voucher, $uang_belanja){

    // Hitung diskon by voucher
    if($voucher == 'DumbWaysAsik'){

        if($uang_belanja >= 20000){
            $diskon = $uang_belanja*50/100;
            // Bila diskon lebih dari 20000, diskon diubah menjadi 20000 (maksimal 20000)
            if($diskon > 20000){
                $diskon = 20000;
            }
        }
        
    }else{

        if($uang_belanja >= 50000){
            $diskon = $uang_belanja*30/100;
            // Bila diskon lebih dari 40000, diskon diubah menjadi 40000 (maksimal 40000)
            if($diskon > 40000){
                $diskon = 40000;
            }
        }
        
    }

    $uang_dibayar = $uang_belanja - $diskon;
    $kembalian = $uang_dibayar = $diskon;

    echo"- Uang yang harus dibayar : $uang_dibayar <br>";
    echo"- Diskon : $diskon <br>";
    echo"- Kembalian : $kembalian <br>";

}

hitungVoucher("DumbWaysAsik", 30000);

?>

