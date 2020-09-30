<?php

use AWSM\LibTools\Identables\IdentableTrait;
use AWSM\LibTools\Services\ServiceInterface;

class Service implements ServiceInterface {
    use IdentableTrait;

    public function start() {}
}