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
    <div class="container mx-auto p-3">

    <h1>Tambah Client Baru</h1>
    
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
    
        <label for="name">Nama:</label><br>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
    
        <label for="slug">Slug:</label><br>
        <input class="form-control" type="text" name="slug" value="{{ old('slug') }}" required>
    
        <label for="is_project">Tipe:</label><br>
        <select class="form-control" name="is_project" required>
            <option value="0" {{ old('is_project') == '0' ? 'selected' : '' }}>Bukan Project</option>
            <option value="1" {{ old('is_project') == '1' ? 'selected' : '' }}>Project</option>
        </select>
    
        <label for="self_capture">Self Capture:</label><br>
        <select class="form-control" name="self_capture" required>
            <option value="1" {{ old('self_capture') == '1' ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ old('self_capture') == '0' ? 'selected' : '' }}>Tidak</option>
        </select>
    
        <label for="client_prefix">Prefix Client (4 huruf):</label><br>
        <input class="form-control" type="text" name="client_prefix" value="{{ old('client_prefix') }}" maxlength="4" required>
    
        <label for="client_logo">Logo Client (URL / nama file):</label><br>
        <input class="form-control" type="text" name="client_logo" value="{{ old('client_logo', 'no-image.jpg') }}">
    
        <label for="address">Alamat:</label><br>
        <textarea class="form-control" name="address">{{ old('address') }}</textarea>
    
        <label for="phone_number">Nomor Telepon:</label><br>
        <input class="form-control" type="text" name="phone_number" value="{{ old('phone_number') }}">
    
        <label for="city">Kota:</label><br>
        <input class="form-control" type="text" name="city" value="{{ old('city') }}">
        <br>
        <div class="row">
            <button class="btn btn-primary w-50" type="submit">Simpan</button>

            <a class="btn btn-secondary w-50" href="{{ route('clients.index') }}">Batal</a>
        </div>
    </form>
</div>
</body>
</html>