<?php
// function untuk generate random string
function random($val){
    //mengacak string
    $acak = str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz');
    //membatasi/memotong string -> substr(string,start,length)
    $random = substr($acak,1,$val);
    
    echo"$random";
}
function generate($value){
    // perulangan sesuai value yg dimasukan
    for ($x = 0; $x < $value; $x++) {
        
        for ($y = 0; $y < 3; $y++) {
            // menjalankan function random() -> generate 3 random string 4 digit : xxxx-xxxx-xxxx-
            random(4);
            echo '-' ;
        }
        // menjalankan function random() -> melengkapi 1 random string 4 digit lalu enter : xxxx-xxxx-xxxx-xxxx enter
        random(4);   
        echo'<br>';
    }
}
// Generate 3 baris serial number
generate(3);

// Hasil
// xxxx-xxxx-xxxx-xxxx
// xxxx-xxxx-xxxx-xxxx
// xxxx-xxxx-xxxx-xxxx

?>
