<?php
namespace Product;

use Zend\Mvc\MvcEvent;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    /**
     * This method is called once the MVC bootstrapping is complete and allows
     * to register event listeners. 
     */
    public function onBootstrap(MvcEvent $event)
    {
        
    }
}
