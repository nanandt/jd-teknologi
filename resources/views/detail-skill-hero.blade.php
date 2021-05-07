<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-8">
                <h3>Detail Super Hero</h3>
            </div>
            <div class="col-md-4 text-right">
                <button class="btn btn-primary" type="button">Edit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>{{$skills->nama_skill}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" class="form-control" value="{{$skills->nama_skill}}"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control">
                                <option value="{{$skills->jk_kelamin}}">{{$skills->jk_kelamin}}</option>
                                <option value="2">Wanita</option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>
                {{--                @forelse($superheros as $s)--}}
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Hero</th>
                        <th>
                            <a href="{{route('tambah.skill', $skills->id)}}" class="btn btn-primary btn-small">Tambah
                                Skill</a>
                        </th>
                    </tr>
                    </thead>
                    @foreach($supers as $super)
                        <tbody>
                        <td>{{$super->id}}</td>
                        <td>{{$super->nama_hero}}</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                        </tbody>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>
</html>
