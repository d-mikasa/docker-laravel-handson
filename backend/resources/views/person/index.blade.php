@extends('layouts.hogeapp')

@section('title', 'Person.Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<table>
    <tr><th>Data</th></tr>
    
    @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
</table>
@endsection
