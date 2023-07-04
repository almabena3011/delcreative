<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $table = 'soal';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
