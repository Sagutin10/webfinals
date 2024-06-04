<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UseerController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();  
        $total = User::count();
        return view('admin.user', compact('users') );
        
    }

    public function destroy($id)
{
    $users = DB::table('users')->where('id', $id)->delete();

    return redirect()->route('admin.user');
}
}
