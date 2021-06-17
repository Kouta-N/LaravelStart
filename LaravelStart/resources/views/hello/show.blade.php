@extends('layout.helloapp')

@section('title','Show')

    @section('menubar')
        @parent
        削除ページ
    @endsection

    @section('content')
        <table>
            @csrf
            id: {{ $item->id }}<br>
            name: {{ $item->name }}<br>
            mail: {{ $item->mail }}<br>
            age: {{ $item->age }}<br>
        </table>
    @endsection

@section('footer')
    copyright 2021.
@endsection
