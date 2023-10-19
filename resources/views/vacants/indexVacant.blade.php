<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="welcome">
        <h1>Vacantes</h1>
    </div>

    <div class="viewVacants">
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Cargo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($allVacants as $vacant)
                    <tr>
                        <td>{{ $vacant->vacant_code }}</td>
                        <td>{{ $vacant->Job }}</td>
                        <td>
                            <a href="#">Ver</a>
                            <form action="">
                                <button>Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay vacantes</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
