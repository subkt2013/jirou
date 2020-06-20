<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
    public function show($id)
    {
        $store = Store::findOrFail($id);

        return view('store.show',['store' => $store]);
    }

    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('store.edit',['store' => $store]);
    }

    
    //city-compのやり方がうまくいきそう　もしくはこのコントローラの制限をゆるくしてやる方法
    public function update(Request $request)
    {
        $store = Store::findOrFail($request->id);

        $params = ['wait_people' => $requset->wait_people]->save();
        
        $store->fill($params)->save();

        return redirect()->route('store.show', ['store' => $store]);

    }

}
