<?php

namespace AWSM\LibTools\Interfaces;

/**
 * Identable interface
 * 
 * @since 1.0.0
 */
interface IdentableInterface {
    /**
     * Set id
     * 
     * @param string $id 
     * 
     * @since 1.0.0
     */
    public function setId( $id );

    /**
     * Get id
     * 
     * @retrurn string
     * 
     * @since 1.0.0
     */
    public function getId();
}