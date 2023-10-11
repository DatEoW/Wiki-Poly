<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $table = 'post';
    protected $fillable = ['id','create_at','update_at','title','summarize','content','slug','img','hot','hide','views','id_user','id_major','id_cate'];
}
