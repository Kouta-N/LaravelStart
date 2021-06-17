<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

global $head,$style,$body,$end;
$head = '<html><head>';

$style = <<<EOF
<style>
    body {font-size:16pt; color:#999; }
    h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
</style>
EOF;

$body = '</head><body>';

$end = '</body></html>';

function tag($tag,$txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}

// class HelloController extends Controller
// {
//  public function index(){
//     global $head,$style,$body,$end;

//    $html = $head . tag('title','Hello/Index') . $style . $body . tag('h1','Index') . tag('p' , 'this is Index page') . '<a href = "/hello/other">go to other page</a>' . $end;
//    return $html;
//  }

//   public function other(){
//        global $head,$style,$body,$end;

//       $html2 = $head . tag('title', 'Hello/Other') . $style . $body . tag('h1', 'Other') . tag('p', 'this is Other page') . $end;
//       return $html2;
//   }

// }

// class HelloController extends Controller
// {
//  public function index(Request $request,Response $response){
//     $html = <<<EOF
//     <html>
//     <head>
//     <title>Hello/Index</title>
//     <style>
//     body {font-size:16pt; color:#999; }
//     h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
//     </style>
//     </head>
//     <body>
//     <h1>Hello</h1>
//     <h3>Request</h3>
//     <pre>{$request}</pre>
//     <h3>Response</h3>
//     <pre>{$response}</pre>
//     </body>
//     </html>
//     EOF;
//     $response->setContent($html);
//     return $response;
//  }
// }

// class HelloController extends Controller
// {
//     public function index($id =
//     'zero')
//     {
//        $data = [
//            'msg' => 'これはコントローラからのメッセージです',
//            'id' => $id
//         ];
//        return view('hello.index', $data);
//     }
// }

// class HelloController extends Controller
// {
//     public function index(Request $request)
//     {
//        $data = [
//            'msg' => 'これはコントローラからのメッセージです',
//            'id' => $request->id
//         ];
//        return view('hello.index', $data);
//     }
// }

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // if(isset($request->id)){
        //     $param = ['id' => $request->id];
        //     $items = DB::select('select * from people where id = :id',$param);
        // }else{
        //     $items = DB::select('select * from people');
        // }
        // return view('hello.index', ['items' => $items]);

    // $items = DB::select('select * from people');
    $items = DB::table('people')->get();
    return view('hello.index', ['items' => $items]);

        // $data = [
        //     ['name'=>'山田たろう','mail'=>'taro@yamada'],
        //     ['name'=>'田中はなこ','mail'=>'tanaka@flower'],
        //     ['name'=>'鈴木さちこ','mail'=>'sachiko@happy']
        // ];
    //     if ($request->hasCookie('msg')) {
    //         $msg = 'Cookie: ' . $request-> cookie('msg');
    //     }else{
    //         $msg = 'クッキーはありません';
    //     }
    //    return view('hello.index',['msg'=>$msg]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);

        // $validate_rule = [
        //     'msg' => 'required',
        // ];
        // $this->validate($request, $validate_rule);
        // $msg = $request -> msg;
        // $response = response() -> view('hello.index',
        // ['msg'=>'「'.$msg.'」をクッキーに保存しました。']);
        // $response->cookie('msg', $msg, 100);
        // return $response;

        // $validate_rule = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150,',
        // ];
        // $this->validate($request, $validate_rule);
        // return view('hello.index', ['msg' => '正しく入力されました!']);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name,mail,age) values (:name, :mail, :age)', $param);
        return redirect('/hello');
    }

     public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.edit',['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people set name = :name,mail = :mail,age = :age where id = :id', $param);
        return redirect('/hello');
    }

     public function del(Request $request)
    {
        $param = ['id' => $request->id,];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.del',['form'=>$item[0]]);
    }

      public function remove(Request $request)
    {
        $param = ['id' => $request->id,];
        DB::delete('delete from people where id = :id', $param);
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id', $id)->first();
        return view('hello.show',['item' => $item]);
    }
}