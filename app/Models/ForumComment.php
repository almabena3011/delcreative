<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forum;
use App\Models\CommentReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ForumComment extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $table = ['forum_comments'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id');
    }

    public function commentReports()
    {
        return $this->hasMany(CommentReport::class);
    }

    public function upvotes()
    {
        return $this->hasMany(Upvote::class, 'comment_id');
    }

    public function downvotes()
    {
        return $this->hasMany(Downvote::class, 'comment_id');
    }
}
