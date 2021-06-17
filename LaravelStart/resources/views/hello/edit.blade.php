@extends('layout.helloapp')

@section('title','Edit')

    @section('menubar')
        @parent
        更新ページ
    @endsection

    @section('content')
        <form action="/hello/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
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
