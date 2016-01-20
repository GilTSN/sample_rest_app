<?php

namespace Sintegra\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class SintegraController extends AbstractRestfulController
{
    public function getList()
    {
        $data = array(
            'teste' => 'teste'
        );

        return new JsonModel(array(
            'data' => $data,
        ));
    }
}