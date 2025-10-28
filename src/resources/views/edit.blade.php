@extends('layouts.default')

<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 25px 25px;
    }

    tr:nth-child(odd) td {
        background-color: #fff;
    }

    td {
        padding:25px 40px;
        background-color: #eee;
        text-align: center;
    }

    button {
        background-color: #289ADC;
        color:white;
        border: none;
        padding: 10px 20px;
    }

@section('title', 'edit.blade.php')

@section('content')
@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif
    <form action="/edit", method="post">
    @csrf
        <table>
            @error('id')
            <tr>
                <th style="background-color: red;">ERROR</th>
                <td>{{$errors->first('id')}}</td>
            </tr>
            @enderror
            <tr>
                <th>id</th>
                <td><input type="text" name="id" value="{{ $form->id }}"></td>
            </tr>
            @error('name')
            <tr>
             <th style="background-color: red;">ERROR</th>
             <td>{{$errors->first('name')}}</td>
            <tr>
            @enderror
            <tr>
                <th>name</th>
                <td><input type="text" name="name" value="{{ $form->name }}"></td>
            </tr>
            @error('age')
            <tr>
                <th style="background-color: red;">ERROR</th>
                <td>{{$errors->first('age')}}</td>
            </tr>
            @enderror
            <tr>
                <th>age</th>
                <td><input type="text" name="age" value="{{ $form->age }}"></td>
            </tr>
            @error('nationality')
            <tr>
                <th style="background-color: red;">ERROR</th>
                <td>{{$errors->first('nationality')}}</td>
            </tr>
            @enderror
            <tr>
                <th>nationality</th>
                <td><input type="text" name="nationality" value="{{ $form->nationality}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><button>送信</button></td>
            </tr>
        </table>
    </form>
@endsection


