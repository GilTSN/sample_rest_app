<?php

namespace Sintegra;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface,
    Zend\ModuleManager\Feature\ConfigProviderInterface,
    Zend\Db\ResultSet\ResultSet,
    Zend\Db\TableGateway\TableGateway;

use Sintegra\Model\Sintegra,
    Sintegra\Model\SintegraTable;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Sintegra\Model\SintegraTable' =>  function($sm) {
                    $tableGateway = $sm->get('SintegraTableGateway');
                    $table = new SintegraTable($tableGateway);
                    return $table;
                },
                'SintegraTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Sintegra());
                    return new TableGateway('sintegra', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
}