<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MajorModel as Major;

class MajorChildModel extends Model
{
    use HasFactory;
    protected $table = 'major_child';
    protected $primayKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'id', 'name', 'hidden', 'slug','id_major'
    ];
    protected $attributes = [
        'hidden'=> 0
    ];
    public function getMajor(){
        return $this->belongsTo(Major::class,'id','id_major');
    }
}
