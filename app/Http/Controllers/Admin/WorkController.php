<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Work;
use App\History;
use Carbon\Carbon;

class WorkController extends Controller
{
    public function add()
    {
        return view('admin.work.create');   
    }
    public function create(Request $request)
    {
        $this->validate($request, Work::$rules);
        $work = new Work;
        $form = $request->all();
        
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $work->image_path = basename($path);
        } else {
          $work->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        //詳細ページ：メイン画像の処理
        if (isset($form['image_path2'])) {
        $path2 = $request->file('image_path2')->store('public/image');
        $work->image_path2 = basename($path2);
        } else {
          $work->image_path2 = null;
        }
        
        unset($form['_token']);
        unset($form['image_path2']);
        
        //詳細ページ：レスポンシブ画像の処理
        if (isset($form['image_path3'])) {
        $path3 = $request->file('image_path3')->store('public/image');
        $work->image_path3 = basename($path3);
        } else {
          $work->image_path3 = null;
        }
        
        unset($form['_token']);
        unset($form['image_path3']);
        
        
        $work->fill($form);
        $work->save();
        
        return redirect('admin/work/create');
    } 
    
    public function index(Request $request){
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          $posts = Work::where('title', $cond_title)->get();
         } else {
          // それ以外はすべてのニュースを取得する
          $posts = Work::all();
         }
         return view('admin.work.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit(Request $request)
    {
        $work = Work::find($request->id);
        if (empty($work)) {
            abort(404);    
         }
        return view('admin.work.edit', ['work_form' => $work]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Work::$rules);
        $work = Work::find($request->id);
        $work_form = $request->all();
        
        //TOP画像の処理
        if ($request->remove == 'true') {
            $work_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $work_form['image_path'] = basename($path);
        } else {
            $work_form['image_path'] = $work->image_path;
        }
        
        unset($work_form['_token']);
        unset($work_form['image']);
        unset($work_form['remove']);

        //詳細画面：メイン画像の処理
        if ($request->remove_2 == 'true') {
            $work_form['image_path2'] = null;
        } elseif ($request->file('image_path2')) {
            $path2 = $request->file('image_path2')->store('public/image');
            $work_form['image_path2'] = basename($path2);
        } else {
            $work_form['image_path2'] = $work->image_path2;
        }
        
        unset($work_form['_token']);
        unset($work_form['image_path2']);
        unset($work_form['remove_2']);
        
        //詳細画面：レスポンシブ画像の処理
        if ($request->remove_3 == 'true') {
            $work_form['image_path3'] = null;
        } elseif ($request->file('image_path3')) {
            $path3 = $request->file('image_path3')->store('public/image');
            $work_form['image_path3'] = basename($path3);
        } else {
            $work_form['image_path3'] = $work->image_path3;
        }
        
        unset($work_form['_token']);
        unset($work_form['image_path3']);
        unset($work_form['remove_3']);
        


        $work->fill($work_form)->save();
        
        $history = new History;
        $history->work_id = $work->id;
        $history->edited_at = Carbon::now();
        $history->save();
        
        return redirect('admin/work/');
    }
    
    public function delete(Request $request)
    {
        $work = Work::find($request->id);
        $work->delete();
        return redirect('admin/work/');
    }
}
