<?php

namespace AWSM\LibTools;

/**
 * Class CallbackInterface.
 * 
 * @since 1.0.0
 */
interface CallbackInterface {
    /**
     * Get callback
     * 
     * @param array $callback
     * 
     * @since 1.0.0
     */
    public function getCallback() : array;

    /**
     * Get args
     * 
     * @return array $callback
     * 
     * @since 1.0.0 
     */
    public function getArgs() : array;
}