<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $fillable =[
        'Day','S_Time','E_Time','Subject','Batch',
        ];
}
