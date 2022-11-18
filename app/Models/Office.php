<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
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
        "company_id",
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}