<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function Books(){
        return $this->belongsToMany(Books::class, 'author_book', 'author_id', 'book_id');
    }

    use HasFactory;
}
