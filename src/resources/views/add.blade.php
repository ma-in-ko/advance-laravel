@extends('layouts.default')

<style>
    tr:nt-child(odd)  td{
        background-color: #fff;
    }

    th {
        background-color: #289ADC;
        color: white;
        padding: 25px 25px;
    }

    td {
        background-color: #eee;
        padding: 25px 40px;
        text-align: center;
    }
    
    button {
        background-color: #289ADC;
        color: white;
        padding: 10px 25px;
        border: none;
    }
</style>

@section('title', 'add.blade.php')

@section('content')
@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif
<form action="/add" method="post">
    @csrf
    <table>
        @error('name')
        <tr>
            <th style="background-color: red;">ERROR</th>
            <td> {{$errors->first('name')}}</td>
        </tr>
        @enderror
        <tr>
            <th>name</th>
            <td><input type="text" name="name"></td>
        </tr>
        @error('age')
        <tr>
            <th style="background-color: red;">ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @enderror
        <tr>
            <th>age</th>
            <td><input type="text" name="age"></td>
        </tr>
        @error('nationality')
        <tr>
            <th style="background-color: red;">ERROR</th>
            <td>{{$errors->first('nationality')}}</td>
        @enderror
        </tr>
        <tr>
            <th>nationality</th>
            <td><input type="text" name="nationality"></td>
        <tr>
        <tr>
            <th></th>
            <td><button>送信</button></td>
        </tr>
    </table>
</form>
@endsection