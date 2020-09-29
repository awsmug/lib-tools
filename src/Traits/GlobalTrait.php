<?php

namespace AWSM\LibTools\Traits;

/**
 * Global trait
 * 
 * @since 1.0.0
 */
trait GlobalTrait
{
    /**
     * Instance
     * 
     * @var self
     * 
     * @since 1.0.0
     */
    private static $global;

    /**
     * Global
     * 
     * @return Assets
     * 
     * @since 1.0.0
     */
    public static function global() : self 
    {
        if ( static::$global === null ) {
            static::$global = new self();
        }
    
        return static::$global;
    }
} 