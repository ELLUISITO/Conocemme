<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'neighborhood', 'restaurant_id', 'ubication_id'];

    //Relacion N:1
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function ubication() {
        return $this->belongsTo(Ubication::class);
    }
}
