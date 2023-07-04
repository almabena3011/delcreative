<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Downvote;
use App\Models\ForumComment;
use App\Models\Upvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpvoteController extends Controller
{
    public function upvotecomment($id)
    {
        $comment = ForumComment::findOrFail($id);
        $downvote = Downvote::where('comment_id', $id)->where('user_id', Auth::user()->id);
        $downvote->delete();

        $upvote = Upvote::where('comment_id', $id)->where('user_id', Auth::user()->id)->get();
        if (count($upvote) == 1) {
            $msg = ['status' => "has upvoted"];
        } else {
            Upvote::create([
                'comment_id' => $comment->id,
                'user_id' => Auth::user()->id
            ]);
            $msg = ['status' => 'upvote'];
        }
        return response()->json($msg);
    }
}
