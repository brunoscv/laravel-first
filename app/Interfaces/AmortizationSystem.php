<?php


namespace App\Interfaces;


interface AmortizationSystem
{
    function annualTax() : float;
    function monthlyAmount() : float;

    /**
     * Valor do comprometimento da renda
     * @return float
     */
    function crenda() : float;

    /**
     *
     * valor total a ser financiado
     * @return float
     */
    function financialAmount() : float;
}
