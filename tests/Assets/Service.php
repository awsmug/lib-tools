<?php

use AWSM\LibTools\Interfaces\ServiceInterface;
use AWSM\LibTools\Traits\IdentableTrait;

class Service implements ServiceInterface {
    use IdentableTrait;

    public function start() {}
}