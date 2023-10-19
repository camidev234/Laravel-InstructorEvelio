<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Vacante</title>
    <!-- Agrega las hojas de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="vacant mt-4 p-4 bg-light">
            <div class="title bg-success text-white p-2">
                <h3 class="mb-4">Detalles de la vacante</h3>
            </div>
            <div class="header">
                <h5>Código: {{ $vacant->vacant_code }}</h5>
            </div>
            <div class="header">
                <h5>Cargo: {{ $vacant->Job }}</h5>
            </div>
            <div class="containBody">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="skills">
                            <h5 class="text-success">Habilidades</h5>
                            <p>{{ $vacant->skills }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="competencies">
                            <h5 class="text-success">Competencias</h5>
                            <p>{{ $vacant->competencies }}</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="expertise">
                            <h5 class="text-success">Experiencia</h5>
                            <p>{{ $vacant->expertise_required }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="salary">
                            <h5 class="text-success">Salario</h5>
                            <p>{{ $vacant->salary }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
