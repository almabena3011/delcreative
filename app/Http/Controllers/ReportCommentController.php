<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CommentReport;
use App\Models\ForumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportCommentController extends Controller
{
    public function reportComment($id)
    {
        $user = Auth::user();
        $comment = ForumComment::findOrFail($id);
        // dd('report');
        CommentReport::create([
            'report_description' => 'Terdapat pelanggaran pada komentar',
            'comment_id' => $comment->id,
            'user_id' => $user->id,
        ]);

        if (($user->role == 'dorm' && $user->isadmin == false) || ($user->role = 'dosen' && $user->isadmin == false)) {
            return redirect('/listpelanggaran');
        } else if ($user->isadmin == true) {
            return redirect('/admin/listpelanggaran');
        }
    }
}
