<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carros</title>
</head>

<body>
    <form method="POST" action="/carro">

        <fieldset>
            <legend>Area de Cadastro/Edição</legend>
            <div>
                <label>Marca: </label>
                <input type="text" name="marca" value="{{$carro->marca}}" /><br><br>
            </div>

            <div>
                <label>Modelo:</label>
                <input type="text" name="modelo" value="{{$carro->modelo}}"/><br><br>
            </div>

            <div>
                <label>Placa:</label>
                <input type="text" name="placa" maxlenth="7" value="{{$carro->placa}}"/><br><br>
            </div>

            <div>
                <label>Cor:</label>
                <input type="text" name="cor" value="{{$carro->cor}}" /><br><br>
            </div>

            <div>
                <label>Ano:</label>
                <input type="number" name="ano" width="20px;    " placeholder="Digite o Ano" value="{{$carro->ano}}"/><br><br>
            </div>

            <div>
                @csrf
                <input type="hidden" name="id" value="{{$carro->id}}">
                <button type="submit">Salvar</button>
        </fieldset>
    </form>

    <table border="1">
			<thead>
				<tr>
                    <th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead><br><br><br>

            <tbody>
                @foreach($carros as $carro)
                    <tr>
                        <td>{{$carro->marca}}</td>
                        <td>{{$carro->modelo}}</td>
                        <td>{{$carro->placa}}</td>
                        <td>
                            <a href="/carro/editar/{{$carro->id}}">Editar
                            </a>
                        </td>
                        <td>
                            <a href="/carro/excluir/{{$carro->id}}">
                                Excluir</a>
                        </td>
                    </tr>
                @endforeach
		</table>
</body>
</html>