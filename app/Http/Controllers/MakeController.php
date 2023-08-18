<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Test;
class MakeController extends Controller
{
    protected $col = ['name' , 'content'];
    public function index()
    {
        $test = Test::all();
        return view('index' ,compact('test'));
    }   

    public function create()
    {
        return view("create");
    }


    public function store(Request $request)
    {
      Test::create(
   $request->only($this->col)); 
     return redirect('example');
    }
    public function show(string $id)
    {
        $test = Test::find($id);
        return view("show" , compact('test'));
    }

    public function edit(string $id)
    {
        $test = Test::find($id);
        return view('edit', compact('test'));
    }

    public function update(Request $request, string $id)
    {
        Test::where('id',$id)->update($request->only($this->col));
        return redirect('example');
    }

    public function destroy(string $id)
    {
          Test::where('id',$id)->delete();
        return redirect('example');  
    }
}
