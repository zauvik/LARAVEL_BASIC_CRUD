<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buku</title>

    <!-- Fonts -->
    
</head>

<body class="container">

    @extends('header')
    @section('main_content')
    <a href="add">+ add buku</a>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun terbit</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $key=>$show)
            <tr>
            <td>{{$key+1}}</td>
                <td>{{$show->title}}</td>
                <td>{{$show->pengarang}}</td>
                <td>{{$show->penerbit}}</td>
                <td>{{$show->tahun}}</td>
                <td><a href="/update/bookid={{$show->id}}" class="btn btn-warning">update</a> <a href="/action/delete/bookid={{$show->id}}" class="btn btn-danger">delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @stop

</body>

</html>