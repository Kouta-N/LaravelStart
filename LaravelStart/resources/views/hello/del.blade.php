@extends('layout.helloapp')

@section('title','Delete')

    @section('menubar')
        @parent
        削除ページ
    @endsection

    @section('content')
        <form action="/hello/del" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            name: {{ $form->name }}<br>
            mail: {{ $form->mail }}<br>
            age: {{ $form->age }}<br>
            <input type="submit" value="send">
        </table>
        </form>

@endsection

@section('footer')
    copyright 2021.
@endsection
