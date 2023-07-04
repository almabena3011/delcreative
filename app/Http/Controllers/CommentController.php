<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'subject' => 'required|min:10',
        ],[
          'subject.required' => 'Jawaban masih kosong'  
        ]);

        $forum = Forum::find($id);

        $forum->comments()->create([
            'user_id' => Auth::user()->id,
            'subject' => $request->subject,
        ]);

        return redirect('/forum/'. $forum->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = ForumComment::find($id);
        return view('forum.comment-edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject' => 'required|min:10',
        ]);

        $comment = ForumComment::find($id);


        if ($comment->user_id != Auth::user()->id) {
            abort(403);
        }


        $comment->update([
            'subject' => $request->subject,
        ]);

        return redirect('/forum/'. $comment->forum->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = ForumComment::find($id);
        $comment->delete();
        // dd($comment);
        return redirect('/forum/'. $comment->forum->slug);
    }
}
