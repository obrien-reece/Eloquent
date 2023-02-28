<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function scopeSearch($query, array $filters) {
        $query->when($filters['search'] ?? false, function ($query, $search) {
           $query->where(function ($query) {
               $query
                   ->where('name', 'like' ,'%' . request('search') . '%')
                   ->orWhere('description', 'like', '%' . request('search') . '%')
                   ->orWhere('studio', 'like', '%' . request('search') . '%');
           });
        });

//        if ($filters['search'] ?? false) {
//            $query
//                ->where('name', 'like', '%' . request('search') . '%')
//                ->orWhere('description', 'like', '%' . request('search') . '%')
//                ->orWhere('studio', 'like', '%' . request('search') . '%');
//        }
    }

    protected $table = 'movies';

    protected $fillable = ['name', 'description', 'studio', 'slug'];

    public function director() {
        return $this->belongsTo(Director::class);
    }

    public function actors() {
        return $this->hasMany(Actor::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
