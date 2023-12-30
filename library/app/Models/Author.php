<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','address','phone_number'];

    public function books()
    {
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
