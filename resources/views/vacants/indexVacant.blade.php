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

        @if(session('success'))
        <div class="alert alert-success message" style="display: none;">
            {{ session('success') }}
        </div>
        @endif

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
                                <a href="{{ route('vacants.viewVacant', ['id' => $vacant->id]) }}" class="btn btn-primary">Ver</a>
                                <form action="{{ route('vacants.deleteVacant', ['id' => $vacant->id]) }}" method="get" class="d-inline">
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


    <script>
        // this function is exexcuting when the page is loaded
    document.addEventListener('DOMContentLoaded', function () {
        let message = document.querySelector('.message');
        if (message) {
            message.style.display = 'block';
            // usign setTimeout to hide the message after 2 seconds
            setTimeout(function () {
                // the message has display none after 2 seconds
                message.style.display = 'none';
            }, 2000);
        }
    });
    </script>

</body>
</html>
