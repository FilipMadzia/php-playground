<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class DirectorsFilter extends ApiFilter
{
    protected $safeParams = [
        'firstName' => ['eq'],
        'lastName' => ['eq']
    ];

    protected $columnMap = [
        'firstName' => 'first_name',
        'lastName' => 'last_name'
    ];
}