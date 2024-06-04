<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservation2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();  
        $total = Product::count();
        return view('reservation', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'date' => 'required',
            'image' => 'required',
            'reserved' => 'required',
        ]);
        $data = Product::reservation($validation);
        dd($data);
        // if ($data) {
        //     session()->flash('success', 'Product Add Successfully');
        //     return redirect(route('reservation'));
        // } else {
        //     session()->flash('error', 'Some problem occure');
        //     return redirect(route('reservation'));
        // }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
