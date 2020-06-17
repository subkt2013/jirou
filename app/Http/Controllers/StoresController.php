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

    public function store($store_name)
    {
        $store = Store::where('store_name',$store_name)->get();

        return view('store.store',['store'=>$store]);
    }

}
