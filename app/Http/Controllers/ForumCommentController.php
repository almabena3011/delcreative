<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForumComment;
use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
    public function markcomment($id)
    {
        $comment = ForumComment::find($id);

        if ($comment->is_solved) {
        } else {
            $newPoint = $comment->user->point;
            $newPoint += 100;
            $comment->user->update([
                'point' => $newPoint,
            ]);

            $comment->update([
                'is_solved' => true
            ]);
            $msg = ['status' => 'mark'];
        }
        return response()->json($msg);
    }
}
