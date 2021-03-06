<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('header')
    @section('main_content')
    <!-- <small>{{$data}}</small> -->
    <form action="/action/update/bookid={{$data->id}}" method="post">
    @csrf
        <label for="name">Judul Buku</label>
        <input type="text" name="title" class="form-control" value='{{$data->title}}'>
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" class="form-control" value='{{$data->pengarang}}'>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" value='{{$data->penerbit}}'>
        <label for="tahun">Tahun terbit</label>
        <input type="text" name="tahun" class="form-control" value='{{$data->tahun}}'>

        <button type="submit" class="btn btn-block btn-success mt-5">Update</button>
    </form>
    @stop
</body>

</html>