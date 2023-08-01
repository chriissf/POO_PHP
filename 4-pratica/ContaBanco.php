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
            $this->saldo = 50;
        } else if ($t == "cp") {
            $this->tipoContaBanco = "cp";
            $this->saldo = 150;
        }
    }
    public function fecharContaBanco()
    {
        if ($this->saldo == 0) {
            $this->status = false;
        } else {
            echo "Você não pode fechar sua conta,favor retirar todo seu dinheiro!";
        }
    }
    public function depositar($valor)
    {
        if ($this->status) {
            $this->saldo += $valor;
            echo "Deposito de $valor feito com sucesso!";
        } else {
            echo "Impossível efetuar o deposito ,sua conta está fechada!";
        }
    }
    public function sacar($valor)
    {
        if ($this->status && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de $valor realizado com Sucesso!";
        } else {
            echo "Saque não autorizado,Valor insuficiente!seu saldo é : $this->saldo";
        }
    }
    public function pagarMensalidade()
    {
        if ($this->status) {
            if ($this->tipoContaBanco == "cc") {
                $mensalidade = 12;
            } else if ($this->tipoContaBanco == "cp") {
                $mensalidade = 20;
            }
            if ($this->saldo >= $mensalidade) {
                $this->saldo -= $mensalidade;
                echo " Mensalidade de $mensalidade paga com sucesso!";
            } else {
                echo "saldo insuficiente para pagar a mensalidade.";
            }
        } else {
            echo "Sua conta está fechada!";
        }
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
