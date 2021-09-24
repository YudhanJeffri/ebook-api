<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Authors extends Model
{
    use HasFactory;
    //id, name, date_of_birh, place_of birth, gender, email, hp, create_at, update_at.
    protected $table = "authors";
    protected $fillable = ['name', 'date_of_birth', 'place_of_birth', 'gender', 'email', 'hp'];
    public function authors()
    {
        return $this->hasMany(Book::class);;
    }
}
