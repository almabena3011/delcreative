<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Forum;
use App\Models\ForumComment;
use App\Models\CommentReport;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    /* protected $fillable = [
        'name',
        'email',
        'password',

    ]; */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }

    public function comments()
    {
        return $this->hasMany(ForumComment::class);
    }

    public function commentReports()
    {
        return $this->hasMany(CommentReport::class);
    }

    public function upvotes()
    {
        return $this->hasMany(Upvote::class);
    }

    public function downvotes()
    {
        return $this->hasMany(Downvote::class);
    }
    public function pointconversions()
    {
        return $this->hasMany(PointConversion::class);
    }
}
