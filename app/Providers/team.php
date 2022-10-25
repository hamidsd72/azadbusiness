<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{

    protected $table = 'teams';
    protected $guarded = ['id', 'created_at', 'updated_at'];

}
