<?php

namespace AWSM\LibTools\Identables;

/**
 * Identable integer interface
 * 
 * @since 1.0.0
 */
interface IdentableIntegerInterface {
    /**
     * Set id
     * 
     * @param string $id 
     * 
     * @since 1.0.0
     */
    public function setId( int $id );

    /**
     * Get id
     * 
     * @retrurn string
     * 
     * @since 1.0.0
     */
    public function getId() : int ;
}