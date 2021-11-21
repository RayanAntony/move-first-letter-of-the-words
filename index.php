<?php
function moveLetters($input){
  $splitInput = explode(" ", $input);
  $j=0;
  $result = array();
  foreach($splitInput as $word):
    if($j==0){
      $result[]=end($splitInput)[0].substr($word, 1);
    }
    else{
      $result[]=$splitInput[$j-1][0].substr($word,1)." ";
    }
    $j++;
  endforeach;
  return implode(" ", $result);
}

$input = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
echo moveLetters($input);
?>