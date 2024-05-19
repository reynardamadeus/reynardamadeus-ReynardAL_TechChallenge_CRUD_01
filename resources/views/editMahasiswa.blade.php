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
    <div class="p-5 position-absolute top-50 start-50 translate-middle" style="width: 50%">
        <h1 class="text-center mb-4">Create a Profile</h1>
        <br>
        <form action="{{route('update', $mahasiswa->id)}}" method="POST">
            @csrf

            <!--Nama Mahasiswa input-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                <input type="text" class="form-control"  name="name" value="{{$mahasiswa->name}}">
            </div>

            <br>
            <!--NIM Mahasiswa input-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">NIM</span>
                <input type="text" class="form-control"  name="NIM" value="{{$mahasiswa->NIM}}">
            </div>
            <br>

            <!--date of birth Mahasiswa input-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Birth Date</span>
                <input type="date" class="form-control" name="dateOfBirth" value="{{$mahasiswa->dateOfBirth}}">
            </div>

             <!--region Mahasiswa input-->
             <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Region</span>
                <input type="text" class="form-control"  name="region" value="{{$mahasiswa->region}}">
            </div>

            <button type="submit" class="btn btn-primary m-auto">Submit</button>
        </form>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
