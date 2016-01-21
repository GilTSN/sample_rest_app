<?php

namespace Sintegra\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel,
    Zend\Debug\Debug,
    Zend\Http\Response;

use Sintegra\Services\RequestSintegraService,
    Sintegra\Services\ParseSintegraService,
    Sintegra\Model\Sintegra;

class SintegraController extends AbstractRestfulController
{
    /*
     * Sintegra\Services\ParseSintegraService
     */
    private $parseSintegraService;

    /*
     * Sintegra\Services\RequestSintegraService
     */
    private $requestSintegraService;

    private $sintegraTable;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->parseSintegraService = new ParseSintegraService();
        $this->requestSintegraService = new RequestSintegraService();
    }

    /**
     * Search Sintegra Database
     *
     * @param mixed $id
     * @return JsonModel
     */
    public function get($id)
    {
        $htmlToParse = $this->requestSintegraService->requestSintegra($id);

        $data = ($htmlToParse) ? $this->parseSintegraService->parse($htmlToParse) : null;

        return new JsonModel(array(
            'data' => $data
        ));
    }

    /**
     * Creates a new entry
     *
     * @param mixed $data
     * @return Response
     */
    public function create($data)
    {
        $sintegra = new Sintegra();
        $sintegra->exchangeArray($data);

        $this->getSintegraTable()->saveSintegra($sintegra);

        $response = new Response();
        $response->setStatusCode(200);
        $response->setContent(json_encode(array('status' => 'ok')));

        return $response;
    }

    public function getSintegraTable()
    {
        if (!$this->sintegraTable) {
            $sm = $this->getServiceLocator();
            $this->sintegraTable = $sm->get('Sintegra\Model\SintegraTable');
        }

        return $this->sintegraTable;
    }
}