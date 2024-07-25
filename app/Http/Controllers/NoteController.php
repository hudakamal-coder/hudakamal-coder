<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{  
     public function index(){
        $note=note::all();
        return view('pages.index',compact('note'));
     }

     public function create(){
        return view('pages.create');
     }

     public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'message'=>'required|max:255'
        ]);
        note::create([
            'title'=>$request->title,
            'message'=>$request->message,
        ]);
        return redirect()->route('note.index');

     }

     public function show($id)
     {
        $note= note::findOrFail($id);
         return view('pages.show',compact('note'));
     }

     public function edit($id){
        $note=note::findOrFail($id);
        return view('pages.edit',compact('note'));
     }

     public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'message'=>'required|max:255'
        ]);
        note::findOrFail($id)->update([
            'title'=>$request->title,
            'message'=>$request->message
        ]);
        return redirect()->route('note.index');
     }

     public function destroy($id){
        note::findOrFail($id)->delete();

     }
}
