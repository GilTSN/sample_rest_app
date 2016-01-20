<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Sintegra\Controller\Sintegra' => 'Sintegra\Controller\SintegraController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'sintegra' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/sintegra[/:id]',
                    'defaults' => array(
                        'controller' => 'Sintegra\Controller\Sintegra',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);