<div id="{{$plano->id}}" class="col-md-12" style="display:none">
    <div class="row">
        <div class="col-md-8">
            <h2>{{$plano->name}}</h2>

            @php
                $price =  $plano->ca;
                $saldoDevedor = $price->financialAmount();

                $n = 0;
                $j = "-";
                $a = "-";
                $p = "-";

            @endphp

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="10%">Nº Parcela</th>
                    <th>Armotização</th>
                    <th>Juros</th>
                    <th>Prestação</th>
                    <th>Saldo Devedor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$n}}</td>
                    <td>{{$a}}</td>
                    <td>{{$j}}</td>
                    <td>{{$p}}</td>
                    <td>{{getCurrency($saldoDevedor)}}</td>
                </tr>
                @php  $p = $saldoDevedor / $price->fator(); @endphp
                @for($n = 1; $n <= $price->getN(); $n++)
                    @php
                        $j = ($price->monthlyAmount() / 100) * $saldoDevedor;
                        $a = $p - $j;
                    @endphp
                    <tr>
                        <td>{{$n}}</td>
                        <td>{{getCurrency($a)}}</td>
                        <td>{{getCurrency($j)}}</td>
                        <td>{{getCurrency($p)}}</td>
                        <td>{{getCurrency($saldoDevedor)}}</td>
                    </tr>
                    @php  $saldoDevedor -= $a; @endphp
                @endfor
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h2>Variáveis</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan=2>Dados</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Taxa Anual</td>
                        <td>{{$plano->taxa}}%</td>
                    </tr>
                    <tr>
                        <td>Valor Mensal Comprometido</td>
                        <td>{{getCurrency($plano->ca->financialAmount() / $plano->ca->fator())}}</td>
                    </tr>
                    <tr>
                        <td>Valor a financiar</td>
                        <td>{{getCurrency($plano->ca->financialAmount())}}</td>
                    </tr>
                    <tr>
                        <td>Nr de prest (em meses)</td>
                        <td>{{$plano->ca->getN()}}</td>
                    </tr>
                    <tr>
                        <td>Taxa ao mês</td>
                        <td>{{$plano->taxa / 12}}%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
