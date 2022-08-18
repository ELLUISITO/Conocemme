<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relaciones 1:N
    public function user() {
        return $this->belongsTo(User::class);
    }

    //Relaciones 1:N Inversa
    public function locations() {
        return $this->hasMany(Location::class);
    }

    public function socials() {
        return $this->hasMany(Social::class);
    }

    //Relaciones N:M
    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function events() {
        return $this->belongsToMany(Event::class);
    }

    public function foods() {
        return $this->belongsToMany(Food::class);
    }

    //Relación polimorfical
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }
}
