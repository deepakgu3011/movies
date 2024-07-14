<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movieurl extends Model
{
    use HasFactory;
    protected $table='moviesurl';
    protected $fillable=[
        'movie_id','url','file_size'];
        public function movies(){
            return $this->belongsTo(Movies::class,'movie_id');
        }
}
