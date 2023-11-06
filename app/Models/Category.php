<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'hidden',
        'slug',
    ];
    protected $primaryKey = 'id';
    protected $table = 'category';
}
