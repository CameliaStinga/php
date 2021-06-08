<?php
$array1 = array('bleu'  => 1, 'rouge'  => 2, 'vert'  => 3, 'violet' => 4);
$array2 = array('vert' => 5, 'bleu' => 6, 'jaune' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array1, $array2));
?>
