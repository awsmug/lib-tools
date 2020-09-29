<?php

namespace AWSM\LibTools\Traits;

/**
 * Idendatble trait
 * 
 * @since 1.0.0
 */
trait IdentableTrait {
    private $id;

    /**
     * Set id
     * 
     * @param string $id 
     * 
     * @since 1.0.0
     */
    public function setId( string $id ) {
        $this->id = $id;
    }

    /**
     * Get id
     * 
     * @retrurn string
     * 
     * @since 1.0.0
     */
    public function getId() : string 
    {
        return $this->id;
    }
}