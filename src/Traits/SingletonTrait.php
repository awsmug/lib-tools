<?php

namespace AWSM\LibTools\Traits;

/**
 * Singleton trait
 * 
 * @since 1.0.0
 */
trait Singleton 
{
    /**
     * Instance
     * 
     * @var self
     * 
     * @since 1.0.0
     */
    protected static $instance;

    /**
     * Instance
     * 
     * @return Assets
     * 
     * @since 1.0.0
     */
    public static function instance() : self 
    {
        if ( static::$instance === null ) {
            static::$instance = new self();
        }
    
        return static::$instance;
    }
} 