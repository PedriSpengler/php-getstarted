<?php 
    $a_bool = true;
    $a_str = "foo";
    $a_int = 12;
    $a_float = 1.42;
    $a_null = null;
    $a_array = array(1, 2, 3);
    $a_object = new stdClass();
    $a_resource = fopen("php://memory", "r");

    echo get_debug_type($a_bool) . "\n";
    echo get_debug_type($a_str) . "\n";
    echo get_debug_type($a_int). "\n";
    echo get_debug_type($a_float). "\n";
    echo get_debug_type($a_null). "\n";
    echo get_debug_type($a_array). "\n";
    echo get_debug_type($a_object). "\n";
    echo get_debug_type($a_resource). "\n";

    var_dump($a_bool). "\n";
    var_dump($a_str). "\n";
    var_dump($a_int). "\n";
    var_dump($a_float). "\n";
    var_dump($a_null). "\n";
    var_dump($a_array). "\n";
    var_dump($a_object). "\n";
    var_dump($a_resource). "\n";

    if(is_int($a_int)) {
        $a_int += 4;
    }

    var_dump($a_int);

    
?>