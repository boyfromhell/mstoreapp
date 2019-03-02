<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{

    public function index()
    {
        return view('members.stores.create');
    }

    public function create()
    {
        return view('members.stores.create');
    }


    public function store(StoreStoreRequest $request)
    {
        abort_unless(\Gate::allows('store_create'), 403);
        $store = Store::create($request->all());
        return redirect()->route('members.stores.index');
    }
}
