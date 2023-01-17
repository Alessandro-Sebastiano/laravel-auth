<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'type'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
