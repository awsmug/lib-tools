<?php

use AWSM\LibTools\Callbacks\CallerDetective;

require '../vendor/autoload.php';

function Caller1() {
    echo CallerDetective::detect()->file();
}

Caller1();