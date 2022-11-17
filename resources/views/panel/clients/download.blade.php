<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2>Sua Simulação - Faz Financiada</h2>
        <table cellpadding="0" cellspacing="0" border="0.5px #ddd solid" style="text-align:left; width:100%">
            <tbody>
                <tr>
                    <td style=" padding-left:20px"><strong>Sua Renda: </strong> {{getCurrency($renda)}}</td>
                    <td style=" padding-left:20px"><strong>Sua Idade: </strong>{{$idade}} ano(s)</td>
                    <td style=" padding-left:20px"><strong>Data: </strong>{{$data}}</td>
                </tr>
            </tbody>
        </table>
        @foreach($item as $key => $plano)
            <h3>{{$plano->name}}</h3>
            <table cellpadding="0" cellspacing="0" border="0.5px #ddd solid" style="text-align:left; width:100%">
                <tbody>
                    <tr>
                        <td width="width:2%; padding-left:20px"><strong>Prazos: </strong>{{$plano->ca->getN()}}</td>
                        <td style=" padding-left:20px"><strong>Taxa: </strong>{{$plano->taxa}}%</td>
                    </tr>
                    <tr>
                        <td colspan=2 style=" padding-left:20px"><strong>Valor Total: </strong> {{getCurrency($plano->ca->financialAmount())}}</td>
                    </tr>
                    <tr>
                        <td style=" padding-left:20px"><strong>Primeira Parcela: </strong> {{getCurrency($plano->ca->getParcela(1))}}</td>
                        <td style=" padding-left:20px"><strong>Ultima Parcela: </strong> {{getCurrency($plano->ca->getParcela())}}</td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </body>
</html>