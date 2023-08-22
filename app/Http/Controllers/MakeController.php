<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class MakeController extends Controller
{
    protected $col = ['name','content'];
    public function index()
    {   
        $tests= Test::withTrashed()->get(); 
        return view('home/index',compact('tests'));
    }

    public function create()
    {
        return view('home/create');
    }
    public function store(Request $request)
    {
        $date = $request->validate([
            'name'=>'required|string',
            'content'=>'required|string',
        ]);
        Test::create($date);
        return redirect('home');

    }

    public function show(string $id)
    {
        $test =Test::find($id);
        return view("home.show",compact('test'));
    }

    public function edit(string $id)
    {
        $test =Test::find($id);
        return view("home.edit",compact('test'));
    }

    public function update(Request $request, string $id)
    {
        $date = $request->validate([
            'name'=>'required|string',
            'content'=>'required|string',
        ]);
        Test::where('id',$id)->update($date);
        return redirect('home');
    }

    public function destroy(string $id)
    {
        Test::where('id',$id)->forceDelete();
        return redirect('home');
    }
    // public function forceDelete(string $id)
    // {
    //     Test::where('id',$id)->forcedelete();
    //     return redirect('home');
    // }
}
