<?php

namespace Sintegra\Model;

use Zend\Db\TableGateway\TableGateway;

class SintegraTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function saveSintegra(Sintegra $sintegra)
    {
        $data = array(
            'cnpj' => $sintegra->cnpj,
            'inscricao_estadual' => $sintegra->inscricao_estadual,
            'razao_social' => $sintegra->razao_social,
            'logradouro' => $sintegra->logradouro,
            'numero' => $sintegra->numero,
            'complemento' => $sintegra->complemento,
            'bairro' => $sintegra->bairro,
            'municipio' => $sintegra->municipio,
            'uf' => $sintegra->uf,
            'cep' => $sintegra->cep,
            'telefone' => $sintegra->telefone,
            'atividade_economica' => $sintegra->atividade_economica,
            'data_inicio_atividade' => $sintegra->data_inicio_atividade,
            'situacao_cadastral_vigente' => $sintegra->situacao_cadastral_vigente,
            'data_situacao_cadastral' => $sintegra->data_situacao_cadastral,
            'regime_apuracao' => $sintegra->regime_apuracao,
            'emitente_nfe_desde' => $sintegra->emitente_nfe_desde,
            'data_consulta' => $sintegra->data_consulta
        );

        return $this->tableGateway->insert($data);
    }
}