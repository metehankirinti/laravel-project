<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Düzenle</title>
</head>
<body>
    <h1>Araç Düzenle</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="make">Marka:</label>
        <input type="text" id="make" name="make" value="{{ $car->make }}" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="{{ $car->model }}" required><br>

        <label for="year">Yıl:</label>
        <input type="number" id="year" name="year" value="{{ $car->year }}" required><br>

        <button type="submit">Güncelle</button>
    </form>
</body>
</html>
