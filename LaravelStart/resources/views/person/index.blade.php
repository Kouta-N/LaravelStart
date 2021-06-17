@extends('layout.helloapp')

@section('title','Person.index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        @foreach($items as $index => $item)
        {{ $item->getData() }}<br>
        {{-- Record{{ $index }}<br>
        name: {{ $item->name }}<br>
        mail: {{ $item->mail }}<br>
        age: {{ $item->age }}<br><br> --}}
        @endforeach
    @endsection

@section('footer')
    copyright 2021.
@endsection
