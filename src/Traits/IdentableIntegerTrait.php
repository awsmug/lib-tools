<?php

namespace AWSM\LibTools\Traits;

/**
 * Idendatble integer trait
 * 
 * @since 1.0.0
 */
trait IdentableIntegerTrait {
    private $id;

    /**
     * Set id
     * 
     * @param string $id 
     * 
     * @since 1.0.0
     */
    public function setId( int $id ) {
        $this->id = $id;
    }

    /**
     * Get id
     * 
     * @retrurn string
     * 
     * @since 1.0.0
     */
    public function getId() : int 
    {
        return $this->id;
    }
}