<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $fillable = [
        'fname', 'lname', 'qualification','Subject','description',
    ];
}
