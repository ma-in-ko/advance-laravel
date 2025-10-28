@extends('layouts.default')
<style>
    th {
        background: #289ADC;
        color: white;
        padding:25px 25px;
    }

    tr:nth-child(odd) td {
        background-color: #fff;
    }

    td {
        background-color: #eee;
        padding: 25px 40px;
        text-align: center;
    }
    button {
        background-color:   #289ADC;
        color:  white;
        padding: 10px 20px;
        border: none;
    }
</style>

@section('title', 'delete.blade.php')

@section('content')
    <table>
        <tr>
            <th>id</th>
            <td>{{ $author->id }}</td>
        </tr>
        <tr>
            <th>name</th>
            <td>{{ $author->name }}</td>
        </tr>
        <tr>
            <th>age</th>
            <td>{{ $author->age }}</td>
        </tr>
        <tr>
            <th>nationality</th>
            <td>{{ $author->nationality }}</td>
        </tr>
        <tr>
            <th></th>
            <td>
                <form action="/delete?id={{$author->id}}" method="post">
                    @csrf
                    <button>送信</button>
                </form>
            </td>
        </tr>
    </table>
    </form>
@endsection

