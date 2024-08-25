<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <style>
        
        table {
            width: 100%;
            border-collapse:separate;
            border-spacing:0px;
            border-radius:6px;
            overflow:hidden;
            font-family:Georgia;

        }
        table, th, td {
            border: 2px solid black;

        }
        th, td {
            padding: 23px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>  
    <h1>Lista de Tarefas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data de publicação</th>
                <th>Data de entrega</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->titulo }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>{{ $tarefa->created_at->format('d/m/Y') }}</td>
                    <td>{{ $tarefa->data_de_entrega ? $tarefa->data_de_entrega->format('d/m/Y') : 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
