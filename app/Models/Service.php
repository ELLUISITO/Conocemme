<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service'];

    //Relacion N:M
    public function restaurants() {
        return $this->belongsToMany(Restaurant::class);
    }
}
