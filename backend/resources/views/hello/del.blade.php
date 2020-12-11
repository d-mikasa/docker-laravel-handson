@extends('layouts.hogeapp')

@section('title', 'Delete') @section('menubar')
    @parent
        削除ページ
@endsection

@section('content')
<form action="/hello/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>name: </th>
            <td><input type="text" value="{{$form->name}}"></td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" value="{{$form->mail}}"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="text" value="{{$form->age}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>
@endsection

@section('footer')
copyright 2020 mikasa.
@endsection
