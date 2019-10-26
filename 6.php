<?php

function sort_array($data){
    // mengurutkan data secara ascending a-z
    sort($data[1]);
    // tampilkan data array
    print_r($data[1]);
    print_r(',<br>');
    // mengurutkan data secara ascending a-z
    sort($data[0]);
    // tampilkan data array
    print_r($data[0]);

}

// data array  
$data       = array (
                array("a", "c", "b", "e", "d"), 
                array("g", "e", "f")
            );

// menjalankan function sort_array 
sort_array($data);


?>

<br>
<br>
<br>

<?php

function sort_arrays($datalain){
    // mengurutkan data secara ascending a-z
    sort($datalain[2]);
    // tampilkan data array
    print_r($datalain[2]);
    print_r(',<br>');
    // mengurutkan data secara ascending a-z
    sort($datalain[0]);
    // tampilkan data array
    print_r($datalain[0]);
    print_r(',<br>');
    // mengurutkan data secara ascending a-z
    sort($datalain[1]);
    // tampilkan data array
    print_r($datalain[1]);

}

//data array
$datalain       = array (
                array("g", "h", "i", "j"), 
                array("a", "c", "b", "e", "d"),
                array("g", "e", "f")
            );

// menjalankan function sort_arrays            
sort_arrays($datalain);


?>


