<?php

namespace Sintegra\Services;

use Zend\Dom\Query;

/**
 * Class ParseSintegraService
 * @package Sintegra\Services
 */
class ParseSintegraService
{
    private $dataIndex = array(
        0 => 'cnpj',
        1 => 'inscricao_estadual',
        2 => 'razao_social',
        3 => 'logradouro',
        4 => 'numero',
        5 => 'complemento',
        6 => 'bairro',
        7 => 'municipio',
        8 => 'uf',
        9 => 'cep',
        10 => 'telefone',
        11 => 'atividade_economica',
        12 => 'data_inicio_atividade',
        13 => 'situacao_cadastral_vigente',
        14 => 'data_situacao_cadastral',
        15 => 'regime_apuracao',
        16 => 'emitente_nfe_desde',
        17 => 'data_consulta'
    );

    /**
     * Parses a HTML string and turns it into array
     *
     * @param $html
     * @return array
     */
    public function parse($html)
    {
        $data = array();

        $dom = new Query($html);
        $results = $dom->execute('.valor');

        foreach ($results as $key => $result) {
            $data[$this->dataIndex[$key]] = trim($result->nodeValue);
        }

        return $data;
    }
}