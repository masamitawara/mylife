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
      // admin/food/createにリダイレクトする
      return redirect('admin/food/create');
  }  
}
