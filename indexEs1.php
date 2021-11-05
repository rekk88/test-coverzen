<?php
   $array = [
    "Lorem",
    "ipsum",
    [
        "dolor",
        [
            "sit",
            "amet",
        ],
        "consectetur"
    ],
    [
       "adipiscing"
    ],
    "elit"  
  ];
  var_dump($array); //test print
 
  function test_print($array, $key){
    echo " $array ";
  }

  array_walk_recursive($array,'test_print');
?>