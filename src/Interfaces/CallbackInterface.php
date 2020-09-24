<?php

namespace AWSM\LibTools;

/**
 * Class CallbackInterface.
 * 
 * @since 1.0.0
 */
interface CallbackInterface {
    public function callback( array $callback = array() ) : array;
    public function args() : array;
}