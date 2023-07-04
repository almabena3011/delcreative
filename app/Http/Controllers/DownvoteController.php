<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Downvote;
use App\Models\ForumComment;
use App\Models\Upvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DownvoteController extends Controller
{
    public function downvotecomment($id)
    {
        $comment = ForumComment::findOrFail($id);
        $upvote = Upvote::where('comment_id', $id)->where('user_id', Auth::user()->id);
        $upvote->delete();

        $downvote = Downvote::where('comment_id', $id)->where('user_id', Auth::user()->id)->get();
        if (count($downvote) == 1) {
            $msg = ['status' => "has downvoted"];
        } else {
            Downvote::create([
                'comment_id' => $comment->id,
                'user_id' => Auth::user()->id
            ]);
            $msg = ['status' => 'downvote'];
        }
        return response()->json($msg);
    }
}
