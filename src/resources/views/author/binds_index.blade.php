@extends('layouts.default')
<style>
    th {
        background-colo: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-colo: #fff;
    }

    td {
        background-color: #eee;
        padding: 25px 40px;
        text-align: center;
    }
</style>

@section('title', 'binds_index.blade.php')

@section('content')
<table>
    <tr>
        <th>Data</th>
    </tr>
    @foreach ($authors as $author)
        <tr>
            <td>{{$author->getDetail()}}</td>
        </tr>
    @endforeach
</table>
@endsection
