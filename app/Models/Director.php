<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'slug', 'about'];

    protected $table = 'directors';

    public $timestamps = false;

/*    public function scopeDirected($query, array $filters) {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->whereHas('movies', function ($query) {
                $query
                    ->where('name', 'like' ,'%' . request('search') . '%')
                    ->orWhere('description', 'like', '%' . request('search') . '%')
                    ->orWhere('studio', 'like', '%' . request('search') . '%');
            });
        });
    }*/

    public function movies() {
        return $this->hasMany(Movie::class);
    }
}
