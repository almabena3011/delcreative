<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\PointConversion;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::orderBy('id', 'desc')->paginate(10);
        return view('forum.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:10|',
        ],[
            'title.required' => 'Topik masih kosong',
            'subject.required' => 'Pertanyaan masih kosong'
        ]);

        Forum::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subject' => $request->subject,
        ]);

        return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $forum = Forum::where('slug', $slug)->first();

        if ($forum == null) {
            abort(404);
        }

        return view('forum.single', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::find($id);

        if ($forum->user_id != Auth::user()->id) {
            abort(403);
        }

        return view('forum.edit', compact('forum'));
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
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:10|',
        ]);

        $forum = Forum::find($id);

        if ($forum->user_id != Auth::user()->id) {
            abort(403);
        }

        $forum->update([
            'title' => $request->title,
            'subject' => $request->subject,
        ]);

        return redirect('/forum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Forum::find($id)->delete();
        return redirect('/forum');
    }

    public function leaderboard()
    {
        return view('forum.leaderboardforum');
    }

    public function konversi()
    {
        $user = Auth::user();
        return view('forum.konversipoint', compact('user'));
    }

    public function doconversion($id)
    {
        $user = User::findOrFail($id);
        if ($user->point >= 250) {
            $user->pointconversions()->create([
                'points' => 250
            ]);
            $user->point -= 250;
            $user->update([
                'point' => $user->point
            ]);

            return redirect('/konversi')->with(['success' => 'Permintaan konversi poin Anda telah dikirim.']);
        } else {
            return redirect('/konversi')->with(['error' => 'Poin anda tidak mencukupi']);
        }
    }

    public function conversionlist()
    {
        $conversionlists = PointConversion::orderBy('id', 'desc')->paginate(10);
        return view('dosen_asrama.konversipoin', compact('conversionlists'));
    }

    public function validasi($id)
    {
        $conversion = PointConversion::findOrFail($id);
        $conversion->update([
            'status' => true,
        ]);

        return redirect('/asrama/konversi');
    }
}
