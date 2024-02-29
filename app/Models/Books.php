<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function Author(){
        return $this->belongsToMany(Author::class, 'author_book', 'book_id', 'author_id');
    }

    use HasFactory;
}
