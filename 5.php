<?php

// function untuk generate random string
function random($val){
    //mengacak string
    $acak = str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz');
    //membatasi jumlah karakter string
    $random = substr($acak,1,$val);
    echo"$random";
}


function generate($value){
    // perulangan sesuai value yg dimasukan
    for ($x = 0; $x < $value; $x++) {
        
        for ($y = 0; $y < 3; $y++) {
            // generate random string 4 karakter
            random(4);
            echo '-' ;
        }

        random(4);   
        echo'<br>';
    }

}

// Generate 3 serial number
generate(3);

?>