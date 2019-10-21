<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;

 
class ValiController extends Controller
{ 
    public function index(){
        return view('index');
    }
    
    #index_file
    public function receiveData(Request $request)
    {
        #formからの値を受け取る
        $data1 = $request->all();
        
        #バリデーションルール
        $validator = Validator::make($request->all(),[
       'goyoyakuninzu' => 'required|string|max:255',  // 必須・文字列・２５５文字以内
       'goyoyakumei' => 'required|string|max:255',    // 必須・文字列・２５５文字以内
//       'telnumber' => 'required|integer|size:11',     // 必須・整数・指定桁数１１桁
            //正規表現でチェックできるか確認する。
//       'goyobo' => 'string|max:10000',                // 文字列・１００００文字以内
//        'email' => 'required|email',              // 必須・email形式
      ]);
        #バリデーションでエラーになった場合　
        if($validator->fails()){
            return redirect('index')
                ->withErrors($validator)
                ->withInput();
        }
        #仮予約確定画面に変数を渡す
        return view('/yoyakukakunin',['status'=>true],compact('data1'));
    }
    
    //親クラスを作って変数を登録してそれをインポートして子クラスに値を持たす。
    
    
    
    #yoyakukakunin_file
    public function postKakutei(Request $request){
        #変数の代入
//        $goyoyakumei='goyoyakumei';
//        $telnumber='telnumber';
//        $goraitenjikan='goraitenjikan';
//        $goyoyakubi='goyoyakubi';
//        $goyoyakuninzu='goyoyakuninzu';
//        $plan='plan';
//        $goyobo='goyobo';
        $data2 = $request->all();
        
//        return view('kakutei',        
        #仮予約確定画面に変数を渡す
        return view('kakutei'
//                    ,compact('goyoyakumei'
//                            ,'telnumber'
//                            ,'goraitenjikan'
//                            ,'goyoyakubi'
//                            ,'goyoyakuninzu'
//                            ,'plan'
//                            ,'goyobo'));
                    ,compact('data2'));
    }
    public function getKakutei(Request $request){
        $goyoyakuninzu='goyoyakuninzu';
        return view('kakutei',compact('goyoyakuninzu'));
    }
    
    #sendmail
//    $text="aaa";
//    Mail::to('TO-ADDRESS@YOUR-DOMAIN.COM')->send(new Admin($test));
//        
    #hello_file
    public function getIndex(Request $request)
    {
        return view('test');
    }
    public function postIndex(Request $request)
    {
        $res="入力内容：".$request->input('str');
        return view('test');
    }

    
    #sample
    public function test(Request $request){
        return view('welcome');
    }
}



