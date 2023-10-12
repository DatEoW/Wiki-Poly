<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MajorChildModel as MajorChild;

class MajorModel extends Model
{
    use HasFactory;
    protected $table = 'major';
    protected $primayKey = 'id';
    public $timestamp = true;
    protected $fillable = [
        'id', 'name', 'hidden', 'slug'
    ];
    protected $attributes = [
        'hidden'=> 0 
    ];
    public function getChildMajor(){
        return $this->hasMany(MajorChild::class, 'id_major', 'id');
    }

}
