<?php

namespace AWSM\LibTools\Traits;

use AWSM\LibTools\Exceptions\ToolsException;
use AWSM\LibTools\Interfaces\ServiceInterface;

/**
 * Service container trait.
 * 
 * @since 1.0.0
 */
trait ServiceContainerTrait {
    /**
     * Services
     * 
     * @var array
     * 
     * @since 1.0.0
     */
    protected $services = [];

    /**
     * Add service
     * 
     * @param string           $serviceId Service id.
     * @param ServiceInterface $service   Service to add.
     * @param int              $priority  Priority on loading services.
     * 
     * @throws ToolsException If service id is already in use.
     * 
     * @since 1.0.0
     */
    public function addService( string $serviceId, ServiceInterface $service, int $priotity = 1 ) 
    {
        if ( array_key_exists( $serviceId, $this->services ) ) {
            throw new ToolsException( 'Service id already exists' );
        }

        $this->services[ $serviceId ] = [
            'service'  => $service,
            'priority' => $priotity
        ];
    }

    /**
     * Cheks if service is already added
     * 
     * @return bool True if service already exists, false if not.
     * 
     * @since 1.0.0
     */
    public function hasService( string $serviceId ) : bool
    {
        return array_key_exists( $serviceId, $this->services );
    }

    /**
     * Get service
     * 
     * @param  string           $serviceId Service id.
     * @return ServiceInterface Service
     * 
     * @throws ToolsException If service id does not
     * 
     * @since 1.0.0
     */
    public function getService( string $serviceId ) : ServiceInterface
    {
        if ( ! $this->hasService( $serviceId ) ) {
            throw new ToolsException( 'Service id does not exist' );
        }
        
        return $this->services[ $serviceId ]['service'];
    } 

    /**
     * Remove a service
     * 
     * @param string $serviceId Service id.
     * 
     * @throws ToolsException If service id does not exist.
     * 
     * @since 1.0.0
     */
    public function removeService( string $serviceId ) 
    {
        if ( ! $this->hasService( $serviceId ) ) {
            throw new ToolsException( 'Service id does not exist' );
        }
        
        unset( $this->services[ $serviceId ] );
    }

    /**
     * Get services
     * 
     * @param  bool  $prioritized True if services have to be returned prioritized, otherwise false.
     * @return array Services array. 
     * 
     * @since 1.0.0
     */
    public function getServices( bool $prioritized = true ) : array
    {
        if( ! $prioritized ) {
            return $this->getServicesUnPrioritized();
        } else {
            return $this->getServicesPrioritized();
        }
    }

    /**
     * Get services prioritized
     * 
     * @return array Prioritized services array. 
     * 
     * @since 1.0.0
     */
    private function getServicesUnPrioritized() : array
    {
        $services = [];

        foreach( $this->services AS $service ) 
        {
            $services[] = $service['service'];
        }

        return $services;
    }

    /**
     * Get services prioritized
     * 
     * @return array Prioritized services array. 
     * 
     * @since 1.0.0
     */
    private function getServicesPrioritized() : array
    {
        $services = [];
  
        foreach ( $this->services AS $service )
        {
            $services[ $service['priority'] ][] = $service['service'];
        }

        ksort( $services );

        $services = call_user_func_array( 'array_merge', $services );

        return $services;
    }
}