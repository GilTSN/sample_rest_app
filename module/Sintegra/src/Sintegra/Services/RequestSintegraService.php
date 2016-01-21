<?php

namespace Sintegra\Services;

use Zend\Http\Request,
    Zend\Http\Client;

/**
 * Class RequestSintegraService
 * @package Sintegra\Services
 */
class RequestSintegraService
{
    /**
     * Makes a query for a CNPJ
     *
     * @param $cnpj
     * @return bool|mixed
     */
    public function requestSintegra($cnpj)
    {
        $request = new Request();
        $request->setMethod(Request::METHOD_POST);
        $request->setUri('http://www.sintegra.es.gov.br/resultado.php');
        $request->getPost()->set('botao', 'Consultar');
        $request->getPost()->set('num_cnpj', $cnpj);

        $client = new Client(null, self::setConfig());

        try {
            $response = $client->send($request);

            if ($response->getStatusCode() == 200) {
                return $response->getContent();
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Set proxy and timeout config for the request
     *
     * @return array
     */
    private static function setConfig()
    {
        return array(
            'adapter'    => 'Zend\Http\Client\Adapter\Proxy',
            'proxy_host' => '118.144.187.254',
            'proxy_port' => 3128,
            'timeout' => 30
        );
    }
}