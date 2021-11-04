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
  var_dump($array);
  $strLorem = "";
  // $counter = 0;

  // foreach ($array as $key => $element) {
  //   if (is_array($element)) {
  //     foreach($element as $key2 => $subElement){
  //       $strLorem += $subElement;
  //     }
  //   }
  //   else{
  //     $strLorem += $element;
  //   }
  // foreach($array as $key => $element){
  //   if (is_array($element)) {
  //     foreach($element as $key2 => $element2){
  //       if (is_array($element2)) {
  //         $strLorem .= implode($element2)
  //       }
  //     }
  //     $strLorem .= implode($element) . " "; 
  //   }
  //   else{
  //     $strLorem .= $element;
  //   }
  // }
  function test_print($array, $key){
    echo "$key holds $array\n";
  }

  array_walk_recursive($array,'test_print');
  // var_dump($strLorem);
?>