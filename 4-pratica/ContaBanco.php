<?php

class ContaBanco
{

    public $numConta;

    protected $tipo;

    private $dono;

    private $saldo;

    private $status;

    public function __construct()
    {

        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }


    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "cc") {
            $this->setSaldo(50);
        } else if ($t == "cp") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() == 0) {
            $this->status = false;
            echo "<p>Conta encerrada com sucesso!</p>";
        } else if ($this->getSaldo() < 0) {
            echo "<p>Conta em Debito, impossível encerrar conta!</p>";
        } else {
            echo "<p>Você não pode fechar sua conta,favor retirar todo seu dinheiro!</p>";
        }
    }
    public function depositar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Deposito de $valor na conta: " . $this->getDono() . "</p>";
        } else {
            echo "<p>Impossível efetuar o deposito ,sua conta está fechada!</p>";
        }
    }
    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de $valor realizado com Sucesso  na Conta de: " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saque não autorizado,Valor insuficiente para saque!</p>";
            }
        } else {
            echo "<p>Sua conta está fechada,impossível sacar</p>";
        }
    }
    public function pagarMensalidade()
    {
        if ($this->status) {
            if ($this->getTipo() == "cc") {
                $mensalidade = 12;
            } else if ($this->getTipo() == "cp") {
                $mensalidade = 20;
            }
            if ($this->getSaldo() >= $mensalidade) {
                $this->SetSaldo($this->getSaldo() - $mensalidade);
                echo " <p>Mensalidade de $mensalidade reais paga com sucesso,Dados da conta: Numero da conta: " . $this->getNumConta() . " </br> " . $this->getDono() . " Seu saldo é " . $this->getSaldo() . " reais." . "</p>";
            } else {
                echo "<p>saldo insuficiente para pagar a mensalidade</p>";
            }
        } else {
            echo "<p>Sua conta está fechada </p>";
        }
    }

    public function setNumConta($n)
    {
        $this->numConta = $n;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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
