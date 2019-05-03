<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class noteController extends Controller
{
    

    public function createPage(){
        return view('note/create');
    }

    public function createNote(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required'
        ]);
        
        $note=new Note();
        $note->title=$request->title;
        $note->content=$request->content;
        $note->save();

        return redirect()->route('home');
    }

    public function updatePage($id) {
        $note = Note::find($id);
        return view('note.update', compact('note'));
    }
    public function update(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'id' => 'required'
        ]);
        //find id and update
        $note = Note::find($request->id);
        $note->title = $request->title;
        $note->body = $request->body;
        $note->save();
        //return back to view
        Session::flash('success', 'New note has been updated!');
        return redirect()->route('home');
    }
    public function delete($id) {
        $notes = Note::find($id);
        $notes->delete();
        Session::flash('success', 'Your note has been deleted');
        return redirect()->back();
    }
}

