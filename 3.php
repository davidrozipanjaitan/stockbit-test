<?php
/*function findFirstStringInBracket($str) {
  if (strlen($str) > 0) {
  $firstbracket = strstr($str, '(');
    if ($firstbracket) {
      $firstbracket = ltrim($firstbracket, '(');
      return strstr($firstbracket, ')', true);
    } else {
      return 'bracket not found';
    }
  } else {
    return '';
  }
}
*/

function findFirstStringInBracket($str) {
  if (strlen($str) > 0 && preg_match('/\(([A-Za-z0-9 ]+?)\)/', $str, $result)) {
    echo $result[1];
  } else {
    return 'bracket not found';
  }
}
?>