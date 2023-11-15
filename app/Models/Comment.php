<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'content',
        'id_major',
        'id_post',
        'name_user',
        'user_email',
        'hidden'
    ];
    protected $primaryKey = 'id';
    protected $table = 'comment';

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
