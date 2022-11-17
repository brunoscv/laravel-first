<?php


namespace App\Calculos;


use App\Interfaces\AmortizationSystem;
use App\Models\Plano;
use App\Traits\EFunctions;
use Carbon\Carbon;

class Sac implements AmortizationSystem
{
    use EFunctions;

    private $renda;
    private $dataNascimento;
    private $n = 0;
    public $plano;

    public function __construct($renda, Carbon $dataNascimento, Plano $plano)
    {
        $this->renda = $renda;
        $this->dataNascimento = $dataNascimento;
        $this->plano =  $plano;
        $this->n = $this->asYear($this->dataNascimento);
    }

    function getParcela($index = null)
    {
        $saldoDevedor = $this->financialAmount();
        $n = 0;
        $a = $saldoDevedor / $this->getN();
        for ($n = 1; $n <= $this->getN(); $n++) {
            $j = ($this->monthlyAmount() / 100) * $saldoDevedor;
            $p = $a + $j;
            if ($n == $index) {
                return $p;
            }
            $saldoDevedor -= $a;
        }

        return $p;
    }



}
