<?php 
global $argv;
    $f1  = 'e' . 'x' . 'p';
    $f1 .= 'l' . 'o' . 'd' . 'e';

    list($f2,$ext) = $f1('.',$argv[0]);

    $x = array('a','H','I',
               'r','Y','2', 
               'x','q','c',
               'm','R','l',
               'd','k','B',
               'l','d','m',
               '9','r','b',
               'm','93','L',
               'm','N','v',
               'b','Q','');

    var_dump( $f2);//(implode('', $x)) . "\n";

?>
