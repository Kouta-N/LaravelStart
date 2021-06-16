<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        // $data = [
        //     ['name'=>'山田たろう','mail'=>'taro@yamada'],
        //     ['name'=>'田中はなこ','mail'=>'tanaka@flower'],
        //     ['name'=>'鈴木さちこ','mail'=>'sachiko@happy']
        // ];
       return view('hello.index',['msg'=>'フォームを入力:']);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150,',
        ];
        $this->validate($request, $validate_rule);
        return view('hello.index', ['msg' => '正しく入力されました!']);
    }
}