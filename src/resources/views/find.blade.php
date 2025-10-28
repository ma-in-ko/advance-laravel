@extends('layouts.default')

<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    td {
        padding: 25px 40px;
        background-color: #eee;
        text-algin: center;
    }
</style>

@section('title', 'find.blade.php')

@section('content')
<form action="/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="名前検索">
</form>
@if(@isset($item))
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>nationality</th>
    </tr>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->nationality}}</td>
    </tr>
</table>
@endif
@endsection
