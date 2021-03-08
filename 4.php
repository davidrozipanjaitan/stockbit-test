<?php 
  $map = [];
  $words = ["kita","atik","tika","aku","makan","kua"];

  foreach($words as $word){
    $split_word = str_split($word);
    sort($split_word);
    $split_word = implode("",$split_word);
    $map[$split_word][] = $word; 
  }

  print_r($map);
?>