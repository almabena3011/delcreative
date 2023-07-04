<?php

namespace App\Models;

use App\Models\User;
use App\Models\ForumComment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReport extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forumcomment()
    {
        return $this->belongsTo(ForumComment::class, 'comment_id')->withTrashed();
    }
}
