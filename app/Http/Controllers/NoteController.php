<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes=Note::query()
        ->where("user_id", request()->user()->id)
        ->latest()->paginate(10);
        
        return view('note.index',['notes'=>$notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) 
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'note'=>['required','string']
            ]);
            $data['user_id']=$request->user()->id;
            $note=Note::create($data);
        return to_route('note.show', $note->id)->with('success','Note Created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note=Note::find($id);
        return view('note.show',['note'=>$note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note=Note::find($id);
        return view('note.edit',['note'=>$note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $note=Note::findOrFail($id);
        $data=$request->validate([
            'note'=>['required','string']
            ]);
            $note->update($data);
        return to_route('note.show', $note->id)->with('success','Note Updated successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $note=Note::find($id)->delete();
        return to_route('note.index')->with('success','Note Deleted!');
       

    }
}
