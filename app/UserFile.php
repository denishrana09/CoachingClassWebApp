<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    protected  $fillable=[
        'url','admin_id','description',
    ];
}
