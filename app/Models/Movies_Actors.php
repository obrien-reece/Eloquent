<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies_Actors extends Model
{
    use HasFactory;

    protected $table = 'movie_actor';

    public $timestamps = false;

    protected $fillable = ['actor_id', 'movie_id'];
}
