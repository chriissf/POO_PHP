<?php

class ContaBanco
{

    public $numeroConta;

    protected $tipoContaBanco;

    private $dono;

    private $saldo;

    private $status;

    public function __construct()
    {

        $this->saldo = 0;
        $this->status = false;
    }


    public function abrirContaBanco($t)
    {
        if ($t == "cc") {
            $this->tipoContaBanco = "cc";
            $this->saldo + 50;
        } else if ($t == "cp") {
            $this->tipoContaBanco = "cp";
            $this->saldo += 150;
        }
    }
    public function fecharContaBanco()
    {
    }
    public function depositar()
    {
    }
    public function sacar()
    {
    }
    public function pagarMensalidade()
    {
    }

    public function setNumeroConta($n)
    {
        $this->numeroConta = $n;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }


    public function getTipoContaBanco()
    {
        return $this->tipoContaBanco;
    }


    public function setTipoContaBanco($tipo)
    {
        $this->tipoContaBanco = $tipo;
    }


    public function getDono()
    {
        return $this->dono;
    }


    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($total)
    {
        $this->saldo = $total;
    }


    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($Status)
    {
        $this->status = $Status;
    }
}
