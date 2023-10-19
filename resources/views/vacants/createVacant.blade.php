<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vacante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="{{ route('vacants.saveVacant') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="vacant_code">Código:</label>
                <input type="text" class="form-control" name="vacant_code" id="vacant_code">
            </div>
            <div class="form-group">
                <label for="skills">Habilidades:</label>
                <textarea class="form-control" name="skills" id="skills" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="competencies">Competencias:</label>
                <textarea class="form-control" name="competencies" id="competencies" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="expertise_required">Experiencia requerida:</label>
                <input type="text" class="form-control" name="expertise_required" id="expertise_required">
            </div>
            <div class="form-group">
                <label for="salary">Salario:</label>
                <input type="text" class="form-control" name="salary" id="salary" value="$" oninput="addDollarSign(this)">

            </div>
            <div class="form-group">
                <label for="places_available">Plazas disponibles:</label>
                <input type="text" class="form-control" name="places_available" id="places_available">
            </div>
            <div class="form-group">
                <label for="job_id">Cargo:</label>
                <select class="form-control" name="job_id" id="job_id">
                    @forelse($allJobs as $job)
                        <option value="{{ $job->id }}">{{ $job->Job }}</option>
                    @empty
                        <option value="">No hay vacantes</option>
                    @endforelse
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>


    <script>
function addDollarSign(input) {
    if (!input.value.startsWith("$")) {
        input.value = "$" + input.value;
    }
}
</script>

</body>
</html>
