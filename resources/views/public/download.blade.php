<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-color: #181F3C; padding: 0px; width: 100%">
        {{-- <h2>Sua Simulação - Faz Financiada</h2>
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
        @endforeach --}}
        <div style="padding: 0;">
           
            <div style="width: 100%; float:left">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="http://fazfinanciada.com.br/assets/img/marca.png" class="logo-img" style="width: 20%; padding: 1rem">
                </a>
            </div>
               
            <div style=" justify-content: center!important;">
                <div style="width: 100%;">
                    <div style="width: 100%;
                    background-clip: border-box;
                    border: 1px solid rgba(0,0,0,.125);
                    border-radius: .25rem;">
                        <div style="padding: .75rem 1.25rem;
                        margin-bottom: 0;
                        background-color: rgba(0,0,0,.03);
                        border-bottom: 1px solid rgba(0,0,0,.125);
                        color: #CBD41B;
                        font-size: 1.3rem;
                        line-height: 1.5rem;"><span style="font-size:1.5rem">Sua Simulação</span></div>
        
                        <div style="
                        min-height: 1px;
                        padding: .5rem;">
                            <div style="display: inline-flex;">
                                <div style="width: 25%;float:left;">
                                    <p style="font-size:1.1rem">
                                        <span style="color: #CBD41B"><strong>VALOR FINANCIADO:</strong></span> <br/>
                                        <span style="color: #fff">{{getCurrency($maiorValor)}}</span>
                                    </p>
                                </div>
                                <div style="width: 25%;float:left;">
                                    <p style="font-size:1.1rem">
                                        <span style="color: #CBD41B"><strong>VALOR DO IMOVEL PRONTO:</strong></span> <br/>
                                        <span style="color: #fff">{{getCurrency($maiorValor * 1.18)}}</span>
                                    </p>
                                </div>
                                <div style="width: 25%;float:left; text-algn:center">
                                    <p style="font-size:1.1rem">
                                        <span style="color: #CBD41B; text-algn:center"><strong>IDADE:</strong></span> <br/>
                                        <span style="color: #fff; text-algn:center">{{$idade}} ano(s)</span>
                                    </p>
                                </div>
                                <div style="width: 25%;float:left;">
                                    <p style="font-size:1.1rem">
                                        <span style="color: #CBD41B"><strong>VALOR DA RENDA:</strong></span> <br />
                                        <span style="color: #fff">{{getCurrency($renda)}}</span>
                                    </p>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6rem">
                        <p style="padding: .5rem;
                        margin-bottom: 0;
                        border-bottom: 1px solid rgba(0,0,0,.125);
                        color: #CBD41B;
                        font-size: 1.3rem;
                        line-height: 1.5rem;">Escolha o melhor plano para você.</p>
                    </div>
                    <div style="display: inline-flex; padding: .5rem">
                        @foreach($item as $key => $plano)
                            <div style="width: 25%;float:left;">
                                <div class="card" style="background-color: #181F3C; border-right: 2px solid #fff">
                                    <div class="card-header" style=" color: #CBD41B;
                                    font-size: 1.3rem;
                                    line-height: 1.5rem;"><strong>{{$plano->name}}</strong></div>
                                    <div class="card-body">
                                        <div class="row">
                
                                            <div style="width: 100%">
                                                <p style="font-size:1.1rem">
                                                    <span style="color: #CBD41B"><strong>Primeira Parcela:</strong></span> <br />
                                                    <span style="color: #fff">{{getCurrency($plano->ca->getParcela(1))}}</span>
                                                </p>
                                            </div>
                                            <div style="width: 100%">
                                                <p style="font-size:1.1rem">
                                                    <span style="color: #CBD41B"><strong>Última Parcela:</strong></span> <br />
                                                    <span style="color: #fff">{{getCurrency($plano->ca->getParcela())}}</span>
                                                </p>
                                            </div>
                                            <div style="width: 100%">
                                                <p style="font-size:1.1rem">
                                                    <span style="color: #CBD41B"><strong>Valor Total Financiado:</strong></span> <br />
                                                    <span style="color: #fff">{{getCurrency($plano->ca->financialAmount())}}</span>
                                                </p>
                                            </div>
                
                                        </div>
                                        <div class="row">
                
                                            <div style="width: 100%">
                                                <p style="font-size:1.1rem">
                                                    <span style="color: #CBD41B"><strong>Prazo:</strong></span> <br />
                                                    <span style="color: #fff">{{$plano->ca->getN()}}</span>
                                                </p>
                                            </div>
                                            <div style="width: 100%">
                                                <p style="font-size:1.1rem">
                                                    <span><strong style="color: #CBD41B">Taxa:</strong></span> <br />
                                                    <span style="color: #fff">{{$plano->taxa}}%</span>
                                                </p>
                                            </div>
                
                                        </div>
                                        <div class="row">
                                            @component("panel._components.".strtolower($plano->calculo)."_table", ["plano" => $plano])
                                            @endcomponent
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="margin-top: 6rem">
                        <p style="padding: .5rem;
                        margin-bottom: 0;
                        border-bottom: 1px solid rgba(0,0,0,.125);
                        color: #fff;
                        font-size: 0.8rem;
                        line-height: 1rem;
                        text-align: justify;
                        font-weight:bold">
                        Os resultados obtidos representam apenas uma simulação e não valem como proposta. 
                        Todos os valores de seguros, parcelas e taxas apresentados estão sujeitos a alterações de acordo com a apuração da capacidade de pagamento e a aprovação da análise de crédito 
                        a ser efetuada pela CAIXA. Mesmo após a emissão do contrato, valores serão ajustados de acordo com a correção monetária contratada. 
                        Poderá haver alterações das taxas, dos prazos máximos e das demais condições, sem aviso prévio. A contratação está condicionada à disponibilidade de recursos 
                        para sua região e ao atendimento das exigências do programa. 
                        Caso tenha feito opção pelo Crédito Imobiliário Poupança CAIXA, saiba que a taxa de juros da simulação foi calculada conforme legislação vigente nesta data e que, 
                        durante a vigência do financiamento, esta taxa será recalculada mensalmente de acordo com a remuneração da Caderneta de Poupança vigente a cada aniversário do contrato.
                        </p>
                    </div>
                </div> 
            </div> 
        </div>

    </body>
</html>