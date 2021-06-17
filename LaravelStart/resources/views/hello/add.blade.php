@extends('layout.helloapp')

@section('title','Add')

    @section('menubar')
        @parent
        新規作成ページ
    @endsection

    @section('content')
        <form action="/hello/add" method="post">
        <table>
            @csrf
            name: <input type="text" name="name"><br>
            mail: <input type="text" name="mail"><br>
            age: <input type="text" name="age"><br>
            <input type="submit" value="send">
        </table>
        </form>

@endsection

@section('footer')
    copyright 2021.
@endsection
