<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["name", "iso2", "state_code"];

    public function company()
    {
        return $this->hasMany(Company::class);
    }

    public function office()
    {
        return $this->hasMany(Office::class);
    }
}