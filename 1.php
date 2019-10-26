<?php
  // data array
  $datakey = ["dumb", "ways", "the", "best"];
  // jumlah data dalam array
  $arrayLength = count($datakey);
  $word = "dumbways";
  
  // Perulangan
  for ($x = 0; $x < $arrayLength; $x++) {
    
    // strpos untuk mencari posisi suatu karakter/string didalam string lain
    if(strpos($word, $datakey[$x]) !== false){

      echo"$datakey[$x] => true <br>";

    }else{

      echo"$datakey[$x] => false <br>";

    }

  } 

  // Result
  // dumb => true
  // ways => true
  // the => false
  // best => false 
?>
