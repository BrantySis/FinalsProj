<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    /** @use HasFactory<\Database\Factories\ApartmentFactory> */

    protected $fillable = [
        'name'
    ];
    
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    use HasFactory;
}
