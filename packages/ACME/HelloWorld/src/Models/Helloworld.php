<?php

namespace ACME\Helloworld\Models;

use Illuminate\Database\Eloquent\Model;
use ACME\Helloworld\Contracts\Helloworld as HelloworldContract;

class Helloworld extends Model implements HelloworldContract
{
    protected $fillable = [
        'name',
        'price',
        'description'
    ];
}