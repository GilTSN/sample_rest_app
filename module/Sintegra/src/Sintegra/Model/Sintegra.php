<?php

namespace Sintegra\Model;

class Sintegra
{
    public $cnpj;
    public $inscricao_estadual;
    public $razao_social;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $municipio;
    public $uf;
    public $cep;
    public $telefone;
    public $atividade_economica;
    public $data_inicio_atividade;
    public $situacao_cadastral_vigente;
    public $data_situacao_cadastral;
    public $regime_apuracao;
    public $emitente_nfe_desde;
    public $data_consulta;

    public function exchangeArray(array $data = array())
    {
        $this->cnpj                       = (!empty($data['cnpj'])) ? $data['cnpj'] : null;
        $this->inscricao_estadual         = (!empty($data['inscricao_estadual'])) ? $data['inscricao_estadual'] : null;
        $this->razao_social               = (!empty($data['razao_social'])) ? $data['razao_social'] : null;
        $this->logradouro                 = (!empty($data['logradouro'])) ? $data['logradouro'] : null;
        $this->numero                     = (!empty($data['numero'])) ? $data['numero'] : null;
        $this->complemento                = (!empty($data['complemento'])) ? $data['complemento'] : null;
        $this->bairro                     = (!empty($data['bairro'])) ? $data['bairro'] : null;
        $this->municipio                  = (!empty($data['municipio'])) ? $data['municipio'] : null;
        $this->uf                         = (!empty($data['uf'])) ? $data['uf'] : null;
        $this->cep                        = (!empty($data['cep'])) ? $data['cep'] : null;
        $this->telefone                   = (!empty($data['telefone'])) ? $data['telefone'] : null;
        $this->atividade_economica        = (!empty($data['atividade_economica'])) ? $data['atividade_economica'] : null;
        $this->data_inicio_atividade      = (!empty($data['data_inicio_atividade']))
                                            ? $data['data_inicio_atividade']
                                            : null;
        $this->situacao_cadastral_vigente = (!empty($data['situacao_cadastral_vigente']))
                                            ? $data['situacao_cadastral_vigente']
                                            : null;
        $this->data_situacao_cadastral    = (!empty($data['data_situacao_cadastral']))
                                            ? $data['data_situacao_cadastral']
                                            : null;
        $this->regime_apuracao            = (!empty($data['regime_apuracao'])) ? $data['regime_apuracao'] : null;
        $this->emitente_nfe_desde         = (!empty($data['emitente_nfe_desde'])) ? $data['emitente_nfe_desde'] : null;
        $this->data_consulta              = (!empty($data['data_consulta'])) ? $data['data_consulta'] : null;
    }
}