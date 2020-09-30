<?php

namespace AWSM\LibTools\Services;

/**
 * Service container
 * 
 * @since 1.0.0
 */
interface ServiceContainerInterface {
    /**
     * Add a service
     * 
     * @param string           $serviceId Id of the service.
     * @param ServiceInterface $service   A service.
     * 
     * @since 1.0.0
     */
    public function addService( string $serviceId, ServiceInterface $service );

    /**
     * Remove a service
     * 
     * @param string $serviceId Id of the service.
     * 
     * @since 1.0.0
     */
    public function removeService( string $serviceId );
}