<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">


    <h1>Tambah Client Baru</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
    
        <label for="name">Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required><br><br>
    
        <label for="slug">Slug:</label><br>
        <input type="text" name="slug" value="{{ old('slug') }}" required><br><br>
    
        <label for="is_project">Tipe:</label><br>
        <select name="is_project" required>
            <option value="0" {{ old('is_project') == '0' ? 'selected' : '' }}>Bukan Project</option>
            <option value="1" {{ old('is_project') == '1' ? 'selected' : '' }}>Project</option>
        </select><br><br>
    
        <label for="self_capture">Self Capture:</label><br>
        <select name="self_capture" required>
            <option value="1" {{ old('self_capture') == '1' ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ old('self_capture') == '0' ? 'selected' : '' }}>Tidak</option>
        </select><br><br>
    
        <label for="client_prefix">Prefix Client (4 huruf):</label><br>
        <input type="text" name="client_prefix" value="{{ old('client_prefix') }}" maxlength="4" required><br><br>
    
        <label for="client_logo">Logo Client (URL / nama file):</label><br>
        <input type="text" name="client_logo" value="{{ old('client_logo', 'no-image.jpg') }}"><br><br>
    
        <label for="address">Alamat:</label><br>
        <textarea name="address">{{ old('address') }}</textarea><br><br>
    
        <label for="phone_number">Nomor Telepon:</label><br>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}"><br><br>
    
        <label for="city">Kota:</label><br>
        <input type="text" name="city" value="{{ old('city') }}"><br><br>
    
        <button type="submit">Simpan</button>
        <a href="{{ route('clients.index') }}">Batal</a>
    </form>
</div>
</body>
</html>