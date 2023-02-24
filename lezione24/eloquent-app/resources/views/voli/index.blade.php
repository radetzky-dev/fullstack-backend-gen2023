<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flights</title>
</head>

<body>
    <table class="table table-bordered">
        <tr>
            <th>Volo</th>
            <th>Destinazione</th>
            <th>Action</th>
        </tr>
        @foreach ($flights as $volo)
            <tr>
                <td>{{ $volo->name }}</td>
                <td>{{ $volo->destination }}</td>
                <td>
                    <a class="btn btn-primary" href="">Mostra</a>
                    <a class="btn btn-primary" href="">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
