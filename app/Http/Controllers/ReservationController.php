<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ReservationController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();  
        $total = Product::count();
        return view('reservation', compact('products') );
        
    }
 
    public function reservation(Request $request){
        return view('reservation');
    }


     public function save(Request $request){
        // $products = Product::all();

      

        // return view('reservation',compact('products'));

     

        $request->merge([
            'reserved' => $request->input('reserved', 'reserved'), // Set default value for 'reserved' field
        ]);
        
        // Validate the request
        $validation = $request->validate([
            'name' => 'required',
            'author' => 'required',
            'date' => 'required',
            'reserved' => '', // Add your validation rules for 'reserved' field here
        ]);


       Product::create($validation);

       return redirect()->route('reservation')->with('success', 'Data added successfully!');



     }
    
}
