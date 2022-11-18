<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "logo",
        "website",
        "phone",
        "address",
        "city_id",
    ];

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}