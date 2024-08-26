<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'category_id', 'author', 'description', 'isbn', 'published_year', 'cover_image', 'file_url'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}