<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2>Clientes</h2>
        <div class="table-responsive">
            @if($data->count()) 
                <table cellpadding="0" cellspacing="2" border="0.5px #ddd solid" style="text-align:left; width:100%">
                    <thead>
                    <tr>
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
            @else
                <p>Não temos nada para exibir.</p>
            @endif
        </div>
    </body>
</html>