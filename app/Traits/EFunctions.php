<?php


namespace App\Traits;


use Carbon\Carbon;

trait EFunctions
{
    function PV($R, $n, $pmt, $m = 1)
    {
        $Z = 1 / (1 + ($R / $m));
        return ($pmt * $Z * (1 - pow($Z, $n))) / (1 - $Z);
    }

    function asYear(Carbon $dataNascimento)
    {
        $rd = now()->diffInDays($dataNascimento) / 30;

        $months = ceil((80 * 12) - $rd);

        return $months > $this->plano->prazo ? $this->plano->prazo : $months;
    }

    function annualTax(): float
    {
        return ($this->plano->taxa / 100) / 12;
    }

    function monthlyAmount(): float
    {
        return $this->annualTax() * 100;
    }


    function financialAmount(): float
    {
        return $this->PV($this->annualTax(), $this->n, $this->crenda());
    }


    function crenda(): float
    {
        return $this->renda * ($this->plano->renda/100);
    }

    function getN()
    {
        return $this->n;
    }
}
