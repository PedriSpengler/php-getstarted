<?php
    var_dump((bool) "");
    var_dump((bool) "0");
    var_dump((bool) 1);
    var_dump((bool) -2);
    var_dump((bool) "foo");
    var_dump((bool) 2.3e5);
    var_dump((bool) array(12));
    var_dump((bool) array());   
    var_dump((bool ) false);


/*
Regras de conversão para boolean em PHP:
Valores que se tornam false:

O booleano false mesmo.

O inteiro 0.

O float 0.0.

A string vazia "".

A string "0".

Um array vazio array().

O valor null.

Qualquer outro valor é convertido para true.
*/
?>