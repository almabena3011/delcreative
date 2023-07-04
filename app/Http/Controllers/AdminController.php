<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CommentReport;
use App\Models\ForumComment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show all pelanggaran
    public function listpelanggaran()
    {
        $reports = CommentReport::where('status', 0)->distinct()->get(['comment_id']);
        $count =  CommentReport::distinct('comment_id')->count('comment_id');

        return view('administrator.listpelanggaran', compact('reports', 'count'));
    }

    //validasi pelanggaran
    public function validasipelanggaran($id)
    {

        $report = CommentReport::where('comment_id', $id);
        $report->update(['status' => 1]);
        $comment = ForumComment::findOrFail($id);

        $point = $comment->user->point;
        $point -= 50;

        $comment->user()->update([
            'point' => $point,
        ]);

        ForumComment::findOrFail($id)->delete();
        return redirect('/admin/listpelanggaran');
    }

    //validasi pelanggaran
    public function tolakpelanggaran($id)
    {

        CommentReport::where('comment_id', $id)->update(['status' => 2]);
        return redirect('/admin/listpelanggaran');
    }



    //list akun yang akan di verifikasi
    public function akun()
    {
        $users = User::where('isadmin', 0)->where('isverify', 0)->get();
        return view('administrator.listakun', compact('users'));
    }


    //membuat akun terverifikasi
    public function makeVerify(User $user)
    {
        $user->isverify = true;
        $user->save();
        session()->flash('success', $user->fullname . ' Berhasil verifikasi');
        return redirect(route('administrator.listakun'));
    }

    public function rejectAccount(User $user)
    {
        $user->isrejected = true;
        $user->save();
        session()->flash('success', 'Akun ' . $user->fullname . ' ditolak');
        return redirect(route('administrator.listakun'));
    }
}
