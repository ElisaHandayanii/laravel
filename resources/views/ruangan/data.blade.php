<!doctype html>
<html lang="en">
<body>
    <table>
        <tr>
            <td>ID</td>
            <td> Nama Ruangan</td>
</tr>
@foreach($data as $d)
<tr>
    <td>{{ $d['id'] }}</td>
    <td>{{ $d['nama_ruangan'] }}</td>
</tr>
@endforeach

