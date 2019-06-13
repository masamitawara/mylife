<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class foodController extends Controller
{
    public function add()
    {
        return view('admin.food.create');
    }
    public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, food::$rules);

      $food = new Food;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$food->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $food->image_path = basename($path);
      } else {
          $food->image_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $food->fill($form);
      $food->save();
      
      // admin/food/createにリダイレクトする
      return redirect('admin/food/create');
  }  
}
