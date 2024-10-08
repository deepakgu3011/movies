<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table='movies/series';

    public function movieurl(){
        return $this->hasMany(Movieurl::class);
    }
}
