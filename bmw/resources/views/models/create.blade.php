<h1>Create a New Model</h1>

<form action="/models" method="POST">
    @csrf
    <label for="brand_id">Brand:</label>
    <select name="brand_id">
        @foreach($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select>

    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <button type="submit">Create Model</button>
</form>
