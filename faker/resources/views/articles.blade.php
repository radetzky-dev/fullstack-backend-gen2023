<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Company Crud</title>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD DB</h2>
                </div>

            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>
                        <a class="btn btn-primary" href="">Mostra</a>
                        <a class="btn btn-primary" href="">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $articles->links() !!}
</body>

</html>
