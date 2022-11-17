<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>COMPRAR</th>
        <th>VALOR TOTAL DA COMPRA</th>
        <th>DATA</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->user_name }}</td>
            <td>{{ number_format($item->value, 2, ',', '.') }}</td>
            <td>{{ $item->created }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
