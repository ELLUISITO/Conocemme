<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    use HasFactory;

    protected $fillable = ['tax', 'person_type', 'document_type', 'document_number', 'business_name', 'restaurant_id'];
}
