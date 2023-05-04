<?php

namespace ACME\Helloworld\Models;

use Illuminate\Database\Eloquent\Model;
use ACME\Helloworld\Contracts\Crud as CrudContract;

class Crud extends Model implements CrudContract
{
    protected $fillable = [
        'name',
        'price',
        'dscription'
    ];
}