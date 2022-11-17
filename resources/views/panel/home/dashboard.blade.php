@extends('panel._layouts.panel')

@section('_titulo_pagina_', 'Dashboard')


@section('content')
    <div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
            <div class="col-lg-12">

                <div class="ibox">

                    <div class="ibox-title">

                        <h5>@yield('_titulo_pagina_') - Ultimas Simulações</h5>

                    </div>

                    <div class="ibox-content">

                        <div class="m-b-lg">
                            <form method="get" id="frm_search" action="{{ route('clients.index') }}">
                                @include('panel._assets.basic-search')
                            </form>
                        </div>

                        <div class="table-responsive">

                            @if($data->count())

                                <table class="table table-striped table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th style="width: 100px; text-align: center">Ações</th>
                                        
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Dt. Nasc.</th>
                                        <th>Renda</th>
                                        <th class="hidden-xs hidden-sm" style="width: 150px;">Criado em</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($data->count())
                                        @foreach($data as $item)
                                            <tr id="tr-{{ $item->id }}">
                                                <td style="text-align: center">
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button"
                                                                class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Ações
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <a class="dropdown-item" href="{{ route('clients.edit', [$item->id]) }}">Editar</a>
                                                            <a class="dropdown-item" href="{{ route('clients.download', [$item->id]) }}" target="_blank">Baixar Simulação</a>
                                                            <link-destroy-component
                                                                line-id="{{ 'tr-'.$item->id }}"
                                                                link="{{ route('clients.destroy', [$item->id]) }}">
                                                            </link-destroy-component>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td>{{ $item->nome }}</td>
                                                <td>{{ $item->telefone }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ date('d/m/Y', strtotime($item->nascimento)) }}</td>
                                                <td>R$ {{ getCurrency($item->renda) }}</td>
                                                <td class="hidden-xs hidden-sm">{{ $item->created_at->format('d/m/Y H:i') }}</td>

                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                                @include('panel._assets.paginate')

                            @else
                                <div class="alert alert-danger">
                                    Não temos nada para exibir. Caso tenha realizado uma busca você pode realizar
                                    uma nova com outros termos ou
                                    <a class="alert-link" href="{{ route('clients.index') }}">
                                        limpar sua pesquisa.
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
            </div>

        </div>
    </div>

@endsection

@section('styles')
<style>
.highcharts-figure, .highcharts-data-table table {
    min-width: 360px; 
    max-width: 100%;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>
@endsection
@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
Highcharts.chart('container', {

title: {
    text: 'Quantidade de Acessos Mensais'
},

subtitle: {
    text: 'http://fazfinanciada.com.br'
},

xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
        month: '%e. %b',
        year: '%b'
    },
    title: {
        text: 'Date'
    }
},

yAxis: {
    title: {
        text: 'Acessos'
    }
},


legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        marker: {
            enabled: true
        }
    }
},

series: [{
    name: 'Acessos',
    data:[
        [Date.UTC(2021, 9, 15), 10],
        [Date.UTC(2021, 9, 31), 20],
        [Date.UTC(2021, 10,  7), 30],
        [Date.UTC(2021, 10, 10), 40],
        [Date.UTC(2021, 11, 10), 50]
    ]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 1000
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});    
</script>
@endsection

