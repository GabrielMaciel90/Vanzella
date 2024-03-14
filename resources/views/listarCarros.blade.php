<html>
    <h1>Listar Carros</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do carro</th>
                <th>Marca do carro</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Tempo rodando</th>
                <th>Data de lançamento</th>
                <th>Km rodado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carros as $carro)
            <tr>
                <td> {{ $carro->id }} </td>
                <td> {{ $carro->nome }} </td>
                <td> {{ $carro->marca  }} </td>
                <td> {{ $carro->descricao }} </td>
                <td> {{ $carro->preco }} </td>
                <td> {{ $carro->tempo_Rodando }} </td>
                <td> {{ $carro->data_de_lançamento }} </td>
                <td> {{ $carro->km_rodado}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>