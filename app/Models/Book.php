<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Authors;

class Book extends Model
{
    use HasFactory;
    protected $table = "book";
    protected $fillable = ['title', 'description', 'author_id', 'publisher', 'date_of_issue', 'book_image', 'author', 'count_book'];
    public function authors()
    {
        return $this->belongsTo(Authors::class, 'author_id');
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        });
    }
}
