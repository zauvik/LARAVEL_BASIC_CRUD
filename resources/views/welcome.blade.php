<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buku</title>

    <!-- Fonts -->
    
</head>

<body class="container">

    @extends('master')
    @section('main_content')
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
            <tr>
                <td>1</td>
                <td>Algoritma</td>
                <td>Ajik</td>
                <td>Jogja penerbit</td>
                <td>2019</td>
                <td>
                    <a href="update" class="btn btn-sm btn-success">update</a>
                    <a href="#" class="btn btn-sm btn-danger">delete</a>
                </td>
            </tr>
        </tbody>
    </table>
    @stop

</body>

</html>