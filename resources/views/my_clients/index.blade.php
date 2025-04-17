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
    <div class="container w-full mx-auto p-2">
        <div class="row">
            <div class="col">
                <h1>My Clients</h1>
            </div>
            <div class="col">
                <a href="{{ route('clients.add') }}" class="btn btn-primary">New Client</a>
            </div>
        </div>
        <table class="table table-striped w-full">
            <tr class="table-dark">
                <th>Name</th>
                <th>Slug</th>
                <th>Is Project</th>
                <th>Self Capture</th>
                <th>Client Prefix</th>
                <th>Client Logo</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Deleted At</th>
                <th>Action</th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->slug }}</td>
                    <td>{{ $client->is_project }}</td>
                    <td>{{ $client->self_capture }}</td>
                    <td>{{ $client->client_prefix }}</td>
                    <td>{{ $client->client_logo }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->created_at }}</td>
                    <td>{{ $client->updated_at }}</td>
                    <td>{{ $client->deleted_at }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('clients.destroy', $client->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>