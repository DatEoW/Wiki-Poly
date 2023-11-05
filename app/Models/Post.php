<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
         'summarize',
          'content',
           'slug',
           'img',
           'hot',
           'hidden',
           'views',
           'id_users',
           'id_major',
           'id_major_child',
           'id_cate',
    ];
    protected $table = 'post';

}
