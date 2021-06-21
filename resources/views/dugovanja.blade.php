<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <a href="http://127.0.0.1:8000/" class="btn btn-primary">NAZAD</a>
    <div class="container">
        <div class="row">
            <div class=" col-6">
                NAPLACENO:
                <table class="table table-bordered ">
                    <thead class=" thead-dark">
                        <tr>
                            <th scope="col">Naziv</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Kolicina</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($naplate as $naplata)
                        <tr>

                            <td scope="col">{{$naplata->naziv}}</td>
                            <td scope="col">{{$naplata->zabelezeno_at}}</td>
                            <td scope="col">{{$naplata->kolicina}}</td>
                            <td scope="col">
                                <form method="post" action={{"http://127.0.0.1:8000/student/naplata/delete?id=". $naplata->id}}>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">X</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <form method="post" action={{"http://127.0.0.1:8000/naplate/post"}}>
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" placeholder="Naziv" type="text" name="naziv" id="">
                        </div>
                        <input class="form-control" hidden type="text" name="id_student" value="<?php echo $_GET['id_student']; ?>">
                        <div class="col">
                            <input class="form-control" placeholder="Kolicina" type="number" name="kolicina" id="">
                        </div>
                        <div class="col">
                            <button class="btn btn-success btn-block" type="submit">Dodaj</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class=" col-6">

                ZADUZIVANJA:
                <table class="table table-bordered">
                    <thead class=" thead-dark">
                        <tr>
                            <th scope="col">Naziv</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Kolicina</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zaduzivanja as $zaduzivanje)
                        <tr>

                            <td scope="col">{{$zaduzivanje->naziv}}</td>
                            <td scope="col">{{$zaduzivanje->zabelezeno_at}}</td>
                            <td scope="col">{{$zaduzivanje->kolicina}}</td>
                            <td scope="col">
                                <form method="post" action={{"http://127.0.0.1:8000/student/zaduzivanje/delete?id=". $zaduzivanje->id}}>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">X</button>
                                </form>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <form method="post" action={{"http://127.0.0.1:8000/zaduzivanja/post"}}>
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" placeholder="Naziv" type="text" name="naziv" id="">
                        </div>
                        <input class="form-control" hidden type="text" name="id_student" value="<?php echo $_GET['id_student']; ?>">
                        <div class="col">
                            <input class="form-control" placeholder="Kolicina" type="number" name="kolicina" id="">
                        </div>
                        <div class="col">
                            <button class="btn btn-success btn-block" type="submit">Dodaj</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="../js/app.js"></script>
</body>

</html>