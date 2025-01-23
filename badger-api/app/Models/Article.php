<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\ModelHelper;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasAuthor, ModelHelper;

    protected $table = 'articles';

    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id'
    ];
}
