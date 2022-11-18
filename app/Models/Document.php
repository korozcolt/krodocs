<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "title",
        "path",
        "extension",
        "properties",
        "user_id",
        "tag_id",
        "file_id",
        "category_id",
    ];

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}