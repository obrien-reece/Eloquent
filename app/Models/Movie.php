<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;

    protected $with = ['director'];

    protected $table = 'movies';

    protected $fillable = [
        'name',
        'description',
        'studio',
        'slug',
        'director_id',
        'domestic_box_office',
        'international_box_office',
        'worldwide_box_office'
    ];

    public function scopeSearch($query, array $filters) {

        $query->when($filters['search'] ?? false, function ($query, $search) {
           $query->where(function ($query) {
               $query
                   ->where('name', 'like' ,'%' . request('search') . '%')
                   ->orWhere('description', 'like', '%' . request('search') . '%')
                   ->orWhere('studio', 'like', '%' . request('search') . '%');
           })->orWhereHas('director', function ($query) {
               $query->where('name', 'like', '%' . request('search') . '%');
           });
        });
    }

    public function director() {
        return $this->belongsTo(Director::class);
    }

    public function actor(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
