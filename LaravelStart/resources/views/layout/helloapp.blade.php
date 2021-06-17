 <html>
 <head>
   <title>@yield('title')</title>
   <style>
   body {
     font-size: 16pt;
     color: #999;
   }

th {background-color:#999; color:fff; padding:5px 10px;}
td {border:solid 1px #aaa; color:fff; padding:5px 10px;}
   h1 {
     font-size: 100pt;
     text-align: right;
     color: #eee;
     margin: -40px 0px -50px 0px;
   }
   ul {font-size: 12pt;}
   hr{margin:25px 100px;border-top: 1px dashed #ddd;}
   .menutitle{ font-size:14pt; font-weight:bold; margin:0px; }
   .content{margin:10px}
   .footer{text-align:right; font-sie:10pt; margin:10px; border-bpttp,:solid 1px #ccc; color#ccc;}
   </style>
 </head>

 <body>
  <h1>@yield('title')</h1>
@section('menubar')
<h2 class="menutitle">※メニュー</h2>
<ul>
    <li>@show</li>
</ul>
<hr size="1">
<div class="content">
    @yield('content')
</div>
<div class="footer">
    @yield('footer')
</div>

</body>
</html>

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
 </body> --}}
