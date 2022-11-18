<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ["name", "number", "room_id"];

    public function racks()
    {
        return $this->hasMany(Rack::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}