<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /** @use HasFactory<\Database\Factories\DirectorFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
