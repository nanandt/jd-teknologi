<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row mt-5">
                <div class="col-md-5">
                    <h3>Daftar Skill</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{route('home')}}" class="btn btn-success">Back</a>
                </div>
                <div class="col-md-5">
                    <form class="d-flex" action="{{route('home.search.skill')}}" method="GET">
                        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Skill</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($skills as $s)
                        <tr>
                            <th>{{$s->id}}</th>
                            <td>{{$s->nama_skill}}</td>
                            <td>
                                <a href="{{ route('detail.skill.hero', $s->id) }}" class="btn btn-primary">
                                    View Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>
</html>
