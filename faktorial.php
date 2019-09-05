<?php

function fak($par) {
    if($par < 1) {
        return 1;
    }
    else {
        return $par * fak($par - 1);
        //3 * 2
        //6 * 1
    }
}

echo fak(3);