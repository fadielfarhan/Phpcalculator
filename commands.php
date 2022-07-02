<?php
if($argv[1] == 'add'){
   
    $some = 0;
    $count = count($argv);

    for($i = 2; $i < $count; $i++){
        $element = $argv[$i];
        $some = $element + $some; 

        echo($element);
        if ($i != $count - 1) {
            echo(' + ');
        } 
    }
    echo (" = "  . $some);
} 
elseif ($argv[1] == 'subtract') {

    $some = 0 ;
    $count = count($argv);

    for($i = 2; $i < $count; $i++){
        $element = $argv[$i];
        $some = $element - $some; 

        echo($element);
        if ($i != $count - 1) {
            echo(' - ');
        } 
    }
    echo (" = "  . $some * -1);

}
elseif ($argv[1] == 'multiply') {

    $some = 1;
    $count = count($argv);

    for($i = 2; $i < $count; $i++){
        $element = $argv[$i];
        $some = $element * $some; 

        echo($element);
        if ($i != $count - 1) {
            echo(' * ');
        } 
    }
    echo (" = "  . $some);

}
elseif ($argv[1] == 'divide') {

    $some = $argv[2];
    echo($some . " / ");
    $count = count($argv);

    for($i = 3; $i < $count; $i++){
        $element = $argv[$i];
        $some = $some / $element ; 

        echo($element);
        if ($i != $count - 1) {
            echo(' / ');
        } 
    }
    echo (" = "  . $some);

}
elseif ($argv[1] == 'power'){
    echo($argv[2] ** $argv[3]);
};


return [
    \Jakmall\Recruitment\Calculator\Commands\AddCommand::class,
];
