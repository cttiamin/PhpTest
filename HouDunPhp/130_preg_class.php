<?php
// vim: set et sw=4 ts=4 sts=4 fdm=marker ff=unix fenc=utf8 nobomb:
/**
 * filename.php
 *
 * @author 
 * @date
 * @link 
 */

interface car{
    function run();
}

class bmw implements car {
    function run(){
        echo "宝马车在跑";
    }
}

//
class BZ implements car {
    function run(){
        echo "BZ";
    }
}


$bmw = new bmw();
$bmw->run();
?>
