<?php


namespace App\Calculos;


use App\Interfaces\AmortizationSystem;
use App\Models\Plano;
use App\Traits\EFunctions;
use Carbon\Carbon;

class Price implements AmortizationSystem
{
    use EFunctions;

    private $renda;
    private $dataNascimento;
    private $n = 0;
    private $plano;

    public function __construct($renda, Carbon $dataNascimento, Plano $plano)
    {
        $this->renda = $renda;
        $this->dataNascimento = $dataNascimento;
        $this->plano = $plano;
        $this->n = $this->asYear($this->dataNascimento);

    }

    function calculo2()
    {
        return 1 + ($this->monthlyAmount() / 100);
    }

    function calculo3()
    {
        return pow($this->calculo2(), $this->n);
    }

    function calculo4()
    {
        return $this->calculo3() - 1;
    }

    function calculo6()
    {
        return ($this->monthlyAmount() / 100) * $this->calculo3();
    }

    function fator()
    {
        return $this->calculo4() / $this->calculo6();
    }

    function getParcela($index = null)
    {
        $saldoDevedor = $this->financialAmount();
        $n = 0;
        $p = $saldoDevedor / $this->fator();
        for ($n = 1; $n <= $this->getN(); $n++) {

            if ($n == $index) {
                return $p;
            }
            $j = ($this->monthlyAmount() / 100) * $saldoDevedor;
            $a = $p - $j;
            $saldoDevedor -= $a;
        }

        return $p;
    }


}
