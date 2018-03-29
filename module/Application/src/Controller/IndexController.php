<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $_table;

    public function __construct(AuctionTable $table)
    {
        $this->_table = $table;
    }
}

?>