<?php

namespace AWSM\LibTools\Patterns;

/**
 * Singleton trait
 * 
 * @since 1.0.0
 */
trait SingletonTrait
{
    /**
     * Instance
     * 
     * @var self
     * 
     * @since 1.0.0
     */
    private static $instance;

    /**
     * Instance
     * 
     * @return Assets
     * 
     * @since 1.0.0
     */
    public static function instance() : self 
    {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }
    
        return self::$instance;
    }
} 