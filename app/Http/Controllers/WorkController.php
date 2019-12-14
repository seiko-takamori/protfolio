<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Work;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        $posts = Work::all()->sortByDesc('updated_at');

        return view('work.index', ['posts' => $posts]);
    }
    
    public function show(Request $request, $id)
    {
        //$id = $request->id;
     //   $work = Work::where('id',$id)->first();
     
        $works = Work::all();
        
        //$worksに入ってる$idとマッチするWorkの添字（番号）を取得
        $targetWorkIndex = $works->search( function($item, $key) use ($id) {  //$itemにWork::のデータ１件1件が入る（引数名は自由、$keyはダミー（使わない））
            return $item->id == $id;
        });
        
        $targetWork = $works[$targetWorkIndex];
        $prevWork = $works[$targetWorkIndex-1] ?? null;
        $nextWork = $works[$targetWorkIndex+1] ?? null;
        
        
        return view('work.show', ['work' => $targetWork, 'prevWork'=>$prevWork, 'nextWork'=>$nextWork ]); 
        //[]の中は左が変数名なので、bladeでは左の名前に$をつけて使える。変数の中身には右側のデータが入ってる。
    }
    

}
