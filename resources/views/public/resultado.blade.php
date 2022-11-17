@extends('public._layouts.master')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{route('front.index')}}" class="btn btn-success" style="float:right"><i class="fa fa-plus mr-2"></i>Nova Simulação</a>
            <a href="{{route('front.download')}}" class="btn btn-danger mr-2" style="float:right" target="_blank"><i class="fa fa-download mr-2"></i>Baixar Simulação</a>
        </div>
        <div class="col-md-12">
            <div class="card" style="background-color: #181F3C">
                <div class="card-header result-title"><span style="font-size:1.5rem">Sua Simulação</span></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <p style="font-size:1.1rem">
                                <span style="color: #CBD41B"><strong>VALOR FINANCIADO:</strong></span> <br/>
                                <span style="color: #fff">{{getCurrency($maiorValor)}}</span>
                            </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <p style="font-size:1.1rem">
                                <span style="color: #CBD41B"><strong>VALOR DO IMOVEL PRONTO:</strong></span> <br/>
                                <span style="color: #fff">{{getCurrency($maiorValor * 1.18)}}</span>
                            </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <p style="font-size:1.1rem">
                                <span style="color: #CBD41B"><strong>IDADE:</strong></span> <br/>
                                <span style="color: #fff">{{$idade}} ano(s)</span>
                            </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <p style="font-size:1.1rem">
                                <span style="color: #CBD41B"><strong>VALOR DA RENDA:</strong></span> <br />
                                <span style="color: #fff">{{getCurrency($renda)}}</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-3 mt-5">
        <p class="result-title">Escolha o melhor plano para você.</p>
    </div>
    <div class="row mb-5 mt-5">
        @foreach($planos as $key => $plano)
            <div class="col-md-3">
                <div class="card" style="background-color: #181F3C; border-right: 2px solid #fff">
                    <div class="card-header result-title"><strong>{{$plano->name}}</strong></div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <p style="font-size:1.1rem">
                                    <span style="color: #CBD41B"><strong>Primeira Parcela:</strong></span> <br />
                                    <span style="color: #fff">{{getCurrency($plano->ca->getParcela(1))}}</span>
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <p style="font-size:1.1rem">
                                    <span style="color: #CBD41B"><strong>Última Parcela:</strong></span> <br />
                                    <span style="color: #fff">{{getCurrency($plano->ca->getParcela())}}</span>
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <p style="font-size:1.1rem">
                                    <span style="color: #CBD41B"><strong>Valor Total Financiado:</strong></span> <br />
                                    <span style="color: #fff">{{getCurrency($plano->ca->financialAmount())}}</span>
                                </p>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <p style="font-size:1.1rem">
                                    <span style="color: #CBD41B"><strong>Prazo:</strong></span> <br />
                                    <span style="color: #fff">{{$plano->ca->getN()}}</span>
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-6">
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

    <div class="row mb-5 mt-5">
        <div class="col-md-8 mx-auto">
            <p class="result-link" style="">AGORA É SÓ ESCOLHER A MELHOR OPÇÃO PARA A SUA CONSTRUÇÃO E CLICAR NO LINK ABAIXO</p>
            <div class="justify-content-center" style="text-align:center; margin: 0 auto;">
                <a href="https://api.whatsapp.com/send?phone=5586994345161&text=Olá, gostaria de mais informações sobre o meu financiamento!" target="_blank" class="btn btn-result m-4" ><span style="font-weight:bold">Quero financiar</span></a>
            </div>
            <p style="font-size:0.7rem; color: #fff; text-align: justify; font-weight:bold;">
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

    <div class="row">
        @foreach($planos as $plano)
            @component("panel._components.".strtolower($plano->calculo)."_table", ["plano" => $plano])
            @endcomponent
        @endforeach
    </div>

    <a href="https://api.whatsapp.com/send?phone=5586994345161&text=Olá, gostaria de mais informações sobre o meu financiamento!"
        target="_blank"
        style="position:fixed;bottom:20px;right:30px;">
        <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
    </a>
@endsection

@section('styles')
@endsection

@section('scripts')

<script>

    let count = $('.details').length;
    for (let i = 1; i <= count; i++) {
        $('#detail_' + i).on('click', function(event){
            console.log("aui")
            $('#'+ i).toggle('slow');
            $('#detail_'+ i + ' i').toggleClass('fa-plus fa-minus');
        });
    }
</script>
@endsection
