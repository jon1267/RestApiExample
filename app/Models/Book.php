<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    // may be here need many-to-many too ...may be too cumbersome
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
