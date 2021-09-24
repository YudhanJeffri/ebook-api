<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authors;
use PharIo\Manifest\Author;

class Book extends Model
{
    use HasFactory;
    protected $table = "book";
    protected $fillable = ['title', 'description', 'author_id', 'publisher', 'date_of_issue'];
    public function book()
    {
        return $this->belongsTo(Author::class);
    }
}
