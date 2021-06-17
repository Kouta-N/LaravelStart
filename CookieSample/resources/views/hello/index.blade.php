 @extends('layout.helloapp')
 @section('title','Index')
 @section('menubar')
     @parent
     インデックスページ
 @endsection
 @section('content')

<p>{{ $msg }}</p>
@if (count($errors) > 0)
    <p>入力に問題あり</p>
@endif
<form accept="/hello" method="post">
    <table>
        @csrf
        @if ($errors->has('msg'))
            <tr><th>ERROR</th><td>{{ $errors->first('msg') }}</td></tr>
        @endif
        <tr><th>Message: </th><td><input type="text" name="msg" value="{{ old('msg') }}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>

    {{-- <p>{{ $msg }}</p>
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/hello" method="post">
    <table>
        @csrf
        <tr><th>name: </th><td><input type="text" name="name"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
        <tr><th>age: </th><td><input type="text" name="age"></td></tr>
        <tr><th></th><td><input type="submit" value="submit"></td></tr>
    </table>
    </form> --}}

 {{-- <p>ここが本文のコンテンツ</p>
 <p>これは、<middleware>google.com</middleware>へのリンク</p>
 <p>これは、<middleware>yahoo.com</middleware>へのリンク</p> --}}

    {{-- <table>
        @foreach($data as $item)
        <tr>
            <th>
                {{ $item['name'] }}
            </th>
            <td>
                {{ $item['mail'] }}
            </td>
        </tr>
        @endforeach
    </table> --}}


    {{-- <p>Controller value<br>'message' = {{ $message }}</p>
    <p> ViewComposer value<br>'view_message' = {{ $view_message }}</p> --}}

    {{-- <ul>
        @each('components.item',$data,'item')
    </ul> --}}
    {{-- <p>必要だけ記述できます。</p> --}}
    {{-- @include('components.message',['msg_title' => 'OK', 'msg_content'=>'サブビューです']) --}}
    {{-- @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot
        @slot('msg_content')
            これはメッセージの表示です。
        @endslot
    @endcomponent --}}
 @endsection
 @section('footer')
 copyright 2020 tuyano.
 @endsection

 {{-- <html>
 <head>
   <title>Hello/Index</title>
   <style>
   body {
     font-size: 16pt;
     color: #999;
   }

   h1 {
     font-size: 100pt;
     text-align: right;
     color: #eee;
     margin: -40px 0px -50px 0px;
   }
   </style>
 </head> --}}

 {{-- <body>
  <h1>Blade/Index</h1>
    <p>&#064;foreachディレクティブの例</p>
    @foreach($data as $item)
    @if($loop->first)
    <p>※データ一覧</p><ul>
    @endif
    <li>No,{{ $loop->iteration }}.{{ $item }}</li>
    @if ($loop->last)
    </ul><p>----ここまで</p>
    @endif
    @endforeach
    </ol>
 </body> --}}


 {{-- <body>
  <h1>Blade/Index</h1>
    <p>&#064;foreachディレクティブの例</p>
    <ol>
        @php
            $counter = 0;
        @endphp
        @while($counter < count($data))
        <li>{{ $data[$counter] }}</li>
        @php
        $counter++;
        @endphp
        @endwhile
    </ol>
 </body>

 </html> --}}
