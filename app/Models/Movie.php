<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['name', 'description', 'studio', 'slug'];

    public function director() {
        return $this->belongsTo(Director::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
