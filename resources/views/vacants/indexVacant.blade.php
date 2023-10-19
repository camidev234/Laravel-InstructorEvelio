<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="welcome mt-4">
            <h1>Vacantes</h1>
        </div>

        <div class="viewVacants mt-4">
            <table class="table">
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
                                <a href="#" class="btn btn-primary">Ver</a>
                                <form action="" method="post" class="d-inline">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
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

        <div class="create mt-4">
            <a href="{{ route('vacants.createVacant') }}" class="btn btn-success">Crear nueva vacante</a>
        </div>
    </div>

</body>
</html>
