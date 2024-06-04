<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
{
    $products = Product::orderBy('id', 'desc')->get();
    $total = Product::count();
    return view('admin.dashboard', compact('products', 'total'));
}
 
    // public function edit(Product $product)
    // {
    //     return view('admin.update', compact('product'));
    // }

    public function edit($id)
{
    $products = Product::findOrfail($id);
    return view('admin.update', ['products' => $products]);
}



    public function update(Request $request, Product $products)
{
    $products->name = $request->name;
    $products->author = $request->author;
    $products->reserved = $request->rdate;
    $products->date = $request->date;
    $products->save();
   
    return redirect()->route('admin.dashboard');
   
}
public function destroy($id)
{
    $products = DB::table('products')->where('id', $id)->delete();

    return redirect()->route('admin.dashboard');
}


}