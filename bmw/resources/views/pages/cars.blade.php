<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Listesi</title>
</head>
<body>
    <h1>Araç Listesi</h1>

    @if($cars->count() > 0)
        <ul>
            @foreach($cars as $car)
                <li>{{ $car->make }} - {{ $car->model }} ({{ $car->year }})</li>
            @endforeach
        </ul>
    @else
        <p>Henüz araç bulunmamaktadır.</p>
    @endif
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Ekle</title>
</head>
<body>
    <h1>Araç Ekle</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/cars" method="POST">
        @csrf
        <label for="make">Marka:</label>
        <input type="text" id="make" name="make" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="year">Yıl:</label>
        <input type="number" id="year" name="year" required><br>

        <button type="submit">Ekle</button>
    </form>
</body>
</html>
