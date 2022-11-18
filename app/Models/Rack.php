<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    protected $fillable = ["name", "module_id", "number"];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}