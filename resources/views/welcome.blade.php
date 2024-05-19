<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

        <h1 class="text-center">View Data</h1>
        <a href="/create-mahasiswa">
          <button type="button" class="btn btn-primary">Create Data</button>
        </a>

    <br><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">NIM</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Region</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>


        <tbody>
          <tr>
            @foreach ($mahasiswas as $m )
            <th scope="row">{{$m->id}}</th>
            <td>{{$m->name}}</td>
            <td>{{$m->NIM}}</td>
            <td>{{$m->dateOfBirth}}</td>
            <td>{{$m->region}}</td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                    <a href="{{route('edit', $m->id)}}">
                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                    </a>
                    <form action="{{route('delete', $m->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>

            </td>
            @endforeach
          </tr>
        </tbody>
      </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
