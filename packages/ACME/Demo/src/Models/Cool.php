<?php

namespace ACME\Demo\Models;

use Illuminate\Database\Eloquent\Model;
use ACME\Demo\Contracts\Cool as CoolContract;

class Cool extends Model implements CoolContract
{
    protected $fillable = [
        'name',
        'price',
        'description'
    ];
}