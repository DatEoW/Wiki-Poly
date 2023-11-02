<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MajorModel as Major;
use Illuminate\Database\Eloquent\SoftDeletes;


class MajorChildModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'major_child';
    protected $primayKey = 'id';
    public $timestamp = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'id', 'name', 'hidden', 'slug','id_major'
    ];
    protected $attributes = [
        'hidden'=> 0
    ];
    public function getMajor(){
        return $this->belongsTo(Major::class,'id_major','id'); //id_major-khóa ngoại ở bảng MajorChild
    }
}
