<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = ['genreName', 'decade'];
    public $timestamps = false;

    public function albums(){
        return $this->belongsToMany(Album::class);
    }
}

