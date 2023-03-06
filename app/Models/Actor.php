<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actors';

    protected $fillable = ['name', 'age', 'slug', 'about', 'movie_id'];

    public function movie(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class);
    }

    public $timestamps = false;
}
