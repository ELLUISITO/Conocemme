<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event'];

    //Relacion N:M
    public function restaurants() {
        return $this->belongsToMany(Restaurant::class);
    }
}
