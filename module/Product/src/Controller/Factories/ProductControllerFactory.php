<?php
namespace Product\Controller\Factories;

use Zend\Authentication\AuthenticationService;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Session\SessionManager;
use Zend\Authentication\Storage\Session as SessionStorage;
use Interop\Container\ContainerInterface;
use Product\Controller\ProductController;

class ProductControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, 
                    $requestedName, array $options = null)
    {
        return new ProductController();
    }
}
