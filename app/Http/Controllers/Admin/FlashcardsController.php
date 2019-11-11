<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flashcard;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FlashcardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flashcards = Flashcard::latest()->paginate(5);
        return view('admin.flashcards.index', compact('flashcards'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.flashcards.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'created_by'    =>  'required',
            'type_id'       => 'required',
        ]);

        if ($request->upload_path) {
            $upload_path = $request->file('upload_path');
            $new_name = rand() . '.' . $upload_path->getClientOriginalExtension();
            $upload_path->move(public_path('images'), $new_name);
        }
        $flashcard = new Flashcard;
        $flashcard->word = $request->word;
        $flashcard->upload_path = $request->file('upload_path') ? $new_name : null;
        $flashcard->type_id = $request->type_id;
        $flashcard->created_by = $request->created_by;
        $flashcard->save();
        return redirect(route('admin.flashcard.index'))->with('success', 'Data Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function show(Flashcard $flashcard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Flashcard $flashcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flashcard $flashcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flashcard $flashcard)
    {
        //
    }
}
