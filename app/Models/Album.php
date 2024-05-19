<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'year', 'price'];
    public $timestamps = false;

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
