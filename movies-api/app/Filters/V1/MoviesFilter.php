<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class MoviesFilter extends ApiFilter
{
    protected $safeParams = [
        'directorId' => ['eq'],
        'name' => ['eq'],
        'description' => ['eq']
    ];

    protected $columnMap = [
        'directorId' => 'director_id'
    ];
}